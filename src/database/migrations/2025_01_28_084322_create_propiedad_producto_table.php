<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('propiedad_producto', function (Blueprint $table) {
            $table->foreignId('idpropiedad')->constrained('propiedades');
            $table->foreignId('idproducto')->constrained('productos');
            $table->primary(['idpropiedad', 'idproducto']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('propiedad_producto');
    }
};
