<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('predicas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('predicador');
            $table->text('descripcion');
            $table->text('contenido')->nullable();
            $table->string('video_url')->nullable();
            $table->string('audio_url')->nullable();
            $table->string('imagen')->nullable();
            $table->date('fecha');
            $table->boolean('activo')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('predicas');
    }
};