<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CamionesMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camiones', function (Blueprint $table) {
            $table->id();
            $table->string('placa', 10);
            $table->string('marca', 30);
            $table->string('modelo', 50);
            $table->integer('capacidad_carga');
            $table->integer('capacidad_gasolina');
            $table->integer('n_ruedas');
            $table->foreignId('id_chofer')->unsigned()->default('0');
            $table->foreign('id_chofer')->references('id')->on('choferes');
            $table->timestamps();
        });

        /*DB::statement("
        CREATE TABLE `camiones` (
            `id` INT NOT NULL AUTO_INCREMENT,
            `id_chofer` INT NULL DEFAULT NULL,
            `placa` VARCHAR(10) NULL DEFAULT NULL,
            `marca` VARCHAR(30) NULL DEFAULT NULL,
            `modelo` VARCHAR(50) NULL DEFAULT NULL,
            `capacidad_carga` INT NULL DEFAULT NULL,
            `capacidad_gasolina` INT NULL DEFAULT NULL,
            `n_ruedas` INT NULL DEFAULT NULL,
                PRIMARY KEY (`id`),
                CONSTRAINT `FK__chofer` FOREIGN KEY (`id_chofer`) REFERENCES `choferes` (`id`),
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
