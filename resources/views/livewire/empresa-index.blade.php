<div>
    <div>
        <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="Buscar" wire:model="busqueda">
        </div>
        @foreach ($empresas as $empresa)
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
    </div>
    {{$empresas->links()}}
</div>
{{-- <table class="table table-stripped table-hover">
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
                    <div class="col-sm-12">
                        <form action="{{ route('empresa.destroy', $empresa)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                        </form>    
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table> --}}
