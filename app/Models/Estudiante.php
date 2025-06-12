<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

protected $fillable = [
        'nombre', 'apellido', 'email', 'telefono', 'fecha_nacimiento',
        'direccion', 'genero', 'estado'
    ];

    public $timestamps = true;
}
