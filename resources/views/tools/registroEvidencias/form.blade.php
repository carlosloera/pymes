@extends('proceso')


@section('herramientas')

    <div class="container">
    <form action="{{ route('crearRegistro') }}" method="POST" id="form">
    @csrf
    <div class="form-row">
        <div class="col-xs-12 col-md-6">

            <div class="alert alert-dark" role="alert">
                <h4 class="alert-heading">CÉDULA PARA LA DETECCION Y REGISTRO DE HALLAZGOS Y EVIDENCIAS</h4>
                <br>
                <br>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"> Area Evaluada:</div>
                    </div>
                    <input type="text" name="area" value="{{ $registro->area }}" class="form-control" id="inlineFormInputGroupUsername2" >
                </div>

                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"> Etapa o Elemento:</div>
                    </div>
                    <input type="text" name="etapa_elemento" value="{{ $registro->etapa_elemento }}" class="form-control" id="inlineFormInputGroupUsername2" >
                </div>

            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"> Fecha:</div>
                </div>
                <input type="date" name="fecha" value="{{ $registro->fecha }}" class="form-control" id="inlineFormInputGroupUsername2" >
            </div>


            <div class="row">
                <div class="col input-group mb-2 ">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Pagina:</div>
                    </div>
                    <input type="number" name="pagina1" value="{{ $registro->pagina1 }}" class="form-control" id="inlineFormInputGroupUsername2" >
                </div>

                <div class="col input-group mb-2  ">
                    <div class="input-group-prepend">
                        <div class="input-group-text"> De:</div>
                    </div>
                    <input type="number" name="pagina1_de" value="{{ $registro->pagina1_de }}" class="form-control" id="inlineFormInputGroupUsername2" >
                </div>
            </div>

            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"> Sustituye A:</div>
                </div>
                <input type="text" name="sustituye_a" value="{{ $registro->sustituye_a }}" class="form-control" id="inlineFormInputGroupUsername2" >
            </div>


            <div class="row">
                <div class="col input-group mb-2 ">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Pagina:</div>
                    </div>
                    <input type="number" name="pagina2" value="{{ $registro->pagina2 }}" class="form-control" id="inlineFormInputGroupUsername2" >
                </div>

                <div class="col input-group mb-2  ">
                    <div class="input-group-prepend">
                        <div class="input-group-text"> De:</div>
                    </div>
                    <input type="number" name="pagina2_de" value="{{ $registro->pagina2_de }}" class="form-control" id="inlineFormInputGroupUsername2" >
                </div>
            </div>


            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"> fecha:</div>
                </div>
                <input type="date" name="fecha2" value="{{ $registro->fecha2 }}" class="form-control" id="inlineFormInputGroupUsername2" >
            </div>
        </div>


        <div class="col-xs-12">

                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"> Numero:</div>
                    </div>
                    <input type="number" name="numero" value="{{ $registro->numero }}" class="form-control" id="inlineFormInputGroupUsername2" >
                </div>
        </div>

        <div class="col-md-12">
            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <br>
                    <br>
                    <label for="validationDefault01">Hallazgo</label>
                    <textarea type="text" class="form-control" id="textareaHallazgo" contentEditable="true" 
                  style=" word-break: keep-all;"   placeholder="Anotar el comportamiento de un rubro especÍfico en relación con el indicador."  required rows="15" col="8" name="hallazgo" > {{ $registro->hallazgo }} </textarea>
                </div>
                <div class="col-md-3 mb-3">
                    <br>
                    <br>
                    <label for="validationDefault01">Evidencia </label>
                    <textarea type="text" class="form-control" id="textarea" 
                    placeholder="Anotar el nombre del documento y fuente de información."  required rows="15" name="evidencias"> {{ $registro->evidencias }} </textarea>                
                    
                </div>
                <div class="col-md-3 mb-3">
                    <br>
                    <br>
                    <label for="validationDefault01">Aspectos Solidos</label>
                    <textarea type="text" class="form-control" id="textarea" 
                    placeholder="Relación de las funciones, actividades u operaciones de un desempeño adecuado." 
                     required rows="15" name="aspectos_solidos"> {{ $registro->aspectos_solidos }} </textarea>
                </div>
                <div class="col-md-3 mb-3">
                    <br>
                    <br>
                    <label for="validationDefault01">Aspectos Para Mejorar</label>
                    <textarea type="text" class="form-control" id="textareaAspectos" 
                    placeholder="Relación de las actividades u operaciones que puedan ser objeto de mejora" 
                     required rows="15" name="aspectos_mejorar">{{ $registro->aspectos_mejorar }}</textarea>
                </div>
            </div>    
        </div>
        
        

        <div class="col-md-12 ">   
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text"> Observaciones:</div>
                    </div>
                    <input type="text" class="form-control" id="inlineFormInputGroupUsername2" name="observaciones" value="{{ $registro->observaciones }}"  >
                </div>
        </div>  
            <div class="form-row col-md-12">
                    <div class="col-md-6">
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text"> Elaboro:</div>
                            </div>
                            <input type="text" name="elabora" value="{{ $registro->elabora }}" class="form-control" id="inlineFormInputGroupUsername2" >
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text"> Autorizo:</div>
                            </div>
                            <input type="text" name="autorizo" value="{{ $registro->autorizo }}" class="form-control" id="inlineFormInputGroupUsername2" >
                        </div>
                    </div>
                    <input type="hidden" value="{{ $registro->process_id }}" name="process_id">
            </div>


            <div class="row">
            <button type="submit" class="btn btn-danger " id="registrar" >
                                    Guardar
                                </button>
                <div class="col-md-3">
                    <!--<a class="btn btn-success" href="{{ route('pdfRegistro', $registro->process_id) }}">Imprimir</a>-->
                    <button id="pdf" class="btn btn-danger" >pasar a pdf</button>
                </div>    
            </div>


    </form>
    
    
    </div>
    <br>
<div class="row">
            <!--<a class="btn btn-success" href="{{ route('proceso',   $registro->process_id) }}">Regresar</a>-->
</div>

 @endsection