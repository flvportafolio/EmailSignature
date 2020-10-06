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
              <li class="nav-item mr-2 active font-weight-bold">
                <a class="nav-link" href="#">Inicio</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="acerca">Acerca de</a>
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
              <label for="inputName">Nombre Completo *</label>
              <input type="text" class="form-control" id="inputName" placeholder="Jhon Doe" pattern="[éíA-Za-z\s\u00f1\u00d1]{1,35}" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputTitulo">Descripción *</label>
              <input type="text" class="form-control" id="inputTitulo" pattern="^.{1,30}$" placeholder="Ingeniero en Sistemas" required>
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
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputLinkedin">Perfil de Linkedin (opcional)</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputLinkedin">linkedin.com/</label>
                </div>
                <input type="text" class="form-control" id="inputLinkedin" placeholder="jhon-doe">
              </div>
            </div>
            <div class="form-group col-md-6">
              <label for="inputGithub">Perfil de Github (opcional)</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputLinkedin">github.com/</label>
                </div>
                <input type="text" class="form-control" id="inputGithub" placeholder="jhondoe">
              </div>
            </div>   
          </div>
          <div class="input-group mb-3">             
            <div class="custom-file">
              <input type="file" accept="image/png, image/jpeg" class="custom-file-input" id="input_foto" >
              <label class="custom-file-label" for="input_foto">Selecciona una Imagen PNG ó JPG</label>
            </div>
          </div>

          <div class="form-group row py-2">
            <h5 class="col-sm-3">Selecciona un Color : </h5>
            <div class="form-group col-sm-7">
              <div class="esfera mx-2 bg-primary active" onclick="setActive(this,'#007bff');"></div>              
              <div class="esfera mx-2 bg-warning" onclick="setActive(this,'#ffc107');"></div>
              <div class="esfera mx-2 bg-success" onclick="setActive(this,'#28a745');"></div>
              <div class="esfera mx-2 bg-leaf" onclick="setActive(this,'#58d68d');"></div>
              <div class="esfera mx-2 bg-info" onclick="setActive(this,'#17a2b8');"></div>
              <div class="esfera mx-2 bg-rose" onclick="setActive(this,'#af7ac5');"></div>
              <div class="esfera mx-2 bg-orange" onclick="setActive(this,'#e67e22');"></div>
              <div class="esfera mx-2 bg-danger" onclick="setActive(this,'#dc3545');"></div>
              <div class="esfera mx-2 bg-steel" onclick="setActive(this,'#34495e');"></div>
              <div class="esfera mx-2 bg-bluedark" onclick="setActive(this,'#17202a');"></div>
            </div>
          </div>        
          <button type="submit" class="btn btn-primary">Generar Firma</button>
        </form>

        <section id="firmas_generadas" class="container py-5">
          <!-- <div class="row">         
            <div class="col-md-4">                  
            </div>
          </div> -->
        </section>

      </main>
      <!-- Fin del Contenido Principal -->

      <!-- Pie de Pagina -->
      <footer class="container-fluid py-4 bg-footer">
        <div class="row">
          <div class="col-md-12 text-center text-light">Email Signature ©2020, Desarrollado por FLVPortafolio. | {{ app()->version() }}</div>
        </div>
      </footer>      
      <!-- Fin del Pie de Pagina -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="{{ URL::asset('js/core.js') }}"></script>
  </body>
</html>