@csrf
<div class="row my-4">
    <div class="col-sm-12">
        <label for="InputNombre" class="form-label">Nombre de la sucursal</label>
        <input type="text" name='nombre' id='InputNombre' class="form-control" placeholder="Ingrese nombre de sucursal" value="{{ old('nombre', $sucursal->nombre)}}">
    </div>
    <div class="col-sm-12">
        <label for="InputDireccion" class="form-label">Dirección</label>
        <input type="text" name='direccion' id='InputDireccion' class="form-control" placeholder="Ingrese dirección" value="{{ old('direccion', $sucursal->direccion)}}">
    </div>
    <div class="col-sm-12">
        <label for="InputEmail" class="form-label">E-mail</label>
        <input type="text" name='email' id='InputEmail' class="form-control" placeholder="Ingrese e-mail" value="{{ old('email', $sucursal->email)}}">
    </div>
    <div class="col-sm-12">
        <label for="InputTelefono" class="form-label">Teléfono</label>
        <input type="number" name='telefono' id='InputTelefono' class="form-control" placeholder="Ingrese teléfono" value="{{ old('telefono', $sucursal->telefono)}}">
    </div>
    <div class="col-sm-12 text-center my-2">
        <button type="submit" class="btn px-5 btn-primary">Guardar</button>
    </div>
</div>