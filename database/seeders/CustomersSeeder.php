<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            [
                'firstname' => 'Salvador Igidio',
                'lastnameP' => 'Cáceres', 
                'lastnameM' => 'Camacopa', 
                'numberID' => '10921107', 
                'department' => 'LP', 
                'direction' => 'Jaymes Freyre', 
                'gender'=>'Masculino', 
                'birthday' => '2000-04-04', 
                'phone' => '77765443', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }
}
