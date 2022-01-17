<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/24e4d2a0d1.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hurricane&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="styles.css">
    <title>TP Integrador</title>
  </head>
  <body>
    <nav>
      <?php include "nav.php" ?>
    </nav>

    <main>
      <section id="tienda">
        <div class="container">
          <h2><p class="title-line-1">llevate un</p><p class=title-line-2>instante</p></h2>
        </div>

        <?php
        define("PRECIO_UNIT",1199);
        $desc_x5 = 15;
        $desc_x10 = 40;
         ?>

        <!--Start Price Cards-->
        <div class="container" id="pricecard-container">
          <div class="row g-4">
            <div class="col">
              <div class="card" id="price1">
                <div class="card-body pricecard">
                  <h5>estampa bastidor</h5>
                  <p class="card-text main-text">precio por unidad</p>
                  <p class="card-text porcentaje">$<?php echo PRECIO_UNIT ?></p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" id="price2">
                <div class="card-body pricecard">
                  <h5>5+ estampas</h5>
                  <p class="card-text main-text">tenés un descuento del</p>
                  <p class="card-text porcentaje"><?php echo $desc_x5 ?>%</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" id="price3">
                <div class="card-body pricecard">
                  <h5>10+ estampas</h5>
                  <p class="card-text main-text">tenés un descuento del</p>
                  <p class="card-text porcentaje"><?php echo $desc_x10 ?>%</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--End Price Cards-->

        <?php
        $cantidad = $_GET["cantidad"];
        $nombre = $_GET["nombre"];
        $apellido = $_GET["apellido"];
        $correo = $_GET["correo"];
        $metodo_pago = $_GET["metodo"];

        if ($cantidad < 5) {
          $precio_total = $cantidad * PRECIO_UNIT;
        }elseif ($cantidad < 10) {
          $precio_bruto = $cantidad * PRECIO_UNIT;
          $precio_total = $precio_bruto - $precio_bruto * $desc_x5/100;
        }else {
          $precio_bruto = $cantidad * PRECIO_UNIT;
          $precio_total = $precio_bruto - $precio_bruto * $desc_x10/100;
        }
         ?>

        <!--Start Form-->
        <div class="container" id="form-container">
          <form class="row g-4" action="" method="GET">
            <div class="col-6">
              <input type="text" class="form-control" name="nombre" value="<?php echo $nombre; ?>" readonly>
            </div>
            <div class="col-6">
              <input type="text" class="form-control" name="apellido" value="<?php echo $apellido; ?>" readonly>
            </div>
            <div class="col-12">
              <input type="email" class="form-control" name="correo" value="<?php echo $correo; ?>" readonly>
            </div>
            <div class="col-6">
              <label for="cantidad">Cantidad</label>
              <input type="text" class="form-control" name="cantidad" value="<?php echo $cantidad; ?>" readonly>
            </div>
            <div class="col-6">
              <label for="cantidad">Método de Pago</label>
              <input type="text" class="form-control" name="metodo" value="<?php echo $metodo_pago; ?>" readonly>
            </div>
            <div class="col-12" id="success-message">
              <h5>¡Gracias por elegirme, <?php echo $nombre; ?>! </h5>
              <p>El monto total de tu compra es de <b>$<?php echo $precio_total; ?></b>.<br>En los próximos minutos te enviaremos un correo a <b><?php echo $correo; ?></b> para coordinar el pago y la entrega.</p>
            </div>
          </form>
        </div>
        <!--End Form-->
      </section>

      <footer class="footer" id="footer-container">
        <?php include "footer.php" ?>
      </footer>

      <!-- Optional JavaScript; choose one of the two! -->

      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

      <!-- Option 2: Separate Popper and Bootstrap JS -->
      <!--
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
      -->
    </body>
  </html>
