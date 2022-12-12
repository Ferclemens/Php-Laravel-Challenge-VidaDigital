@extends('tema.app')

@section('title','Create Sucursal')

@section('content')
    <h3  class="mb-4">
        Registrar Sucursal
    </h3>
    <form action="{{ route('sucursal.store') }}" method="POST">
        <x-sucursal-form/>
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