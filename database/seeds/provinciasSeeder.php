<?php

use Illuminate\Database\Seeder;

class provinciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provincias')->insert([
            ['nombre' => "Abel Iturralde"],
            ['nombre' => "Pedro Domingo Murillo"],
            ['nombre' => "Pacajes"],
            ['nombre' => "Larecaja"],
            ['nombre' => "nquisivi"],
            ['nombre' => "Sud Yungas"],
            ['nombre' => "Ingavi"],
            ['nombre' => "Muñecas"],
            ['nombre' => "Franz Tamayo"],
            ['nombre' => "Aroma"],
            ['nombre' => "Caranavi"],
            ['nombre' => "José Ramón Loayza"],
            ['nombre' => "Bautista Saavedra"],
            ['nombre' => "Eliodoro Camacho"],
            ['nombre' => "Omasuyos"],
            ['nombre' => "General José Manuel Pando"],
            ['nombre' => "Gualberto Villaroel"],
            ['nombre' => "Nor Yungas"],
            ['nombre' => "Los Andes"],
            ['nombre' => "Manco Kapac"],
        ]);
    }
}
