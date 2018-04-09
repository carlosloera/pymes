<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <form>
    <div class="form-row">
        <div class="col-xs-12 col-md-6">

            <div class="alert alert-dark" role="alert">
                <h4 class="alert-heading">CÉDULA PARA DETERMINAR CRITERIOS DE EVALUACIÓN</h4>
                <br>
                <br>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"> Area Evaluada:</div>
                    </div>
                    <input type="text" name="area" value="{{ $criterios->area }}" class="form-control" id="inlineFormInputGroupUsername2" >
                </div>

                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"> Etapa o Elemento:</div>
                    </div>
                    <input type="text" name="etapa_elemento" value="{{ $criterios->etapa_elemento }}" class="form-control" id="inlineFormInputGroupUsername2" >
                </div>

            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"> Fecha:</div>
                </div>
                <input type="text" name="fecha" value="{{ $criterios->fecha }}" class="form-control" id="inlineFormInputGroupUsername2" >
            </div>


            <div class="row">
                <div class="col input-group mb-2 ">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Pagina:</div>
                    </div>
                    <input type="text" name="pagina1" value="{{ $criterios->pagina1 }}" class="form-control" id="inlineFormInputGroupUsername2" >
                </div>

                <div class="col input-group mb-2  ">
                    <div class="input-group-prepend">
                        <div class="input-group-text"> De:</div>
                    </div>
                    <input type="text" name="pagina1_de" value="{{ $criterios->pagina1_de }}" class="form-control" id="inlineFormInputGroupUsername2" >
                </div>
            </div>

            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"> Sustituye A:</div>
                </div>
                <input type="text" name="sustituye_a" value="{{ $criterios->sustituye_a }}" class="form-control" id="inlineFormInputGroupUsername2" >
            </div>


            <div class="row">
                <div class="col input-group mb-2 ">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Pagina:</div>
                    </div>
                    <input type="text" name="pagina2" value="{{ $criterios->pagina2 }}" class="form-control" id="inlineFormInputGroupUsername2" >
                </div>

                <div class="col input-group mb-2  ">
                    <div class="input-group-prepend">
                        <div class="input-group-text"> De:</div>
                    </div>
                    <input type="text" name="pagina2_de" value="{{ $criterios->pagina2_de }}" class="form-control" id="inlineFormInputGroupUsername2" >
                </div>
            </div>


            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"> fecha:</div>
                </div>
                <input type="text" class="form-control" name="fecha2" value="{{ $criterios->fecha2 }}" id="inlineFormInputGroupUsername2" >
            </div>
        </div>


        

        <div class="col-md-12">
            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <br>
                    <br>
                    <label for="validationDefault01">Factor</label>
                    <textarea type="text" name="factor" class="form-control" id="textarea" contentEditable="true" 
                    placeholder="Indicar el elemento bajo análisis."  required rows="15">{{ $criterios->factor }}</textarea>
                </div>
                <div class="col-md-3 mb-3">
                    <br>
                    <br>
                    <label for="validationDefault01">Indicadores </label>
                    <textarea type="text" name="indicadores" class="form-control" id="textarea" 
                    placeholder="Especifi car el o los índices seleccionados para guiar el desempeño de las acciones."  required rows="15">
                        {{ $criterios->indicadores }}
                    </textarea>                
                    
                </div>
                <div class="col-md-3 mb-3">
                    <br>
                    <br>
                    <label for="validationDefault01">Documento O Registro</label>
                    <textarea type="text" name="documento_registro" class="form-control" id="textarea" 
                    placeholder="Precisar la evidencia documental que sustenta la evaluación." 
                     required rows="15">{{ $criterios->documento_registro }}</textarea>
                </div>
                <div class="col-md-3 mb-3">
                    <br>
                    <br>
                    <label for="validationDefault01">Alternativa De Atención</label>
                    <textarea type="text" name="alternativa_atencion" class="form-control" id="textarea" 
                    placeholder="Especificar las opciones para evaluar los factores." 
                     required rows="15">{{ $criterios->alternativa_atencion }}</textarea>
                </div>
            </div>    
        </div>
        
        

        <div class="col-md-12 ">   
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text"> Observaciones:</div>
                    </div>
                    <input type="text" name="observaciones" value="{{ $criterios->observaciones }}" class="form-control" id="inlineFormInputGroupUsername2" >
                </div>
        </div>  
            <div class="form-row col-md-12">
                    <div class="col-md-6">
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text"> Elaboró:</div>
                            </div>
                            <input type="text" name="elaboro" value="{{ $criterios->elaboro }}" class="form-control" id="inlineFormInputGroupUsername2" >
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text"> Autorizó:</div>
                            </div>
                            <input type="text" name="autorizo" value="{{ $criterios->autorizo }}" class="form-control" id="inlineFormInputGroupUsername2" >
                        </div>
                    </div>
               
            </div>



    </form>
    
    
    </div>
</body>
</html>