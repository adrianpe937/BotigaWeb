<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('producto_carrito', function (Blueprint $table) {
            $table->foreignId('idcarrito')->constrained('pedidos');
            $table->foreignId('idproducto')->constrained('productos');
            $table->integer('cantidad');
            $table->primary(['idcarrito', 'idproducto']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('producto_carrito');
    }
};
