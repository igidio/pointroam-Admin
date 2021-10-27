<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesSeeder::class);
        $this->call(SubjectsSeeder::class);
        $this->call(DriversSeeder::class);
        $this->call(CustomersSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(VehiclesSeeder::class);
        $this->call(MessagesSeeder::class);
    }
}
