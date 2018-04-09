@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('crearProceso') }}">
    {{ csrf_field() }}
        <div class="row justify-content-center">
            <div class="col-md-8">

                        <button class="btn btn-primary">Iniciar Nuevo Proceso</button>

                        
                
            </div>
        </div>
    </form>
    @foreach($procesos as $proceso)

                                <div class="row">
                                    <div class="col-md-6">
                                    {{ csrf_field() }}
                                        <a href="{{ route('proceso', $proceso->id) }}">{{ $proceso->user_id }}</a>
                                    </div>
                                </div>
                        
    @endforeach
</div>
@endsection