@extends('tema.app')

@section('title','Listado Empresas')

@section('content')
    <h3>
        Listado de Empresas
    </h3>
    @livewire('empresa-index')
@endsection