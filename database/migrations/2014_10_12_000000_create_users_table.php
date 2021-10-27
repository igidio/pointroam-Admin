<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration {
    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('image')->nullable();
            $table->foreignId('idSubjects')->nullable();
            $table->foreignId('idCustomers')->nullable();
            $table->foreignId('idDrivers')->nullable();
            $table->boolean('access')->default(false);
            $table->foreign('idSubjects')->references('id')->on('subjects');
            $table->foreign('idCustomers')->references('id')->on('customers');
            $table->foreign('idDrivers')->references('id')->on('drivers');
            $table->rememberToken();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
