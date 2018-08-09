@extends('proceso')


@section('herramientas')

    <div class="container">
   
    <form action="{{ route('crearAnalisis') }}" method="POST" id="form">
    @csrf
    
    <div class="form-row">
        <div class="col-xs-12 col-md-6">

            <div class="alert alert-dark" role="alert">
                <h4 class="alert-heading">CÉDULA DE ANÁLISIS DOCUMENTAL</h4>
                <br>
                <br>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"> Area:</div>
                    </div>
                    <input type="text" name="area" value="{{ $analisis->area }}" class="form-control" id="inlineFormInputGroupUsername2" required>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6">
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"> Fecha:</div>
                </div>
                <input type="date" name="fecha" value="{{ $analisis->fecha }}" class="form-control" id="inlineFormInputGroupUsername2" required>
            </div>

            <div class="row">
                <div class="col input-group mb-2 ">
                    <div class="input-group-prepend">
                        <div class="input-group-text"> Numero de hoja:</div>
                    </div>
                    <input type="number" name="num_hoja" value="{{ $analisis->num_hoja }}" class="form-control" id="inlineFormInputGroupUsername2" required>
                </div>

                <div class="col input-group mb-2 ">
                    <div class="input-group-prepend">
                        <div class="input-group-text"> De:</div>
                    </div>
                    <input type="number" name="num_hoja_de" value="{{ $analisis->num_hoja_de }}" class="form-control" id="inlineFormInputGroupUsername2" required>
                </div>
            </div>


            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"> Responsable:</div>
                </div>
                <input type="text" name="responsable" value="{{ $analisis->responsable }}" class="form-control" id="inlineFormInputGroupUsername2" required>
            </div>

            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"> Funcion:</div>
                </div>
                <input type="text" name="funcion" value="{{ $analisis->funcion }}" class="form-control" id="inlineFormInputGroupUsername2" required>
            </div>
        </div>
        
        <div class="col-md-12">
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <br>
                    <br>
                    <label for="validationDefault01">Documento</label>
                    <textarea type="text" name="documento" value="{{ $analisis->documento }}" class="form-control" id="textarea" contentEditable="true" 
                    placeholder="Especificaciones del nombre del documento, datos básicos,contenido, responsable de su elaboración y fuente de consulta."  required rows="15">{{ $analisis->documento }}</textarea>
                </div>
                <div class="col-md-4 mb-3">
                    <br>
                    <br>
                    <label for="validationDefault01">Resultados del analisis</label>
                    <textarea type="text" class="form-control" id="textarea" name="resultados_analisis" value="{{ $analisis->resultados_analisis }}"
                    placeholder="Anotar las observaciones de los puntos revisados siguiendo las señales del documento a jerarquía de los puntos críticos."  required rows="15"> {{ $analisis->resultados_analisis }} </textarea>                
                    
                </div>
                <div class="col-md-4 mb-3">
                    <br>
                    <br>
                    <label for="validationDefault01">Propuesta</label>
                    <textarea type="text" class="form-control" id="textarea"  name="propuesta" value="{{ $analisis->propuesta }}"
                    placeholder="Anotar los criterios y/o recomendaciones que se formulen." 
                     required rows="15">{{ $analisis->propuesta }}</textarea>
                </div>
            </div>    
        </div>
        
        

        <div class="col-md-12 ">   
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text"> Observaciones:</div>
                    </div>
                    <input type="text" class="form-control" name="observaciones" value="{{ $analisis->observaciones }}" id="inlineFormInputGroupUsername2" required>
        </div>

    </div>  
            <div class="form-row col-md-12">
                    <div class="col-md-6">
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text"> Elaboro:</div>
                            </div>
                            <input type="text" name="elabora" class="form-control" value="{{ $analisis->elabora }}" id="inlineFormInputGroupUsername2" required>
                        </div>
                    </div>

                

                    <div class="col-md-6">
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text"> Autorizo:</div>
                            </div>
                            <input type="text" class="form-control" id="inlineFormInputGroupUsername2" name="autorizo" value="{{ $analisis->autorizo }}" required>
                        </div>
                    </div>
               
                    <input type="hidden" value="{{ $analisis->process_id }}" name="process_id">
            </div>

            <div class="row">
                <button type="submit" id="registrar" class="btn btn-danger " >
                Guardar
                                    </button>
                    <div class="col-md-3">
                        <!--<a class="btn btn-success" href="{{ route('pdfAnalisis', $analisis->process_id) }}">Imprimir</a>-->
                        <button id="pdf" class="btn btn-danger" >Pasar a pdf</button>
                    </div>    
            </div>
           


    </form>

        
    </div>
    <br>
<div class="row">
           <!-- <a class="btn btn-success" href="{{ route('proceso',   $analisis->process_id) }}">Regresar</a>-->
</div>
 @endsection