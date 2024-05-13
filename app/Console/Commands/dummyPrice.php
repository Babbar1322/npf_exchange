<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Carbon\Carbon;
use App\price;


class dummyPrice extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:price';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Insert dummy prices';

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

        $baseDateTime = Carbon::now()->subDays(rand(0, 2))->subHours(rand(0, 23))->subMinutes(rand(0, 59))->subSeconds(rand(0, 59));
        
        // Generate 100 random records
        for ($i = 0; $i < 500; $i++) {
            $open = mt_rand(1, 200); // Generate random number between 1 and 200
            $open /= 10; // Scale the random number to be between 0.1 and 20
            
            $close = mt_rand($open * 10 - 20, $open * 10 + 20); // Generate random close price within +/- 20 from open
            $close /= 10; // Scale the random number to be between 0.1 and 20
            
            $high = max($open, $close) + mt_rand(0, 100) / 10; // Generate random high price above open/close
            $low = min($open, $close) - mt_rand(0, 100) / 10; // Generate random low price below open/close
            $current = mt_rand(min($open, $close) * 10 - 5, max($open, $close) * 10 + 5); // Generate random current price within +/- 5 from open/close
            $current /= 10; // Scale the random number to be between 0.1 and 20
            
            $dateTime = $baseDateTime->copy()->addSeconds($i * mt_rand(540, 600)); // Increment time by a random value between 9 and 10 minutes
            
            price::create([
                'open' => $open,
                'high' => $high,
                'low' => $low,
                'close' => $close,
                'price' => $current,
                'created_at' => $dateTime,
            ]);
        }
    
        // for ($i = 0; $i < 100; $i++) {
        //     $open = mt_rand(0.1, 20.0); // Generate random open price
        //     $close = mt_rand($open - 4, $open + 4); // Generate random close price within +/- 20 from open
        //     $high = max($open, $close) + mt_rand(0, 10); // Generate random high price above open/close
        //     $low = min($open, $close) - mt_rand(0, 10); // Generate random low price below open/close
        //     $current = mt_rand(min($open, $close) - 2, max($open, $close) + 2); // Generate random current price within +/- 5 from open/close
            
        //     $dateTime = Carbon::now()->subDays(rand(0, 2))->addMinutes(rand(0, 1440)); // Generate random date and time within the last 2 days
            
        //     price::create([
        //         'open' => $open,
        //         'high' => $high,
        //         'low' => $low,
        //         'close' => $close,
        //         'price' => $current,
        //         'created_at' => $dateTime,
        //     ]);
        // }
    }
}
