<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_carrera', 'codigo_carrera', 'duracion_semestres',
        'descripcion', 'fecha_creacion', 'activa'
    ];

    public $timestamps = true;
}
