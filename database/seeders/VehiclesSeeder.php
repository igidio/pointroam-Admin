<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehiclesSeeder extends Seeder
{
    public function run()
    {
        DB::table('vehicles')->insert([
            [
                'carID' => "5FR3YT", 
                'brand' => 'Volvo', 
                'model'  => '7600', 
                'loadingCapacity' => '200', 
                'fuelCapacity' => '40',
                'fuelType' => 'Gas',
                'wheelNumber' => '6',
                'color' => 'Negro',
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'carID' => "AGTW22", 
                'brand' => 'Volvo', 
                'model'  => 'F-12', 
                'loadingCapacity' => '400', 
                'fuelCapacity' => '45', 
                'fuelType' => 'Gas',
                'wheelNumber' => '8',
                'color' => 'Negro',
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'carID' => "7HTR4A", 
                'brand' => 'Volvo', 
                'model'  => 'vnl780', 
                'loadingCapacity' => '600', 
                'fuelCapacity' => '60', 
                'fuelType' => 'Gas',
                'wheelNumber' => '10',
                'color' => 'Negro',
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }
}
