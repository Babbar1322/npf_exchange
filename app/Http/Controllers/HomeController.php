<?php

namespace App\Http\Controllers;

use App\price;
use App\usdt_price;
use Illuminate\Http\Request;
use App\User;
use App\wallet;
use App\result;
use Carbon\Carbon;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function adminHome()
    {
        $users = User::count();
        $total_deposit = wallet::where("transaction_type","deposit")->sum('amount');
        $total_interest = wallet::where("transaction_type","roi")->sum('amount');
        $games = result::count();
        $today_games = result::whereDate("created_at",Carbon::today())->count();
        return view('admin.home',compact('users','total_deposit','total_interest','games','today_games'));
    }

    public function price(){
        $coin = price::latest()->first();
        return view('admin.add_price',compact('coin'));
    }
    public function store_price(Request $request){
        $price = new price();
        $price->price = $request->price;
        $price->open = $request->open;
        $price->high = $request->high;
        $price->low = $request->close;
        $price->close = $request->close;
        $price->save();
        return redirect()->back()->with('success',"Price update successfully");
    }

    public function usdt_price(){
        $coin = usdt_price::latest()->first();
        return view('admin.usdt_price',compact('coin'));
    }
    public function store_usdtPrice(Request $request){
        $price = new usdt_price();
        $price->price = $request->price;
        $price->save();
        return redirect()->back()->with('success',"Price update successfully");
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
