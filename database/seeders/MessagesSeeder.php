<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Message;

class MessagesSeeder extends Seeder {

    public function run() {
        Message::factory(50)->create();
    }
}
