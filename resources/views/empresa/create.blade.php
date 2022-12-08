@extends('tema.app')

@section('title','Create Empresa')

@section('content')
    <h3  class="my-3">
        Registrar Empresa
    </h3>
    <form class="form__empresa__container" action="{{ route('empresa.store') }}" method="POST">
        <x-empresa-form/>
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