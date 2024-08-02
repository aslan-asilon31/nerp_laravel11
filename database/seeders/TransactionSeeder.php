<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Transaction;
use App\Models\Order;
use Carbon\Carbon;


class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        // Loop for today
        for ($i = 0; $i <= 110; $i++) {

            $randomHour = rand(0, 23);
            $randomMinute = rand(0, 59);
            $randomSecond = rand(0, 59);

            $createdAt = Carbon::yesterday()->setTime($randomHour, $randomMinute, $randomSecond);

            $transactiontoday = Transaction::create([
                'product_id' => 2,
                'user_id' => 48,
                'status_id' => 16,
                'total_price' => rand(100000, 5000000),
                // 'total_price' => 11500,
                'created_at'  => $createdAt,
            ]);

            
        }
       
     
        // Simpan order setelah semua transaksi selesai
        $order = Order::create([
            'product_id' => 2,
            'user_id' => 48,
            'status_id' => 16,
            'total_price' => 0,
            'prod_amount' => 110,
            'created_at'  => Carbon::now(), // Tanggal dibuatnya order sebaiknya saat ini, bukan $createdAt
        ]);


        // Loop for yesterday
        // for ($i = 0; $i < 5; $i++) {

        //     // Generate a random hour between 00:00:00 and 23:59:59 for each iteration
        //     $randomHour = rand(0, 23);
        //     $randomMinute = rand(0, 59);
        //     $randomSecond = rand(0, 59);

        //     // Create a Carbon instance for createdAtYesterday with the random hour, minute, and second
        //     $createdAtYesterday = Carbon::now()->startOfWeek()->setTime($randomHour, $randomMinute, $randomSecond);
            
        //     Transaction::create([
        //         'product_id' => 5,
        //         'user_id' => 48,
        //         'status_id' => 16,
        //         'total_price' => rand(100000, 5000000),
        //         // 'total_price' => 11500,
        //         'created_at'  => $createdAtYesterday,
        //     ]);
        // }

        // Loop for Carbon::now()->startOfWeek()
        // for ($i = 0; $i < 5; $i++) {

        //     // Generate a random hour between 00:00:00 and 23:59:59 for each iteration
        //     $randomHour = rand(0, 23);
        //     $randomMinute = rand(0, 59);
        //     $randomSecond = rand(0, 59);

        //     // Create a Carbon instance for startOfWeek with the random hour, minute, and second
        //     $createdAtWeek = Carbon::today()->setTime($randomHour, $randomMinute, $randomSecond);

            
        //     Transaction::create([
        //         'product_id' => 4,
        //         'user_id' => 48,
        //         'status_id' => 16,
        //         'total_price' => rand(100000, 5000000),
        //         // 'total_price' => 11500,
        //         'created_at'  => $createdAtWeek,
        //     ]);
        // }

    }
}
