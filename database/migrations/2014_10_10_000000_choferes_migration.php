<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChoferesMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('choferes', function (Blueprint $table) {
            $table->id();
            $table->string('nombres', 30);
            $table->string('apellido_p', 30);
            $table->string('apellido_m', 30);
            $table->integer('ci');
            $table->string('cid', 2)->nullable()->default('');
            $table->string('genero', 10)->default('');
            $table->integer('telefono');
            $table->text('direccion')->nullable();
            $table->date('fnac')->nullable();
            $table->integer('licencia');
            $table->timestamps();
        });

        /*DB::statement("
        CREATE TABLE `choferes` (
            `id` INT NOT NULL AUTO_INCREMENT,
            `nombres` VARCHAR(30) NULL DEFAULT NULL,
            `apellido_p` VARCHAR(30) NULL DEFAULT NULL,
            `apellido_m` VARCHAR(30) NULL DEFAULT NULL,
            `ci` INT NULL DEFAULT NULL,
            `cid` VARCHAR(2) NULL DEFAULT NULL,
            `telefono` INT NULL DEFAULT NULL,
            `direccion` TEXT NULL DEFAULT NULL,
            `licencia` INT NULL DEFAULT NULL,
            `genero` VARCHAR(12) NULL DEFAULT NULL,
            `fnac` DATE NULL DEFAULT NULL,
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
