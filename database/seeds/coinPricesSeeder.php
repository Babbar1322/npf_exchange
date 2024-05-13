<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;
use App\price;

class coinPricesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            $open = mt_rand(0.1, 20.0); // Generate random open price
            $close = mt_rand($open - 4, $open + 4); // Generate random close price within +/- 20 from open
            $high = max($open, $close) + mt_rand(0, 10); // Generate random high price above open/close
            $low = min($open, $close) - mt_rand(0, 10); // Generate random low price below open/close
            $current = mt_rand(min($open, $close) - 2, max($open, $close) + 2); // Generate random current price within +/- 5 from open/close
            
            $dateTime = Carbon::now()->subDays(rand(0, 2))->addMinutes(rand(0, 1440)); // Generate random date and time within the last 2 days
            
            price::create([
                'open' => $open,
                'high' => $high,
                'low' => $low,
                'close' => $close,
                'price' => $current,
                'date_time' => $dateTime,
            ]);
        }
    }
}
