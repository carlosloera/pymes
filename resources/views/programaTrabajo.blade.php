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

<form action="{{ route('crearWork') }}" method="POST">
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
            
            </div>
            
           <strong>Area:</strong> <input type="text" name="area" value="{{ $work->area }}" style="display: inline;" id="inlineFormInputGroupUsername2" >
        </div>

    </div>
    <br>
    <div class="col-xs-12 col-md-4">
        <div class="input-group mb-2 mr-sm-2">
            <strong> Inicio: </strong><input type="text" name="inicio" value="{{ $work->inicio }}" style="display: inline;"  id="inlineFormInputGroupUsername2" >
        </div>
        <br>
        <div class="input-group mb-2 mr-sm-2">
            
        <strong > Suspencion: </strong><input type="text" name="suspencion" value="{{ $work->suspencion }}" style="display: inline;" id="inlineFormInputGroupUsername2" >
        </div>
        <br>
        <div class="input-group mb-2 mr-sm-2">
            
        <strong > Reinicio: </strong><input type="text" name="reinicio" value="{{ $work->reinicio }}" style="display: inline;" id="inlineFormInputGroupUsername2" >
        </div>
        <br>
        <div class="input-group mb-2 mr-sm-2">
            
        <strong > Responsable:</strong>     <input type="text" name="responsable" value="{{ $work->responsable }}" style="display: inline;" id="inlineFormInputGroupUsername2" >
        </div>
    </div>
    <div class="col-xs-12 col-md-4">
        <br>
        <div class="input-group mb-2 mr-sm-2">
            
        <strong > Terminacion:</strong>    <input type="text" name="terminacion" value="{{ $work->terminacion }}" style="display: inline;" id="inlineFormInputGroupUsername2" placeholder="Username">
        </div>
        <br>
        <div class="input-group mb-2 mr-sm-2">
            
        <strong > Cancelacion: </strong>    <input type="text" name="cancelacion" value="{{ $work->cancelacion }}" style="display: inline;" id="inlineFormInputGroupUsername2" placeholder="Username">
        </div>
        <br>
        <div class="input-group mb-2 mr-sm-2">
            
        <strong > Terminacion: </strong>    <input type="text" name="terminacion2" value="{{ $work->terminacion2 }}" style="display: inline;" id="inlineFormInputGroupUsername2" placeholder="Username">
        </div>
        <br>
        <div class="input-group mb-2 mr-sm-2">
            
        <strong > Clave: </strong>    <input type="text" name="clave" value="{{ $work->clave }}"   style="display: inline;" id="inlineFormInputGroupUsername2" placeholder="Clave">
        </div>
    </div>
</div>


<hr>

<table class="table table-hover table-bordered">
<thead>
    <tr>
        <th scope="col" rowspan="3" >Numero</th>
        <th scope="col" rowspan="3"  >Actividad</th>
        <th scope="col" rowspan="3"  >Responsable Especifico</th>
        
        
        <th colspan="5">Duracion</th>
        <th scope="col" rowspan="3"  >Responsable Especifico</th>
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
        
        <tr>
        <th scope="row">{{ $i }}</th>
            <td><input type="text" name="actividad[]" value="{{ $num->actividad }}"  id="actividad" style="display: inline;"> </td>
            <td><input type="text" name="responsable_especifico[]" value="{{ $num->responsable }}" style="display: inline;"></td>
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
<h1></h1>

    <div >
        <div class="col-xs-12 ">  
        <br> 
        <div class="input-group mb-2 mr-sm-2">
                
        <strong > Observaciones:</strong>    <input type="text" name="observaciones" value="{{ $work->observaciones }}" style="display: inline;" id="inlineFormInputGroupUsername2" >
            </div>
        </div>  
        <div class="form-row">
                <div class="col-md-4">
                <br>
                    <div class="input-group mb-2 mr-sm-2">
                        
                    <strong > Elaboro:</strong>    <input type="text" name="elaboro" value="{{ $work->elaboro }}" style="display: inline;" id="inlineFormInputGroupUsername2" >
                    </div>
                </div>

                <div class="col-md-4">
                <br>
                    <div class="input-group mb-2 mr-sm-2">
                        
                    <strong > Reviso:</strong>    <input type="text" name="reviso" value="{{ $work->reviso }}" style="display: inline;" id="inlineFormInputGroupUsername2" >
                    </div>
                </div>
                <div class="col-md-4">
                <br>
                    <div class="input-group mb-2 mr-sm-2">
                        
                    <strong > Autorizo:</strong>    <input type="text" name="autorizo" value="{{ $work->autorizo }}" style="display: inline;" id="inlineFormInputGroupUsername2" >
                    </div>
                </div>
           
        </div>

        <input type="hidden" value="{{ $work->process_id }}" name="process_id">

    </div>

</form>
</div>
</body>
</html>