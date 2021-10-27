<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//Tabla 'personal'
class Subjects extends Migration {
    public function up() {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            //id_cargo
            $table->foreignId('idRole')->unsigned()->default('0');
            //nombres
            $table->string('firstname', 50);
            //apellido_p
            $table->string('lastnameP', 50);
            //apellido_m
            $table->string('lastnameM', 50);
            //CI
            $table->integer('numberID');
            //cid
            $table->string('department', 2)->nullable()->default('');
            $table->string('gender', 10)->default('');
            $table->integer('phone');
            $table->text('address')->nullable();
            $table->date('birthday')->nullable();
            $table->foreign('idRole')->references('id')->on('roles');
            $table->timestamps();
        });        
    }
    public function down() {
        //
    }
}
