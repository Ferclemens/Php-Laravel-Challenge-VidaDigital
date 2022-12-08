<div>
    <div class="row">
        <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="Buscar" wire:model="busqueda">
        </div>
    </div>
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
                    <td>
                        <a href="{{route('empleado.show', $empleado)}}">Ver</a>
                        <a href="{{route('empleado.edit', $empleado)}}">Editar</a>
                        <div class="col-sm-12">
                            <form action="{{ route('empleado.destroy', $empleado)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </form>    
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$empleados->links()}}
</div>