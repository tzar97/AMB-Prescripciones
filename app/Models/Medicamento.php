<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    use HasFactory;

    protected $fillable = ['nombre_comercial', 'composicion', 'presentacion'];

    // Relación con Prescripciones
    public function prescripciones()
    {
        return $this->hasMany(Prescripcion::class, 'medicamento_id');
    }
}
