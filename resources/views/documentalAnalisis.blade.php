<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    


   

</head>
<body>


    <div class="container">
    <form>
    <div class="form-row">
        <div class="col-xs-12 col-md-6">

            <div class="alert alert-dark" role="alert">
                <h4 class="alert-heading">CÉDULA DE ANÁLISIS DOCUMENTAL</h4>
                <br>
                <br>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"> Area: </div>
                    </div>
                    <input type="text" value="{{ $analisis->area }}" class="form-control" id="inlineFormInputGroupUsername2" >
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6">
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"> Fecha:</div>
                </div>
                <input type="text" class="form-control" value="{{ $analisis->fecha }}"  id="inlineFormInputGroupUsername2" >
            </div>

            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"> Numero de hoja:</div>
                </div>
                <input type="text" class="form-control" value="{{ $analisis->num_hoja }}" id="inlineFormInputGroupUsername2" >
            </div>

            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"> De:</div>
                </div>
                <input type="text" class="form-control" value="{{ $analisis->num_hoja_de }}" id="inlineFormInputGroupUsername2" >
            </div>
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"> Responsable:</div>
                </div>
                <input type="text" class="form-control" value="{{ $analisis->responsable }}" id="inlineFormInputGroupUsername2" >
            </div>

            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"> Funcion:</div>
                </div>
                <input type="text" class="form-control" value="{{ $analisis->funcion }}" id="inlineFormInputGroupUsername2" >
            </div>
        </div>
        
        <div class="col-md-12">
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <br>
                    <br>
                    <label for="validationDefault01">Documento</label>
                    <textarea type="text" class="form-control" id="textarea" contentEditable="true" 
                    placeholder="Especifi caciones del nombre del documento, datos básicos,contenido, responsable de su elaboración y fuente de consulta."  required rows="15"> {{ $analisis->documento }} </textarea>
                </div>
                <div class="col-md-4 mb-3">
                    <br>
                    <br>
                    <label for="validationDefault01">Resultados del analisis</label>
                    <textarea type="text" class="form-control" id="textarea" 
                    placeholder="Anotar las observaciones de los puntos revisados siguiendo las señales del documento a jerarquía de los puntos críticos."  required rows="15"> {{ $analisis->resultados_analisis }} </textarea>                
                    
                </div>
                <div class="col-md-4 mb-3">
                    <br>
                    <br>
                    <label for="validationDefault01">Propuesta</label>
                    <textarea type="text" class="form-control" id="textarea" 
                    placeholder="Anotar los criterios y/o recomendaciones que se formulen." 
                     required rows="15"> {{ $analisis->propuesta }} </textarea>
                </div>
            </div>    
        </div>
        
        

        <div class="col-md-12 ">   
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text"> Observaciones:</div>
                    </div>
                    <input type="text" class="form-control" value="{{ $analisis->observaciones }}" id="inlineFormInputGroupUsername2" >
                </div>
        </div>  
            <div class="form-row col-md-12">
                    <div class="col-md-4">
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text"> Elaboro:</div>
                            </div>
                            <input type="text" class="form-control" value="{{ $analisis->elabora }}" id="inlineFormInputGroupUsername2" >
                        </div>
                    </div>

                

                    <div class="col-md-4">
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text"> Autorizo:</div>
                            </div>
                            <input type="text" class="form-control" value="{{ $analisis->autorizo }}" id="inlineFormInputGroupUsername2" >
                        </div>
                    </div>
               
            </div>



    </form>
    
    
    </div>
</body>
</html>
