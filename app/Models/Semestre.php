<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_semestre', 'nombre_semestre', 'fecha_inicio',
        'fecha_fin', 'activo'
    ];

    public $timestamps = true;
}
