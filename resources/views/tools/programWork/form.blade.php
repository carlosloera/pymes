@extends('proceso')

@section('herramientas')



<div class="container">

    <form action="{{ route('crearWork') }}" method="POST" id="form">
    @csrf
    <div class="form-row">
        <div class="col-xs-12 col-md-4">

        <div class="alert alert-dark" role="alert">
            <h4 class="alert-heading">Programa de trabajo</h4>
            <br>
            
        </div>

           <br>
           
           
           <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                <div class="input-group-text"> Area:</div>
                </div>
                <input type="text" name="area" value="{{ $work->area }}" class="form-control" id="inlineFormInputGroupUsername2" >
            </div>
    
        </div>
        <div class="col-xs-12 col-md-4">
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                <div class="input-group-text"> Inicio:</div>
                </div>
                <input type="date" name="inicio" value="{{ $work->inicio }}" class="form-control" id="inlineFormInputGroupUsername2" >
            </div>
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                <div class="input-group-text">Suspencion:</div>
                </div>
                <input type="date" name="suspencion" value="{{ $work->suspencion }}" class="form-control" id="inlineFormInputGroupUsername2" >
            </div>
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                <div class="input-group-text">Reinicio:</div>
                </div>
                <input type="date" name="reinicio" value="{{ $work->reinicio }}" class="form-control" id="inlineFormInputGroupUsername2" >
            </div>
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                <div class="input-group-text">Responsable:</div>
                </div>
                <input type="text" name="responsable" value="{{ $work->responsable }}" class="form-control" id="inlineFormInputGroupUsername2" >
            </div>
        </div>
        <div class="col-xs-12 col-md-4">
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                <div class="input-group-text">Terminacion:</div>
                </div>
                <input type="date" name="terminacion" value="{{ $work->terminacion }}" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
            </div>
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                <div class="input-group-text">Cancelacion:</div>
                </div>
                <input type="date" name="cancelacion" value="{{ $work->cancelacion }}" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
            </div>
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                <div class="input-group-text">Terminacion:</div>
                </div>
                <input type="date" name="terminacion2" value="{{ $work->terminacion2 }}" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
            </div>
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                <div class="input-group-text">Clave:</div>
                </div>
                <input type="text" name="clave" value="{{ $work->clave }}"   class="form-control" id="inlineFormInputGroupUsername2" placeholder="Clave">
            </div>
        </div>
    </div>
   

    <hr>

    <table class="table  table-bordered">
    <thead>
        <tr>
            <th scope="col"  rowspan="3" >Numero</th>
            <th scope="col" rowspan="3"  >Actividad</th>
            <th scope="col" rowspan="3"  >Responsable Especifico</th>
            
            
            <th colspan="5">Duracion</th>
            
        </tr>    
        <tr>
            <th colspan="5">Mes</th>
           
        </tr> 
        <tr>
            <th colspan="1">Semana</th>
            <th colspan="1">        </th>
            <th colspan="1">        </th>
            <th colspan="1">        </th>
            <th colspan="1">        </th>
            
        </tr>
           
        
        

    </thead>
    <tbody id="dynamic_field">
            @php
                $i = 1;
            @endphp
        @foreach($worknum as $num)
            
            <tr id="addr"+{{ $i }}>
            <th scope="row">{{ $i }}</th>
                <td><input type="text" name="actividad[]" value="{{ $num->actividad }}"  id="actividad"> </td>
                <td><input type="text" name="responsable_especifico[]" value="{{ $num->responsable }}"></td>
                <td><input type="text" name="semana[]"></td>
                <td><input type="checkbox" name="semana1[]"></td>
                <td><input type="checkbox" name="semana2[]"></td>
                <td><input type="checkbox" name="semana3[]"></td>
                <td><input type="checkbox" name="semana4[]"></td>
            
                
            </tr>
            @php
                $i += 1;
            @endphp
        @endforeach
       
        
    </tbody>
    
    </table>
    <div class="row">
        <div class="col-md-1 offset-md-8">
                <button type="button" class="btn btn-danger" id="agregar"><i class="fas fa-plus-circle"></i> Agregar Fila</button>
                
            <!--<a class="btn btn-success" href="{{ route('pdfWork', $work->process_id) }}">Imprimir</a>-->
        </div>
        <div class="col-md-1 offset-md-1">
                <button id="eliminar" type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i> Eliminar Fila</button> 
        </div>
    </div>
    <h1></h1>
   
        <div >
            <div class="col-xs-12 ">   
            <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text"> Observaciones:</div>
                    </div>
                    <input type="text" name="observaciones" value="{{ $work->observaciones }}" class="form-control" id="inlineFormInputGroupUsername2" >
                </div>
            </div>  
            <div class="form-row">
                    <div class="col-md-4">
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text"> Elaboro:</div>
                            </div>
                            <input type="text" name="elaboro" value="{{ $work->elaboro }}" class="form-control" id="inlineFormInputGroupUsername2" >
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text"> Reviso:</div>
                            </div>
                            <input type="text" name="reviso" value="{{ $work->reviso }}" class="form-control" id="inlineFormInputGroupUsername2" >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text"> Autorizo:</div>
                            </div>
                            <input type="text" name="autorizo" value="{{ $work->autorizo }}" class="form-control" id="inlineFormInputGroupUsername2" >
                        </div>
                    </div>
               
            </div>

            <input type="hidden" value="{{ $work->process_id }}" name="process_id">

        </div>
        <div class="row">
            <button type="submit" class="btn btn-danger " id="registrar" >
                Guardar
            </button>
            <div class="col-md-3">
                <button id="pdfwork" class="btn btn-danger" id="imprimir">pasar a pdf</button>
            </div>   
        </div>

    </form>
    <div class="row">
        
       
    </div>
</div>
<br>
<div class="row">
           <!-- <a class="btn btn-success" href="{{ route('proceso',   $work->process_id) }}">Regresar</a>-->
</div>
@endsection