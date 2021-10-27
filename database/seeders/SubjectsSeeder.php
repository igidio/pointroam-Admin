<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectsSeeder extends Seeder {
    public function run() {
        DB::table('subjects')->insert([
            [
                'idRole' => 1, 
                'firstname' => 'Enrique', 
                'lastnameP' => 'Alvarez', 
                'lastnameM' => 'Miranda', 
                'numberID' => '1654566', 
                'department' => 'LP', 
                'gender' => 'Masculino', 
                'phone' => '75643321', 
                'address' => 'Calle Colombia', 
                'birthday' => '1997-05-10', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idRole' => 2, 
                'firstname' => 'Mariana Esther', 
                'lastnameP' => 'Gonzalez', 
                'lastnameM' => 'Quispe', 
                'numberID' => '10455332', 
                'department' => 'LP', 
                'gender' => 'Femenino', 
                'phone' => '76443323', 
                'address' => 'Villa Adela', 
                'birthday' => '1993-02-11', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idRole' => 3, 
                'firstname' => 'Jonathan Emanuel', 
                'lastnameP' => 'Ticona', 
                'lastnameM' => 'Perez', 
                'numberID' => '7645433', 
                'department' => 'LP', 
                'gender' => 'Masculino', 
                'phone' => '75443324', 
                'address' => 'Buenos Aires', 
                'birthday' => '1998-06-03', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idRole' => 3, 
                'firstname' => 'Juliana Belen', 
                'lastnameP' => 'Sempertegui', 
                'lastnameM' => 'Flores', 
                'numberID' => '1054323', 
                'department' => 'LP', 
                'gender' => 'Femenino', 
                'phone' => '75433245', 
                'address' => 'Ballivián', 
                'birthday' => '2000-10-12', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
