@extends('tema.app')

@section('title','Empleado')

@section('content')
    <h3 class="my-3">
        Detalle empleado ID: <i>{{$empleado->id}}</i>
    </h3>
    <div class="row">
        <div class="col-sm-12">
            Nombre: {{$empleado->nombre}}    
        </div>
        <div class="col-sm-12">
            Apellido: {{$empleado->apellido}}    
        </div>
        <div class="col-sm-12">
            DNI: {{$empleado->dni}}    
        </div>
        <div class="col-sm-12">
            Dirección: {{$empleado->direccion}}    
        </div>
        <div class="col-sm-12">
            Email: {{$empleado->email}}    
        </div>
        <div class="col-sm-12">
            Teléfono: {{$empleado->telefono}}    
        </div>
        <div class="col-sm-12">
            Fecha de nacimiento: {{$empleado->fecha_nacimiento}}    
        </div>
        <div class="col-sm-12">
            Fecha de ingreso: {{$empleado->fecha_ingreso}}    
        </div>
        <div class="col-sm-12">
            Cargo: {{$empleado->cargo}}    
        </div>
        <div class="col-sm-12">
            Sueldo: {{$empleado->sueldo}}    
        </div>
    </div>
@endsection