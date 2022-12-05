@extends('tema.app')

@section('title','Create Empleado')

@section('content')
    <h3 class="my-3">
        Registrar Empleado
    </h3>
    <form action="{{ route('empleado.store') }}" method="POST">
        @csrf
        <div class="row my-2">
            <div class="col-sm-12">
                <label for="InputNombre" class="form-label">Nombre</label>
                <input type="text" name='nombre' id='InputNombre' class="form-control" placeholder="Ingrese nombre" value="{{ old('nombre')}}">
            </div>
            <div class="col-sm-12">
                <label for="InputApellido" class="form-label">Apellido</label>
                <input type="text" name='apellido' id='InputApellido' class="form-control" placeholder="Ingrese apellido" value="{{ old('apellido')}}">
            </div>
            <div class="col-sm-12">
                <label for="InputDireccion" class="form-label">Dirección</label>
                <input type="text" name='direccion' id='InputDireccion' class="form-control" placeholder="Ingrese dirección" value="{{ old('direccion')}}">
            </div>
            <div class="col-sm-12">
                <label for="InputEmail" class="form-label">E-mail</label>
                <input type="text" name='email' id='InputEmail' class="form-control" placeholder="Ingrese e-mail" value="{{ old('email')}}">
            </div>
            <div class="col-sm-6">
                <label for="InputDni" class="form-label">DNI</label>
                <input type="number" name='dni' id='InputDni' class="form-control" placeholder="Ingrese DNI" value="{{ old('dni')}}">
            </div>
            <div class="col-sm-6">
                <label for="InputTelefono" class="form-label">Teléfono</label>
                <input type="number" name='telefono' id='InputTelefono' class="form-control" placeholder="Ingrese teléfono" value="{{ old('telefono')}}">
            </div>
            <div class="col-sm-6">
                <label for="InputFechaNacimiento" class="form-label">Fecha de nacimiento</label>
                <input type="date" name="fecha_nacimiento" id="InputFechaNacimiento" class="form-control" value="{{ old('fecha_nacimiento')}}">
            </div>
            <div class="col-sm-6">
                <label for="InputFechaIngreso" class="form-label">Fecha de ingreso</label>
                <input type="date" name="fecha_ingreso" id="InputFechaIngreso" class="form-control" value="{{ old('fecha_ingreso')}}">
            </div>
            <div class="col-sm-6">
                <label for="InputCargo" class="form-label">Cargo</label>
                <input type="text" name='cargo' id='InputCargo' class="form-control" placeholder="Ingrese cargo" value="{{ old('cargo')}}">
            </div>
            <div class="col-sm-6">
                <label for="InputSueldo" class="form-label">Sueldo</label>
                <input type="number" name='sueldo' id='InputSueldo' class="form-control" placeholder="Ingrese Sueldo" value="{{ old('sueldo')}}">
            </div>
            <div class="col-sm-12 text-center my-2">
                <button type="submit" class="btn px-5 btn-primary">Guardar</button>
            </div>
        </div>
    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection