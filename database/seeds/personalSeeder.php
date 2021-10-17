<?php

use Illuminate\Database\Seeder;

class personalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personal')->insert([
            ['id_cargo' => 1, 'nombres' => 'Enrique', 'apellido_p' => 'Alvarez', 'apellido_m' => 'Miranda', 'ci' => '1654566', 'cid' => 'LP', 'genero' => 'Masculino', 'telefono' => '75643321', 'direccion' => 'Calle Colombia', 'fnac' => '1997-05-10', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_cargo' => 2, 'nombres' => 'Mariana Esther', 'apellido_p' => 'Gonzalez', 'apellido_m' => 'Quispe', 'ci' => '10455332', 'cid' => 'LP', 'genero' => 'Femenino', 'telefono' => '76443323', 'direccion' => 'Villa Adela', 'fnac' => '1993-02-11', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_cargo' => 3, 'nombres' => 'Jonathan Emanuel', 'apellido_p' => 'Ticona', 'apellido_m' => 'Perez', 'ci' => '7645433', 'cid' => 'LP', 'genero' => 'Masculino', 'telefono' => '75443324', 'direccion' => 'Buenos Aires', 'fnac' => '1998-06-03', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_cargo' => 3, 'nombres' => 'Juliana Belen', 'apellido_p' => 'Sempertegui', 'apellido_m' => 'Flores', 'ci' => '1054323', 'cid' => 'LP', 'genero' => 'Femenino', 'telefono' => '75433245', 'direccion' => 'Ballivián', 'fnac' => '2000-10-12', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]
        ]);
    }
}
