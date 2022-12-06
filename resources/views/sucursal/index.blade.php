@extends('tema.app')

@section('title','Listado Sucursales')

@section('content')
    <h3>
        Listado de Sucursales
    </h3>
    <table class="table table-stripped table-hover">
        <thead>
            <tr>
                <th>
                    Nombre
                </th>
                <th>
                    Dirección
                </th>
                <th>
                    Email
                </th>
                <th>
                    Teléfono
                </th>
                <th>
                    Opciones
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sucursales as $sucursal)
                <tr>
                    <td>
                        {{ $sucursal->nombre}}
                    </td>
                    <td>
                        {{ $sucursal->direccion}}
                    </td>
                    <td>
                        {{ $sucursal->email}}
                    </td>
                    <td>
                        {{ $sucursal->telefono}}
                    </td>
                    <td>
                        <a href="{{route('sucursal.show', $sucursal)}}">Ver</a>
                        <a href="{{route('sucursal.edit', $sucursal)}}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection