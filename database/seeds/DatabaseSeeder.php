<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(provinciasSeeder::class);
        $this->call(cargosSeeder::class);
        $this->call(personalSeeder::class);
        $this->call(choferesSeeder::class);
        $this->call(clientesSeeder::class);
        $this->call(usersSeeder::class);

        //$this->call(destinosSeeder::class);
        //$this->call(camionesSeeder::class);
    }
}
