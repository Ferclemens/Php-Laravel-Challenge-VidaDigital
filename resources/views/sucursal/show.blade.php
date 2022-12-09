@extends('tema.app')

@section('title','Sucursal')

@section('content')
    <h3 class="my-3">
        Detalle sucursal ID: <i>{{$sucursal->id}}</i>
    </h3>
    <div class="row">
        <div class="col-sm-12">
            Nombre: {{$sucursal->nombre}}    
        </div>
        <div class="col-sm-12">
            Dirección: {{$sucursal->direccion}}    
        </div>
        <div class="col-sm-12">
            Email: {{$sucursal->email}}    
        </div>
        <div class="col-sm-12">
            Teléfono: {{$sucursal->telefono}}    
        </div>
        <div class="col-sm-12">
            <form action="{{ route('sucursal.destroy', $sucursal)}}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-danger btn-sm">Eliminar</button>
            </form>    
        </div>
    </div>
@endsection