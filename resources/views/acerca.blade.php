<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Acerca de</title>
    <style>
    body
    {
      background: #f0f2f1;
    }
    .bg-footer
    {
      background: #2E4053;
      box-shadow: 0px -5px 11px 0px rgba(0,0,0,0.6);
    }
    </style>
  </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="{{URL::asset('logo.svg')}}" width="48px" height="48px" alt="logo"> Firmas Para Correo</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse ml-5" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto ">
              <li class="nav-item mr-2">
                <a class="nav-link" href="./">Inicio</a>
              </li>
              <li class="nav-item mx-2 active font-weight-bold">
                <a class="nav-link" href="#">Acerca de</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="terminos-del-servicio">Terminos del Servicio</a>
              </li>
              <li class="nav-item ml-2">
                <a class="nav-link" href="politica-de-privacidad">Política de Privacidad</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- END Navigation -->
      <main role="main" class="container py-5">
      <h1 class="pb-4">Acerca de</h1>
      <p>
        Email Signature es un sitio web que te permite generar firmas personalizadas.
      </p>      
      <h5 class="my-4">Aplicaciones que funcionan con Email Signature</h5>
      <p>
        Actualmente solo se tienen 2 Aplicaciones comprobadas:        
      </p>
      <p>
        - Microsoft Word<br>
        - Correo Nativo de Windows 10
      </p>
      <p class="h6 py-3">
        El desarrollo de este sitio web se realizo sobre el backend de Lumen y un Frontend que usa la siguientes librerias
      </p>
      <p>
      - Bootstrap<br>
      - jQuery<br>
      - Animate.css
      </p>
      </main>   
      <!-- Pie de Pagina -->
      <footer class="container-fluid py-4 mt-4 bg-footer">
        <div class="row">
          <div class="col-md-12 text-center text-light">Email Signature ©2020, Desarrollado por FLVPortafolio. | {{ app()->version() }}</div>
        </div>
      </footer>      
      <!-- Fin del Pie de Pagina -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>