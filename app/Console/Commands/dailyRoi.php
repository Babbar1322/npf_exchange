<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\wallet;
use App\User;

class dailyRoi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'daily:roi';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Daily ROI on user wallet Balance';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $users = User::all();
        foreach($users as $user){
            $credit = wallet::where("userId",$user->id)->where("wallet_type","epin")->where("type","credit")->sum('amount');
            $debit = wallet::where("userId",$user->id)->where("wallet_type","epin")->where("type","debit")->sum('amount');
            $balance = $credit - $debit;
            $balance = round($balance,2);

            if($balance > 0){
                $amount = 0.01 * $balance;
                $wallet = new wallet();
                $wallet->user_id= $user->uid;
                $wallet->userId= $user->id;
                $wallet->wallet_type= "epin";
                $wallet->transaction_type= "roi";
                $wallet->type= "credit";
                $wallet->description= "1% Daily ROI on balance $balance";
                $wallet->amount= $amount;
                $wallet->save();
            }
        }
    }
}
