<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MasterData\CompanyMaster;

class DepartmentMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Nama Nama outlet
        CompanyMaster::create([
            'status_id'	=> 1,
            'name'	=> 'Sudirman-Thamrin',
        ]);
        CompanyMaster::create([
            'status_id'	=> 1,
            'name'	=> 'Senayan',
        ]);
        CompanyMaster::create([
            'status_id'	=> 1,
            'name'	=> 'Kuningan',
        ]);
        CompanyMaster::create([
            'status_id'	=> 1,
            'name'	=> 'Kelapa Gading',
        ]);
        CompanyMaster::create([
            'status_id'	=> 1,
            'name'	=> 'Pondok Indah',
        ]);
    }
}
