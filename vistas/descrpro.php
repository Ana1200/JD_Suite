
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
<!--FORMULARIO/VERIFICACION-->
<div class="bloques">
    <div class="col-12">
      <div class="row mb-2">
        <div class="col-md-5">
          <div class="box">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="https://www.jdsuite.mx/productos/CB0000000158.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../public/imagenes/productos/CB0000001513.JPG" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../public/imagenes/productos/CB000000063.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
              <a href="" class="centrado">
                <i class="fa fa-bookmark" style="color: #a6d0fc; font-size:24px;"> </i> <span>Se encuentra en: </span> <span> JD REST</span>
              </a> 
        </div>
        <div class="col-md-7">
          <div class=" lip row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <h5>KIT BÁSICO PARA TU PUNTO DE VENTA, ACTUALIZA TU NEGOCIO CON ESTE PAQUETE Y OBSERVA LOS BENEFICIOS.</h5>
            <br>
            <div class="logo">
            <div class="estrellas">
              <i class="fa fa-star estrellasdis"  ></i>
              <i class="fa fa-star estrellasdis"  ></i>
              <i class="fa fa-star estrellasdis"  ></i>
              <i class="fa fa-star estrellasdis"  ></i>
              <i class="fa fa-star-half-full estrellasdis"  ></i>
            </div>
            </div>
              <div class="sep">
              </div>
                <div class="logo flex justify-between mb-3 text-sm">
                  <span><h3>Precio<h3><br></span>
                  <span><h3 class="precio">$789.00<h3></span>
              </div>
                <div class="flex justify-between font-bold pt-2 mt-2 mb-2 border-t border-gray-500">
                  <span">INCLUYE:</span>
                  <ul>
                    <li>LECTOR DE CÓDIGO DE BARRAS</li>
                    <li>1D/2D.</li>
                    <li>IMPRESORA TÉRMICA DE TICKETS CON , USB 80MM, AUTO CORTE</li>
                    <li>CAJÓN DE DINERO</li>
                    <li>TODO CON 1 AÑO DE GARANTÍA</li>
                  </ul>
              </div>
                  <p>CANTIDAD:<br>
                    <a href=""  class="btn btn-default" onlcick=subc();>
                    <i class="fa fa-minus-circle compra"></i>
                    </a>
                    <input type="number" min="1" value="1"  class="btn btn-default incant w-10">
                    <a href=""  class="btn btn-default" onlcick=subc();>
                    <i class="fa fa-plus-circle compra" ></i>
                    </a>
                  </p>
                    <div class="centrado">
                      <button data-testid="button-component" class="paddbot2  w-50 h-12 border font-bold transition py-3 rounded" onclick="redirect()"><i class="fas fa-shopping-bag"></i> Comprar</button>
                      <script type="text/javascript">
                        function redirect(){
                          window.location.href="https://www.jdsuite.mx/facturacion-electronica";
                        }
                      </script>
                    </div>
                  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--COMENTARIOS-->
  <div class="bloques">
    <div class="col-12">
      <div class="row mb-2">
        <div class="col-md-7">
          <div class="box">
            <div class="row mb-5 estrellas p-4">
              <h4>Productos relacionados</h4>
              <table>
                <thead>
                  <tr>
                    <td>
                      <div class="relative">
                      <div class="prod-relac">
                        <div class="img">
                          <img src="../public/imagenes/productos/CB0000001513.jpg"width="50%" height="50%" alt="">
                        </div>
                        <div class="card-body">
                            <h6>JD STORE LICENCIA TIPO TERMINAL</h6>
                            <p>$  3,999.00 </p>
                        </div>
                      </div>
                      </div>
                    </td>
                    <td>
                      <div class="relative">
                      <div class="prod-relac">
                        <div class="img">
                          <img src="../public/imagenes/productos/CB0000001513.jpg"width="50%" height="50%" alt="">
                        </div>
                        <div class="card-body">
                            <h6>JD STORE LICENCIA TIPO SERVIDOR</h6>
                            <p>$  3,999.00 </p>
                        </div>
                      </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="relative">
                      <div class="prod-relac">
                        <div class="img">
                          <img src="../public/imagenes/productos/CB0000001513.jpg"width="50%" height="50%" alt="">
                        </div>
                        <div class="card-body">
                            <h6>KID STORE LICENCIA TIPO TERMINAL</h6>
                            <p>$  3,999.00 </p>
                        </div>
                      </div>
                      </div>
                    </td>
                    <td>
                      <div class="relative">
                      <div class="prod-relac">
                        <div class="img">
                          <img src="../public/imagenes/productos/CB0000001513.jpg"width="50%" height="50%" alt="">
                        </div>
                        <div class="card-body">
                            <h6>KID STORE LICENCIA TIPO SERVIDOR</h6>
                            <p>$  3,999.00 </p>
                        </div>
                      </div>
                      </div>
                    </td>
                  </tr>
                  
                </thead>
              </table>
              
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="row mb-2">
            <div class="col-mb-3">
              <span><h4>Opiniones</h4></span>
              <div class="box p-4">
              <form action="">
                      <div class="parse text-pform mb-2">
                        <input class="entradatexto" type="text" name="nombre" id="nombre" onblur="checkf();"  placeholder="Nombre" required/>
                      </div>
                      <div class="parse text-pform mb-2">
                        <textarea name="" id="" cols="30" rows="2"placeholder="Mensaje" required></textarea>
                      </div>
                      <div class="col-12 centrado">
                        <button style="background-color: #a6d0fc;border-color: #a6d0fc;" class=" btnmasinfo" id="enviarc" type="submit" >Enviar</button>
                      </div>
              </form>
              </div>
            </div>
            <div class="col-mb-2 p-2">
              <div class="row mb-2">
                  <div class="col-mb-3 centrado ">
                    <img src="../public/imagenes/perfil.png" width="15%" height="40%" alt="">
                  </div>
                  <div class="col-mb-4">
                    <h6>Ana Karen</h6>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem dolores suscipit hic non nobis necessitatibus doloribus veniam nihil maxime numquam quisquam eligendi aliquid saepe atque exercitationem totam esse, vel ipsa.</p>
                  </div>
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
    
   