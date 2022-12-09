@extends('tema.app')

@section('title','Editar Empleado')

@section('content')
    <h3 class="my-3">
        Editar Empleado ID: <i>{{$empleado->id}}</i> - <i>{{$empleado->nombre}}</i>
    </h3>
    <form action="{{ route('empleado.update', $empleado) }}" method="POST">
        @method('put')
        <x-empleado-form :empleado="$empleado"/>
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