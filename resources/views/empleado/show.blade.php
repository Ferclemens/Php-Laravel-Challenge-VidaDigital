@extends('tema.app')

@section('title','Empleado')

@section('content')
    <h3 class="my-3">
        Detalle empleado ID: <i>{{$empleado->id}}</i>
    </h3>
    <div class="row gap-3">
        <div class="col-sm-12">
            <strong>Nombre:</strong> {{$empleado->nombre}}    
        </div>
        <div class="col-sm-12">
            <strong>Apellido:</strong> {{$empleado->apellido}}    
        </div>
        <div class="col-sm-12">
            <strong>DNI:</strong> {{$empleado->dni}}    
        </div>
        <div class="col-sm-12">
            <strong>Dirección:</strong> {{$empleado->direccion}}    
        </div>
        <div class="col-sm-12">
            <strong>Email:</strong> {{$empleado->email}}    
        </div>
        <div class="col-sm-12">
            <strong>Teléfono:</strong> {{$empleado->telefono}}    
        </div>
        <div class="col-sm-12">
            <strong>Fecha de nacimiento:</strong> {{$empleado->fecha_nacimiento}}    
        </div>
        <div class="col-sm-12">
            <strong>Fecha de ingreso:</strong> {{$empleado->fecha_ingreso}}    
        </div>
        <div class="col-sm-12">
            <strong>Cargo:</strong> {{$empleado->cargo}}    
        </div>
        <div class="col-sm-12">
            <strong>Sueldo:</strong> {{$empleado->sueldo}}    
        </div>
        <div class="col-sm-12">
            <form action="{{ route('empleado.destroy', $empleado)}}" method="POST">
                @csrf
                @method('delete')
                <button class="btn button__general">Eliminar</button>
                <a href="{{ route('empleado.index')}}" class="btn button__general">Volver</a>
            </form>    
        </div>
    </div>
@endsection