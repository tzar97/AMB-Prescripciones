<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 
    
    public function up(): void
    {
        Schema::create('prescripciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('persona_id')->constrained('personas')->onDelete('cascade'); // Relaciona con la tabla personas
            $table->foreignId('medicamento_id')->constrained('medicamentos')->onDelete('cascade'); // Relaciona con la tabla medicamentos
            $table->date('fecha_prescripcion');
            $table->text('observaciones')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prescripciones');
    }
};
