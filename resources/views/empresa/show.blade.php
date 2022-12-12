@extends('tema.app')

@section('title','Empresa')

@section('content')
    <h3 class="my-3">
        Detalle empresa ID: <i>{{$empresa->id}}</i>
    </h3>
    <div class="row gap-3">
        <div class="col-sm-12">
            <strong>Nombre:</strong> {{$empresa->nombre}}    
        </div>
        <div class="col-sm-12">
            <strong>Dirección:</strong> {{$empresa->direccion}}    
        </div>
        <div class="col-sm-12">
            <strong>CUIT:</strong> {{$empresa->cuit}}    
        </div>
        <div class="col-sm-12">
            <strong>Email:</strong> {{$empresa->email}}    
        </div>
        <div class="col-sm-12">
            <strong>Teléfono:</strong> {{$empresa->telefono}}    
        </div>
        <form action="{{ route('empresa.destroy', $empresa)}}" method="POST">
            @csrf
            @method('delete')
            <button class="btn button__delete" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</button>
            <a href="{{ route('empresa.index')}}" class="btn button__general">Volver</a>
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
@endsection