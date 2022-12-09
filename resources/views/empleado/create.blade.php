@extends('tema.app')

@section('title','Create Empleado')

@section('content')
    <h3 class="my-3">
        Registrar Empleado
    </h3>
    <form action="{{ route('empleado.store') }}" method="POST">
        <x-empleado-form/>
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