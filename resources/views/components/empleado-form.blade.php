@csrf
<div class="row my-3">
    <div class="col-sm-6">
        <label for="InputNombre" class="form-label">Nombre</label>
        <input type="text" name='nombre' id='InputNombre' class="form-control" placeholder="Ingrese nombre" value="{{ old('nombre', $empleado->nombre)}}">
    </div>
    <div class="col-sm-6">
        <label for="InputApellido" class="form-label">Apellido</label>
        <input type="text" name='apellido' id='InputApellido' class="form-control" placeholder="Ingrese apellido" value="{{ old('apellido', $empleado->apellido)}}">
    </div>
    <div class="col-sm-6">
        <label for="InputDireccion" class="form-label">Dirección</label>
        <input type="text" name='direccion' id='InputDireccion' class="form-control" placeholder="Ingrese dirección" value="{{ old('direccion', $empleado->direccion)}}">
    </div>
    <div class="col-sm-6">
        <label for="InputEmail" class="form-label">E-mail</label>
        <input type="text" name='email' id='InputEmail' class="form-control" placeholder="Ingrese e-mail" value="{{ old('email', $empleado->email)}}">
    </div>
    <div class="col-sm-6">
        <label for="InputDni" class="form-label">DNI</label>
        <input type="number" name='dni' id='InputDni' class="form-control" placeholder="Ingrese DNI" value="{{ old('dni', $empleado->dni)}}">
    </div>
    <div class="col-sm-6">
        <label for="InputTelefono" class="form-label">Teléfono</label>
        <input type="number" name='telefono' id='InputTelefono' class="form-control" placeholder="Ingrese teléfono" value="{{ old('telefono', $empleado->telefono)}}">
    </div>
    <div class="col-sm-4">
        <label for="InputFechaNacimiento" class="form-label">Fecha de nacimiento</label>
        <input type="date" name="fecha_nacimiento" id="InputFechaNacimiento" class="form-control" value="{{ old('fecha_nacimiento', $empleado->fecha_nacimiento)}}">
    </div>
    <div class="col-sm-4">
        <label for="InputFechaIngreso" class="form-label">Fecha de ingreso</label>
        <input type="date" name="fecha_ingreso" id="InputFechaIngreso" class="form-control" value="{{ old('fecha_ingreso', $empleado->fecha_ingreso)}}">
    </div>
    <div class="col-sm-4">
        <label for="SelectSucursal" class="form-label">Sucursal</label>
        <select name='id_sucursal' id='SelectSucursal' class="form-select">
            @foreach ($sucursales as $sucursal)
                <option value="{{$sucursal->id}}" {{old('id_sucursal', $empleado->id_sucursal) == $sucursal->id ? 'selected' : ''}}>{{$sucursal->nombre}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-6">
        <label for="InputCargo" class="form-label">Cargo</label>
        <input type="text" name='cargo' id='InputCargo' class="form-control" placeholder="Ingrese cargo" value="{{ old('cargo', $empleado->cargo)}}">
    </div>
    <div class="col-sm-6">
        <label for="InputSueldo" class="form-label">Sueldo</label>
        <input type="number" name='sueldo' id='InputSueldo' class="form-control" placeholder="Ingrese Sueldo" value="{{ old('sueldo', $empleado->sueldo)}}">
    </div>
    <div class="col-sm-12 text-center mt-3">
        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn px-5 button__general">Guardar</button>
        <a href="{{ route('welcome')}}" class="btn button__general">Volver</a>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal__content">
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
