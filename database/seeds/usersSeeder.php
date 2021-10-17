<?php

use Illuminate\Database\Seeder;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
              'id_personal' => '1',
              'id_cliente' => null,
              'id_chofer' => null,
              'acceso' => true,
              'username' => 'enriquex',
              'email' => 'elquiquealvarez@gmail.com',
              'password' => Hash::make('QWERTYUI'),
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s')
            ],
            [
              'id_personal' => null,
              'id_cliente' => '1',
              'id_chofer' => null,
              'acceso' => true,
              'username' => 'salva2000',
              'email' => 'salvadorcaceres@gmail.com',
              'password' => Hash::make('QWERTYUI'),
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s')
            ],
            [
              'id_personal' => null,
              'id_cliente' => null,
              'id_chofer' => '1',
              'acceso' => true,
              'username' => 'juanar9',
              'email' => 'juanariel9@gmail.com',
              'password' => Hash::make('QWERTYUI'),
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s')
            ]
          ]);
    }
}
