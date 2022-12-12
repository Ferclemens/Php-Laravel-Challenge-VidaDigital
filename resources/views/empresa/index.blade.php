@extends('tema.app')

@section('title','Listado Empresas')

@section('content')
    <h3 class="mb-4">
        Listado de Empresas
    </h3>
    @livewire('empresa-index')
@endsection