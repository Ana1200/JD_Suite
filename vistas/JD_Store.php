<?php
require 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JD_Suite</title>

    <link rel="stylesheet" href="../public/css/style.css">
    
    <link rel="shortcut icon" href="../public/imagenes/favicon.png"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
  <!--CONTENT VIDEO-->
  <div class="col-12 imgbgst">
    <div class="row">
      <div class="col-12 col-md-8 ">
        <figure>
          <a href="#" class="video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/LXg1Y7qGsiY">
            <img class="videoind" src="../public/imagenes/playv.png" width="300px"/>
          </a>
          </figure>
      </div>
      <div class="col-12 col-md-4 padlp">
        <div class=" form-servicioslp">
          <div class="col-12 tac">
            <img class="logolp" src="../public/imagenes/lstore.png" alt="punto de venta"/>
            <h1 class="text-servicioslp"><i>La navaja suiza de los puntos de venta</i></h1>
          </div>
          <div class="col-12">
            <div class="row">
              <div class="text-pform col-12 tac">
                <p>¡Adquierelo ahora mismo!</p>
                <p>Desde $ 3,999.00</p>
                <a href="#">
                    <button class="btnmasinfo " style="background-color: #a6d0fc;border-color: #a6d0fc;">Comprar Ahora</button>
                </a>
              </div>
              
              <div class="">
                <div class="col-12">
                  <h1 class="text-serviciostc">Recibe mas información</h1>
                </div>
                <div class="col-12">
                  <form action="savedata" method="post" name="sendcontact" onsubmit="return checksubmit();">
                    <input type="hidden" name="formulario" value="JDSTORE"/>
                    <div class="row">
                      <div class="text-pform col-12">
                        Nombre
                        <input class="entradatexto" type="text" name="nombre" id="nombre" onblur="checkf();" required/>
                      </div>
                      <div class="text-pform col-12 ">
                        Correo
                        <input class="entradatexto" type="email" name="email" id="email" onblur="checkf();" required/>
                      </div>
                      <div class="text-pform col-12 ">
                        Celular
                        <input class="entradatexto" type="tel" name="telefono" id="telefono" onblur="checkf();" required/>
                      </div>
                      <div class="text-pform col-12 ">
                        Producto: <label style="color: #4C7FB6">JD STORE</label>
                        <input type="hidden" value="1" name="producto" id="producto" class="entradatexto">
                      </div>
                      <div class="col-12 ">
                        <center><button style="background-color: #a6d0fc;border-color: #a6d0fc;" class=" btnmasinfo" id="enviarc" type="submit" >Enviar</button></center>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<!--OPCIONES-->
<div class="bloques">
<div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="color h-80 p-5 rounded-3">
          <h2>¿Cómo vender en JD Store?</h2>
          <p>JD Store es una herramienta muy potente que te da la oportunidad de administrar toda la información que tu empresa genera, si tu internet llega a fallar, no te preocupes, tu sistema JD Store sigue funcionando y puedes continuar con tus cobros.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="yout rounded-3">
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/6cODf3b8tEA"
            title="YouTube video player" frameborder="0" allowfullscreen
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" >
        </iframe>
        </div>
      </div>
</div>
</div>

<!--CARRUSEL DE OPCIONES-->
<div id="carouselExampleAutoplaying" class="carousel slide h-25" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" height="30%">
        <center>
        <img src="../public/imagenes/playv.png" class="d-block "  height="10%" alt="...">
        <h5>Funciona para cualquier giro </h5>
        <p>
        Es aplicable para una gran gama de giros, controla tus inventarios, ventas, compras y gestiona tus clientes y te apoya
         a detectar áreas de oportunidad para tu negocio, es fácil de usar y ofrece herramientas avanzadas de administración y 
         operación, brinda información que simplifica la administración de tu negocio.
        </p>
        </center>
      
    </div>
    <div class="carousel-item"width="50%" height="30%">
    <center>
        <img src="../public/imagenes/rstore.png" class="d-block "  height="20%" alt="...">
        <h5>Requisitos del sistema</h5>
        
    </center>
    </div>
    <div class="carousel-item"width="50%" height="30%">
    <center>
        <img src="../public/imagenes/cloud.png" class="d-block " height="20%" alt="...">
        <h5>JD Clou</h5>
        
    </center>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<!--TIPOS DE LICENCIA-->
<div class="col-12"></div>

  <!--PARTE DE WHATS-->
  <div class="msgwh">
    <a href="https://wa.me/5215539488047?text=Hola, necesito información sobre " target="_blank">
      <img src="../public/imagenes/whatsapp.png" alt="" style="width: 100%;"/>
    </a>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
    
   