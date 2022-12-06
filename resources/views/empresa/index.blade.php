@extends('tema.app')

@section('title','Listado Empresas')

@section('content')
    <h3>
        Listado de Empresas
    </h3>
    <table class="table table-stripped table-hover">
        <thead>
            <tr>
                <th>
                    Nombre
                </th>
                <th>
                    CUIT
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
            @foreach ($empresas as $empresa)
                <tr>
                    <td>
                        {{ $empresa->nombre}}
                    </td>
                    <td>
                        {{ $empresa->cuit}}
                    </td>
                    <td>
                        {{ $empresa->direccion}}
                    </td>
                    <td>
                        {{ $empresa->email}}
                    </td>
                    <td>
                        {{ $empresa->telefono}}
                    </td>
                    <td>
                        <a href="{{route('empresa.show', $empresa)}}">Ver</a>
                        <a href="{{route('empresa.edit', $empresa)}}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection