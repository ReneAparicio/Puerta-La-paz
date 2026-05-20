<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
    Schema::create('comprobantes_donacion', function (Blueprint $table) {
        $table->id();
        $table->foreignId('donacion_id')->constrained('donaciones')->onDelete('cascade');
        $table->string('numero_comprobante'); 
        $table->string('serie'); 
        $table->string('nit_emisor', 20)->default('0602-060401-101-1');
        $table->string('nombre_emisor')->default('IGLESIA PUERTA DE PAZ');
        $table->date('fecha_emision');
        $table->decimal('monto', 10, 2);
        $table->string('resolucion_numero')->default('15041-RES-IN-60695-2025');
        $table->string('codigo_unico')->default('U712AF91SHUJ');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comprobantes_donacion');
    }
};
