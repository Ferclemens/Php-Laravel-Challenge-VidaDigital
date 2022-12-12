@csrf
<div class="row my-4">
    <div class="col-sm-6">
        <label for="InputNombre" class="form-label">Nombre de la empresa</label>
        <input type="text" name='nombre' id='InputNombre' class="form-control" placeholder="Ingrese nombre" value="{{ old('nombre', $empresa->nombre)}}">
    </div>
    <div class="col-sm-6"></div>
    <div class="col-sm-6">
        <label for="InputCuit" class="form-label">CUIT</label>
        <input type="number" name='cuit' id='InputCuit' class="form-control" placeholder="Ingrese CUIT" value="{{ old('cuit', $empresa->cuit)}}">
    </div>
    <div class="col-sm-6">
        <label for="InputDireccion" class="form-label">Dirección</label>
        <input type="text" name='direccion' id='InputDireccion' class="form-control" placeholder="Ingrese dirección" value="{{ old('direccion', $empresa->direccion)}}">
    </div>
    <div class="col-sm-6">
        <label for="InputEmail" class="form-label">E-mail</label>
        <input type="text" name='email' id='InputEmail' class="form-control" placeholder="Ingrese e-mail" value="{{ old('email', $empresa->email)}}">
    </div>
    <div class="col-sm-6">
        <label for="InputTelefono" class="form-label">Teléfono</label>
        <input type="number" name='telefono' id='InputTelefono' class="form-control" placeholder="Ingrese teléfono" value="{{ old('telefono', $empresa->telefono)}}">
    </div>
    <div class="col-sm-12 text-center mt-4">
        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn px-5 button__general">Guardar</button>
        <a href="{{ route('welcome')}}" class="btn button__general">Volver</a>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿Guardar los cambios?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn button__general" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-success">Guardar</button>
        </div>
        </div>
    </div>
</div>