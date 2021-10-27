<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//Tabla 'Clientes'
class Customers extends Migration
{

    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('firstname', 30);                            //nombres
            $table->string('lastnameP', 30);                            //apellido_p
            $table->string('lastnameM', 30);                            //apellido_m
            $table->integer('numberID');                                //cd
            $table->string('department', 2)->nullable()->default('');   //cid                  
            $table->string('gender', 10)->default('');                  //genero
            $table->integer('phone');                                   //telefono
            $table->text('direction')->nullable();                      //direccion
            $table->date('birthday')->nullable();                       //fnac
            $table->timestamps();
        });
    }

    public function down()
    {
        //
    }
}
