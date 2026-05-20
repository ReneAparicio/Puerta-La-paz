<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('programas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion_corta');
            $table->text('descripcion_larga');
            $table->string('foto_principal')->nullable();
            $table->boolean('activo')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('programas');
    }
};