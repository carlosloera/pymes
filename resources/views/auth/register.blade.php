@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Register</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="idMatricula" class="col-md-4 col-form-label text-md-right">Matricula</label>

                            <div class="col-md-6">
                                <input id="idMatricula" type="text" class="form-control{{ $errors->has('idMatricula') ? ' is-invalid' : '' }}" name="idMatricula" value="{{ old('idMatricula') }}" required autofocus>

                                @if ($errors->has('idMatricula'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('idMatricula') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ old('nombre') }}" required autofocus>

                                @if ($errors->has('nombre'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="apellidoP" class="col-md-4 col-form-label text-md-right">Apellido Paterno</label>

                            <div class="col-md-6">
                                <input id="apellidoP" type="text" class="form-control{{ $errors->has('apellidoP') ? ' is-invalid' : '' }}" name="apellidoP" value="{{ old('apellidoP') }}" required autofocus>

                                @if ($errors->has('apellidoP'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('apellidoP') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="apellidoM" class="col-md-4 col-form-label text-md-right">Apellido Materno</label>

                            <div class="col-md-6">
                                <input id="apellidoM" type="text" class="form-control{{ $errors->has('apellidoM') ? ' is-invalid' : '' }}" name="apellidoM" value="{{ old('apellidoM') }}" required autofocus>

                                @if ($errors->has('apellidoM'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('apellidoM') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="idRole" class="col-md-4 col-form-label text-md-right">Rol</label>

                            <div class="col-md-6">
                                <input id="idRole" type="text" class="form-control{{ $errors->has('idRole') ? ' is-invalid' : '' }}" name="idRole" value="{{ old('idRole') }}" required autofocus>

                                @if ($errors->has('idRole'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('idRole') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contrasena" class="col-md-4 col-form-label text-md-right">Contraseña</label>

                            <div class="col-md-6">
                                <input id="contrasena" type="password" class="form-control{{ $errors->has('contrasena') ? ' is-invalid' : '' }}" name="contrasena" required>

                                @if ($errors->has('contrasena'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('contrasena') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contrasena-confirm" class="col-md-4 col-form-label text-md-right">Confirmar Contraseña</label>

                            <div class="col-md-6">
                                <input id="contrasena-confirm" type="password" class="form-control" name="contrasena_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
