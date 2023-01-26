
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
           <div class="row g-0 p-4 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <strong class="d-inline-block mb-2 text-primary">DATOS</strong>
            
            <form action="">
               <div class="col-mb-3 ">
                 <div class="row">
                      <label for="">Nombre:</label>
                      <input type="text">
                  </div>
                </div>
                <div class="col-mb-3">
                 <div class="row">
                      <label for="">Apellido:</label>
                      <input type="text">
                 </div>
                </div>
                <div class="row ">
                  <label for="">Direccion:</label>
                  <input type="text">
                </div>
                <div class="row ">
                  <label for="">Email:</label>
                  <input type="email">
                </div>
                <div class="row ">
                  <label for="">Número de telefono:</label>
                  <input type="number">
                </div>
                <div class="row ">
                  <label for="">Agregar una descripción:</label>
                  <textarea name="" id="" cols="30" rows="5"></textarea>
                </div>
              </form>
              
          </div>
        </div>
        <div class="col-md-4">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <strong class="d-inline-block mb-2 text-primary">SUMARY</strong>
              <div class="sep">
              </div>
                <div class="col-mb-4 p-4 d-flex flex-column position-static">
                  <h6 class="mb-0">Productos</h6>
                  <p class="card-text mb-auto">Envio</p>
                </div>
                <div class="col-mb-4 p-4 d-flex flex-column position-static">
                  <h6 class="mb-0">Costo</h6>
                  <p class="card-text mb-auto">Envio</p>
                </div>
                <div class="sep">
                </div>
                <div class="col-mb-4 p-4 d-flex flex-column position-static">
                  <h6>Total</h6>
                  <h6>(Incluye IVA)</h6>
                </div>
                <div class="col-mb-4 p-4 d-flex flex-column position-static">
                  <h6 class="mb-0">Productos</h6>
                  <p class="card-text mb-auto">$0.00</p>
                </div>
                <a href="#" class="stretched-link">
                  <center>
                    <button  class="btnmasinfo paddbot2" >Comprar</button>
                  </center>
                </a>
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
    
   