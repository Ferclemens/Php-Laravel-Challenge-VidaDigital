@csrf
<div class="row my-4">
    <div class="col-sm-6">
        <label for="InputNombre" class="form-label">Nombre de la sucursal</label>
        <input type="text" name='nombre' id='InputNombre' class="form-control" placeholder="Ingrese nombre de sucursal" value="{{ old('nombre', $sucursal->nombre)}}">
    </div>
    <div class="col-sm-6"></div>
    <div class="col-sm-6">
        <label for="InputDireccion" class="form-label">Dirección</label>
        <input type="text" name='direccion' id='InputDireccion' class="form-control" placeholder="Ingrese dirección" value="{{ old('direccion', $sucursal->direccion)}}">
    </div>
    <div class="col-sm-6">
        <label for="InputEmail" class="form-label">E-mail</label>
        <input type="text" name='email' id='InputEmail' class="form-control" placeholder="Ingrese e-mail" value="{{ old('email', $sucursal->email)}}">
    </div>
    <div class="col-sm-6">
        <label for="InputTelefono" class="form-label">Teléfono</label>
        <input type="number" name='telefono' id='InputTelefono' class="form-control" placeholder="Ingrese teléfono" value="{{ old('telefono', $sucursal->telefono)}}">
    </div>
    <div class="col-sm-6">
        <label for="SelectEmpresa" class="form-label">Empresa</label>
        <select name='id_empresa' id='SelectEmpresa' class="form-select">
            @foreach ($empresas as $empresa)
                <option value="{{$empresa->id}}" {{old('id_empresa',$sucursal->id_empresa) == $empresa->id ? 'selected' : ''}}>{{$empresa->nombre}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-12 text-center mt-4">
        <button type="submit" class="btn px-5 button__general">Guardar</button>
        <a href="{{ route('welcome')}}" class="btn button__general">Volver</a>
    </div>
</div>