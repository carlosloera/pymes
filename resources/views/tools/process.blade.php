@extends('layouts.app')

@section('content')
<div class="container">
    
    <form method="POST" action="{{ route('crearProceso') }}">
    {{ csrf_field() }}
        <div class="row justify-content-center">
            <div class="col-md-12 ">
                <div class="card w-100">
                    <div class="card-body offset-md-2">
                        @if ( Auth::user()->id_role == "2" )
                        <div class="row">
                            <div class="col-md-3">
                                <button class="btn btn-outline-danger">Iniciar Nuevo Proceso</button>
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" name="nombre_proceso" placeholder="Ingresa el nombre del proceso">
                            </div>  
                        </div>
                        
                        @endif    
                        @if ( Auth::user()->id_role == "1" )
                            <a href="{{ route('questions.index') }}" class="btn btn-outline-danger">Administrar preguntas</a>
                            <a href="{{ route('Administrador') }}" class="btn btn-outline-danger">Administrar Usuarios</a>
                            <a href="{{ route('users.create') }}" class="btn btn-outline-danger">Crear Usuarios</a>
                            <a href="{{ route('indicators.create') }}" class="btn btn-outline-danger"> Indicadores</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </form>
    <br>
    <br>
    @if ( Auth::user()->id_role == "2" )
    <div class="card">
        <div class="card-header">
            <h3>Proceso creados</h3>
        </div>
        <div class="card-body">
        <br>
            @foreach($procesos as $proceso)

                                        <div class="row ">
                                            
                                            <div class="col-md-3">
                                                <h5> {{ $proceso->nombre }}</h5>
                                            </div>

                                            <div class="col-md-6">
                                            {{ csrf_field() }}
                                                
                                                
                                                
                                                    <a href="{{ route('proceso', $proceso->id) }}" class="btn btn-dark">Iniciado {{ $proceso->created_at->toDateString() }}</a>
                                                
                                            </div>
                                           
                                        </div>
                  
                   <hr> 
                   <br>            
            @endforeach
        </div>
    </div>
    <table class="table table-hover">
        <thead class="thead-light">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Fecha</th>
            
            </tr>
        </thead>
        <tbody>
            @foreach($procesos as $proceso)
                <tr>
                <th scope="row">1</th>
                <td> {{ $proceso->nombre }}</td>
                <td>{{ $proceso->created_at->toDateString() }}</td>
                
                </tr>
            @endforeach    
        </tbody>
    </table>
    @endif
</div>
@endsection