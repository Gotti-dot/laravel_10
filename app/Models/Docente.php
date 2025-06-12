<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;

    protected $fillable = [
        'cedula', 'nombres', 'apellidos', 'titulo_academico',
        'especialidad', 'telefono', 'email', 'fecha_contratacion', 'activo'
    ];

    public $timestamps = true;
}
