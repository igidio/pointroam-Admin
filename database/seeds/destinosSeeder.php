<?php

use Illuminate\Database\Seeder;

class destinosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('destinos')->insert([
        ['nombre' => 'Plaza el Heraldo', 'direccion' => '55 32 55 33 N 44 33 0 22 W', "provincia" => "1", "departamento" => "La Paz"],
        ['nombre' => 'Tiquina', 'direccion' => '15 33 05 33 N 0 30 01 12 W', "provincia" => "2", "departamento" => "La Paz"],
        ['nombre' => 'Barrio el Barón', 'direccion' => '45 32 35 23 N 44 33 10 22 W', "provincia" => "3", "departamento" => "La Paz"],
        ['nombre' => 'Gasolinería Achacachi', 'direccion' => '55 12 55 63 N 74 53 0 22 W', "provincia" => "6", "departamento" => "La Paz"],
        ]);
    }
}
