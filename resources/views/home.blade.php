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
                <a class="nav-link" href="#">Acerca de</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="#">Contacto</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="#">Terminos del Servicio</a>
              </li>
              <li class="nav-item ml-2">
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
              <label for="inputName">Nombre Completo *</label>
              <input type="text" class="form-control" id="inputName" placeholder="Jhon Doe" pattern="[éíA-Za-z\s\u00f1\u00d1]{1,35}" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputTitulo">Descripción *</label>
              <input type="text" class="form-control" id="inputTitulo" placeholder="Ingeniero en Sistemas" required>
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

          <div class="input-group mb-3">             
            <div class="custom-file">
              <input type="file" accept="image/png, image/jpeg" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
              <label class="custom-file-label" for="inputGroupFile01">Selecciona una Imagen PNG ó JPG</label>
            </div>
          </div>

          <div class="form-group row py-2">
            <h5 class="col-sm-3">Selecciona un Color : </h5>
            <div class="form-group col-sm-7">
              <div class="esfera mx-2 bg-primary" onclick="setActive(this,'#007bff');"></div>              
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
              <table id="firma" class="col-md-12">      
              <tbody>
                  <tr>
                    <td id="firma1_divider">
                      <img src="data:image/png;base64,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D543bwaf+L8Bpnd04GQgBCRTksHMSN3TGUimZlMABTwM/AyQeS6mhOl5L37BSeC/458SMvMQQH9CYVsjdbcsjf7EbArwNPA9YHA65EMp3Ee/Ah3At/BN0syjs1viyZG6Swmd3WqGNll8Gv8C/Cega7rkQ6n8d78ibcB/xV87mDlIpejq/nQatKCrW5TkvOLxofAb2H8DjpWCfCjpBCoAfizkLuBR/Kl56eF6kt6+E1/v7YOZ2/Dn4sfBvkEJyYdSCnDz7UM9oR2/i/4YSA2/729Ln95eICEgl1P09p8Y7OtLaJjm9McBpTyO35qQBH6IfyZ2ZynJh5kIIfgVTOQr/Q1gPwI0y/O0jO1OO1SXTnskUyfeJZUSDKanJ4AAPWPnNHv4TMuPgLsR/BhIlpp8mKkYzs2bQeBgeY8BNyDEC1rGcvXM2NuHiidIwEBSYZon1ts0YWBgmhUXaIOWrqUthSae9euu/hWFOxPkw0xmPd+Ur/BjD+wiErgj0J3+olsTvQv/y5mnpoIQ0NOrsO0xdug5gu5eOU0TpFBqZ6Bz8CF3Qc0TDOZ6uenOGaMIZmML0s2bib52oMv84Td/4dTGv4hSf4eftDoFepSis3u8jS6Crmm5or0o9VdufdmXzB997xfV97/ZO1OtfjRmZeNI9if3gqgCTRzBd+M24YdvJyeElIqe3rF34gH09PlBucmhB/8rtjYB31eG1oYQ9D/909mgZpY3XvgtyuGxB94A/oi/uHMJ/kGwZ1HoG/ZsW9I9QbJxTy9YtiIcKmSH0sD7wIvAVuA9wJmNFv9pnJSdL8NCPP7gG5RF3yCV+Xv8M+muw/9O+MX4X6w2AiEgayoSifF7bWJAkMlAJDzW0QNZ4AD+ytUzwDYCKoWtwVe+dlJogJMlwBBuGn7wJI898Bz+0b91+AP1Bfnfy4E5CBEjNShJZ8YXIJMVpAYVdbUuSmXwd6d8BGzHJ34Hfr7+tAJopcTJFWA0fEIk0MWvH3yBgPEClhPEF2QuQrSQNatwXA1/2h1l5BwL/3vlHcclk1UI0YcfGmkD0UuZsEmr0YKfwimcwimcwimcdPw/zTbjzI85l9cAAAAldEVYdGRhdGU6Y3JlYXRlADIwMTktMDQtMDlUMTE6NTY6MzErMDE6MDBMlZH3AAAAJXRFWHRkYXRlOm1vZGlmeQAyMDE5LTA0LTA5VDExOjU2OjMxKzAxOjAwPcgpSwAAAEZ0RVh0c29mdHdhcmUASW1hZ2VNYWdpY2sgNi43LjgtOSAyMDE5LTAyLTAxIFExNiBodHRwOi8vd3d3LmltYWdlbWFnaWNrLm9yZ0F74sgAAAAYdEVYdFRodW1iOjpEb2N1bWVudDo6UGFnZXMAMaf/uy8AAAAYdEVYdFRodW1iOjpJbWFnZTo6aGVpZ2h0ADUxMsDQUFEAAAAXdEVYdFRodW1iOjpJbWFnZTo6V2lkdGgANTEyHHwD3AAAABl0RVh0VGh1bWI6Ok1pbWV0eXBlAGltYWdlL3BuZz+yVk4AAAAXdEVYdFRodW1iOjpNVGltZQAxNTU0ODA3MzkxUirmgwAAABN0RVh0VGh1bWI6OlNpemUAMzYuM0tCQsEel2MAAABTdEVYdFRodW1iOjpVUkkAZmlsZTovLy4vdXBsb2Fkcy81Ni9MempoVjJ3LzE4NzkvaWNvbmZpbmRlci0xMC1hdmF0YXItMjc1NDU3NV8xMjA1MjEucG5nuLHvOgAAAABJRU5ErkJggg==" style="width:96px;height:96px; overflow:hidden;" class="mx-auto d-block" alt="perfil">
                    </td>
                    <td>
                        <div class="col-md-12 py-1"><b id="firma1_nombre">Jhon Doe</b></div>
                        <div id="firma1_titulo" class="col-md-12 pb-1">Ingeniero en Sistemas</div>
                        <div class="col-md-12 py-1">
                          <a id="firma1_telf" href="https://wa.me/59176543210" style="color: #82c91e;"><img src="data:image/png;base64, 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" width="26" height="26" alt="whatsapp logo"></a>                            
                          <img src="data:image/png;base64, iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAJVSURBVEhLrZSxT1NRFMZPSxvagqEgkuAgmw78AYQEDAnRQYnBwUUmI6sE4oQmEJjYKMSwmOjCSmKUuApqxBEHB0MiaExIUGhLoC2lCt+59/B4t+/etoO/5PT7znuv57z77nkvRFXYHujpg9xE3EJ0IJoQm4jXiLn25Y9bUCfOBiichEwiHiIu8DEH3GRUfABrAyn+EjGoDlTnA5pcF28QFi1nAuEVzx2XaCu7Txt7Gfq2m6Zf+weUPSrKWUUvbmpRvEFgBbiQ7+QdQjX/k8vTbr7ANsDFeIxaE3HJFFexkg3xCtsK7iLU8YPi8VnxDGIM0dy39pVvir06x9f4eCLqYWvgPZpM4UgcTaNwCsGNiD3kAft0wVhdYM9sDS6JUqFUEkdLon5e8U8e++ODR9jA1sDjRBQmK85PVNRPYE9tDX6LUn1dnTYhuqeNwRD/xCIRlQjroh62Bsui1IIpEZ6vdHcOs4EmEY9g+SWkZKye5YzPoh62Mb0C+aEzop3DHDbS22yDZhRva0hIRjxONzCmqzrVBFaAC35CvJeGC7Q3NlBcHkU4FKJENKKO+YozC+XFmUqfirTOTHjjLX/i8b2GBjs6Pcc6RbiQ/zCiMxPrHRGlbMUZ55ie/AsvQCp+igW+Zk7bIM4Gl9++/wtRn4QqjMuKrThWfA72g0evS2cB3qD4HfFWnCvwcV+0HP5GzGjrpmoD3OF3yAudGTzDuU/indSyAuYxIqetgp/5lLaVqamBbOJTnSlmK22sn1pXQNFSkUeRR/ILYp6P/XcwUbcR/ZLWANEpOMyrwfdDbGEAAAAASUVORK5CYII=" width="24" height="24" alt="ubicacion"><span id="firma1_geo"> Santa Cruz, Bolivia</span>
                        </div>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="col-md-12">
                <button class="btn btn-secondary btn-block my-3" onclick="CopyToClipboard();"> Copiar al Portapapeles</button>
              </div>
            </div>

          </div>     -->    
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
      var nombre="";
      var descripcion="";
      var ubicacion="";
      var telefono="";
      var color="";

      function setActive(item,bgcolor)
      {
        $('.esfera.active').removeClass('active');
        $(item).addClass("active");
        color=bgcolor;
        console.log(color);
      }

      $("form").submit(function(e){
        e.preventDefault();
        generarFirma();   
      });

      function generarFirma()
      {
        nombre=$('#inputName').val();
        descripcion=$('#inputTitulo').val();
        ubicacion=$('#inputAddress').val();
        //se usara esta validacion por el momento
        telefono=($('#inputTelf').val()!="")? ($('#inputTelf').val().match(/\d/g)).join("")  :  0;
        
        //generacion de firmas
        $('#firmas_generadas').html("");
        $('#firmas_generadas').append('<div id="row1" class="row"></div>');
        $('#row1').append('<div id="r1_col1" class="col-md-4"></div>');    
        $('#r1_col1').append(`<table id="firma" class="col-md-12">      
              <tbody>
                  <tr>
                    <td id="firma1_divider">
                      <img src="data:image/png;base64,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D543bwaf+L8Bpnd04GQgBCRTksHMSN3TGUimZlMABTwM/AyQeS6mhOl5L37BSeC/458SMvMQQH9CYVsjdbcsjf7EbArwNPA9YHA65EMp3Ee/Ah3At/BN0syjs1viyZG6Swmd3WqGNll8Gv8C/Cega7rkQ6n8d78ibcB/xV87mDlIpejq/nQatKCrW5TkvOLxofAb2H8DjpWCfCjpBCoAfizkLuBR/Kl56eF6kt6+E1/v7YOZ2/Dn4sfBvkEJyYdSCnDz7UM9oR2/i/4YSA2/729Ln95eICEgl1P09p8Y7OtLaJjm9McBpTyO35qQBH6IfyZ2ZynJh5kIIfgVTOQr/Q1gPwI0y/O0jO1OO1SXTnskUyfeJZUSDKanJ4AAPWPnNHv4TMuPgLsR/BhIlpp8mKkYzs2bQeBgeY8BNyDEC1rGcvXM2NuHiidIwEBSYZon1ts0YWBgmhUXaIOWrqUthSae9euu/hWFOxPkw0xmPd+Ur/BjD+wiErgj0J3+olsTvQv/y5mnpoIQ0NOrsO0xdug5gu5eOU0TpFBqZ6Bz8CF3Qc0TDOZ6uenOGaMIZmML0s2bib52oMv84Td/4dTGv4hSf4eftDoFepSis3u8jS6Crmm5or0o9VdufdmXzB997xfV97/ZO1OtfjRmZeNI9if3gqgCTRzBd+M24YdvJyeElIqe3rF34gH09PlBucmhB/8rtjYB31eG1oYQ9D/909mgZpY3XvgtyuGxB94A/oi/uHMJ/kGwZ1HoG/ZsW9I9QbJxTy9YtiIcKmSH0sD7wIvAVuA9wJmNFv9pnJSdL8NCPP7gG5RF3yCV+Xv8M+muw/9O+MX4X6w2AiEgayoSifF7bWJAkMlAJDzW0QNZ4AD+ytUzwDYCKoWtwVe+dlJogJMlwBBuGn7wJI898Bz+0b91+AP1Bfnfy4E5CBEjNShJZ8YXIJMVpAYVdbUuSmXwd6d8BGzHJ34Hfr7+tAJopcTJFWA0fEIk0MWvH3yBgPEClhPEF2QuQrSQNatwXA1/2h1l5BwL/3vlHcclk1UI0YcfGmkD0UuZsEmr0YKfwimcwimcwimcdPw/zTbjzI85l9cAAAAldEVYdGRhdGU6Y3JlYXRlADIwMTktMDQtMDlUMTE6NTY6MzErMDE6MDBMlZH3AAAAJXRFWHRkYXRlOm1vZGlmeQAyMDE5LTA0LTA5VDExOjU2OjMxKzAxOjAwPcgpSwAAAEZ0RVh0c29mdHdhcmUASW1hZ2VNYWdpY2sgNi43LjgtOSAyMDE5LTAyLTAxIFExNiBodHRwOi8vd3d3LmltYWdlbWFnaWNrLm9yZ0F74sgAAAAYdEVYdFRodW1iOjpEb2N1bWVudDo6UGFnZXMAMaf/uy8AAAAYdEVYdFRodW1iOjpJbWFnZTo6aGVpZ2h0ADUxMsDQUFEAAAAXdEVYdFRodW1iOjpJbWFnZTo6V2lkdGgANTEyHHwD3AAAABl0RVh0VGh1bWI6Ok1pbWV0eXBlAGltYWdlL3BuZz+yVk4AAAAXdEVYdFRodW1iOjpNVGltZQAxNTU0ODA3MzkxUirmgwAAABN0RVh0VGh1bWI6OlNpemUAMzYuM0tCQsEel2MAAABTdEVYdFRodW1iOjpVUkkAZmlsZTovLy4vdXBsb2Fkcy81Ni9MempoVjJ3LzE4NzkvaWNvbmZpbmRlci0xMC1hdmF0YXItMjc1NDU3NV8xMjA1MjEucG5nuLHvOgAAAABJRU5ErkJggg==" style="width:96px;height:96px; overflow:hidden;" class="mx-auto d-block" alt="perfil">
                    </td>
                    <td>
                        <div class="col-md-12 py-1"><b id="firma1_nombre">Jhon Doe</b></div>
                        <div id="firma1_titulo" class="col-md-12 pb-1">Ingeniero en Sistemas</div>
                        <div class="col-md-12 py-1">
                          <a id="firma1_telf" href="https://wa.me/59176543210" style="color: #82c91e;"><img src="data:image/png;base64, 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" width="26" height="26" alt="whatsapp logo"></a>                            
                          <img src="data:image/png;base64, iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAJVSURBVEhLrZSxT1NRFMZPSxvagqEgkuAgmw78AYQEDAnRQYnBwUUmI6sE4oQmEJjYKMSwmOjCSmKUuApqxBEHB0MiaExIUGhLoC2lCt+59/B4t+/etoO/5PT7znuv57z77nkvRFXYHujpg9xE3EJ0IJoQm4jXiLn25Y9bUCfOBiichEwiHiIu8DEH3GRUfABrAyn+EjGoDlTnA5pcF28QFi1nAuEVzx2XaCu7Txt7Gfq2m6Zf+weUPSrKWUUvbmpRvEFgBbiQ7+QdQjX/k8vTbr7ANsDFeIxaE3HJFFexkg3xCtsK7iLU8YPi8VnxDGIM0dy39pVvir06x9f4eCLqYWvgPZpM4UgcTaNwCsGNiD3kAft0wVhdYM9sDS6JUqFUEkdLon5e8U8e++ODR9jA1sDjRBQmK85PVNRPYE9tDX6LUn1dnTYhuqeNwRD/xCIRlQjroh62Bsui1IIpEZ6vdHcOs4EmEY9g+SWkZKye5YzPoh62Mb0C+aEzop3DHDbS22yDZhRva0hIRjxONzCmqzrVBFaAC35CvJeGC7Q3NlBcHkU4FKJENKKO+YozC+XFmUqfirTOTHjjLX/i8b2GBjs6Pcc6RbiQ/zCiMxPrHRGlbMUZ55ie/AsvQCp+igW+Zk7bIM4Gl9++/wtRn4QqjMuKrThWfA72g0evS2cB3qD4HfFWnCvwcV+0HP5GzGjrpmoD3OF3yAudGTzDuU/indSyAuYxIqetgp/5lLaVqamBbOJTnSlmK22sn1pXQNFSkUeRR/ILYp6P/XcwUbcR/ZLWANEpOMyrwfdDbGEAAAAASUVORK5CYII=" width="24" height="24" alt="ubicacion"><span id="firma1_geo"> Santa Cruz, Bolivia</span>
                        </div>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="col-md-12">
                <button class="btn btn-secondary btn-block my-3" onclick="CopyToClipboard();"> Copiar al Portapapeles</button>
              </div>`);    



        $('#firma').css("border", "2px solid "+color);
        $('#firma1_divider').css("border-right", "2px solid "+color);

        $('#firma1_nombre').text(nombre);
        $('#firma1_titulo').text(descripcion);
        $('#firma1_geo').text(ubicacion);
        $('#firma1_telf').attr("href", "https://wa.me/"+telefono);
        
      }

      function CopyToClipboard() 
      {
        var elm = document.getElementById("firma");
        
        if(window.getSelection)
        {
          // other browsers
          var selection = window.getSelection();
          var range = document.createRange();
          range.selectNodeContents(elm);
          selection.removeAllRanges();
          selection.addRange(range);
          document.execCommand("Copy");
          alert("Se copio la firma al portapapeles");
        }
        else
        {
          alert("No se pudo copiar la firma.");
        }

      }
    </script>
  </body>
</html>