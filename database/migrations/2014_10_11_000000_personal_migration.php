<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PersonalMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_cargo')->unsigned()->default('0');
            $table->string('nombres', 50);
            $table->string('apellido_p', 50);
            $table->string('apellido_m', 50);
            $table->integer('ci');
            $table->string('cid', 2)->nullable()->default('');
            $table->string('genero', 10)->default('');
            $table->integer('telefono');
            $table->text('direccion')->nullable();
            $table->date('fnac')->nullable();
            $table->foreign('id_cargo')->references('id')->on('cargos');
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
        //
    }
}
