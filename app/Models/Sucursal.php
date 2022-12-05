<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;
    
    protected $table = 'sucursal';
    protected $fillable = [
        'nombre',
        'direccion',
        'correo',
    ];
}
