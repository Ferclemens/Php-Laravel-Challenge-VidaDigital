@extends('tema.app')

@section('title','Listado Empleados')

@section('content')
    <h3>
        Listado de Empleados
    </h3>
    <table class="table table-stripped table-hover">
        <thead>
            <tr>
                <th>
                    Nombre
                </th>
                <th>
                    Apellido
                </th>
                <th>
                    DNI
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
                    Fecha de nacimiento
                </th>
                <th>
                    Fecha de ingreso
                </th>
                <th>
                    Cargo
                </th>
                <th>
                    Sueldo
                </th>
                <th>
                    Opciones
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $empleado)
                <tr>
                    <td>
                        {{ $empleado->nombre}}
                    </td>
                    <td>
                        {{ $empleado->apellido}}
                    </td>
                    <td>
                        {{ $empleado->dni}}
                    </td>
                    <td>
                        {{ $empleado->direccion}}
                    </td>
                    <td>
                        {{ $empleado->email}}
                    </td>
                    <td>
                        {{ $empleado->telefono}}
                    </td>
                    <td>
                        {{ $empleado->fecha_nacimiento}}
                    </td>
                    <td>
                        {{ $empleado->fecha_ingreso}}
                    </td>
                    <td>
                        {{ $empleado->cargo}}
                    </td>
                    <td>
                        {{ $empleado->sueldo}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection