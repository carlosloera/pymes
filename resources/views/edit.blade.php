@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div class="container form-group">
         <h2>Editar</h2>
         <form method="POST" action="{{ route('users.update',$user->id )}}">
         {{ method_field('PUT') }}
            <div>
               <label for="lbl_nombre">Nombre </label>
               <input type="text" name="nombre" id="lbl_nombre" class="form-control" value="{{ $user->nombre }}" required>
            </div>
            <div>
               <label for="lbl_apellidoP">Apellido paterno</label>
               <input type="text" name="apellidoP" id="lbl_apellidoP" value="{{ $user->apellidoP }}" class="form-control" required>
            </div>
            <div>
               <label for="lbl_apellidoM">Apellido materno</label>
               <input type="text" name="apellidoM" id="lbl_apellidoM" value="{{ $user->apellidoM }}" class="form-control" required>
            </div>
            <div>
               <label for="lbl_email">Email</label>
               <input type="text" name="email" id="lbl_email" class="form-control" value="{{ $user->email }}" required>
            </div>
            <div>
               <label for="lbl_rol">Rol</label>
               <select class="form-control" name="id_role" id="lbl_rol" >
                @if( $user->id_role == "1" )
                    <option value="1" selected>Admin</option> 
                    <option value="2">Estudiante</option>
                @endif    
                @if( $user->id_role == "2" )
                    <option value="2" selected>Estudiante </option>
                    <option value="1">Admin</option>
                @else
                    <option value="1">Admin</option>
                    <option value="2">Estudiante</option>
                @endif
                
                  
               </select>
            </div>
           <!-- <div class="">
            <label for="password" class=" col-form-label ">Contraseña</label>

            <div class="">
                <input id="password" type="password" value="{{ $user->password }}" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="">
            <label for="password-confirm" class=" col-form-label">Confirmar Contraseña</label>

            <div class="">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>
        </div>
            <!--<div>
               <label for="lbl_equipo">Equipo</label>
               <input type="text" name="equipo" id="lbl_equipo" class="form-control" >
            </div>
            -->
            
            <br>
            <div class="form-group">
                <input type="submit" value="Guardar" class="btn btn-danger btn-block" method="POST">
            </div>
            <div class=" form-group">
						<a class="btn btn-danger btn-block mx-auto"  href="{{ route('Administrador') }}">Cancelar</a>
			</div>
            {{ csrf_field() }}
         </form>
      </div>
   </div>
</div>
</div>
@endsection