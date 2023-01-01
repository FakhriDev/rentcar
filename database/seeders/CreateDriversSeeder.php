<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Driver;
class CreateDriversSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $drivers = [
            [
                'uid'=>'20444333',
               'name'=>'Salman Pratama',
               'jabatan'=>'Karyawan',
            ],
            [
                'uid'=>'20222444',
               'name'=>'Bhima Bagaskara',
               'jabatan'=>'Karyawan',
            ],
        ];
    
        foreach ($drivers as $key => $drivers) {
            Driver::create($drivers);
        }
    
    }
}
