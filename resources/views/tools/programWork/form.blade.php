@extends('proceso')

@section('herramientas')


<div class="container">
     

    <form action="{{ route('crearWork') }}" method="POST" id="form">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                <input type="text" name="area" value="{{ $work->area }}" class="form-control" id="inlineFormInputGroupUsername2" required>
            </div>
    
        </div>
        <div class="col-xs-12 col-md-4">
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                <div class="input-group-text"> Inicio:</div>
                </div>
                <input type="date" name="inicio" value="{{ $work->inicio }}" class="form-control" id="inlineFormInputGroupUsername2" required>
            </div>
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                <div class="input-group-text">Suspencion:</div>
                </div>
                <input type="date" name="suspencion" value="{{ $work->suspencion }}" class="form-control" id="inlineFormInputGroupUsername2" required>
            </div>
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                <div class="input-group-text">Reinicio:</div>
                </div>
                <input type="date" name="reinicio" value="{{ $work->reinicio }}" class="form-control" id="inlineFormInputGroupUsername2" required>
            </div>
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                <div class="input-group-text">Responsable:</div>
                </div>
                <input type="text" name="responsable" value="{{ $work->responsable }}" class="form-control" id="inlineFormInputGroupUsername2" required>
            </div>
        </div>
        <div class="col-xs-12 col-md-4">
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                <div class="input-group-text">Terminacion:</div>
                </div>
                <input type="date" name="terminacion" value="{{ $work->terminacion }}" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username" required>
            </div>
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                <div class="input-group-text">Cancelacion:</div>
                </div>
                <input type="date" name="cancelacion" value="{{ $work->cancelacion }}" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username" required>
            </div>
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                <div class="input-group-text">Terminacion:</div>
                </div>
                <input type="date" name="terminacion2" value="{{ $work->terminacion2 }}" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username" required>
            </div>
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                <div class="input-group-text">Clave:</div>
                </div>
                <input type="text" name="clave" value="{{ $work->clave }}"   class="form-control" id="inlineFormInputGroupUsername2" placeholder="Clave" required>
            </div>
        </div>
    </div>
   

    <hr>

    <table class="table  table-bordered">
    <thead>
        <tr>
            <th scope="col"  rowspan="3" colspan="1">Numero</th>
            <th scope="col" rowspan="3"  >Actividad</th>
            <th scope="col" rowspan="3"  >Responsable Especifico</th>
            
            
            <th colspan="6">Duracion</th>
            
        </tr>    
        <tr>
            <th colspan="6">Mes</th>
           
        </tr> 
        <tr>
            <th colspan="1">Semana</th>
            <th colspan="1">        </th>
            <th colspan="1">        </th>
            <th colspan="1">        </th>
            <th colspan="1">        </th>
            <th colspan="2">        </th>
        </tr>
           
        
        

    </thead>
    <tbody id="dynamic_field">
            @php
                $i = 1;
            @endphp
        @foreach($worknum as $num)
            
            <tr id="addr"+{{ $i }}>
            <th scope="row">{{ $i }}</th>
                <td><input type="text" class="form-control" name="actividad[]" value="{{ $num->actividad }}"  id="actividad" required> </td>
                <td><input type="text" class="form-control" name="responsable_especifico[]" value="{{ $num->responsable }}" required></td>
                <td><input type="text" class="form-control" name="semana[]" value="{{ $num->semana }}" required></td>
                <td><input type="text" class="form-control" name="semana1[] " value="{{ $num->semana1 }}"></td>
                <td><input type="text" class="form-control" name="semana2[]" value="{{ $num->semana2 }}"></td>
                <td><input type="text" class="form-control" name="semana3[]" value="{{ $num->semana3 }}"></td>
                <td><input type="text" class="form-control" name="semana4[]" value="{{ $num->semana4 }}"></td>
                <td>
                    <button id="actualizar{{ $i }}" type="button" class="actualizar btn btn-danger"><i class=" fas fa-edit"></i></button>
                    <br>
                    <button id="eliminarFila{{ $i }}" type="button" class="eliminarFila btn btn-danger" style="margin-top:5px;"><i class=" fas fa-trash-alt"></i></button>
                    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="mi-modal">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                        <div class="modal-header">
                            
                            <h4 class="modal-title" id="myModalLabel">Eliminar esta fila?</h4>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" id="modal-btn-si">Si</button>
                            <button type="button" class="btn btn-primary" id="modal-btn-no">No</button>
                        </div>
                        </div>
                    </div>
                    </div>
                    <input id="identificadorFila_{{ $i }}" type="hidden" value="{{ $num->id }}">
                
                
                
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
                <!--<button id="eliminar" type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i> Eliminar Fila</button>--> 
        </div>
    </div>
    <h1></h1>
   
        <div >
            <div class="col-xs-12 ">   
            <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text"> Observaciones:</div>
                    </div>
                    <input type="text" name="observaciones" value="{{ $work->observaciones }}" class="form-control" id="inlineFormInputGroupUsername2" required >
                </div>
            </div>  
            <div class="form-row">
                    <div class="col-md-4">
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text"> Elaboro:</div>
                            </div>
                            <input type="text" name="elaboro" value="{{ $work->elaboro }}" class="form-control" id="inlineFormInputGroupUsername2" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text"> Reviso:</div>
                            </div>
                            <input type="text" name="reviso" value="{{ $work->reviso }}" class="form-control" id="inlineFormInputGroupUsername2" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text"> Autorizo:</div>
                            </div>
                            <input type="text" name="autorizo" value="{{ $work->autorizo }}" class="form-control" id="inlineFormInputGroupUsername2" required>
                        </div>
                    </div>
               
            </div>

            <input type="hidden" value="{{ $work->process_id }}" name="process_id">
            <input type="hidden" id="idPrograma" type="text" value="{{ $work->id }}">
        </div>
        <div class="row">
            <button type="submit" class="btn btn-danger " id="registrar" >
                Guardar
            </button>
            <div class="col-md-3">
                <button id="pdfwork" type="button" class="btn btn-danger" >Pasar a pdf</button>
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
<srcript>

</srcript>
@endsection