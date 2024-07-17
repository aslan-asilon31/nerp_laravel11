<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MasterData\StatusMaster;

class StatusMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StatusMaster::create([
            'name'	=> 'active',

        ]);
        StatusMaster::create([
            'name'	=> 'inactive',

        ]);
        StatusMaster::create([
            'name'	=> 'registered',

        ]);
        StatusMaster::create([
            'name'	=> 'banned',

        ]);
        StatusMaster::create([
            'name'	=> 'pending',

        ]);
        StatusMaster::create([
            'name'	=> 'expired',

        ]);
        StatusMaster::create([
            'name'	=> 'sold-out',

        ]);
        StatusMaster::create([
            'name'	=> 'on-sale',

        ]);
        StatusMaster::create([
            'name'	=> 'available',

        ]);
        StatusMaster::create([
            'name'	=> 'pre-ordered',

        ]);
        StatusMaster::create([
            'name'	=> 'delivered',

        ]);
        StatusMaster::create([
            'name'	=> 'on-delivery',

        ]);
        StatusMaster::create([
            'name'	=> 'on-return',

        ]);
        StatusMaster::create([
            'name'	=> 'returning',

        ]);
        StatusMaster::create([
            'name'	=> 'cancelled',

        ]);
    }
}
