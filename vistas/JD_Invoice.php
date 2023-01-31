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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   

</head>
<body>
<div class="col-12 imgbgst">
    <div class="row mb-2">
        <div class="col-md-8">
          <img src="https://www.jdsuite.mx/images/linvoice.png" alt="">
        </div>
        <div class="col-md-4 ">
            <div class=" form-servicioslI">
                <div class="text-servicioslp">
                <h2>
                Facturación Electrónica
                </h2>
                <h4>
                Con la nueva version 3.3 de CFDI
                ¡Adquierelo ahora mismo!
                Desde $225.00
                </h4>
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
                              <h5><font color="blue" face="Comic Sans MS,arial">JD Invoice</font></h5>
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
<div class="lip">
        <div class="col-12">
            <div class="row mb-2">
            <div class="col-md-7 wid">
                <div class="vid">
                    <iframe  width="100%" height="315"  src="https://www.youtube.com/embed/OMiGNTdC1y4" title="YouTube video player" 
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="lip border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <h5>¿Que es JD Invoice?</h5>
                    <p>
                     JD Invoice es un software que cubre con todas las necesidades de Facturación Electrónica de manera fácil, rápida y segura.
                     JD Invoice cuenta con el servicio de Impuestos locales y Addendas. Complementos para Notarios, INE, Coordinados, Comercio Exterior.
                    </p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="righ w-100">
                <div class="">
                    <img src="../public/imagenes/invoice2.gif" width="65%"  alt="">
                </div> 
                </div>
                <div class="center">
                    <h3>Funciona para cualquier giro</h3>
                    <p>
                    Podrás emitir facturas, notas de crédito, cartas porte, recibos de honorarios y ahora también con un mismo paquete emite tus complementos de pago.
                    Almacena tus facturas sin costo extra sin importar el tiempo, nuestra potente nube te ayuda a resguardar tu información de forma segura.
                    Descarga las características.
                    </p>
                    <button class="paddbot2">Características</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!--CARRUSEL-->
<div id="carousel" class="carousel slide" data-ride="carousel">
            <div class="d-grid gap-2 d-md-block text-center">
              <a class="btn text-white" style="background-color: #3b5998;" href="#carousel" data-slide="prev" role="button"><i class="fas fa-chevron-circle-left"></i></a>
              <a class="btn text-white" style="background-color: #3b5998;" href="#carousel" data-slide="next" role="button"><i class="fas fa-chevron-circle-right"></i></a>
            </div>
            <br>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row">
        <div class="col">
          <div class="py-4 text-center card"><a href="#"><img src="https://www.jdsuite.mx/productos/CB0000000158.jpg" alt=""></a>
              <div class="card-body">
                <h3 color-text="blue">Productos 1</h3>
                <h2>$5,999.00</h2>
                <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i>Agregar</a>
              </div>
          </div>

        </div>
        <div class="col">
          <div class="py-4 text-center card"><a href="#"><img src="https://www.jdsuite.mx/productos/CB000000042.jpg" alt=""></a>
                <div class="card-body">
                  <h3 color-text="blue">Productos 2</h3>
                  <h2>$5,999.00</h2>
                <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i>Agregar</a>
              </div>
          </div>
        </div>
        <div class="col">
          <div class="py-4 text-center card"><a href=""><img src="https://www.jdsuite.mx/productos/CB000000068.jpg" alt=""></a>
                <div class="card-body">
                  <h3 color-text="blue">Productos 3</h3>
                  <h2>$5,999.00</h2>
                <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i>Agregar</a>
              </div>
          </div>
        </div>
        <div class="col">
          <div class="py-4 text-center card"><a href=""><img src="https://www.jdsuite.mx/productos/CB000000106.jpg" alt=""></a>
                <div class="card-body">
                  <h3 color-text="blue">Productos 4</h3>
                  <h2>$5,999.00</h2>
                <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i>Agregar</a>
              </div>
          </div>
        </div>
        <div class="col">
          <div class="py-4 text-center card"><a href=""><img src="https://www.jdsuite.mx/productos/CB0000001412.jpg" alt=""></a> 
                <div class="card-body">
                  <h3 color-text="blue">Productos 5</h3>
                  <h2>$5,999.00</h2>
                <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i>Agregar</a>
              </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row">
        <div class="col">
          <div class="py-4 text-center card"><a href=""><img src="https://www.jdsuite.mx/productos/CB0000001513.jpg" alt=""></a>
                <div class="card-body">
                  <h3 color-text="blue">Productos 6</h3>
                  <h2>$5,999.00</h2>
                  <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i>Agregar</a>
                </div>
          </div>
        </div>
        <div class="col">
          <div class="py-4 text-center card"><a href=""><img src="https://www.jdsuite.mx/productos/CB0000001715.jpg" alt=""></a>
                  <div class="card-body">
                    <h3 color-text="blue">Productos 7</h3>
                    <h2>$5,999.00</h2>
                    <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i>Agregar</a>
                  </div>
          </div>
        </div>
        <div class="col">
          <div class="py-4 text-center card"><a href=""><img src="https://www.jdsuite.mx/productos/CB0000001614.jpg" alt=""></a>
                <div class="card-body">
                  <h3 color-text="blue">Productos 8</h3>
                  <h2>$5,999.00</h2>
                  <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i>Agregar</a>
                </div>
          </div>
        </div>
        <div class="col">
          <div class="py-4 text-center card"><a href=""><img src="https://www.jdsuite.mx/productos/CB0000001816.jpg" alt=""></a>
                <div class="card-body">
                  <h3 color-text="blue">Productos 9</h3>
                  <h2>$5,999.00</h2>
                  <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i>Agregar</a>
                </div>
          </div>
        </div>
        <div class="col">
          <div class="py-4 text-center card"><a href=""><img src="https://www.jdsuite.mx/productos/CB0000002119.jpg" alt=""></a>
                <div class="card-body">
                  <h3 color-text="blue">Productos 10</h3>
                  <h2>$5,999.00</h2>
                  <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i>Agregar</a>
                </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row">
        <div class="col">
          <div class="py-4 text-center card"><a href=""><img src="https://www.jdsuite.mx/productos/CB0000004237.jpg" alt=""></a>
                <div class="card-body">
                  <h3 color-text="blue">Productos 11</h3>
                  <h2>$5,999.00</h2>
                  <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i>Agregar</a>
                </div>
          </div>
        </div>
        <div class="col">
          <div class="py-4 text-center card"><a href=""><img src="https://www.jdsuite.mx/productos/CB0000004540.jpg" alt=""></a>
                <div class="card-body">
                  <h3 color-text="blue">Productos 12</h3>
                  <h2>$5,999.00</h2>
                  <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i>Agregar</a>
                </div>
          </div>
        </div>
        <div class="col">
          <div class="py-4 text-center card"><a href=""><img src="https://www.jdsuite.mx/productos/CB0000004850.jpg" alt=""></a>
                <div class="card-body">
                  <h3 color-text="blue">Productos 13</h3>
                  <h2>$5,999.00</h2>
                  <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i>Agregar</a>
                </div>
          </div>
        </div>
        <div class="col">
          <div class="py-4 text-center card"><a href=""><img src="https://www.jdsuite.mx/productos/CB000013642452.webp" alt=""></a>
                <div class="card-body">
                  <h3 color-text="blue">Productos 14</h3>
                  <h2>$5,999.00</h2>
                  <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i>Agregar</a>
                </div>
          </div>
        </div>
        <div class="col">
          <div class="py-4 text-center card"><a href=""><img src="https://www.jdsuite.mx/productos/CB000014732599.webp" alt=""></a>
                <div class="card-body">
                  <h3 color-text="blue">Productos 15</h3>
                  <h2>$5,999.00</h2>
                  <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i>Agregar</a>
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--TUTORIALES--> 
  <div class="lip">
    <div class="fondoInvoice border rounded overflow-hidden p-4 flex-md-row mb-4 shadow-sm h-md-250 position-relative">
      <div class="col-12">
        <div class="row mb-2">
          <div class="col">
            <div class="row mb-2">
                <div class="col-md-3">
                <h4>Tutoriales</h4>
                <p>
                Generamos una serie de videos para facilitarte el uso de tu Facturador Electrónico “JD Invoice”. Conoce lo sencillo y rápido que es facturar.
                </p>
                <a href="https://www.youtube.com/watch?v=XzBEF-WqgyY&embeds_euri=http%3A%2F%2Flocalhost%2F&feature=emb_imp_woyt">
                <button class="btn btn-primary" >Ver mas videos</button>
                </a>
              </div>
              <div class="col-md-9">
              <center>
              <iframe width="70%" height="315" src="https://www.youtube.com/embed/XzBEF-WqgyY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </center>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Preguntas--> 
  <div class="lip">
    <center>
    <div class="col-md-8 ">
      <h2>Preguntas frecuentes</h2>
      <div class="lip">
        <a class="btn btn-primary w-100" data-toggle="collapse" href="#collapseim" role="button" aria-expanded="false" aria-controls="collapseim">
        <i class="fa fa-sort-desc" style="font-size:24px"></i>¿Como implemento Invoice?
        </a>
        <div class="collapse" id="collapseim">
            <div class="card card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
            </div>
        </div>
      </div>
      <div class="lip">
        <a class="btn btn-primary  w-100" data-toggle="collapse" href="#collapseben" role="button" aria-expanded="false" aria-controls="collapseben">
        <i class="fa fa-sort-desc" style="font-size:24px"></i>¿Qué beneficios tengo con TAE?
        </a>
        <div class="collapse" id="collapseben">
            <div class="card card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
            </div>
        </div>
      </div>
    </div>
    </center>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
    
   