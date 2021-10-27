<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder {
    public function run() {
        DB::table('users')->insert([
            [
              'idSubjects' => 1,
              'idCustomers' => null,
              'idDrivers' => null,
              'access' => true,
              'username' => 'enriquex',
              'email' => 'elquiquealvarez@gmail.com',
              'password' => Hash::make('QWERTYUI'),
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s')
            ],
            [
              'idSubjects' => null,
              'idCustomers' => 1,
              'idDrivers' => null,
              'access' => true,
              'username' => 'salva2000',
              'email' => 'salvadorcaceres@gmail.com',
              'password' => Hash::make('QWERTYUI'),
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s')
            ],
            [
              'idSubjects' => null,
              'idCustomers' => null,
              'idDrivers' => 1,
              'access' => true,
              'username' => 'juanar9',
              'email' => 'juanariel9@gmail.com',
              'password' => Hash::make('QWERTYUI'),
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
