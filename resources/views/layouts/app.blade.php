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
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">


      <title>Sistema de información Confidencial</title>

   </head>

   <body>

      <header> 
         <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top alert-home">
            <a class="navbar-brand" href="{{route('home')}}">
               <img src="{{ asset('img/logo.png')}}" width="30" height="30" class="d-inline-block align-top" alt="">
            Sistema de información Confidencial
            </a>

         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample06" aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarsExample06">
           <ul class="navbar-nav ml-auto">
             <li class="nav-item active">
               <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="#">Características</a>
             </li>
             <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown06" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Más información</a>
               <div class="dropdown-menu" aria-labelledby="dropdown06">
                 <a class="dropdown-item" href="{{route('secure')}}">Seguridad</a>
                 <a class="dropdown-item" href="#">Clientes</a>
                 <a class="dropdown-item" href="#">Preguntas frecuentes</a>
               </div>
             </li>
             @guest
             <li class="nav-item">   
               <a href="{{ route('login')}}" class="btn btn-outline-primary">Ingresar</a>
             </li>
             @else
             <li>
              <a href="{{ route('logout') }}" class="logout btn btn-outline-danger" onclick="event.preventDefault();
               document.getElementById('logout-form').submit();"><i class="fas fa-power-off"></i> Cerrar sesión</a>
              </li>
             @endguest
           </ul>
         </div>
         </nav>
      </header>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf </form>


 @yield('content')
  
         
         <div class="alert-home "></div>

         <footer class="container py-5">
            <div class="row">
               <div class="col-12 col-md">
                  <img src="{{ asset('img/logo.png')}}" width="100">
                  <small class="d-block mb-3 text-muted text-left">® TIC</small>

               </div>

               <div class="col-sm-6 col-md-3">
                  <h5>Ministerio de Seguridad de Salta</h5>
                  <p class="text-small text-muted">
                     Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto 
                  </p>
               </div>
<!--
               <div class="col-sm-6 col-md-3 text-center">
                  <h5>Más información</h5>
                  <ul class="list-unstyled text-small">
                     <li><a class="text-muted" href="#">Youtube</a></li>
                     <li><a class="text-muted" href="#">GitHub</a></li>
                     <li><a class="text-muted" href="#">Twitter</a></li>
                     <li><a class="text-muted" href="#">Café y Código</a></li>
                  </ul>
               </div>
               <div class="col-sm-6 col-md-3 text-right">
                  <h5>Medios de pago</h5>
                  <img class="img-fluid" src="http://3.bp.blogspot.com/-oumQWdMsBL8/Vh94mt2nYLI/AAAAAAAAANQ/qPwSgz1YgJc/s400/Payment%2BCard%2BNetworks%2BLogo.jpg" width="220">
               </div>


               -->
         </footer>

         <!-- Optional JavaScript -->
         <!-- jQuery first, then Popper.js, then Bootstrap JS -->
         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
         
   </body>
</html>



