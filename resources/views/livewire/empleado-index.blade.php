<div>
    <div class="row">
        <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="Buscar" wire:model="busqueda">
        </div>
        <div class="table-responsive">
            <table class="table table-stripped table-hover">
                <thead class="text-center">
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
                            ID Sucursal
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
                                {{ $empleado->id_sucursal}}
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
                                <div class="index__actions">
                                    <a href="{{route('empleado.show', $empleado)}}"><img src="https://cdn-icons-png.flaticon.com/512/2703/2703438.png" class="mx-2 icon__options"/></a>
                                    <a href="{{route('empleado.edit', $empleado)}}"><img src="https://cdn-icons-png.flaticon.com/512/738/738880.png" class="mx-2 icon__options"/></a>
                                    <form action="{{ route('empleado.destroy', $empleado)}}" method="POST" class="index__actions">
                                        @csrf
                                        @method('delete')
                                        <button class="button__options"><img src="https://cdn-icons-png.flaticon.com/512/9163/9163905.png" class="mx-2 icon__options"/></button>
                                    </form>    
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$empleados->links()}}
        </div>
    </div>
</div>
{{-- <div>
    @foreach ($empleados as $empleado)
    <div class="index__container">
        <div class="index__title">
            <strong>Nombre: </strong>{{ $empleado->nombre}}
            <strong>Apellido: </strong>{{ $empleado->apellido}}
            <strong>DNI: </strong>{{ $empleado->dni}}
        </div>
        <div class="index__data">
            <strong>dirección: </strong>{{ $empleado->direccion}}
            <strong>Email: </strong>{{ $empleado->email}}
            <strong>Teléfono: </strong>{{ $empleado->telefono}}
        </div>
        <div class="index__data">
            <strong>Fecha de nacimiento: </strong>{{  $empleado->fecha_nacimiento }}
            <strong>Fecha de ingreso </strong>{{  $empleado->fecha_ingreso }}
            <strong>Cargo: </strong>{{  $empleado->cargo }}
            <strong>Sueldo: </strong>{{  $empleado->sueldo }}
        </div>
        <div class="index__actions">
            <a href="{{route('empleado.show', $empleado)}}" class="btn btn-danger btn-sm index__btn">Ver</a>
            <a href="{{route('empleado.edit', $empleado)}}" class="btn btn-danger btn-sm index__btn">Editar</a>
            <form action="{{ route('empleado.destroy', $empleado)}}" method="POST" class="index__btn">
                @csrf
                @method('delete')
                <button class="btn btn-danger btn-sm index__btn">Eliminar</button>
            </form>    
        </div>
    </div>
    @endforeach
    {{$empleados->links()}}
</div> --}}
