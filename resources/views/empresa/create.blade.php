@extends('tema.app')

@section('title','Create Empresa')

@section('content')
    <h3  class="my-3">
        Registrar Empresa
    </h3>
    <form action="javascript:void(0);">
        <div class="row my-4">
            <div class="col-sm-12">
                <label for="InputNombre" class="form-label">Nombre de la empresa</label>
                <input type="text" name='nombre' id='InputNombre' class="form-control" placeholder="Ingrese nombre">
            </div>
            <div class="col-sm-12">
                <label for="InputCuit" class="form-label">CUIT</label>
                <input type="number" name='cuit' id='InputCuit' class="form-control" placeholder="Ingrese CUIT">
            </div>
            <div class="col-sm-12">
                <label for="InputDireccion" class="form-label">Dirección</label>
                <input type="text" name='direccion' id='InputDireccion' class="form-control" placeholder="Ingrese dirección">
            </div>
            <div class="col-sm-12">
                <label for="InputEmail" class="form-label">E-mail</label>
                <input type="text" name='email' id='InputEmail' class="form-control" placeholder="Ingrese e-mail">
            </div>
            <div class="col-sm-12">
                <label for="InputTelefono" class="form-label">Teléfono</label>
                <input type="number" name='telefono' id='InputTelefono' class="form-control" placeholder="Ingrese teléfono">
            </div>
            <div class="col-sm-12 text-center my-2">
                <button type="submit" class="btn px-5 btn-primary">Guardar</button>
            </div>
        </div>
    </form>
@endsection