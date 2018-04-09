@extends('layouts.app')


@section('content')

<div class="container">

    <form action="{{ route('crearEvaluacionFinal') }}" method="POST" id="form">
        @csrf
        <div class="form-row">
            <div class="col-md-6">
            
            </div>
            <div class="col-md-3 ">
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"> Fecha:</div>
                    </div>
                        <input type="date" name="fecha" value="{{ $evaluacion->fecha }}" class="form-control" id="inlineFormInputGroupUsername2" >
                </div>
            </div> 

            

            
            


        </div> 
        <div class="form-row">

            <div class="col-md-6">
            
            </div>

            <div class="col-md-3 ">
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"> Pagina:</div>
                    </div>
                        <input type="number" name="pagina"  value="{{ $evaluacion->pagina }}" class="form-control" id="inlineFormInputGroupUsername2" >
                </div>
            </div> 

            

            <div class="col-md-3 ">
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"> De:</div>
                    </div>
                        <input type="number" name="pagina_de" value="{{ $evaluacion->pagina_de }}" class="form-control" id="inlineFormInputGroupUsername2" >
                </div>
            </div> 
            


        </div> 

        <div class="card text-black bg-light mb-3" style="max-width: 70rem;">
            <div class="card-header text-center">CRITERIOS DE PUNTUACIÓN PARA LA EVALUACIÓN FINAL</div>
        </div>

        <table class="table table-bordered">
            <thead>
            <tr>
                
                <th scope="col" rowspan="3" class="text-center" >PROCESO ADMINISTRATIVO</th>
                
                <th colspan="2" class="text-center">PUNTOS MÁXIMOS</th>
               
                <th scope="row" rowspan="3" class="text-center" >PORCENTAJE</th>
            </tr>    
            <tr>

                <th scope="col" class="text-center">ESTABLECIDOS</th>
                <th scope="col" class="text-center">OBTENIDOS</th>
                
            </tr> 
           
               
            </thead>
            <tbody>
                <tr>
                    <th scope="row">
                    <strong>1.0 PLANEACIÓN</strong>
                        <br>
                        1.1 Visión
                        <br>
                        1.2 Misión
                        <br>
                        1.3 Objetivos
                        <br>
                        1.4 Metas
                        <br>
                        1.5 Estrategias/tácticas
                        <br>
                        1.6 Procesos
                        <br>
                        1.7 Políticas
                        <br>
                        1.8 Procedimientos
                        <br>
                        1.9 Programas
                        <br>
                        1.10 Enfoques
                        <br>
                        1.11 Niveles
                        <br>
                        1.12 Horizontes
                    </th>

                    <td colspan="1"> <input id="planeacion1" name="establecidos_planeacion" value="{{ $evaluacion->establecidos_planeacion }}" style="margin-top: 140px; " class="form-control justify-content-center " type="text"> </td>
                    <td colspan="1"> <input id="planeacion2" name="obtenidos_planeacion" value="{{ $evaluacion->obtenidos_planeacion }}" style="margin-top: 140px; " class="form-control justify-content-center" type="text"> </td>
                    <th>
                        <input type="text" style="margin-top: 140px;" class="form-control" readonly id="porcentaje_planeacion">
                    </th>
                </tr>

                <tr>
                    <th scope="row">
                        2.0 ORGANIZACIÓN
                        <br>
                        2.1 Estructura organizacional
                        <br>
                        2.2 División y distribución de funciones
                        <br>
                        2.3 Cultura organizacional
                        <br>
                        2.4 Recursos humanos
                        <br>
                        2.5 Cambio organizacional
                        <br>
                        2.6 Estudios administrativos
                        <br>
                        2.7 Instrumentos técnicos de apoyo
                    </th>
                    <td colspan="1"> <input id="organizacion1" name="establecidos_organizacion" value="{{ $evaluacion->establecidos_organizacion }}" style="margin-top: 76px;" class="form-control justify-content-center" type="text"> </td>
                    <td colspan="1"> <input id="organizacion2" name="obtenidos_organizacion" value="{{ $evaluacion->obtenidos_organizacion }}" style="margin-top: 76px;" class="form-control justify-content-center" type="text"> </td>
                    <th>
                        <input type="text" style="margin-top: 76px;" class="form-control" readonly id="porcentaje_organizacion">
                    </th>

                </tr>
                    
                <tr>
                    <th scope="row">
                            3.0 DIRECCIÓN
                            <br>
                            3.1 Liderazgo
                            <br>
                            3.2 Comunicación
                            <br>
                            3.3 Motivación
                            <br>
                            3.4 Grupos y equipos de trabajo
                            <br>
                            3.5 Manejo del estrés, el conflicto y la crisis
                            <br>
                            3.6 Tecnología de la información
                            <br>
                            3.7 Toma de decisiones
                            <br>
                            3.8 Creatividad e innovación
                        </th>
                        <td colspan="1"> <input id="direccion1" name="establecidos_direccion" value="{{ $evaluacion->establecidos_direccion }}" style="margin-top: 84px;" class="form-control justify-content-center" type="text"> </td>
                        <td colspan="1"> <input id="direccion2" name="obtenidos_direccion" value="{{ $evaluacion->obtenidos_direccion }}" style="margin-top: 84px;" class="form-control justify-content-center" type="text"> </td>
                        <th>
                            <input type="text" style="margin-top: 84px;" class="form-control" readonly id="porcentaje_direccion">
                        </th>
                </tr>

                <tr>
                    <th scope="row">
                        4.0 CONTROL
                        <br>
                        4.1 Naturaleza
                        <br>
                        4.2 Sistemas
                        <br>
                        4.3 Niveles
                        <br>
                        4.4 Proceso
                        <br>
                        4.5 Área de aplicación
                        <br>
                        4.6 Herramientas
                        <br>
                        4.7 Calidad
                    </th>
                    <td colspan="1"> <input id="control1" name="establecidos_control" value="{{ $evaluacion->establecidos_control }}" style="margin-top: 81px;" class="form-control justify-content-center" type="text"> </td>
                    <td colspan="1"> <input id="control2" name="obtenidos_control" value="{{ $evaluacion->obtenidos_control }}" style="margin-top: 81px;" class="form-control justify-content-center" type="text"> </td>
                    <th> <input type="text" style="margin-top: 81px;" class="form-control" readonly id="porcentaje_control"> </th>
                </tr>
                
            </tbody>
        </table>
        <input type="hidden" value="{{ $evaluacion->process_id }}" name="process_id">
        <div class="row">
            <button type="submit" class="btn " style="background-color: #009688;" id="registrar">
                                    Register
                                </button>
                <div class="col-md-3">
                    <!--<a class="btn btn-success"  href="{{ route('pdfEvaluacionFinal', $evaluacion->process_id) }}">Imprimir</a> -->
                    <button id="pdf" class="btn btn-success" id="imprimir">pasar a pdf</button>
                </div>    
            </div>

    </form>

    <div class="row">
       
    </div>

</div>
<br>
    <div class="row">
            <a class="btn btn-success" href="{{ route('proceso',   $evaluacion->process_id) }}">Regresar</a>
</div>

@endsection