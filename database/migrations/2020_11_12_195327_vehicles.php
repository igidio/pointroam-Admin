<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vehicles extends Migration {
    public function up() {    
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            //placa
            $table->string('carID', 10);
            //marca
            $table->string('brand', 30);
            //modelo
            $table->string('model', 50);
            //color
            $table->string('color', 20)->default('Negro');
            //capacidad_carga
            $table->integer('loadingCapacity');
            //capacidad_gasolina
            $table->integer('fuelCapacity');
            //tipo de combustible
            $table->string('fuelType', 20)->default('Gas');
            //n_ruedas
            $table->integer('wheelNumber');
            //$table->foreignId('id_chofer')->unsigned()->default('0');
            //$table->foreign('id_chofer')->references('id')->on('choferes');
            $table->timestamps();
        });
    }
    public function down()
    {
        //
    }
}
