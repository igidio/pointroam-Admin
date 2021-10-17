<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pedidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_cliente')->unsigned()->default('0');
            //$table->foreignId('id_destino')->unsigned()->default('0');
            $table->string('encabezado', 50)->nullable()->default('');
            $table->text('descripcion')->nullable();
            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->double('latitud')->nullable();
            $table->double('longitud')->nullable();
            $table->String('direccion')->nullable();
            $table->String('estado', 10);
            $table->date('fecha_entrega');
            //$table->foreign('id_destino')->references('id')->on('destinos');
            $table->timestamps();
        });
        /*DB::statement("
        CREATE TABLE `pedidos` (
            `id` INT NOT NULL AUTO_INCREMENT,
            `id_cliente` INT NULL DEFAULT NULL,
            `id_destino` INT NULL DEFAULT NULL,
            `encabezado` VARCHAR(50) NULL DEFAULT NULL,
            `descripcion` TEXT NULL DEFAULT NULL,
                PRIMARY KEY (`id`),
                CONSTRAINT `FK__cliente` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`),
                CONSTRAINT `FK__destino` FOREIGN KEY (`id_destino`) REFERENCES `destinos` (`id`),
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
