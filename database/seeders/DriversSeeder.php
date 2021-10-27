<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DriversSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drivers')->insert([   
            [
                'firstname' => 'Juan Ariel', 
                'lastnameP' => 'Mamani', 
                'lastnameM' => 'Colque', 
                'numberID' => '6885332', 
                'department' => 'LP', 
                'address' => 'Villa Ingenio', 
                'licence' => '6454232', 
                'gender'=>'Masculino', 
                'birthday' => '1986-04-04', 
                'phone' => '77765443', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'firstname' => 'Mario Daniel', 
                'lastnameP' => 'Poma', 
                'lastnameM' => 'Quispe', 
                'numberID' => '8534353', 
                'department' => 'LP', 
                'address' => 'Senkata', 
                'licence' => '8644533', 
                'gender'=>'Masculino', 
                'birthday' => '1979-12-14', 
                'phone' => '75454332', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ], 
            [
                'firstname' => 'Armando Diego', 
                'lastnameP' => 'Candia', 
                'lastnameM' => 'Tarqui', 
                'numberID' => '7675434', 
                'department' => 'LP', 
                'address' => 'Llojeta', 
                'licence' => '8674432', 
                'gender'=>'Masculino', 
                'birthday' => '1991-06-20', 
                'phone' => '65422775', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }
}
