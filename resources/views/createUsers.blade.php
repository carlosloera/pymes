@extends('layouts.app')
@section('content')
<div class="container" style="text-align:center">
   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 offset-md-3">
      <div class="card card-default">
      <div class="card-header bg-dark" style="color:white; text-align:center;">Registro</div>
         <br>
         
        <div class="card-body">
         <form method="POST" action="{{route('users.store')}}">
            <div class="form-group row" >
               <label for="lbl_nombre" class="col-md-4 col-form-label text-md-right" >Nombre</label>
               <div class="col-md-8">
                    <input type="text" name="nombre" id="lbl_nombre" class="form-control">
               </div>
            </div>
            
            <div class="form-group row" >
               <label for="lbl_apellidoP" class="col-md-4 col-form-label text-md-right" >Apellido paterno</label>
               <div class="col-md-8">
                    <input type="text" name="apellidoP" id="lbl_apellidoP" class="form-control">
               </div>
            </div>
           
            <div class="form-group row" >
               <label for="lbl_apellidoM" class="col-md-4 col-form-label text-md-right" >Apellido materno</label>
               <div class="col-md-8">
                    <input type="text" name="apellidoM" id="lbl_apellidoM" class="form-control">
               </div>
            </div>
           
            <div class="form-group row" >
               <label for="lbl_email" class="col-md-4 col-form-label text-md-right" >Email</label>
               <div class="col-md-8">
                    <input type="text" name="email" id="lbl_email" class="form-control">
               </div>
            </div>
            
            <div class="form-group row" >
               <label for="lbl_rol" class="col-md-4 col-form-label text-md-right" >Rol</label>
               <div class="col-md-6">
                    <select class="form-control" name="id_role" id="lbl_rol" >
                        <option value="1">Administrador</option>
                        <option value="2">Alumno encargado del equipo</option>
                        <option value="3">Alumno</option>
                    </select>
               </div>
            </div>
            
            <div class="form-group row" >
               <label for="lbl_equipo" class="col-md-4 col-form-label text-md-right" >Equipo</label>
               <div class="col-md-8">
                    <input type="text" name="equipo" id="lbl_equipo" class="form-control" >
               </div>
            </div>
            <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

                        <div class="col-md-8">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar Contraseña</label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
            <br>
            <input type="submit" value="Registrar Usuario" class="btn btn-danger btn-block" method="POST">
            <a href="{{ route('procesos') }}" class="btn btn-danger  btn-block">Cancelar</a>
            {{ csrf_field() }}
         </form>
        </div>
      </div>
   </div>
</div>
@endsection