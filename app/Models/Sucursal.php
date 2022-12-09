<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Empresa;
use App\Models\Empleado;

class Sucursal extends Model
{
    use HasFactory;
    
    protected $table = 'sucursal';
    protected $fillable = [
        'nombre',
        'direccion',
        'email',
        'telefono',
        'id_empresa',
    ];

    public function empleados() {
        return $this->hasMany(Empleado::class,'id');
    }
    public function empresas() {
        return $this->belongsTo(Empresa::class,'id_empresa');
    }
}
