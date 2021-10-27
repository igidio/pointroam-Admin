<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//Tabla 'Pedidos'
class Orders extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            //id_cliente
            $table->foreignId('idCustomer')->unsigned()->default('0');
            //$table->foreignId('id_destino')->unsigned()->default('0');
            //encabezado
            $table->string('header', 50)->nullable()->default('');
            //descripcion
            $table->text('description')->nullable();
            //id_cliente
            $table->foreign('idCustomer')->references('id')->on('customers');
            //latitud
            $table->double('latitude')->nullable();
            //longitud
            $table->double('longitude')->nullable();
            //direccion
            $table->String('address')->nullable();
            //estado
            $table->String('state', 10);
            //fecha_entrega
            $table->date('limitDate');
            //$table->foreign('id_destino')->references('id')->on('destinos');
            $table->timestamps();
        });
    }
    public function down()
    {
    }
}
