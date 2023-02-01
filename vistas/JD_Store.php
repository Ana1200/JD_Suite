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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
  <!--CONTENT VIDEO-->
  <div class="col-12 imgbgst">
    <div class="row mb-2">
      <div class="col-md-8 ">
      <img src="../public/imagenes/lstore.png" alt=""/>
      </div>
      <div class="col-md-4">
        <div class=" form-servicioslS">
            <div class="text-servicioslp">
              <i>La navaja suiza de los puntos de venta</i>
              <p>¡Adquierelo ahora mismo!</p>
                <p>Desde $ 3,999.00</p>
            </div>
          
          <center>
              <!-- Modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#trackerModal"> 
              <i class="fa fa-pencil"></i> Formulario
          </button>

          <div class="modal fade" id="trackerModal" tabindex="-1" aria-labelledby="formulario" aria-hidden="true">
            <div class="modal-dialog" style="min-width: 75%;">
              <!--Con el min-width manejo el ancho del modal -->
              <div class="modal-content">

                <div class="modal-header">
                  <h2 class="modal-title" id="formulario" ><font color="black" face="Comic Sans MS,arial">Formulario</font></h2>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span>&times;</span>
                          </button>
                </div>
                    <div class="modal-body">
                      <div class="container-fluid">
                        <form>
                          <div class="row">
                            <div class="form-group col-md-6">
                              <label for="nombre" id="fortext">Nombre</label>
                              <input type="text" class="form-control" id="nombre" placeholder="Nombre" required>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="correo" class="formulario" id="fortext">Correo</label>
                              <input type="email" class="form-control" id="correo" placeholder="Correo" required>
                            </div>
                          </div>
                          <div class="row">
                            <div class="form-group col-md-6">
                              <label for="celular" class="formulario" id="fortext">Celular</label>
                              <input type="text" class="form-control" id="Celular"placeholder="Celular">
                            </div>
                            <div class="form-group col-md-3">
                              <span>
                              <h3><font color="black" face="Comic Sans MS,arial">Producto</font></h3>
                              <h5><font color="blue" face="Comic Sans MS,arial">JD TAE</font></h5>
                              </span>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Enviar</button>
                    </div>
                  </div>
                </div>
              </div>
              
              <a href="./shop.php" class="compras" >
                    <button class="btn btn-light">Adquirir</button>
              </a>
              </center>
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
        <div class="w-100">
          <img src="../public/imagenes/store2.gif" width="100%"alt="">
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

<!--TPOS LIC--> 

<!--TIPOS DE LICENCIA-->
<div class="container">
              <div class="row">
              <h1>TIPOS DE LICENCIAS</h1>
                <div class="col-xs-12 ">
                  <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="nav-servidor-tab" data-toggle="tab" href="#nav-servidor" role="tab" aria-controls="nav-servidor" aria-selected="true">Store Servidor</a>
                      <a class="nav-item nav-link" id="nav-terminal-tab" data-toggle="tab" href="#nav-terminal" role="tab" aria-controls="nav-terminal" aria-selected="false">Store Terminal</a>
                      <a class="nav-item nav-link" id="nav-farmacia-tab" data-toggle="tab" href="#nav-farmacia" role="tab" aria-controls="nav-farmacia" aria-selected="false">Servidor Farmacia</a>
                      <a class="nav-item nav-link" id="nav-citas-tab" data-toggle="tab" href="#nav-citas" role="tab" aria-controls="nav-citas" aria-selected="false">Servidor Citas</a>
                      <a class="nav-item nav-link" id="nav-reparto-tab" data-toggle="tab" href="#nav-reparto" role="tab" aria-controls="nav-reparto" aria-selected="false">Servidor Rutas de Reparto</a>
                    </div>
                  </nav>
                  <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-servidor" role="tabpanel" aria-labelledby="nav-servidor-tab">
                    La licencia ideal para tu negocio. JD Store tipo Servidor contiene todos los módulos de tu sistema de Punto de Venta, podrás llevar el control y registro total de tu negocio, de los artículos, clientes, proveedores y demás, al mismo tiempo que tendrás a tu disposición los Reportes adecuados para tomar las decisiones que harán crecer tu negocio.
                    </div>
                    <div class="tab-pane fade" id="nav-terminal" role="tabpanel" aria-labelledby="nav-terminal-tab">
                    Esta licencia es el complemento ideal para la tipo Servidor, ya que nos apoya a crecer nuestro negocio. Si cobrar en una caja ya no es suficiente es hora de que evoluciones y hagas crecer tu punto de venta.
                    Al adquirir esta licencia podrás conectar otro equipo a tu JD Store, podrás tener dos cajeros operando de manera simultánea y controlar en su totalidad el sistema.
                    *Requieres una licencia tipo Servidor para adquirir esta licencia
                    </div>
                    <div class="tab-pane fade" id="nav-farmacia" role="tabpanel" aria-labelledby="nav-farmacia-tab">
                    Si tu giro es una farmacia entonces esta es la solución, JD Store tiene un modulo de farmacia que te permitirá gestionar tu venta de antibióticos.
                    Si tienes un consultorio para potenciar tus ventas, JD Store tiene su modulo para registrar expedientes electrónicos de tus pacientes y emitir recetas desde el mismo sistema.
                    Rota tu inventario con ayuda de tu doctor y registra los servicios prestados para que cumplas con los requerimientos de la secretaría de salud solicita.
                    </div>
                    <div class="tab-pane fade" id="nav-citas" role="tabpanel" aria-labelledby="nav-citas-tab">
                    Tu propio calendario de ventas en el sistema es posible.
                    Gestiona tus citas y clientes desde JD Store y dale seguimiento a una venta desde que se aparta y hasta que se vende.
                    Da de alta cabinas de atención y responsables de atender, para que el sistema asigne actividades a tu personal.
                    Gestiona anticipos de servicios y liquidaciones al realizarlos, esto te ayudará a asegurar la prestación del servicio.
                    </div>
                    <div class="tab-pane fade" id="nav-reparto" role="tabpanel" aria-labelledby="nav-reparto-tab">
                    Si en tu empresa repartes a domicilio o generas rutas de entrega JD te ayuda a generar tus repartos de manera segura y sencilla.
                    Maneja los estados de cuenta por cada cliente y administra cada productos que vendes sencillamente.
                    </div>
                  </div>
                
                </div>
              </div>
        </div>
      </div>
</div>

<!--PARTE DE PREGUNTAS-->
<div class="lip col-12">
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
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
    
   