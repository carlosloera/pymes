<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->

    <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/_all-skins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
       
    </style>
    
    <link href="https://fonts.googleapis.com/css?family=Anton|Patua+One|PT+Sans+Caption" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>    

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color: #c5101a;" >
            <div class="container">
                <a class="navbar-brand" href="{{ url('/procesos') }}" style="color:white; font-family: 'PT Sans Caption', sans-serif;">
                   <img style="width:52px;" src="{{ asset('img/logo.png') }}" alt=""> Auditoria
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link btn "  href="{{ route('login') }}" style="color:white; font-family: 'PT Sans Caption', sans-serif;;, sans-serif;   margin: 10px; border: solid 2px white;">Iniciar sesion</a></li>
                            <li><a class="nav-link btn "  href="{{ route('register') }}" style="color:white; font-family: 'PT Sans Caption', sans-serif;;', sans-serif;  margin: 10px; border: solid 2px white;">Registrarse</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white; font-family: 'PT Sans Caption', sans-serif;">
                                <i class="fas fa-user" style="font-size:23px;"></i>  <span class="caret">{{ Auth::user()->nombre }}</span>
                                </a>
                                
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href=""></a>
                                <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            Cerrar sesion
                                        </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script>
        $("#pdf").click(function(){
            console.log("hjnhhjkjk");
            $('input[name=fecha]').prop('type', 'text');
            $('input[name=pagina]').prop('type', 'text');
            $('input[name=pagina_de]').prop('type', 'text');
            $('input[name=fecha2]').prop('type', 'text');
            $('input[name=pagina1]').prop('type', 'text');
            $('input[name=pagina1_de]').prop('type', 'text');
            $('input[name=pagina2]').prop('type', 'text');
            $('input[name=pagina2_de]').prop('type', 'text');
            $('input[name=numero]').prop('type', 'text');
            $('input[name=num_hoja]').prop('type', 'text');
            $('input[name=num_hoja_de]').prop('type', 'text');
            $("#registrar").hide();
            $("#pdf").hide();
            html2canvas($("#form"), {
                    useCORS: true,
                    onrendered: function(canvas) {
                        var img =canvas.toDataURL("image/jpeg,1.0");
                        var pdf = new jsPDF();
                        pdf.addImage(img, 'JPEG', 5, 25, 200, 200);
                        pdf.save('mapa.pdf');

                       
                        $("#registrar").show();   
                        $("#pdf").show();
                        
                    }
                       
            });
            
        });

        $("#pdfEvidencia").click(function(){
            console.log($('#textareaHallazgo').val());
            $('input[name=fecha]').prop('type', 'text');
            $('input[name=pagina]').prop('type', 'text');
            $('input[name=pagina_de]').prop('type', 'text');
            $('input[name=fecha2]').prop('type', 'text');
            $('input[name=pagina1]').prop('type', 'text');
            $('input[name=pagina1_de]').prop('type', 'text');
            $('input[name=pagina2]').prop('type', 'text');
            $('input[name=pagina2_de]').prop('type', 'text');
            $('input[name=numero]').prop('type', 'text');
            //$('#textareaAspectos').attr("placeholder",$('#textareaAspectos').val('\n') );
            
          
            
            //console.log($('#textareaHallazgo').attr('placeholder'));
            $("#registrar").hide();
            $("#imprimir").hide();

            //console.log(document.getElementById("#pdfEvidencia"));
            html2canvas($("#form"), {
                    useCORS: true,
                    onrendered: function(canvas) {
                        var img =canvas.toDataURL("image/jpeg,1.0");
                        var pdf = new jsPDF();
                        pdf.addImage(img, 'JPEG', 5, 25, 200, 200);
                        pdf.save('mapa.pdf');

                       
                        $("#registrar").show();   
                        $("#imprimir").show();
                        
                    }
                       
            });
            
        });

        $("#pdfwork").click(function(){
            $('input[name=fecha]').prop('type', 'text');
            $('input[name=pagina]').prop('type', 'text');
            $('input[name=inicio]').prop('type', 'text');
            $('input[name=suspencion]').prop('type', 'text');
            $('input[name=reinicio]').prop('type', 'text');
            $('input[name=terminacion]').prop('type', 'text');
            $('input[name=cancelacion]').prop('type', 'text');
            $('input[name=terminacion2]').prop('type', 'text');
            $("#registrar").hide();
            $("#imprimir").hide();
            html2canvas($("#form"), {
                    useCORS: true,
                    onrendered: function(canvas) {
                        var img =canvas.toDataURL("image/jpeg,1.0");
                        var pdf = new jsPDF();
                        pdf.addImage(img, 'JPEG', 5, 25, 200, 100);
                        pdf.save('mapa.pdf');

                       
                        $("#registrar").show();   
                        $("#imprimir").show();
                        
                    }
                       
            });
            
        });

        $(document).ready(function(){
            var i=0;
            $('#agregar').click(function(){
                i++;
                $('#dynamic_field').append('<tr ><th scope="row"> '+i+'</th><td><input type="text" name="actividad[]" id="actividad"> </td><td><input type="text" name="responsable_especifico[]" ></td><td><input type="text" name="semana[]" ></td><td><input type="checkbox"  name="semana1[]"  ></td><td><input type="checkbox"  name="semana2[]" ></td><td><input type="checkbox" name="semana3[]" ></td><td><input type="checkbox" name="semana4[]" ></td></tr>');
            });
        })

        $('#planeacion1').change(function(){
            $('#porcentaje_planeacion').val((100/$('#planeacion1').val())*$('#planeacion2').val());
        });
        $('#planeacion2').change(function(){
            $('#porcentaje_planeacion').val((100/$('#planeacion1').val())*$('#planeacion2').val());
        });

        $('#organizacion1').change(function(){
            $('#porcentaje_organizacion').val((100/$('#organizacion1').val())*$('#organizacion2').val());
        });
        $('#organizacion2').change(function(){
            $('#porcentaje_organizacion').val((100/$('#organizacion1').val())*$('#organizacion2').val());
        });


        $('#direccion1').change(function(){
            $('#porcentaje_direccion').val((100/$('#direccion1').val())*$('#direccion2').val());
        });
        $('#direccion2').change(function(){
            $('#porcentaje_direccion').val((100/$('#direccion1').val())*$('#direccion2').val());
        });


        $('#control1').change(function(){
            $('#porcentaje_control').val((100/$('#control1').val())*$('#control2').val());
        });

        $('#control2').change(function(){
            $('#porcentaje_control').val((100/$('#control1').val())*$('#control2').val());
        });



    </script>
</body>
</html>
