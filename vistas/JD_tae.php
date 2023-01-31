<?php
require 'nav.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JD_TAE</title>

    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/flip.css">
    
    <link rel="shortcut icon" href="../public/imagenes/favicon.png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  

</head>
<body>
<div class="col-12 imgbgtae">
    <div class="row mb-2">
        <div class="col-md-8">
          <img src="https://www.jdsuite.mx/images/ltae.png" alt="">
        </div>
        <div class="col-md-4 ">
            <div class=" form-servicioslT">
                <div class="text-servicioslp">
                <h2>
                Tiempo aire y pago de servicios.
                </h2>
                <h4>
                ¡Adquierelo ahora mismo!
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

<div class="lip">
<div class="girar">
<center>
<div class="col-12 cards-grid w-100%">
      <div class="row mb-2">
        <div class="col-md-6 ">
        <div class="flip-card">
              <h3>¿Que es el TAE?</h3>
                <div class="flip-card-inner">
                    <div class="flip-card-front" 
                      style="background-image: url('../public/imagenes/tae1.png');">
                    </div>
                    <div class="flip-card-back">
                    <p>
                    JD TAE es un sistema multiplataforma, no importa donde estés o que tecnología ocupes, podrás realizar recargas, pago de servicios y venta de tarjetas de regalo.
                    JD TAE quiere que crezcas y compitas con estas tiendas, comienza atrayendo gente a tu negocio ofertando pago de servicios, y lo mejor, con una comisión igual o menor que dichas tiendas.
                    </p>
                    </div>
                </div>
            </div>    

        </div>
        <div class="col-md-6">
        <div class="flip-card">
        <h3>Beneficios</h3>
                <div class="flip-card-inner">
                    <div class="flip-card-front" 
                      style="background-image: url('../public/imagenes/tae2.png');">
                    </div>
                    <div class="flip-card-back">
                    <p>
                    ¡Obtén una comisión por cada recarga, haciendo dinero sin esforzarte!
                            Sabemos que las recargas de saldo en prepago es parte de nuestra vida cotidiana, por lo que JD TAE es una herramienta completamente portátil, lo podrás usar en tu PC, Móvil o Tablet.
                            El sistema de recargas electrónicas, obteniendo una comisión del 6% por cada recarga efectuada.
                    </p>
                    </div>
                </div>
            </div>

        </div>

        

     </div>
</center>
 </div>
</div>
</div>
<!--TUTORIALES/PREGUNTAS-->
<div class="lip">
<div class="col-12 lip">
      <div class="row mb-2">
        <div class="padright col-md-5 col-mb-6 border rounded overflow-hidden p-4 flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="row mb-2">
                <div class="">
                  <div class="row mb-2">
                    <h3>Tutoriales</h3>
                    <p>Generamos una serie de videos para facilitarte el uso de “JD TAE”. 
                      Conoce lo sencillo y rápido que es.</p>
                    <div class="text-md-center aos-init aos-animate" data-aos="flip-down">
                      <iframe  height="100%" src="https://www.youtube.com/embed/-3IsVznqozU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                  
                    <center>
                    <div class="col-mb-2">
                      <div class="lip">
                        <a href="https://www.youtube.com/watch?v=-3IsVznqozU&t=2s">
                        <button class=" paddbot">Ver más videos</button>
                        </a>
                      </div>
                    </div>  
                    </center>
                  </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 border rounded overflow-hidden p-4 flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <h3>Preguntas frecuentes</h3>
        <div class="lip">
          <a class="btn btn-primary w-100" data-toggle="collapse" href="#collapseim" role="button" aria-expanded="false" aria-controls="collapseim">
          <i class="fa fa-sort-desc" style="font-size:24px"></i>¿Como implemento TAE?
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
  </div>
 </div>
</div>

  <!--PARTE DE WHATS-->
  <div class="msgwh">
    <a href="https://wa.me/5215539488047?text=Hola, necesito información sobre " target="_blank">
      <img src="../public/imagenes/whatsapp.png" alt="" style="width: 100%;"/>
    </a>
  </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>
    
   