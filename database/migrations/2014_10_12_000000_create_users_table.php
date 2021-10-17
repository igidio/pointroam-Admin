<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('imagen')->nullable();
            $table->foreignId('id_personal')->nullable();
            $table->foreignId('id_cliente')->nullable();
            $table->foreignId('id_chofer')->nullable();
            $table->boolean('acceso')->default(false);
            $table->foreign('id_personal')->references('id')->on('personal');
            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->foreign('id_chofer')->references('id')->on('choferes');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
