<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
 
    
    <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/_all-skins.min.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>    

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

      <header class="main-header" style="background-color: #920c12">

        <!-- Logo -->
        <a href="{{ route('procesos') }}" class="logo" style="background-color: #920c12">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <!--<span class="logo-mini"><b></b>V</span> -->
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">Auditoria Administrativa</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation" style="background-color: #c5101a">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
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
              </li>    <!-- Menu Footer-->
                  <!--<li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Cerrar</a>
                    </div>
                  </li>
                  -->
                </ul>
              </li>
              
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
                    
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>
            
            <li class="treeview">
              <a href="#">
                <i class="fas fa-wrench"></i>
                <span>Herramientas</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('workProgram', $id) }}"><i class="far fa-dot-circle"></i> Programa de Trabajo</a></li>
                <li><a href="{{ route('analisis', $id) }}"><i class="far fa-dot-circle"></i> Cedula de Analisis <br> &nbsp;&nbsp;&nbsp; Documental</a></li>
                <li ><a href="{{ route('registro', $id) }}"><i class="far fa-dot-circle">

                    </i> Cedula para la deteccion <br> &nbsp; &nbsp; &nbsp; &nbsp; y registros  de
                     hallazgos <br>&nbsp; &nbsp; &nbsp; &nbsp; y evidencias</a>
                    
                </li>
                <li><a href="{{ route('deteccion', $id) }}"><i class="far fa-dot-circle"></i>Cédula para la deteccion
                  <br>&nbsp; &nbsp; &nbsp; &nbsp; y atencion de fallas
                  </a>
                </li>

                <li><a href="{{ route('evaluacion', $id) }}"><i class="far fa-dot-circle"></i> 
                  Cedula para determinar
                  <br> &nbsp; &nbsp; &nbsp; &nbsp; criterios de evaluacion
                </a></li>
                
                <li><a href="{{ route('evaluacionFinal', $id) }}"><i class="far fa-dot-circle"></i> 
                  Criterios de puntuacion para 
                  <br> &nbsp; &nbsp; &nbsp; &nbsp;  la evaluacion final
                </a></li>

              </ul>
            </li>
            
            <li class="treeview">
              <a href="">
                <i class="fas fa-book"></i>
                <span>Cuestionario</span>
                <i class="fa fa-angle-left pull-right"></i>
                <ul class="treeview-menu">
                @php
                  $categories = DB::table('categories')->get();
                  $areas = DB::table('areas')->get();
                @endphp
                @foreach ($areas as $area)
                  <li class="treeview">
                    <a>{{$area->area}}
                      <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                      @foreach ($categories as $category)
                        @if($area->id_area == $category->id_area)
                          <li>
                            <a href="{{ route('cuestionario', ['id' => $id, 'id_category' => $category->id_category] )}}">{{$category->category}}</a>
                          </li>
                        @endif
                      @endforeach
                    </ul>
                  </li>
                @endforeach
              </ul>

                {{--
<!--
                 @foreach($categorias as $categoria)
                         <ul class="treeview-menu">
                            <li><a href="{{ route('cuestionario', ['id' => $id, 'id_category' => $categoria->id_category] )}}"><i class="far fa-dot-circle"></i> &nbsp; {{$categoria->category}}<i class="fa fa-angle-left pull-right"></i></a>
                                @foreach($areas as $area)
                                <ul>
                                    <li><a><i class="far fa-dot-circle"></i> &nbsp; {{$area->area}}<i></i></a></li>
                                </ul>
                                @endforeach

                            </li>
                          
                         </ul>
                @endforeach
                -->

                --}}
              </a>

                 


              
            </li>
            <li class="treeview"> 
              <a href="#">
                <i class="fas fa-align-left"></i>
                <span>Indicadores</span>
                <i class="fa fa-angle-left pull-right"></i>

              </a>
              <ul class="treeview-menu">
                @php
                  $categories = DB::table('categories')->get();
                  $areas = DB::table('areas')->get();
                @endphp
                @foreach ($areas as $area)
                  <li class="treeview">
                    <a>{{$area->area}}
                      <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                      @foreach ($categories as $category)
                        @if($area->id_area == $category->id_area)
                          <li>
                            <a href="{{ route('indicadores', ['id' => $id, 'id_category' => $category->id_category] )}}">{{$category->category}}</a>
                          </li>
                        @endif
                      @endforeach
                    </ul>
                  </li>
                @endforeach
              </ul>
            </li>
            <li class="treeview">
              <a href="{{ route('procesos') }}">
                <i class="fas fa-chevron-circle-left"></i>
                <span>Regresar</span>
                 
              </a>
             
            </li>           
            
                        
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>





       <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
       
        <!-- Main content -->
        <section class="content">
        @if( session()->has('notificacion') )
          
          <div class=" alert-dismissable alert alert-success" role="alert">
                
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">  
                      <span aria-hidden="true">&times;</span>
                </button>
                {{ session()->get('notificacion') }}
          </div>

        @endif
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"></h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
               
                <div class="box-body">
                  	<div class="row">
	                  	<div class="col-md-12">
                     

		                          @yield('herramientas')
                              
                              <h3></h3>
		                          <!--Fin Contenido-->
                           </div>
                        </div>
		                    
                  		</div>
                  	</div><!-- /.row -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->
      <footer class="main-footer">
       
      </footer>

       
      <script src="{{ asset('js/jQuery-2.1.4.min.js') }}  "></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{ asset('js/bootstrap.min.js') }}  "></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('js/app.min.js') }}  "></script>
    
    <script type="text/javascript">
            var modal = document.querySelector(".modal");
            var trigger = document.querySelector(".trigger");
            var closeButton = document.querySelector(".close-button");

            function toggleModal() {
                modal.classList.toggle("show-modal");
            }

            function windowOnClick(event) {
                if (event.target === modal) {
                    toggleModal();
                }
            }

      $(".alert.flash").fadeTo(2000,500).slideUp(500, function(){
          $(".alert.flash").slideUp(500);
      });
      
      $(document).ready(function(){

        
          console.log("hola mundo");
                  $('#alert').hide();

                  $('.btn-guardar').click(function(e){
                      e.preventDefault();
                      var formData2 = new FormData($("#form") [0]);
                      var form = $(this).parents('form');
                      var formData = form.serialize();
                      var url = form.attr('action');
                      console.log(formData2);
                      $('#alert').show();

                      $.ajax({
                          url: "http://localhost:8000/guardar",
                          type: "POST",
                          headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                          },
                          data: {v_status: formData, _token: $('#token').val()},
                          cache: false,
                          datatype: 'json',
                          contentType: false,
                          processData: false,
                          success: function (response) {
                                console.log(response);
                                $('#alert').html(response);
                             },
                             error: function (response) {
                                $('#alert').html("Algo salio mal");
                             }
                      });

                      
                  });
      });

      
    </script>

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
                        pdf.save('document.pdf');

                       
                        $('input[name=fecha]').prop('type', 'date');
                        $('input[name=pagina]').prop('type', 'number');
                        $('input[name=pagina_de]').prop('type', 'number');
                        $('input[name=fecha2]').prop('type', 'date');
                        $('input[name=pagina1]').prop('type', 'number');
                        $('input[name=pagina1_de]').prop('type', 'number');
                        $('input[name=pagina2]').prop('type', 'number');
                        $('input[name=pagina2_de]').prop('type', 'number');
                        $('input[name=numero]').prop('type', 'number');
                        $('input[name=num_hoja]').prop('type', 'number');
                        $('input[name=num_hoja_de]').prop('type', 'number');
                        $("#registrar").show();   
                        $("#pdf").show();
                        
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
            $("#pdfwork").hide();
            $("#agregar").hide();
            $("#eliminar").hide();
            $(".actualizar").hide();
            $(".eliminarFila").hide();
            html2canvas($("#form"), {
                    useCORS: true,
                    onrendered: function(canvas) {
                        var img =canvas.toDataURL("image/jpeg,1.0");
                        var pdf = new jsPDF();
                        pdf.addImage(img, 'JPEG', 5, 25, 200, 100);
                        pdf.save('document.pdf');

                        $('input[name=fecha]').prop('type', 'date');
                        $('input[name=pagina]').prop('type', 'number');
                        $('input[name=inicio]').prop('type', 'date');
                        $('input[name=suspencion]').prop('type', 'date');
                        $('input[name=reinicio]').prop('type', 'date');
                        $('input[name=terminacion]').prop('type', 'date');
                        $('input[name=cancelacion]').prop('type', 'date');
                        $('input[name=terminacion2]').prop('type', 'date');
                        $("#registrar").show();   
                        $("#pdfwork").show();
                        $("#agregar").show();   
                        $("#eliminar").show();
                        $(".actualizar").show();
                        $(".eliminarFila").show();
                        
                    }
                       
            });
            
        });
        

        $(document).ready(function(){
         

            var i=0;
            
            $('#agregar').click(function(){
              
                i++;
                $('#dynamic_field').append('<tr id="addr'+i+'" ><th scope="row"> '+i+'</th><td><input class="form-control" type="text" name="actividad[]" id="actividad"> </td><td><input class="form-control" type="text" name="responsable_especifico[]" ></td><td><input class="form-control" type="text" name="semana[]" ></td><td><input type="text" class="form-control" name="semana1[]"  ></td><td><input type="text" class="form-control" name="semana2[]" ></td><td><input type="text" class="form-control" name="semana3[]" ></td><td><input type="text" class="form-control" name="semana4[]" ></td> <td><button id="guardarFila"   type="button" class="btn btn-danger"><i class="fas fa-plus-circle"></i></button> </td> </tr> ');
                $('#guardarFila').click(function(){
                  var form = $(this).closest("tr");
                  var index = form.text();
                  //console.log(form.children('td').find('input')[2].value) ;
                  var actividad = form.children('td').find('input')[0].value;
                  var responsable = form.children('td').find('input')[1].value;
                  var semana = form.children('td').find('input')[2].value;
                  var semana1 = form.children('td').find('input')[3].value;
                  var semana2 = form.children('td').find('input')[4].value;
                  var semana3 = form.children('td').find('input')[5].value;
                  var semana4 = form.children('td').find('input')[6].value;
                  var idPrograma = document.getElementById('idPrograma').value;
                  
                  formData = {
                    "actividad": actividad,
                    "responsable": responsable,
                    "semana":semana,
                    "semana1":semana1,
                    "semana2":semana2,
                    "semana3":semana3,
                    "semana4":semana4,
                    "idPrograma":idPrograma
                  }
                  console.log(formData);
                  var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                  $.post("/guardar2",{'data':formData, '_token':CSRF_TOKEN },function(result){
                    console.log(result);
                    location.reload();
                  }).fail(function(){
                      console.log("error")
                  });

                });      
            });
            
                $('#actualizar').click(function(){
                  //console.log("e");
                  //confirm("Press a button!");
                  var form = $(this).closest("tr");
                  var index = form.text();
                  //console.log(form.children('td').find('input')[2].value) ;
                  var actividad = form.children('td').find('input')[0].value;
                  var responsable = form.children('td').find('input')[1].value;
                  var semana = form.children('td').find('input')[2].value;
                  var semana1 = form.children('td').find('input')[3].value;
                  var semana2 = form.children('td').find('input')[4].value;
                  var semana3 = form.children('td').find('input')[5].value;
                  var semana4 = form.children('td').find('input')[6].value;
                  var id = document.getElementById('identificadorFila').value;
                  
                  formData = {
                    "actividad": actividad,
                    "responsable": responsable,
                    "semana":semana,
                    "semana1":semana1,
                    "semana2":semana2,
                    "semana3":semana3,
                    "semana4":semana4,
                    "id":id
                  }
                  console.log(formData);
                  //return;
                  var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                  $.post("/editar",{'data':formData, '_token':CSRF_TOKEN },function(result){
                    console.log(result);
                  }).fail(function(){
                      console.log("error")
                  });

                }); 
                $('#eliminarFila').click(function(){
                  //console.log("e");
                  $("#mi-modal").modal('show');
                    $("#modal-btn-si").on("click", function(){
                        
                        $("#mi-modal").modal('hide');
                      
                      var id = document.getElementById('identificadorFila').value;
                      
                      formData = {
                        "id":id
                      }
                      console.log(formData);
                      //return;
                      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                      $.post("/eliminar",{'data':formData, '_token':CSRF_TOKEN },function(result){
                        console.log(result);
                        location.reload();
                      }).fail(function(){
                          console.log("error")
                      });
                    });
                    $("#modal-btn-no").on("click", function(){
                      
                      $("#mi-modal").modal('hide');
                    });
                }); 
                
            
            $('#guardarFila').click(function(){
              console.log("sedrf");
           });
            $("#eliminar").click(function(){
              console.log(i);
                if(i>0){
                    $("#addr"+(i)).remove();
                    i--;
                }
            });
            $('#porcentaje_planeacion').val((100/$('#planeacion1').val())*$('#planeacion2').val());
            $('#porcentaje_organizacion').val((100/$('#organizacion1').val())*$('#organizacion2').val());
            $('#porcentaje_direccion').val((100/$('#direccion1').val())*$('#direccion2').val());
            $('#porcentaje_control').val((100/$('#control1').val())*$('#control2').val());

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


</body>


</html>

