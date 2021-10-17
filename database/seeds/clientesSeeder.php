<?php

use Illuminate\Database\Seeder;

class clientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
        ['nombres' => 'Salvador Igidio', 'apellido_p' => 'Cáceres', 'apellido_m' => 'Camacopa', 'ci' => '10921107', 'cid' => 'LP', 'direccion' => 'Jaymes Freyre', 'genero'=>'Masculino', 'fnac' => '2000-04-04', 'telefono' => '77765443', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
        ]);
    }
}
