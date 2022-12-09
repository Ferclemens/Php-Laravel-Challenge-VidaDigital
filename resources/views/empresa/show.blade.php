@extends('tema.app')

@section('title','Empresa')

@section('content')
    <h3 class="my-3">
        Detalle empresa ID: <i>{{$empresa->id}}</i>
    </h3>
    <div class="row">
        <div class="col-sm-12">
            Nombre: {{$empresa->nombre}}    
        </div>
        <div class="col-sm-12">
            Dirección: {{$empresa->direccion}}    
        </div>
        <div class="col-sm-12">
            CUIT: {{$empresa->cuit}}    
        </div>
        <div class="col-sm-12">
            Email: {{$empresa->email}}    
        </div>
        <div class="col-sm-12">
            Teléfono: {{$empresa->telefono}}    
        </div>
        <div class="col-sm-12">
            <form action="{{ route('empresa.destroy', $empresa)}}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-danger btn-sm">Eliminar</button>
            </form>    
        </div>
    </div>
@endsection