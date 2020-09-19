<!doctype html>
<html lang="es">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

       <!-- Scrips -->
  


       <!--Styles -->

      <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">


      <title>Dashboard</title>

   </head>

   <body>



    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
                <a class="navbar-brand ml-4" href="#">
               <img src="{{ asset('img/logo-white.svg') }}" width="30" height="30" class="d-inline-block align-top" alt="">
            Repositorio 911 Salta
            </a>

                    <div class="container mt-4 mb-2">
                        <div class="mb-2">
                        <img src="img/users/user.jpg" class="img-responsive" style="border-radius: 50%;" alt="" width="70">
                    </div>
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">Ernesto Arias</div>
                        <div class="profile-usertitle-status">admin@admin.com</div>
                    </div>
                    </div>


            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#"><i class="fas fa-chart-line"></i> Panel</a>
                </li>

                <li>
                    <a href="#profileSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-user-circle"></i> Mi perfil</a>
                    <ul class="collapse list-unstyled" id="profileSubmenu">
                        <li>
                            <a href="#">Ver mi perfil</a>
                        </li>
                        <li>
                            <a href="#">Actualizar perfil</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#filesSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-file-upload"></i> Mis archivos</a>
                    <ul class="collapse list-unstyled" id="filesSubmenu">
                        <li>
                            <a href="#">Imágenes</a>
                        </li>
                        <li>
                            <a href="#">Videos</a>
                        </li>
                        <li>
                            <a href="#">Documentos</a>
                        </li>
                        <li>
                            <a href="#">ZIP</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#rolesSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-unlock-alt"></i> Roles</a>
                    <ul class="collapse list-unstyled" id="rolesSubmenu">
                        <li>
                            <a href="#">Ver todos</a>
                        </li>
                        <li>
                            <a href="#">Agregar rol</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#permissionSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-fingerprint"></i> Permisos</a>
                    <ul class="collapse list-unstyled" id="permissionSubmenu">
                        <li>
                            <a href="#">Ver todos</a>
                        </li>
                        <li>
                            <a href="#">Agregar permiso</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-users"></i> Usuarios</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Ver todos</a>
                        </li>
                        <li>
                            <a href="#">Agregar rol</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="far fa-question-circle"></i> Soporte</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="{{ route('logout') }}" class="logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fas fa-power-off"></i> Cerrar sesión</a>
                </li>
            </ul>
        </nav>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
         </form>


  

                                   

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                    <div id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a>Panel administrativo</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

             <div class="panel panel-container container shadow-sm">
                    <div class="row">
                        <div class="col-sm-6 col-md-3 col-lg-3 no-padding">
                            <div class="panel  panel-widget border-right">
                                <div class="row no-padding"><i class="fas fa-eye"></i>
                                    <div class="large">120</div>
                                    <div class="dashboard-small">Visitantes</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3 no-padding ">
                            <div class="panel panel-widget border-right">
                                <div class="row no-padding"><i class="fas fa-file-upload"></i></em>
                                    <div class="large">96</div>
                                    <div class="dashboard-small">Archivos</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3 no-padding">
                            <div class="panel  panel-widget border-right">
                                <div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
                                    <div class="large">13</div>
                                    <div class="dashboard-small">Usuarios</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3 no-padding">
                            <div class="panel  panel-widget ">
                                <div class="row no-padding"><em class="fa fa-xl fa-search color-red"></em>
                                    <div class="large">25.2k</div>
                                    <div class="dashboard-small">Páginas vistas</div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.row-->
                </div>

                <div class="mt-5 row">
                    <div class="col-md-6 mt-5">
                        <canvas id="line-chart" width="100%" height="100%"></canvas>
                    </div>
                    <div class="col-md-6 mt-5">
                        <canvas id="pie-chart" width="100%"></canvas>
                    </div>
                </div>
            
            
        </div>
    </div>


 @yield('content')

<script src="{{ asset('js/slim.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>

   @yield('scripts')
         
       
         
   </body>
</html>



