@extends('tema.app')

@section('title','Listado Empleados')

@section('content')
    <h3>
        Listado de Empleados
    </h3>
    @livewire('empleado-index')
@endsection