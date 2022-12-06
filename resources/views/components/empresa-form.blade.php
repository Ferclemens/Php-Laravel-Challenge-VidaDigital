@csrf
<div class="row my-4">
    <div class="col-sm-12">
        <label for="InputNombre" class="form-label">Nombre de la empresa</label>
        <input type="text" name='nombre' id='InputNombre' class="form-control" placeholder="Ingrese nombre" value="{{ old('nombre', $empresa->nombre)}}">
    </div>
    <div class="col-sm-12">
        <label for="InputCuit" class="form-label">CUIT</label>
        <input type="number" name='cuit' id='InputCuit' class="form-control" placeholder="Ingrese CUIT" value="{{ old('cuit', $empresa->cuit)}}">
    </div>
    <div class="col-sm-12">
        <label for="InputDireccion" class="form-label">Dirección</label>
        <input type="text" name='direccion' id='InputDireccion' class="form-control" placeholder="Ingrese dirección" value="{{ old('direccion', $empresa->direccion)}}">
    </div>
    <div class="col-sm-12">
        <label for="InputEmail" class="form-label">E-mail</label>
        <input type="text" name='email' id='InputEmail' class="form-control" placeholder="Ingrese e-mail" value="{{ old('email', $empresa->email)}}">
    </div>
    <div class="col-sm-12">
        <label for="InputTelefono" class="form-label">Teléfono</label>
        <input type="number" name='telefono' id='InputTelefono' class="form-control" placeholder="Ingrese teléfono" value="{{ old('telefono', $empresa->telefono)}}">
    </div>
    <div class="col-sm-12 text-center my-2">
        <button type="submit" class="btn px-5 btn-primary">Guardar</button>
    </div>
</div>