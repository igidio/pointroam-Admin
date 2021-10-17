<?php

use Illuminate\Database\Seeder;

class choferesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('choferes')->insert([   
        ['nombres' => 'Juan Ariel', 'apellido_p' => 'Mamani', 'apellido_m' => 'Colque', 'ci' => '6885332', 'cid' => 'LP', 'direccion' => 'Villa Ingenio', 'licencia' => '6454232', 'genero'=>'Masculino', 'fnac' => '1986-04-04', 'telefono' => '77765443', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
        ['nombres' => 'Mario Daniel', 'apellido_p' => 'Poma', 'apellido_m' => 'Quispe', 'ci' => '8534353', 'cid' => 'LP', 'direccion' => 'Senkata', 'licencia' => '8644533', 'genero'=>'Masculino', 'fnac' => '1979-12-14', 'telefono' => '75454332', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], 
        ['nombres' => 'Armando Diego', 'apellido_p' => 'Candia', 'apellido_m' => 'Tarqui', 'ci' => '7675434', 'cid' => 'LP', 'direccion' => 'Llojeta', 'licencia' => '8674432', 'genero'=>'Masculino', 'fnac' => '1991-06-20', 'telefono' => '65422775', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
        ]);
    }
}
