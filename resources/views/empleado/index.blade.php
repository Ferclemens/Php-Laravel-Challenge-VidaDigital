@extends('tema.app')

@section('title','Listado Empleados')

@section('content')
    <h3 class="mb-4">
        Listado de Empleados
    </h3>
    @livewire('empleado-index')
@endsection