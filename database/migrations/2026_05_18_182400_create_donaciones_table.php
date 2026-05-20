<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('donaciones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('email');
            $table->string('telefono')->nullable();
            $table->decimal('monto', 10, 2);
            $table->enum('estado', ['pendiente', 'completada', 'fallida'])->default('pendiente');
            $table->string('transaccion_id')->nullable();
            $table->boolean('requiere_comprobante')->default(false);
            $table->string('documento_identidad')->nullable();
            $table->string('direccion')->nullable();
            $table->integer('emitido_por')->nullable(); // ID del admin que emitió comprobante
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('donaciones');
    }
};