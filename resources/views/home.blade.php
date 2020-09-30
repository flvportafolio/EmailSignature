<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
    <title>Generador de Firmas para Correo</title>
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
              <li class="nav-item mx-3 active font-weight-bold">
                <a class="nav-link" href="#">Inicio</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" href="#">Acerca de</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" href="#">Contacto</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" href="#">Terminos del Servicio</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" href="#">Política de Privacidad</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- END Navigation -->

      <!-- Banner -->
      <header class="container-fluid pt-4">
        <div class="row pt-5">
          <div class="col-md-6 py-5 text-center mr-3 ml-2">
            <h1 class="text-white py-5">Crea Gratis tu firma personalizada para Correo Electronico.</h1>
            <a href="#app" class="btn btn-outline-secondary btn-lg text-white">Crear Firma para Correo</a>
          </div>
          <div class="col-md-5 m-1 prod-img rounded overflow-hidden">
            <div class="row vertical-center">
              <div class="col-6 text-center animate__animated animate__lightSpeedInLeft animate__delay-2s">
                <img src="{{ URL::asset('img/outlook_logo.png') }}" alt="outlook" >
              </div>
              <div class="col-6 text-center animate__animated animate__lightSpeedInRight animate__delay-2s">
                <img src="{{ URL::asset('img/gmail.png') }}" alt="gmail" >
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- Fin del Banner -->

      <!-- Contenido Principal -->
      <main id="app" class="container-fluid py-5">
        <h3 class="text-center ">primeramente rellena el siguiente Formulario:</h3>
        <form class="container pt-5">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputName">Nombre Completo</label>
              <input type="text" class="form-control" id="inputName" placeholder="Jhon Doe">
            </div>
            <div class="form-group col-md-6">
              <label for="inputTitulo">Descripción / Cargo / Puesto</label>
              <input type="text" class="form-control" id="inputTitulo" placeholder="Ingeniero en Sistemas">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputAddress">Ubicación</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="Santa Cruz, Bolivia">
            </div>
            <div class="form-group col-md-6">
              <label for="inputTelf">Telefono</label>
              <input type="text" class="form-control" id="inputTelf" placeholder="+591 76543210">
            </div>   
          </div>      
          <div class="form-group row py-2">
            <h5 class="col-sm-3">Selecciona un Color : </h5>
            <div class="form-group col-sm-7">
              <div class="esfera mx-2 bg-primary"></div>              
              <div class="esfera mx-2 bg-warning"></div>
              <div class="esfera mx-2 bg-success"></div>
              <div class="esfera mx-2 bg-leaf"></div>
              <div class="esfera mx-2 bg-info"></div>
              <div class="esfera mx-2 bg-rose"></div>
              <div class="esfera mx-2 bg-orange"></div>
              <div class="esfera mx-2 bg-danger"></div>
              <div class="esfera mx-2 bg-steel"></div>
              <div class="esfera mx-2 bg-bluedark"></div>
            </div>
          </div>        
          <button type="button" class="btn btn-primary" onclick="copiar();">Generar Firma</button>
        </form>

        <section class="container">
          <div id="firma" class="card" style="width: 21rem;">            
            <div class="card-header">
              <!-- <h5 class="card-title">Jhon Doe</h5> -->
              <div class="row">
                <div class="col-md-4 bg-info px-0">
                  <img src="{{URL::asset('img/profile.png')}}" style="width:96px;height:96px; overflow:hidden;" class="mx-auto d-block" alt="perfil">
                </div>
                <div class="col-md-8 px-0">          
                      <div class="col-md-12 font-weight-bold py-1">Jhon Doe</div>
                      <div class="col-md-12 pb-1">Ingeniero en Sistemas</div>
                      <div class="col-md-12 py-1">
                        <a href="https://wa.me/59176543210" style="color: #82c91e;"><img src="{{ URL::asset('img/whatsapp.png') }}" width="32px" height="32px" alt="whatsapp logo"></a>
                        <i class="fas fa-map-marker-alt text-danger fa-lg align-middle"></i><span> Santa Cruz, Bolivia</span>
                      </div>
                </div>
              </div>
            </div>
          </div>
        </section>

      </main>
      <!-- Fin del Contenido Principal -->

      <!-- Pie de Pagina -->
      <footer class="py-5 bg-footer">
      </footer>
      <!-- Fin del Pie de Pagina -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
      function copiar()
      {
        elemento = document.getElementById("firma");
        elemento.focus();
        //elemento.select();
        document.execCommand('copy');      
      }
    </script>
  </body>
</html>