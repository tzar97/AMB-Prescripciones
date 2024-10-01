<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'apellido', 'dni'];

    // Relación con Prescripciones
    public function prescripciones()
    {
        return $this->hasMany(Prescripcion::class, 'persona_id');
    }
}
