@extends('tema.app')

@section('title','Editar Empresa')

@section('content')
    <h3 class="my-3">
        Editar Empresa ID: <i>{{$empresa->id}}</i> - <i>{{$empresa->nombre}}</i>
    </h3>
    <form action="{{ route('empresa.update', $empresa) }}" method="POST">
        @method('put')
        <x-empresa-form :empresa="$empresa"/>
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