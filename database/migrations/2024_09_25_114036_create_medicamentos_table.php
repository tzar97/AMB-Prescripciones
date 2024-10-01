<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('medicamentos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_comercial')->unique(); // Campo para el nombre del medicamento
            $table->string('composicion')->nullable();    // Composición del medicamento
            $table->string('presentacion')->nullable();   // Forma de presentación (tabletas, jarabe, etc.)
            $table->timestamps(); // Timestamps para created_at y updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('medicamentos');
    }
};
