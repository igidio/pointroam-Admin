<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//Tabla 'Destions'
class Destinations extends Migration
{
    public function up()
    {
        Schema::create('destinations', function (Blueprint $table) {
            $table->id();
            //nombre
            $table->string('name', 30)->nullable()->default('');;
            //c_latitud
            $table->double('latitude')->nullable();
            //c_longitud
            $table->double('longitude')->nullable();
            //direccion
            $table->text('address')->nullable();
            //departamento
            $table->string('departament', 20)->nullable()->default('');
            $table->timestamps();
        });

        /*DB::statement("
        CREATE TABLE `destinos` (
            `id` INT NOT NULL AUTO_INCREMENT,
            `nombre` VARCHAR(30) NULL DEFAULT NULL,
            `c_latitud` DOUBLE NULL DEFAULT NULL,
            `c_longitud` DOUBLE NULL DEFAULT NULL,
            `direccion` TEXT NULL DEFAULT NULL,
            `provincia` VARCHAR(50) NULL DEFAULT NULL,
            `departamento` VARCHAR(20) DEFAULT NULL,
                PRIMARY KEY (`id`),
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )
        COLLATE='latin1_swedish_ci'
        ;");*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
