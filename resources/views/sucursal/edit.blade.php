@extends('tema.app')

@section('title','Editar Sucursal')

@section('content')
    <h3 class="my-3">
        Editar Sucursal ID: <i>{{$sucursal->id}}</i> - <i>{{$sucursal->nombre}}</i>
    </h3>
    <form action="{{ route('sucursal.update', $sucursal) }}" method="POST">
        @method('put')
        <x-sucursal-form :sucursal="$sucursal"/>
    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection