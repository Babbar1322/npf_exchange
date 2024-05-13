<?php

namespace App\Http\Controllers;

use App\price;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\trade;
use App\wallet;
use App\User;
use App\payment_log;
use App\payment;
use App\callback;
use App\coin;
use App\crypto_wallet;

use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Facades\JWTFactory;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Tymon\JWTAuth\JWTManager as JWT;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Illuminate\Support\Facades\Hash;


class BinanceController extends Controller
{

    public function test()
    {



        // $api = $this->binance_api();    
        $api = new \Binance\API('b5InlU86B4XpEQRhjPGsqp3MSCekBu84aOROSvRFHgXFq41eOSTHymMiQ0xo4lRE', '5l1jmMPtnBfGC4XqfIKoMyhPCJJAG2HxcazGQYlpjGxCq882R1wNUGKDx5a4V1oJ');
        $api->useServerTime();

        $ticker = $api->balances();
        //    $ticker = $api->depositAddress("USDT");
        //    $ticker = $api->prices();
        dd($ticker);

        $tickers = $api->exchangeInfo();
        $ticker = $api->openOrders();

        // $ticker = $api->orders("");
        //    $ticker = $api->orders();
        //    $ticker = $api->orders("BTCUSDT",1,"3229936");


        //    dd($ticker);

        //    dd(strpos(explode(".",$ticker['symbols']['BTCUSDT']['filters'][1]['stepSize'])[1],"1")+1);
        //    $buy  = $api->sell("BNBUSDT",10,224.40000000);


    }

    public function getPrice(Request $request)
    {
        if($request->coin != "NPF"){
        $api = $this->binance_api();
        $price = $api->price($request->coin . "USDT");

        $stepSize = [];
        $stepSize['BNB'] = 1;
        $stepSize['BTC'] = 2;
        $stepSize['TRX'] = 5;

        //  $price =  number_format($price,$stepSize[$request->coin], '.', '');
        $price = bcdiv($price, 1, $stepSize[$request->coin]);

        }
        else
        {
            \Log::info("inside");
            $coin  = price::latest()->first();
            $price = $coin->price;
        }


        return response()->json(compact('price'));
    }
    public function getBalance(Request $request)
    {
        //     $api = $this->binance_api();
        //  $api->useServerTime();
        //  $ticker = $api->balances();
        // $balance = $ticker[$request->coin];
        $user = JWTAuth::parseToken()->authenticate();
        $balance = $this->walletBalance($user->id, "BTC");
        return response()->json(compact('balance'));
    }

    public function usdtBalance(Request $request)
    {
        // $api = $this->binance_api();
        // $api->useServerTime();
        // $ticker = $api->balances();
        // $balance = $ticker['USDT'];
        $user = JWTAuth::parseToken()->authenticate();
        $balance = $this->walletBalance($user->id, "epin");
        return response()->json(compact('balance'));
    }

    protected function balance($user_id,$wallet_type){
        $credit = wallet::where("userId",$user_id)->where("wallet_type",$wallet_type)->where("type","credit")->sum('amount');
        $debit = wallet::where("userId",$user_id)->where("wallet_type",$wallet_type)->where("type","debit")->sum('amount');

        // $balance = round($credit - $debit,6);
        $balance = number_format((float)($credit-$debit), 6, '.', '');
        
        return $balance;
    }

    public function buyCoin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'coin' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'total' => 'required',
            'token' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->messages()], 500);
            exit;
        }

        if ($request->total < 20) {
            return response()->json(['message' => "Minimum $20 Required"], 500);
            exit;
        }

        $user = JWTAuth::parseToken()->authenticate();

        $balance = $this->walletBalance($user->id, "epin");
        if ($request->total > $balance) {
            return response()->json(['message' => "Something went wrong"], 500);
            exit;
        }

        $symbol = $request->coin . "USDT";

        $api = $this->binance_api();
        $api->useServerTime();
        $ticker = $api->balances();
        $balance = $ticker[$request->coin];
        $usdt_balance = $ticker["USDT"];
        $info = $api->exchangeInfo();
        // $stepSize = strpos(explode(".",$info['symbols'][$symbol]['filters'][1]['stepSize'])[1],"1")+1;
        $max_qty = $info['symbols'][$symbol]['filters'][1]['maxQty'];

        $stepSize = [];
        $stepSize['BNB'] = 2;
        $stepSize['BTC'] = 6;
        $stepSize['TRX'] = 1;

        $price = $api->price($symbol);


        // $quantity= round($request->total / $price,$stepSize[$request->coin]);

        $quan = $request->total / $price;



        if ($request->total == $usdt_balance['available']) {
            $feecm = (0.25 / 100) * $quan;
            $quan = $quan - $feecm;
        }

        // $quantity=  number_format($quan,$stepSize[$request->coin], '.', '');
        $quantity = bcdiv($quan, 1, $stepSize[$request->coin]);

        // $quantity = round($request->quantity,$stepSize[$request->coin]);
        if ($request->coin == "TRX" && $quantity > 9999) {
            $quantity = 9999;
        }

        if (isset($max_qty) && $max_qty < $quantity) {
            return response()->json(["message" => "Maximum Quantity Required $max_qty"], 500);
            exit;
        }

        if ($request->total > $usdt_balance['available']) {
            return response()->json(["message" => "Something went wrong!"], 500);
            exit;
        }

        $wallet_balance = $this->walletBalance($user->id, "epin");


        if ($request->total > $wallet_balance) {
            return response()->json(["message" => "Something went wrong"], 500);
            exit;
        }


        $order = $api->marketBuy($symbol, $quantity);
        $trade = new trade();
        $trade->price = $price;
        $trade->user_id = $user->id;
        $trade->quantity = $quantity;
        $trade->symbol = $symbol;
        $trade->type = "Buy";
        $trade->amount = $request->total;
        $trade->response = json_encode($order);
        $trade->save();

        $wallet = new wallet();
        $wallet->user_id = $user->uid;
        $wallet->userId = $user->id;
        $wallet->amount = $request->total;
        $wallet->from = "trade";
        $wallet->transaction_type = "buy";
        $wallet->wallet_type = "epin";
        $wallet->type = "debit";
        $wallet->description = "debit " . $request->total . "from buy $request->coin";
        $wallet->symbol = $symbol;
        $wallet->save();

        $wallet = new wallet();
        $wallet->user_id = $user->uid;
        $wallet->userId = $user->id;
        $wallet->amount = $quantity;
        $wallet->from = "trade";
        $wallet->transaction_type = "buy";
        $wallet->wallet_type = $request->coin;
        $wallet->type = "credit";
        $wallet->description = "credit " . $quantity . "from buy $request->coin";
        $wallet->symbol = $symbol;
        $wallet->save();

        return response()->json(["message" => "Order Placed Successfully!", "order" => $order], 200);
    }

    public function sellCoin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'coin' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'total' => 'required',
            'token' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->messages()], 500);
            exit;
        }

        $user = JWTAuth::parseToken()->authenticate();


        $api = $this->binance_api();
        $api->useServerTime();
        $ticker = $api->balances();
        $balance = $ticker[$request->coin];
        $stepSize = [];
        $stepSize['BNB'] = 2;
        $stepSize['BTC'] = 6;
        $stepSize['TRX'] = 1;

        $symbol = $request->coin . "USDT";

        $price = $api->price($symbol);

        $info = $api->exchangeInfo();

        // $quantity = round($request->quantity,$stepSize[$request->coin]);
        $quan = $request->total / $price;

        if ($request->coin == $balance['available']) {
            $feecm = (0.25 / 100) * $quan;
            $quan = $quan - $feecm;
        }

        // $quantity=  number_format($quan,$stepSize[$request->coin], '.', '');
        $quantity = bcdiv($quan, 1, $stepSize[$request->coin]);
        $max_qty = $info['symbols'][$symbol]['filters'][1]['maxQty'];

        if (isset($max_qty) && $max_qty < $quantity) {
            return response()->json(["message" => "Maximum Quantity Required $max_qty"], 500);
            exit;
        }

        if ($quantity == 0) {
            return response()->json(["message" => "Quantity should be greater than zero."], 500);
            exit;
        }

        if ($request->coin == "TRX" && $quantity > 9999) {
            $quantity = 9999;
        }




        if ($quantity > $balance['available']) {
            return response()->json(["message" => "Insufficient Balance in Binance.Please Contact Admin!"], 500);
            exit;
        }

        $coin_balance = $this->walletBalance($user->id, $request->coin);

        if ($quantity > $coin_balance) {
            return response()->json(["message" => "Insufficient Balance"], 500);
            exit;
        }

        $symbol = $request->coin . "USDT";

        $price = $api->price($symbol);

        $order = $api->marketSell($symbol, $quantity);
        $trade = new trade();
        $trade->price = $price;
        $trade->user_id = $user->id;
        $trade->quantity = $quantity;
        $trade->symbol = $symbol;
        $trade->type = "Sell";
        $trade->amount = $request->total;
        $trade->response = json_encode($order);
        $trade->save();

        $wallet = new wallet();
        $wallet->user_id = $user->uid;
        $wallet->userId = $user->id;
        $wallet->amount = $quantity;
        $wallet->from = "trade";
        $wallet->transaction_type = "sell";
        $wallet->wallet_type = $request->coin;
        $wallet->type = "debit";
        $wallet->description = "debit " . $quantity . "from sell $request->coin";
        $wallet->symbol = $symbol;
        $wallet->save();

        $wallet = new wallet();
        $wallet->user_id = $user->uid;
        $wallet->userId = $user->id;
        $wallet->amount = $request->total;
        $wallet->from = "trade";
        $wallet->transaction_type = "buy";
        $wallet->wallet_type = "epin";
        $wallet->type = "credit";
        $wallet->description = "credit " . $request->total . "from sell $request->coin";
        $wallet->symbol = $symbol;
        $wallet->save();

        return response()->json(["message" => "Order Placed Successfully!", "order" => $order], 200);
    }

    public function manualBuy(Request $request){
        $validator = Validator::make($request->all(), [
            'coin' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'total' => 'required',
            'token' => 'required'
        ]);

        

        if ($validator->fails()) {
            return response()->json(['message' => $validator->messages()], 500);
            exit;
        }
        if($request->quantity <= 0){
            return response()->json(['message' => "Amount should be greater than zero"], 500);
        }

        $user = JWTAuth::parseToken()->authenticate();
        $balance = $this->balance($user->id,"epin");
        
        $price= price::orderBy("id",'desc')->pluck('price')[0];
        $final_amount = $request->quantity * $price;
        $symbol = $request->coin."USDT";
        
        if($final_amount > $balance){
            return response()->json(["message"=>"Something went wrong"],500);
        }

        $trade = new trade();
        $trade->price = $price;
        $trade->user_id = $user->id;
        $trade->quantity = $request->quantity;
        $trade->symbol = $symbol;
        $trade->type = "Buy";
        $trade->amount = $final_amount;
        $trade->save();

        $wallet = new wallet();
        $wallet->user_id = $user->uid;
        $wallet->userId = $user->id;
        $wallet->amount = $final_amount;
        $wallet->from = "trade";
        $wallet->transaction_type = "buy";
        $wallet->wallet_type = "epin";
        $wallet->type = "debit";
        $wallet->description = "debit " . $request->total . "from buy $request->coin";
        $wallet->symbol = $symbol;
        $wallet->save();

        $wallet = new wallet();
        $wallet->user_id = $user->uid;
        $wallet->userId = $user->id;
        $wallet->amount = $request->quantity;
        $wallet->from = "trade";
        $wallet->transaction_type = "buy";
        $wallet->wallet_type = $request->coin;
        $wallet->type = "credit";
        $wallet->description = "credit " . $request->quantity . "from buy $request->coin";
        $wallet->symbol = $symbol;
        $wallet->save();

        return response()->json(["message" => "Order Placed Successfully!", "order" =>$trade], 200);

    }
    public function manualSell(Request $request){
        $validator = Validator::make($request->all(), [
            'coin' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'total' => 'required',
            'token' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->messages()], 500);
            exit;
        }


        $user = JWTAuth::parseToken()->authenticate();


        $user = JWTAuth::parseToken()->authenticate();
        $balance = $this->balance($user->id,$request->coin);

        $price= price::orderBy("id",'desc')->pluck('price')[0];
        $final_amount = $request->quantity * $price;
        $symbol = $request->coin."USDT";

        if($request->quantity > $balance){
            return response()->json(["message"=>"Something went wrong"],500);
        }

        if($request->quantity <= 0){
            return response()->json(['message' => "Amount should be greater than zero"], 500);
        }

        $trade = new trade();
        $trade->price = $price;
        $trade->user_id = $user->id;
        $trade->quantity = $request->quantity;
        $trade->symbol = $symbol;
        $trade->type = "Sell";
        $trade->amount = $final_amount;
        $trade->save();

        $wallet = new wallet();
        $wallet->user_id = $user->uid;
        $wallet->userId = $user->id;
        $wallet->amount = $request->quantity;
        $wallet->from = "trade";
        $wallet->transaction_type = "sell";
        $wallet->wallet_type = $request->coin;
        $wallet->type = "debit";
        $wallet->description = "debit " . $request->quantity . " from sell $request->coin";
        $wallet->symbol = $symbol;
        $wallet->save();

        $wallet = new wallet();
        $wallet->user_id = $user->uid;
        $wallet->userId = $user->id;
        $wallet->amount = $final_amount;
        $wallet->from = "trade";
        $wallet->transaction_type = "buy";
        $wallet->wallet_type = "epin";
        $wallet->type = "credit";
        $wallet->description = "credit " . $final_amount . " from sell $request->coin";
        $wallet->symbol = $symbol;
        $wallet->save();

        return response()->json(["message" => "Order Placed Successfully!", "order" => $trade], 200);

    }


    public function tradeHistory(Request $request)
    {
        $user = JWTAuth::parseToken()->authenticate();
        $api = $this->binance_api();

        $trades = trade::where("user_id", $user->id)->latest()->paginate(5);
        // $trades = $api->orders();
        // $trades->map(function($data){
        //     $res =  json_decode($data);
        //     $data->response = $res;
        //     return $data;
        // });
        return response()->json(compact('trades'));
    }

    public function binance_api()
    {
        //  mine   return new \Binance\API('N05CyqGlTlTrsdQ1Tfxb7eYw2B9FuFVJ4lgmHFhRfbiOUzVLOugNqxAOri2HHHtw','Ty8QBWjggZXyWWhU95hFdhBsUkPZurefs54lyW2oN1L15Cb3LKhlZUYi5cbNIG01',true);
        //    return new \Binance\API('C2wqJilWgYJDmeeHHMHnFfNycjpQto1BcxMSsANhe1pxRuCeaCjXetsNJySU1wZ0','J1kKGR0Bqwikgia7uwdkqvvQDcamuBEShH54PooIOiCSnUO7yBCjtSUPthPQ2seS',true);

        return new \Binance\API('b5InlU86B4XpEQRhjPGsqp3MSCekBu84aOROSvRFHgXFq41eOSTHymMiQ0xo4lRE', '5l1jmMPtnBfGC4XqfIKoMyhPCJJAG2HxcazGQYlpjGxCq882R1wNUGKDx5a4V1oJ');
        // return new \Binance\API('JFc221YtQHXGrzeJTdrBe0Xrw0ULpf3gFpTUoPWzgs780rXAPeTmRHaLbLqm4HCf','RHrJOe7l22egFved2tyoT2EJ0a2yiqh2LmBDP2DhoiIxFrgsefarfuX7QRp4TKa0');
        //    return new \Binance\API('aF8b9h4VJnqn4OOnUuNunp61ZY5KtVGED28afqZlBhL6FxTx1JYSRG0rUFlfkqrL','p8xWQud6Pc7lRVVMbP1u2cOKhPqPRhbVYjMfSp0dx1xPk01anQPPzHgZEzY4P6xZ');
    }


    protected function walletBalance($user_id, $wallet_type)
    {
        $credit = wallet::where("userId", $user_id)->where("wallet_type", $wallet_type)->where("type", "credit")->sum('amount');
        $debit = wallet::where("userId", $user_id)->where("wallet_type", $wallet_type)->where("type", "debit")->sum('amount');

        // $balance = round($credit - $debit,2);
        $balance = number_format((float) ($credit - $debit), 6, '.', '');
        return $balance;
    }

    public function deposit_old(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'amount' => 'required',
            'token' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->messages()], 500);
            exit;
        }

        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $nonce = '';
        for ($i = 1; $i <= 32; $i++) {
            $pos = mt_rand(0, strlen($chars) - 1);
            $char = $chars[$pos];
            $nonce .= $char;
        }
        $ch = curl_init();
        $timestamp = round(microtime(true) * 1000);
        // Request body
        $request = array(
            "env" => array(
                "terminalType" => "WEB"
            ),
            "merchantTradeNo" => mt_rand(982538, 9825382937292),
            "orderAmount" => $request->amount,
            "currency" => "USDT",
            "goods" => array(
                "goodsType" => "01",
                "goodsCategory" => "D000",
                "referenceGoodsId" => "7876763A3B",
                "goodsName" => "Deposit",
                "goodsDetail" => "Deposit USDT"
            )
        );

        $json_request = json_encode($request);
        $payload = $timestamp . "\n" . $nonce . "\n" . $json_request . "\n";
        $binance_pay_key = "vclpdgtqr3ksb7xzvee2yx8bbybah4dngh0fhvhjeus3kmoiaocplvm7suyedwzg";
        $binance_pay_secret = "aejf4ycjgwclk5tktwg0x6qmnm5267ugo5qwbz4mynvhd3bvwbkp19znqjpbo81c";
        $signature = strtoupper(hash_hmac('SHA512', $payload, $binance_pay_secret));
        $headers = array();
        $headers[] = "Content-Type: application/json";
        $headers[] = "BinancePay-Timestamp: $timestamp";
        $headers[] = "BinancePay-Nonce: $nonce";
        $headers[] = "BinancePay-Certificate-SN: $binance_pay_key";
        $headers[] = "BinancePay-Signature: $signature";

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_URL, "https://bpay.binanceapi.com/binancepay/openapi/v2/order");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json_request);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        $result = json_decode($result);

        return response()->json($result);
    }


    public function all_trades()
    {
        $trades = trade::orderBy("id", "desc")->paginate(50);
        $trades->map(function ($data) {
            $user = User::where("id", $data->user_id)->select('name', 'uid')->first();
            $data->user == null;
            if ($user != null) {
                $data->user = $user;
            }
            return $data;
        });
        return view('admin.trades', compact('trades'));

    }

    public function deposit(Request $request)
    {
       
        $validator = Validator::make($request->all(), [
            'amount' => 'required',
            'token' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->messages()], 500);
            exit;
        }

        if ($request->amount < 10) {
            return redirect()->back()->with('error', "Minimum $10 Required");
            exit;
        }

        $amount = floor($request->amount);

        $user = JWTAuth::parseToken()->authenticate();
        $curl = curl_init();

        $url = env('mix_api_url')."/api/success_url";

        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => 'https://api.nowpayments.io/v1/invoice',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => '{
            "price_amount": ' . $amount . ',
            "price_currency": "USD",
            "order_id": "' . $user->uid . '",
            "order_description": "CiazCryptoExchange",
            "ipn_callback_url": "'.$url.'",
            "success_url": "'.env('mix_api_url').'",
            "cancel_url": "'.env('mix_api_url').'",
            } ',
                CURLOPT_HTTPHEADER => array(
                    'x-api-key: Q35SWF3-T2N4K6W-KH5YPJC-4QGKY31',
                    'Content-Type: application/json'
                ),
            )
        );

        $response = curl_exec($curl);


        curl_close($curl);

        $res = json_decode($response);
        callback::create(["response" => json_encode($res), "user_id" => $user->uid]);

        if (isset($res) && isset($res->invoice_url)) {

            $link = $res->invoice_url;
            $token_id = $res->token_id;
            $rid = $res->id;

            $payment = new payment();
            $payment->link = $link;
            $payment->merchentId = $token_id;
            $payment->request_id = $rid;
            $payment->user_id = $user->uid;
            $payment->amount = floor($amount);
            $payment->save();


            callback::create(["response" => json_encode($res), "user_id" => $user->uid]);
            return response()->json($res->invoice_url);


        }

    }

    public function success_url(Request $request)
    {

        \Log::info("succcess urlss11111");
        \Log::info(json_encode($request->all()));
        // \Log::info("succcess urlss1");
        // \Log::info(json_encode($_POST));



        callback::create(["response" => 'success_url11']);



        $request = file_get_contents("php://input");

        // Decode JSON
        $request = json_decode($request, true);



        // \Log::info("succcess urlss2");
        // \Log::info(json_encode($request));
        // \Log::info($request['amount']);
        // \Log::info($request['tronaddress']);



        // $amount = $request['amount'];
        $invoice_id = $request['invoice_id'];

        $payment = payment::where("request_id", $invoice_id)->where("status", 0)->first();

        \Log::info(json_encode($payment));
        \Log::info(json_encode($payment != null));

        if (($request['payment_status'] == "finished" || $request['payment_status'] == "confirmed") && $payment != null) {

            callback::create(["response" => json_encode($request), "user_id" => $payment->user_id]);

            // callback::create(["response"=>json_encode($request),"user_id"=>$user->uid]);
            // $amount = $request['actually_paid'];
            $amount = $request['price_amount'];
            $user = User::where("uid", $payment->user_id)->first();
            $currency = $request['pay_currency'];
            $payment_id = $request['payment_id'];

            $payments = wallet::where("transaction_id", $payment_id)->count();
            if ($payments == 0) {



                // if($currency != "usdttrc20"){

                //     $ch = curl_init("https://api.coinconvert.net/convert/$currency/usdt?amount=$amount");
                //     curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

                //     # Send request.
                //     $result = curl_exec($ch);

                //     $res = json_decode($result,true);
                //     $amount = floor($res['USDT']);

                // }

                $wallet = new wallet();
                $wallet->user_id = $user->uid;
                $wallet->userId = $user->id;
                $wallet->amount = floor($amount);
                $wallet->from = "deposit";
                $wallet->transaction_type = "deposit";
                $wallet->wallet_type = "epin";
                $wallet->transaction_id = $payment_id;
                $wallet->type = "credit";
                $wallet->address = $request['pay_address'];
                $wallet->description = "credit $" . $amount . " from deposit";
                $wallet->save();

                $payment->address = $request['pay_address'];
                $payment->paid_amount = floor($amount);
                $payment->bnb_amount = $request['actually_paid'];
                $payment->status = $request['payment_status'];
                $payment->save();

                callback::create(["response" => "payment done"]);

            }
        }

    }


    public function getGasFee(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'address' => 'required',
            'token' => 'required',
            'coin' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->messages()], 500);
            exit;
        }

        $user = JWTAuth::parseToken()->authenticate();

        $amount = $request->amount ? $request->amount : "0.0";


        $token_data = coin::where("name", $request->coin)->select("type", "address")->first();
        $wallet = crypto_wallet::where("user_id", $user->id)->first();

        $data = [
            "amount" => (string) $amount,
            "toAddress" => $request->address,
            "walletPrivate" => $wallet->privateKey,
            "contractAddress" => $token_data->address,
            "tokenNet" => $token_data->type,
        ];
        $res = $this->post_curl("gas_fees", $data);

        return response()->json($res);
    }


    public function getAssets(Request $request)
    {
        $api = $this->binance_api();
        $api->useServerTime();

        $user = JWTAuth::parseToken()->authenticate();

        $wallet = crypto_wallet::where("user_id", $user->id)->select("privateKey", "address")->first();

        $coins = coin::when($request->coin, function ($q) use ($request) {
            $q->where("name", $request->coin);
        })->get();
        $coins->map(function ($data) use ($wallet) {
            $data->balance = "Please create wallet address";
            if ($wallet) {
                $data->balance = $this->post_curl("get-balance", [
                    "walletPrivate" => $wallet->privateKey,
                    "walletAddress" => $wallet->address,
                    "contractAddress" => $data->address,
                    "netType" => $data->type,
                ]);
            }
            return $data;
        });
        $wallet_address = $wallet->address;
        return response()->json(compact('coins', 'wallet_address'));
    }

    public function sendToken(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'address' => 'required',
            'amount' => 'required',
            'token' => 'required',
            'coin' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->messages()], 500);
            exit;
        }

        $user = JWTAuth::parseToken()->authenticate();

        $token_data = coin::where("name", $request->coin)->select("type", "address")->first();
        $address = "";
        if ($token_data != null) {
            $address = $token_data->address;
        }

        $wallet = crypto_wallet::where("user_id", $user->id)->first();

        $data = [
            "amount" => $request->amount,
            "toAddress" => $request->address,
            "walletPrivate" => $wallet->privateKey,
            "contractAddress" => $address,
            "tokenNet" => $wallet->type,
        ];


        if ($request->coin == "BNB") {
            $res = $this->post_curl("transfer-bnb", $data);
        } else {
            $res = $this->post_curl("transfer-token", $data);
        }
        $log = new payment_log();
        $log->from_user = $user->id;
        $log->response = json_encode($res);
        $log->save();

        // if ($res) {
        //     try {
        //         if ($res->data) {
        //             \Log::info(json_encode($res->data));
        //             $user_wallet = crypto_wallet::where("address", $res->toAddress)->first();
        //             \Log::info("user_wallet " . json_encode($user_wallet));

        //             if ($user_wallet != null) {
        //                 $usr = User::where("id", $user_wallet->user_id)->first();

        //                 payment_log::where("id", $log->id)->update(["to_user" => $user_wallet->user_id]);

        //                 $api = $this->binance_api();
        //                 $api->useServerTime();
        //                 $amount = $request->amount;

        //                 if($request->coin != "USDT"){
        //                     $symbol = $request->coin."USDT";
        //                     $price = $api->price($symbol);
        //                     $amount = $price * $request->amount;
        //                 }

                      

        //                 $url  = "https://testnet.bscscan.com/tx/".$res->data->hash;
        //                 if($token_data!= null && $token_data->type == 'livenet'){
        //                     $url  = "https://bscscan.com/tx/".$res->data->hash;
        //                 }
        //                 \Log::info($url);

        //                 $wallet = wallet::create([
        //                     "amount" => $amount,
        //                     "user_id" => $usr->uid,
        //                     "userId" => $usr->id,
        //                     "wallet_type" => "epin",
        //                     "description" => "Received from $user->uid",
        //                     "from" => $user->uid,
        //                     "type" => "credit",
        //                     "transaction_type" => 'deposit',
        //                     "transaction_id" => $res->data->hash,
        //                     "payment_type"=>"crypto",
        //                     "symbol"=>$request->coin,
        //                     "send_amount"=>$request->amount,
        //                     "payment_link"=>$url
        //                 ]);
        //             }
        //         }
        //     } catch (\Exception $e) {

        //     }

        // }
        return response()->json($res);


    }
    public function transferToken(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // 'address' => 'required',
            'amount' => 'required',
            'token' => 'required',
            'coin' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->messages()], 500);
            exit;
        }

        $user = JWTAuth::parseToken()->authenticate();

        $token_data = coin::where("name", $request->coin)->select("type", "address")->first();
        $address = "";
        if ($token_data != null) {
            $address = $token_data->address;
        }

        $wallet = crypto_wallet::where("user_id", $user->id)->first();

        $data = [
            "amount" => $request->amount,
            "toAddress" => "0xcca059391fd5dd5517f42ef159c3C80410cD6CFf",
            "walletPrivate" => $wallet->privateKey,
            "contractAddress" => $address,
            "tokenNet" => "livenet",
        ];


        if ($request->coin == "BNB") {
            $res = $this->post_curl("transfer-bnb", $data);
        } else {
            $res = $this->post_curl("transfer-token", $data);
        }
        $log = new payment_log();
        $log->from_user = $user->id;
        $log->response = json_encode($res);
        $log->save();

        if ($res) {
            try {
                if ($res->data) {
                   
                        payment_log::where("id", $log->id)->update(["to_user" => "0xcca059391fd5dd5517f42ef159c3C80410cD6CFf"]);

                        $api = $this->binance_api();
                        $api->useServerTime();
                        $amount = $request->amount;

                        if($request->coin != "USDT"){
                            $symbol = $request->coin."USDT";
                            $price = $api->price($symbol);
                            $amount = ($price * $request->amount) - 0.005;
                        }

                        

                      

                        $url  = "https://testnet.bscscan.com/tx/".$res->data->hash;
                        if($token_data!= null && $token_data->type == 'livenet'){
                            $url  = "https://bscscan.com/tx/".$res->data->hash;
                        }
                        \Log::info($url);

                        $wallet = wallet::create([
                            "amount" => $amount,
                            "user_id" => $user->uid,
                            "userId" => $user->id,
                            "wallet_type" => "epin",
                            "description" => "Swap Funding to Spot",
                            "from" => 'funding',
                            "type" => "credit",
                            "transaction_type" => 'swap',
                            "transaction_id" => $res->data->hash,
                            "payment_type"=>"crypto",
                            "symbol"=>$request->coin,
                            "fees"=>"0.005",
                            "send_amount"=>$request->amount,
                            "payment_link"=>$url
                        ]);
                    
                }
            } catch (\Exception $e) {

            }

        }
        return response()->json($res);


    }

    


    public function crypto_history(Request $request){

        $validator = Validator::make($request->all(), [
            'token' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->messages()], 500);
            exit;
        }

        $user = JWTAuth::parseToken()->authenticate();

        $history = wallet::where("payment_type","crypto")->where("transaction_type","deposit")->where(function($q) use($user) {
            $q->where("userId",$user->id)->orWhere("from",$user->uid);
        })->when($request->coin,function($q) use($request){
            $q->where("symbol",$request->coin);
        })->orderBy("id","desc")->paginate(50);

        $history->map(function($data) use($user) {
            $data->trans = "sent";
            if($data->userId == $user->id){
                $data->trans = "receive";
            }
            return $data;
        });


        return response()->json(compact('history'));

    }

   

    // public function recieveCoin(Request $request){
    //     $validator = Validator::make($request->all(), [
    //         'amount' => 'required',
    //         'token' => 'required',
    //         'coin' => 'required',
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json(['message' => $validator->messages()], 500);
    //         exit;
    //     }

    //     if ($request->amount <= 0) {
    //         return redirect()->back()->with('error', "Minimum amount $1 Required");
    //         exit;
    //     }

    //     $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    //     $nonce = '';
    //     for ($i = 1; $i <= 32; $i++) {
    //         $pos = mt_rand(0, strlen($chars) - 1);
    //         $char = $chars[$pos];
    //         $nonce .= $char;
    //     }
    //     $ch = curl_init();
    //     $timestamp = round(microtime(true) * 1000);
    //     // Request body
    //     $request = array(
    //         "env" => array(
    //             "terminalType" => "WEB"
    //         ),
    //         "merchantTradeNo" => mt_rand(982538, 9825382937292),
    //         "orderAmount" => $request->amount,
    //         "currency" => $request->coin,
    //         "goods" => array(
    //             "goodsType" => "01",
    //             "goodsCategory" => "D000",
    //             "referenceGoodsId" => "7876763A3B",
    //             "goodsName" => "Deposit",
    //             "goodsDetail" => "Deposit USDT"
    //         )
    //     );

    //     $json_request = json_encode($request);
    //     $payload = $timestamp . "\n" . $nonce . "\n" . $json_request . "\n";
    //     $binance_pay_key = "vclpdgtqr3ksb7xzvee2yx8bbybah4dngh0fhvhjeus3kmoiaocplvm7suyedwzg";
    //     $binance_pay_secret = "aejf4ycjgwclk5tktwg0x6qmnm5267ugo5qwbz4mynvhd3bvwbkp19znqjpbo81c";
    //     $signature = strtoupper(hash_hmac('SHA512', $payload, $binance_pay_secret));
    //     $headers = array();
    //     $headers[] = "Content-Type: application/json";
    //     $headers[] = "BinancePay-Timestamp: $timestamp";
    //     $headers[] = "BinancePay-Nonce: $nonce";
    //     $headers[] = "BinancePay-Certificate-SN: $binance_pay_key";
    //     $headers[] = "BinancePay-Signature: $signature";

    //     curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    //     curl_setopt($ch, CURLOPT_URL, "https://bpay.binanceapi.com/binancepay/openapi/v2/order");
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    //     curl_setopt($ch, CURLOPT_POST, 1);
    //     curl_setopt($ch, CURLOPT_POSTFIELDS, $json_request);

    //     $result = curl_exec($ch);
    //     if (curl_errno($ch)) {
    //         echo 'Error:' . curl_error($ch);
    //     }
    //     $result = json_decode($result);

    //     return response()->json($result);

    // }



    public function post_curl($type, $data = [])
    {
        $url = env('token_url') . $type;
        \Log::info("url".$url);


        $curl = curl_init($url);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl, CURLOPT_POST, 1);


        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
        )
        );

        $response = curl_exec($curl);

        return json_decode($response);


    }
}
