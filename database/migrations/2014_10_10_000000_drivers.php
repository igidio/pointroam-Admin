<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Drivers extends Migration
{
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            //nombres
            $table->string('firstname', 30);
            //apellido_p
            $table->string('lastnameP', 30);
            //apellido_m
            $table->string('lastnameM', 30);
            //ci
            $table->integer('numberID');
            //cid
            $table->string('department', 2)->nullable()->default('');
            //genero
            $table->string('gender', 10)->default('');
            //telefono
            $table->integer('phone');
            //direccion
            $table->text('address')->nullable();
            //fnac
            $table->date('birthday')->nullable();
            //licencia
            $table->integer('licence');
            $table->timestamps();
        });
    }

    public function down()
    {
    }
}
