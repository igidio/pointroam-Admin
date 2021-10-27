<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder {
    public function run() {
        DB::table('roles')->insert([
            [
                'rolename' => 'Administrador', 
                'description' => 'El que administra el sitio web', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'rolename' => 'Control vehicular', 
                'description' => 'El que realiza el control de vehículos', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'rolename' => 'Mantenimiento', 
                'description' => 'El que realiza el mantenimiento', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }
}
