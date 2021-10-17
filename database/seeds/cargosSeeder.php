<?php

use Illuminate\Database\Seeder;

class cargosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cargos')->insert([
            ['nombre' => 'Administrador', 'descripcion' => 'El que administra el sitio web', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['nombre' => 'Control vehicular', 'descripcion' => 'El que realiza el control de vehículos', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['nombre' => 'Mantenimiento', 'descripcion' => 'El que realiza el mantenimiento', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
        ]);
    }
}
