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
                <button class="btn button__delete" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</button>
                <a href="{{ route('empleado.index')}}" class="btn button__general">Volver</a>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">¿Eliminar Registro?</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn button__general" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </div>
                        </div>
                    </div>
                </div> 
            </form>    
        </div>
    </div>
@endsection