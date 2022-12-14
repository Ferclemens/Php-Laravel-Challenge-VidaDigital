@extends('tema.app')

@section('title','Inicio')

@section('header')
    <h1 class="text-center py-5">
        PHP-MySQL CRUD
    </h1>
@endsection
@section('empresa')
    <h4 class="text-center">Sección Empresas</h4>
    <div class="col-sm-12 text-center p-3">
        <a href="{{ route('empresa.create')}}" class="btn button__general">Crear Empresa</a>
        <a href="{{ route('empresa.index')}}" class="btn button__general">Listar Empresas</a>
    </div>
@endsection
@section('sucursal')
    <h4 class="text-center">Sección Sucursales</h4>
    <div class="col-sm-12 text-center p-3">
        <a href="{{ route('sucursal.create')}}" class="btn button__general">Crear Sucursal</a>
        <a href="{{ route('sucursal.index')}}" class="btn button__general">Listar Sucursales</a>
    </div>
@endsection
@section('empleado')
    <h4 class="text-center">Sección Empleados</h4>
    <div class="col-sm-12 text-center p-3">
        <a href="{{ route('empleado.create')}}" class="btn button__general">Crear Empleado</a>
        <a href="{{ route('empleado.index')}}" class="btn button__general">Listar Empleados</a>
    </div>
@endsection

@section('content')
    <h3 class="text-center pb-5">
        Bienvenido!
    </h3>
@endsection