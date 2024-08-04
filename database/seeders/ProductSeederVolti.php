<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;


class ProductSeederVolti extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'website_id'	=> 8, // volti
            'name'	=> ' Tesla Model 3 ',
        ]);
        Product::create([
            'website_id'	=> 8, // volti
            'name'	=> '  BYD ATTO 3 ',
        ]);
        Product::create([
            'website_id'	=> 8, // volti
            'name'	=> ' Tesla Model Y',
        ]);
        
        Product::create([
            'website_id'	=> 8, // volti
            'name'	=> '  BMW i4 eDrive40	 ',
        ]);
       
        Product::create([
            'website_id'	=> 8, // volti
            'name'	=> ' Nissan Leaf ',
        ]);
       
        Product::create([
            'website_id'	=> 8, // volti
            'name'	=> '  BMW i4 M50	 ',
        ]);
        Product::create([
            'website_id'	=> 8, // volti
            'name'	=> '  BMW iX3  ',
        ]);
       
        Product::create([
            'website_id'	=> 8, // volti
            'name'	=> '  Nissan Ariya 87kWh	 ',
        ]);
      
        Product::create([
            'website_id'	=> 8, // volti
            'name'	=> '  BMW iX1 xDrive30	 ',
        ]);
      
        Product::create([
            'website_id'	=> 8, // volti
            'name'	=> '  Toyota bZ4X FWD	 ',
        ]);
       
        Product::create([
            'website_id'	=> 8, // volti
            'name'	=> '  Toyota PROACE Verso L 75 kWh	 ',
        ]);
        
        Product::create([
            'website_id'	=> 8, // volti
            'name'	=> '  Porsche Macan Electric	 ',
        ]);
       
        Product::create([
            'website_id'	=> 8, // volti
            'name'	=> ' BMW iX xDrive40 ',
        ]);
        Product::create([
            'website_id'	=> 8, // volti
            'name'	=> '  BMW i7 M70 xDrive	 ',
        ]);
       
        Product::create([
            'website_id'	=> 8, // volti
            'name'	=> '  Porsche Taycan Turbo GT	 ',
        ]);
        Product::create([
            'website_id'	=> 8, // volti
            'name'	=> ' Porsche Taycan Plus ',
        ]);
        Product::create([
            'website_id'	=> 8, // volti
            'name'	=> '  Porsche Macan 4 Electric	 ',
        ]);


    }

    
}
