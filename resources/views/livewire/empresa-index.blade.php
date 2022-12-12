<div>
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
                            <div class="index__actions">
                                <a href="{{route('empresa.show', $empresa)}}" ><img src="https://cdn-icons-png.flaticon.com/512/2703/2703438.png" class="mx-2 icon__options"/></a>
                                <a href="{{route('empresa.edit', $empresa)}}" ><img src="https://cdn-icons-png.flaticon.com/512/738/738880.png" class="mx-2 icon__options"/></a>
                                <form action="{{ route('empresa.destroy', $empresa)}}" method="POST" class="index__actions">
                                    @csrf
                                    @method('delete')
                                    <button class="button__options" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="https://cdn-icons-png.flaticon.com/512/9163/9163905.png" class="mx-2 icon__options"/></button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">¿Eliminar registro?</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn button__general" data-bs-dismiss="modal">Cancelar</button>
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>    
                            </div>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {{$empresas->links()}}
        <a href="{{ route('welcome')}}" class="btn button__general">Volver</a>
    </div>
</div>

{{--     @foreach ($empresas as $empresa)
    <div class="index__container">
        <div class="index__title">
            <strong>Nombre: </strong>{{ $empresa->nombre}}
        </div>
            <div class="index__data">
                <strong>CUIT: </strong>{{ $empresa->cuit}}
                <strong>dirección: </strong>{{ $empresa->direccion}}
            </div>
            <div class="index__data">
                <strong>Email: </strong>{{ $empresa->email}}
                <strong>Teléfono: </strong>{{ $empresa->telefono}}
            </div>
        <div class="index__actions">
            <a href="{{route('empresa.show', $empresa)}}" class="btn btn-danger btn-sm index__btn">Ver</a>
            <a href="{{route('empresa.edit', $empresa)}}" class="btn btn-danger btn-sm index__btn">Editar</a>
            <form action="{{ route('empresa.destroy', $empresa)}}" method="POST" class="index__btn">
                @csrf
                @method('delete')
                <button class="btn btn-danger btn-sm index__btn">Eliminar</button>
            </form>    
        </div>
    </div>
    @endforeach
    {{$empresas->links()}} --}}