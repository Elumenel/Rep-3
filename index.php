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
      <section id="photo-carrousel">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner" id="carousel-main">
            <div class="carousel-item active">
              <img src="img/pescador.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/caminito.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/giardini.jpg" class="d-block w-100" alt="...">
            </div>
            <!--<div class="carousel-item">
              <img src="img/desert.jpg" class="d-block w-100" alt="...">
            </div>-->
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
      </section>

      <section id="galeria">
        <div class="container">
          <h2><p class="title-line-1">galería de</p><p class=title-line-2>instantes</p></h2>
        </div>

        <div class="grid-container">
          <div class="grid-inner">
            <div class="text" id="text1">Puerta al Báltico</div>
            <div class="grid_item" id="pic1"><img class="image" src="img/peterhof.jpg" alt="Palacio de Peterhof"></div>

            <div class="text" id="text2">Colores planos/Planos de colores</div>
            <div class="grid_item" id="picture2"><img class="image" src="img/pompidou.jpg" alt="Centre Pompidou"></div>

            <div class="text" id="text3">Luces de Al-Qāhira</div>
            <div class="grid_item" id="picture3"><img class="image" src="img/mosque.jpg" alt="Mezquita de Mehmet Alí Pasha"></div>

            <div class="text" id="text4">Tiempo suspendido</div>
            <div class="grid_item" id="picture4"><img class="image" src="img/vittorio-emanuele.jpg" alt="Galleria Vittorio Emanuele II"></div>

            <div class="text" id="text5">Linajes</div>
            <div class="grid_item" id="picture5"><img class="image" src="img/old_jewish_cemetery.jpg" alt="Antiguo Cementerio Judío"></div>

            <div class="text" id="text6">Desfasajes temporales</div>
            <div class="grid_item" id="picture6"><img class="image" src="img/giza.jpg" alt="Necrópolis de Giza"></div>

            <div class="text" id="text7">Memento mori</div>
            <div class="grid_item" id="picture7"><img class="image" src="img/memento_mori.JPG" alt=""></div>

            <div class="text" id="text8">Vista panorámica</div>
            <div class="grid_item" id="picture8"><img class="image" src="img/ischia.jpg" alt="Golfo de Napoli"></div>

            <div class="text" id="text9">Serenidad</div>
            <div class="grid_item" id="picture9"><img class="image" src="img/oriental_garden.jpg" alt="Jardín Oriental"></div>

            <div class="text" id="text10">Punto de fuga</div>
            <div class="grid_item" id="picture10"><img class="image" src="img/rivera_paris.jpg" alt="Paris-Plage"></div>

            <div class="text" id="text11">Soledad/compañía</div>
            <div class="grid_item" id="picture11"><img class="image" src="img/venezia.jpg" alt=""></div>

            <div class="text" id="text12">Una vez en la montaña</div>
            <div class="grid_item" id="picture12"><img class="image" src="img/formazza.jpg" alt="Valle Formazza"></div>

            <div class="text" id="text13">Actividad de invierno</div>
            <div class="grid_item" id="picture13"><img class="image" src="img/duckylake.jpg" alt="Reserva Natural de Earlswood Common"></div>

            <div class="text" id="text14">Desfile cansino</div>
            <div class="grid_item" id="picture14"><img class="image" src="img/juni.jpg" alt="Desfile de Juni "></div>

            <div class="text" id="text15">Luxemburg florecido</div>
            <div class="grid_item" id="picture15"><img class="image" src="img/Jardin_du_Luxembourg.JPG" alt=""></div>
          </div>
        </div>
      </section>

      <section id="tienda">
        <div class="container">
          <h2><p class="title-line-1">llevate un</p><p class=title-line-2>instante</p></h2>
        </div>

        <?php
        define("PRECIO_UNIT",1199);
        $desc_x5 = 15;
        $desc_x10 = 40;
        $cantidad = 1;
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

        <!--Start Form-->
        <div class="container" id="form-container">
          <form class="row g-4" action="tienda.php" method="GET">
            <div class="col-6">
              <input type="text" class="form-control" placeholder="Nombre" name="nombre" required>
            </div>
            <div class="col-6">
              <input type="text" class="form-control" placeholder="Apellido" name="apellido">
            </div>
            <div class="col-12">
              <input type="email" class="form-control" placeholder="Correo" name="correo" required>
            </div>
            <div class="col-6">
              <label for="cantidad">Cantidad</label>
              <input type="number" class="form-control" name="cantidad" value="<?php echo $cantidad ?>">
            </div>
            <div class="col-6">
              <label for="metodo-pago">Método de Pago</label>
              <select class="form-control" name="metodo">
                <option selected>Efectivo</option>
                <option>Débito</option>
                <option>Crédito</option>
                <option>Mercado Pago</option>
              </select>
            </div>
            <div class="col">
              <button type="button" class="btn btn-primary btn-lg small-green-button" onclick="location.reload()">Borrar</button>
            </div>
            <div class="col">
              <button class="btn btn-primary btn-lg small-green-button" type="submit" value="submit" name="submit">Comprar</button>
            </div>
          </form>
        </div>
        <!--End Form-->
      </section>
    </main>

    <footer class="footer" id="footer-container">
      <?php include "footer.php"; ?>

      <div class="container">
        <div class="thank-you">
          <?php
          if (isset($_GET['status'])) {
            echo "<h4>¡Gracias por tu mensaje!</h4>";
          }
          ?>
        </div>
      </div>
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
