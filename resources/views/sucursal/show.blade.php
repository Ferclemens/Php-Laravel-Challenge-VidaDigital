@extends('tema.app')

@section('title','Sucursal')

@section('content')
    <h3 class="my-3">
        Detalle sucursal ID: <i>{{$sucursal->id}}</i>
    </h3>
    <div class="row gap-3">
        <div class="col-sm-12">
            <strong>Nombre:</strong> {{$sucursal->nombre}}    
        </div>
        <div class="col-sm-12">
            <strong>Dirección:</strong> {{$sucursal->direccion}}    
        </div>
        <div class="col-sm-12">
            <strong>Email:</strong> {{$sucursal->email}}    
        </div>
        <div class="col-sm-12">
            <strong>Teléfono:</strong> {{$sucursal->telefono}}    
        </div>
        <div class="col-sm-12">
            <form action="{{ route('sucursal.destroy', $sucursal)}}" method="POST">
                @csrf
                @method('delete')
                <button class="btn button__general">Eliminar</button>
                <a href="{{ route('sucursal.index')}}" class="btn button__general">Volver</a>
            </form>    
        </div>
    </div>
@endsection