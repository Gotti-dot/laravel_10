<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo_materia', 'nombre_materia', 'total_horas',
        'horas_teoria', 'horas_practica', 'descripcion'
    ];

    public $timestamps = true;
}
