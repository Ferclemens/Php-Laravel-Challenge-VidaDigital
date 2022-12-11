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
            <button class="btn button__general">Eliminar</button>
            <a href="{{ route('empresa.index')}}" class="btn button__general">Volver</a>    
        </form>
    </div>
@endsection