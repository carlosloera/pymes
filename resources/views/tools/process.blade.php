@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('crearProceso') }}">
    {{ csrf_field() }}
        <div class="row justify-content-center">
            <div class="col-md-12 ">
                <div class="card w-100">
                    <div class="card-body offset-md-2">
                        <button class="btn btn-outline-danger">Iniciar Nuevo Proceso</button>
                        <a href="{{ route('questions.index') }}" class="btn btn-outline-danger">Administrar preguntas</a>
                        <a href="{{ route('Administrador') }}" class="btn btn-outline-danger">Administrar Usuarios</a>
                        <a href="{{ route('users.create') }}" class="btn btn-outline-danger">Crear Usuarios</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <br>
    <br>
    <div class="card">
        <div class="card-header">
            <h3>Proceso creados</h3>
        </div>
        <div class="card-body">
        <br>
            @foreach($procesos as $proceso)

                                        <div class="row">
                                            <div class="col-md-6">
                                            {{ csrf_field() }}
                                                <a href="{{ route('proceso', $proceso->id) }}" class="btn btn-dark">Iniciado {{ $proceso->created_at->toDateString() }}</a>
                                            
                                            </div>
                                        </div>
                                
            @endforeach
        </div>
    </div>
</div>
@endsection