@extends('proceso')


@section('herramientas')

    <div class="container">
    <form action="{{ route('crearDeteccion') }}" method="POST" id="form">
    @csrf
    <div class="form-row">
        <div class="col-xs-12 col-md-6">

            <div class="alert alert-dark" role="alert">
                <h4 class="alert-heading">CÉDULA PARA LA DETECCIÓN Y ATENCIÓN DE FALLAS</h4>
                <br>
                <br>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"> Area Evaluada:</div>
                    </div>
                    <input type="text" name="area" value="{{ $deteccion->area }}" class="form-control" id="inlineFormInputGroupUsername2" required>
                </div>

                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"> Etapa o Elemento:</div>
                    </div>
                    <input type="text" name="etapa_elemento" value="{{ $deteccion->etapa_elemento }}" class="form-control" id="inlineFormInputGroupUsername2" required>
                </div>

            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"> Fecha:</div>
                </div>
                <input type="date" name="fecha" value="{{ $deteccion->fecha }}" class="form-control" id="inlineFormInputGroupUsername2" required>
            </div>


            <div class="row">
                <div class="col input-group mb-2 ">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Pagina:</div>
                    </div>
                    <input type="number" name="pagina1" value="{{ $deteccion->pagina1 }}" class="form-control" id="inlineFormInputGroupUsername2" required>
                </div>

                <div class="col input-group mb-2  ">
                    <div class="input-group-prepend">
                        <div class="input-group-text"> De:</div>
                    </div>
                    <input type="number" name="pagina1_de" value="{{ $deteccion->pagina1_de }}" class="form-control" id="inlineFormInputGroupUsername2" required>
                </div>
            </div>

            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"> Sustituye A:</div>
                </div>
                <input type="text" name="sustituye_a" value="{{ $deteccion->sustituye_a }}" class="form-control" id="inlineFormInputGroupUsername2" required>
            </div>


            <div class="row">
                <div class="col input-group mb-2 ">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Pagina:</div>
                    </div>
                    <input type="number" name="pagina2" value="{{ $deteccion->pagina2 }}" class="form-control" id="inlineFormInputGroupUsername2" required>
                </div>

                <div class="col input-group mb-2  ">
                    <div class="input-group-prepend">
                        <div class="input-group-text"> De:</div>
                    </div>
                    <input type="number" name="pagina2_de" value="{{ $deteccion->pagina2_de }}" class="form-control" id="inlineFormInputGroupUsername2" required>
                </div>
            </div>


            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"> fecha:</div>
                </div>
                <input type="date" name="fecha2" value="{{ $deteccion->fecha2 }}" class="form-control" id="inlineFormInputGroupUsername2" required>
            </div>
        </div>


        <div class="col-xs-12">

                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"> Numero:</div>
                    </div>
                    <input type="number" name="numero" value="{{ $deteccion->numero }}" class="form-control" id="inlineFormInputGroupUsername2" required>
                </div>
        </div>

        <div class="col-md-12">
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <br>
                    <br>
                    <label for="validationDefault01">Falla</label>
                    <textarea type="text" class="form-control" id="textarea" contentEditable="true" 
                    placeholder="Especificar los elementos que impactan en el funcionamiento de la organización."  name="falla" required rows="15">{{ $deteccion->falla }}</textarea>
                </div>
                <div class="col-md-4 mb-3">
                    <br>
                    <br>
                    <label for="validationDefault01">Propuesta </label>
                    <textarea type="text" class="form-control" id="textarea" 
                    placeholder="Anotar la posible solución o forma de atención de las fallas." name="propuesta" required rows="15">{{ $deteccion->propuesta }} </textarea>                
                    
                </div>
                <div class="col-md-4 mb-3">
                    <br>
                    <br>
                    <label for="validationDefault01">Seguimiento</label>
                    <textarea type="text" class="form-control" id="textarea" 
                    placeholder="Anotar las acciones para el seguimiento de las alternativas de solución." 
                     required rows="15" name="seguimiento">{{ $deteccion->seguimiento }}</textarea>
                </div>
            </div>    
        </div>
        
        

        <div class="col-md-12 ">   
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text"> Observaciones:</div>
                    </div>
                    <input type="text" name="observaciones" value="{{ $deteccion->observaciones }}" class="form-control" id="inlineFormInputGroupUsername2" required>
                </div>
        </div>  
            <div class="form-row col-md-12">
                    <div class="col-md-6">
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text"> Elaboró:</div>
                            </div>
                            <input type="text" name="elaboro" value="{{ $deteccion->elaboro }}" class="form-control" id="inlineFormInputGroupUsername2" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text"> Autorizó:</div>
                            </div>
                            <input type="text" name="autorizo" value="{{ $deteccion->autorizo }}" class="form-control" id="inlineFormInputGroupUsername2" required>
                        </div>
                    </div>

                    <input type="hidden" value="{{ $deteccion->process_id }}" name="process_id">
               
            </div>

            <div class="row">
            <button type="submit" class="btn btn-danger "id="registrar" >
            Guardar
                                </button>
                <div class="col-md-3">
                    <!--<a class="btn btn-success" href="{{ route('pdfDeteccion', $deteccion->process_id) }}">Imprimir</a>-->
                    <button id="pdf" class="btn btn-danger" >Pasar a pdf</button>
                </div>    
            </div>


    </form>
    
    
    </div>
    <br>
    <div class="row">
            <!--<a class="btn btn-success" href="{{ route('proceso',   $deteccion->process_id) }}">Regresar</a>-->
    </div>
 @endsection