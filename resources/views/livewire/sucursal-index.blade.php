<div>
    <div class="col-sm-9">
        <input type="text" class="form-control" placeholder="Buscar" wire:model="busqueda">
    </div>
    <div class="table-responsive">
        <table class="table table-stripped table-hover">
            <thead>
                <tr>
                    <th>
                        Nombre
                    </th>
                    <th>
                        ID Empresa
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
                        {{ $sucursal->id_empresa}}
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
                        <div class="index__actions">
                            <a href="{{route('sucursal.show', $sucursal)}}" ><img src="https://cdn-icons-png.flaticon.com/512/2703/2703438.png" class="mx-2 icon__options"/></a>
                            <a href="{{route('sucursal.edit', $sucursal)}}" ><img src="https://cdn-icons-png.flaticon.com/512/738/738880.png" class="mx-2 icon__options"/></a> 
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$sucursales->links()}}
        <a href="{{ route('welcome')}}" class="btn button__general">Volver</a>
    </div>
</div>


{{--    @foreach ($sucursales as $sucursal)
   <div class="index__container">
       <div class="index__title">
           <strong>Nombre Sucursal: </strong>{{ $sucursal->nombre}}
       </div>
       <div class="index__data">
           <strong>Empresa: </strong>{{  $sucursal->id_empresa }}

           <strong>dirección: </strong>{{ $sucursal->direccion}}
       </div>
       <div class="index__data">
           <strong>Email: </strong>{{ $sucursal->email}}
           <strong>Teléfono: </strong>{{ $sucursal->telefono}}
       </div>
       <div class="index__actions">
           <a href="{{route('sucursal.show', $sucursal)}}" class="btn btn-danger btn-sm index__btn">Ver</a>
           <a href="{{route('sucursal.edit', $sucursal)}}" class="btn btn-danger btn-sm index__btn">Editar</a>
           <form action="{{ route('sucursal.destroy', $sucursal)}}" method="POST" class="index__btn">
               @csrf
               @method('delete')
               <button class="btn btn-danger btn-sm index__btn">Eliminar</button>
           </form>    
       </div>
   </div>
   @endforeach
   {{$sucursales->links()}} --}}