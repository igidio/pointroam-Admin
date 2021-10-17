<?php

use Illuminate\Database\Seeder;

class camionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('camiones')->insert([
        ['placa' => "5FR3YT", 'marca' => 'Volvo', 'modelo'  => '7600', 'capacidad_carga' => '200', 'capacidad_gasolina' => '40', 'n_ruedas' => '6'],
        ['placa' => "AGTW22", 'marca' => 'Volvo', 'modelo'  => 'F-12', 'capacidad_carga' => '400', 'capacidad_gasolina' => '45', 'n_ruedas' => '8'],
        ['placa' => "7HTR4A", 'marca' => 'Volvo', 'modelo'  => 'vnl780', 'capacidad_carga' => '600', 'capacidad_gasolina' => '60', 'n_ruedas' => '10'],
        ]);
    }
}
