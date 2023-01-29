<?php
require 'nav.php';
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
                      <div class="col-12 centrado">
                        <button style="background-color: #a6d0fc;border-color: #a6d0fc;" class=" btnmasinfo" id="enviarc" type="submit" >Enviar</button>
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
      <div class="col-md-4">
        <div class="color h-80 p-5 rounded-3">
          <h2>¿Cómo vender en JD Store?</h2>
          <p>JD Store es una herramienta muy potente que te da la oportunidad de administrar toda la información que tu empresa genera, si tu internet llega a fallar, no te preocupes, tu sistema JD Store sigue funcionando y puedes continuar con tus cobros.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="yout rounded-3">
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/6cODf3b8tEA"
            title="YouTube video player" frameborder="0" allowfullscreen
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" >
        </iframe>
        </div>
      </div>
      <div class="col-md-4">
        <div class="color h-80 p-5 rounded-3">
        <h2>Funciona para cualquier giro</h2>
          <p>Es aplicable para una gran gama de giros, controla tus inventarios, ventas, compras y gestiona tus clientes y te apoya a detectar áreas de oportunidad para tu negocio, es fácil de usar y ofrece herramientas avanzadas de administración y operación, brinda información que simplifica la administración de tu negocio.

          Descarga las características de tu Punto de Venta.</p>
        </div>
      </div>
      <div class="col-md-4 blo">
        <div class="">
          <img src="../public/imagenes/rstore.png" class="d-block "width="90%"  height="90%" alt="...">
        </div>
      </div>
      <div class="col-md-4 blo">
        <div class="color h-80 p-5 rounded-3">
        <h2>Requisitos del sistema</h2>
          <p>Dependiendo de tu negocio y crecimiento tu equipo de cómputo debe ir mejorando, sin embargo, JD Store es ligero y se puede instalar en la mayoría de los equipos, por ello te mencionamos los requisitos mínimos que debe tener tu equipo, ya sea PC de escritorio o una laptop.</p>
        </div>
      </div>
      <div class="col-md-4 blo">
        <div class="">
          <img src="../public/imagenes/store2.gif" height="10%" alt="">
        </div>
      </div>
      <div class="col-md-6 ">
        <div class="">
          <img src="../public/imagenes/cloud.png" class="d-block " height="20%" alt="...">
        </div>
      </div>
      <br>
      <div class="col-md-6 ">
        <div class="color h-80 p-5 rounded-3">
        <h2>JD Cloud</h2>
          <p>Actualiza y víncula todas tus sucursales sin importar la distancia ni cantidad, JD Cloud te permitirá revisar los reportes de tus ventas desde tu smartphone mientras disfrutas de tu tiempo libre o en viajes de placer.

        * Se requiere una poliza de soporte para contar con este servicio.</p>
        </div>
      </div>
</div>
</div>

<!--CARRUSEL DE OPCIONES-->
<div id="carouselExampleAutoplaying" class="carousel slide h-25" data-bs-ride="carousel">
  <div class="carousel-inner">
  <div class="carousel-item"width="50%" height="30%">
    <center>
        <img src="../public/imagenes/rstore.png" class="d-block "  height="15%" alt="...">
        <h5>Requisitos del sistema</h5>
        
    </center>
    </div>
    <div class="carousel-item"width="50%" height="30%">
    <center>
        <img src="../public/imagenes/rstore.png" class="d-block "  height="15%" alt="...">
        <h5>Requisitos del sistema</h5>
        
    </center>
    </div>
    <div class="carousel-item"width="40%" height="30%">
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
<div class="col-12 bgjd02">
   <div class="row">
      <div class="col-md-12 lic">
        <center>
        <h1>TIPOS DE LICENCIAS</h1>
        <p>JD Store se adapta al tamaño de tu negocio y de tu crecimiento, es por ello que desarrollamos varios tipos de licencia. Con ello el único límite son tus ganas de crecer.</p>
        </center>
      </div>
        
        <div class="col-md-2 tipos">
            <center>
            <h4>Store Servidor</h4>
            <p>La licencia ideal para tu negocio. JD Store tipo Servidor contiene todos los módulos de tu sistema de Punto de Venta, podrás llevar el control y registro total de tu negocio, de los artículos, clientes, proveedores y demás, al mismo tiempo que tendrás a tu disposición los Reportes adecuados para tomar las decisiones que harán crecer tu negocio.</p>
            </center>
            
        </div>
        <div class="col-md-2 tipos">
        <center>
            <h4>Store Terminal</h4>
            <p>Esta licencia es el complemento ideal para la tipo Servidor, ya que nos apoya a crecer nuestro negocio. Si cobrar en una caja ya no es suficiente es hora de que evoluciones y hagas crecer tu punto de venta.

                Al adquirir esta licencia podrás conectar otro equipo a tu JD Store, podrás tener dos cajeros operando de manera simultánea y controlar en su totalidad el sistema.

                *Requieres una licencia tipo Servidor para adquirir esta licencia</p>
        </center>
        </div>
        <div class="col-md-2 tipos">
        <center>
            <h4>Servidor Farmacia</h4>
            <p>Si tu giro es una farmacia entonces esta es la solución, JD Store tiene un modulo de farmacia que te permitirá gestionar tu venta de antibióticos.

            Si tienes un consultorio para potenciar tus ventas, JD Store tiene su modulo para registrar expedientes electrónicos de tus pacientes y emitir recetas desde el mismo sistema.

            Rota tu inventario con ayuda de tu doctor y registra los servicios prestados para que cumplas con los requerimientos de la secretaría de salud solicita.</p>
        </center>
        </div>
        <div class="col-md-2 tipos">
        <center>
            <h4>Servidor Citas</h4>
            <p>Tu propio calendario de ventas en el sistema es posible.

                Gestiona tus citas y clientes desde JD Store y dale seguimiento a una venta desde que se aparta y hasta que se vende.

                Da de alta cabinas de atención y responsables de atender, para que el sistema asigne actividades a tu personal.

                Gestiona anticipos de servicios y liquidaciones al realizarlos, esto te ayudará a asegurar la prestación del servicio.</p>
        </center>
        </div>
        <div class="col-md-2 tipos">
        <center>
            <h4>Servidor Rutas de Reparto</h4>
            <p>Si en tu empresa repartes a domicilio o generas rutas de entrega JD te ayuda a generar tus repartos de manera segura y sencilla.

                Maneja los estados de cuenta por cada cliente y administra cada productos que vendes sencillamente.</p>
        </center>
        </div>
   </div>
</div>


<!--PARTE DE PREGUNTAS-->
<div class="bgjd02 col-12">
    <div class="row">
      <div class="col-12 col-md-6 tac2 blb">
        <h2 class="titjd2 tac">Tutoriales</h2>
        <p class="dsuite3">
          Generamos una serie de videos para facilitarte el uso de tu Punto de Venta “JD Store”. Conoce lo sencillo y rápido que es.
        </p>
        <center>
        <a href="https://www.youtube.com/watch?v=q1NM5De1JIM&list=PLCHufcZLZMIwcksYnpPP5zEN2TswT9JKz" target="_blank">
          <button class="imgservicio paddbot btnmasinfo">Videotutoriales</button>
        </a>
        </center>
      </div>
      <div class="col-12 col-md-6  tac2 blb">
        <h2 class="titjd2 tac">FAQ's</h2>
        <div class="dsuitefaq">
        <!-- FAQs Acordein-->
                  <div class="panel-group" id="accordion">
              <div class="panel panel-primary">
                  <div class="panel-heading">
                      <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#">
                      ¿Cómo entregarán mi paquete?
                      </a>
                      </h4>
                  </div>
                  <div id="faq1" class="panel-collapse collapse">
                      <div class="panel-body">
                          Recibirás un correo por parte de nuestros especialistas para concretar una cita, de este modo ellos se encargarán de instalar tu sistema JD y configurarlo para tu primero uso.<br />
                            Es importante que te mantengas atento a sus indicaciones.                      </div>
                  </div>
              </div>
              <!-- /.panel -->
          </div>
                    <div class="panel-group" id="accordion">
              <div class="panel panel-primary">
                  <div class="panel-heading">
                      <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#">
                      ¿Puedo pagar con tarjeta de crédito a meses sin intereses?
                      </a>
                      </h4>
                  </div>
                  <div id="faq2" class="panel-collapse collapse">
                      <div class="panel-body">
                          Claro que si, en tu carrito de compra elije la opción Pago con tarjeta de crédito y con la seguridad de <b>Mercado Pago</b> podrás procesar tu pago diferido                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--PARTE DE WHATS-->
  <div class="msgwh">
    <a href="https://wa.me/5215539488047?text=Hola, necesito información sobre " target="_blank">
      <img src="../public/imagenes/whatsapp.png" alt="" style="width: 100%;"/>
    </a>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
    
   