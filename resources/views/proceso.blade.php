<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    
    <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/_all-skins.min.css') }}">
    <!--<link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

      <header class="main-header" style="background-color: #920c12">

        <!-- Logo -->
        <a href="index2.html" class="logo" style="background-color: #920c12">
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
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  
                  <span class="hidden-xs">Nombre del usuario</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    
                    <p>
                      www.incanatoit.com - Desarrollando Software
                      <small>www.youtube.com/jcarlosad7</small>
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Cerrar</a>
                    </div>
                  </li>
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
                <li><a href="{{ route('analisis', $id) }}"><i class="far fa-dot-circle"></i> Cedula de Analisis Documental</a></li>
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
              <a href="#">
                <i class="fas fa-book"></i>
                <span>Questionario</span>
                 
              </a>
              
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fas fa-align-left"></i>
                <span>Indicadores</span>
                 
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
		                          <!--Contenido-->
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
    
</body>


</html>

<div class="container">
    <h3>Herramientas</h3>
    <div class="sidenav">
        <a href="{{ route('analisis', $id) }}">Analisis Documental</a>
        <a href="{{ route('evaluacion', $id) }}">Criterios de Evaluacion</a>
        <a href="{{ route('deteccion', $id) }}">Deteccion de fallas</a>
        <a href="{{ route('registro', $id) }}">Registro de evidencias</a>
        <a href="{{ route('workProgram', $id) }}">Programa de trabajo</a>
        <a href="{{ route('evaluacionFinal', $id) }}">Criterios de evaluacion final</a>
    </div>
       
</div>
