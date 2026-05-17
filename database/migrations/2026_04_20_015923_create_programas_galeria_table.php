<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('programas_galeria', function (Blueprint $table) {
            $table->id();
            $table->foreignId('programa_id')->constrained('programas')->onDelete('cascade');
            $table->string('imagen');
            $table->integer('orden')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('programas_galeria');
    }
};