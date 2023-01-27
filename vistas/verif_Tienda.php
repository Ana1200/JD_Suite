
  <?php
require 'nav_Tienda.php';
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
        <div class="col-md-8">
          <div class="box">
            <form method="post" action="updatecarrito">
              <h1>Carrito de Compra</h1>
              <p class="text-muted">Tienes 1 articulo(s) en tu carrito.</p>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th colspan="2">Producto</th>
                      <th>Cantidad</th>
                      <th>Precio</th>
                      <th>Descuento</th>
                      <th colspan="2">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                      <a href="#">
                      <img src="../public/imagenes/productos/CB0000001513.jpg"  width="80%" height="80%"alt="#">
                      </a>
                      </td>
                      <td>
                      <a href="#">Rest Terminal</a>
                      </td>
                      <td>
                      <input type="number" name="cant1" value="1" min="1" max="999999" class="form-control" onchange="changecl();" style="width:80%;">
                      </td>
                      <td>$5,252.00</td>
                      <td>$0.00</td>
                      <td>$5,252.00</td>
                      <td>
                        <a onclick="confdel(0,1,'#');"><i class="fas fa-trash-alt" style="cursor: pointer;"></i></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div class="box-footer row">
                <div class="col-12 col-md-8 tal desk">
                  <a href="category" class="btn btn-default"><i class="fas fa-chevron-left"></i> Seguir Comprando</a>
                </div>
                <div class="col-12 col-md-4 tar">
                  <button type="submit" id="actcart" class="btn btn-default actcart"><i class="fas fa-sync"></i> Actualizar Carrito</button>
                </div>
              </div>
            </form>
          </div>        
        </div>
        <div class="col-md-4">
          <div class=" lip row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <h1>RESUMEN</h1>
              <div class="sep">
              </div>
                <div class="flex justify-between mb-3 text-sm">
                  <span >Subtotal</span>
                  <span >$789.00</span>
              </div>
                <div class="sep">
                </div>
                <div class="flex justify-between font-bold pt-4 mt-5 mb-5 border-t border-gray-500">
                  <span">Total a pagar</span>
                  <span>$1,489.00</span>
              </div>
              <button data-testid="button-component" class=" centrado paddbot2  w-100 h-12 border font-bold transition py-3 rounded" ><i class="fas fa-chevron-right"></i>Comprar</button>
                  
                  </div>
                  <div class="centrado">
                  <button class="paddbot2">
                    <i class="fa fa-plus-circle"> Agregar cupón de descuento </i>
                  </button>
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
    
   