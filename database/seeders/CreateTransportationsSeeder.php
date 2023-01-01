<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Transportation;
class CreateTransportationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transportations = [
            [
               'name'=>'Daihatsu',
               'type'=>'Truk',
               'noPlat'=>'M 1312 PF',
               'vCar'=>'40',
               'vCarNow'=>'35',
               'owner'=>'pribadi',
            ],
            [
               'name'=>'Sigra',
               'type'=>'MiniBus',
               'noPlat'=>'M 3333 PD',
               'vCar'=>'35',
               'vCarNow'=>'20',
               'owner'=>'PT.transjust',
            ],
        ];
    
        foreach ($transportations as $key => $transportations) {
            Transportation::create($transportations);
        }
    }
}
