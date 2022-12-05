<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $table = 'empleado';
    protected $fillable = [
        'nombre',
        'apellido',
        'dni',
        'direccion',
        'email',
        'telefono',
        'fecha_nacimiento',
        'fecha_ingreso',
        'cargo',
        'sueldo',
    ];
}
