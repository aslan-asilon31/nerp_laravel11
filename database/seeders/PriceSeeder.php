<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MasterData\PriceMaster;


class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Danish Coklat Belepotan
        PriceMaster::create([
            'product_id' => 1,
            'status_id'	=> 1,
            'price_selling'	=> 15900,
            'price_selling_after'	=> 11500,
            'price_res_discount'	=> 28,
        ]);
        // Korean Garlic Cream Cheese
        PriceMaster::create([
            'product_id' => 1,
            'status_id'	=> 1,
            'price_selling'	=> 15300,
            'price_selling_after'	=> 11500,
            'price_res_discount'	=> 25,
        ]);
        // Multi Grain Smoked Beef Cheese Sandwich
        PriceMaster::create([
            'product_id' => 1,
            'status_id'	=> 1,
            'price_selling'	=> 16500,
            'price_selling_after'	=> 11500,
            'price_res_discount'	=> 0,
        ]);
        // Roti Abon Sapi
        PriceMaster::create([
            'product_id' => 1,
            'status_id'	=> 1,
            'price_selling'	=> 13800,
            'price_selling_after'	=> 11500,
            'price_res_discount'	=> 0,
        ]);
        // Roti Coklat
        PriceMaster::create([
            'product_id' => 1,
            'status_id'	=> 1,
            'price_selling'	=> 10200,
            'price_selling_after'	=> 11500,
            'price_res_discount'	=> 0,
        ]);
        // Roti Coklat Keju
        PriceMaster::create([
            'product_id' => 1,
            'status_id'	=> 1,
            'price_selling'	=> 12900,
            'price_selling_after'	=> 11500,
            'price_res_discount'	=> 0,
        ]);
        // Roti Coklat Muisjes Gulung
        PriceMaster::create([
            'product_id' => 1,
            'status_id'	=> 1,
            'price_selling'	=> 10200,
            'price_selling_after'	=> 11500,
            'price_res_discount'	=> 0,
        ]);
        // Roti Coklat Susu
        PriceMaster::create([
            'product_id' => 1,
            'status_id'	=> 1,
            'price_selling'	=> 10900,
            'price_selling_after'	=> 11500,
            'price_res_discount'	=> 0,
        ]);
        // Arem-arem (lontong)
        PriceMaster::create([
            'product_id' => 1,
            'status_id'	=> 1,
            'price_selling'	=> 8500,
            'price_selling_after'	=> 11500,
            'price_res_discount'	=> 0,
        ]);
        // Bika Ambon Cup
        PriceMaster::create([
            'product_id' => 1,
            'status_id'	=> 1,
            'price_selling'	=> 7900,
            'price_selling_after'	=> 11500,
            'price_res_discount'	=> 0,
        ]);
        // Bika Ambon Ptg
        PriceMaster::create([
            'product_id' => 1,
            'status_id'	=> 1,
            'price_selling'	=> 5800,
            'price_selling_after'	=> 11500,
            'price_res_discount'	=> 0,
        ]);
        // Lemper Ikan
        PriceMaster::create([
            'product_id' => 1,
            'status_id'	=> 1,
            'price_selling'	=> 87000,
            'price_selling_after'	=> 11500,
            'price_res_discount'	=> 0,
        ]);
        // Nastar Jambu
        PriceMaster::create([
            'product_id' => 1,
            'status_id'	=> 1,
            'price_selling'	=> 73000,
            'price_selling_after'	=> 11500,
            'price_res_discount'	=> 0,
        ]);
        // Onde Kacang Hijau
        PriceMaster::create([
            'product_id' => 1,
            'status_id'	=> 1,
            'price_selling'	=> 7700,
            'price_selling_after'	=> 11500,
            'price_res_discount'	=> 0,
        ]);
    }
}
