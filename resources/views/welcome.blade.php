@extends('tema.app')

@section('title','Inicio')

@section('header')
    <h1 class="text-center m-5">
        PHP-MySQL CRUD
    </h1>
@endsection
@section('empresa')
    <h4 class="text-center">Sección Empresa</h4>
    <div class="col-sm-12">
        <a href="{{ route('empresa.create')}}" class="btn btn-link">Crear Empresa</a>
        <a href="{{ route('empresa.index')}}" class="btn btn-link">Listar Empresas</a>
    </div>
@endsection
@section('sucursal')
    <h4 class="text-center">Sección Sucursal</h4>
    <div class="col-sm-12">
        <a href="{{ route('sucursal.create')}}" class="btn btn-link">Crear Sucursal</a>
        <a href="{{ route('sucursal.index')}}" class="btn btn-link">Listar Sucursales</a>
    </div>
@endsection
@section('empleado')
    <h4 class="text-center">Sección Empleado</h4>
    <div class="col-sm-12">
        <a href="{{ route('empleado.create')}}" class="btn btn-link">Crear Empleado</a>
        <a href="{{ route('empleado.index')}}" class="btn btn-link">Listar Empleados</a>
    </div>
@endsection

@section('content')
    <h3 class="text-center m-5">
        Bienvenido!
    </h3>
    <div class="col-sm-12">
        
    </div>
@endsection