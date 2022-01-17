<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-5" id="footer-left">
          <h5 class="footer-brand"><a href="index.php" id="brand">Florencia Castellarin</a></h5>

          <ul class="nav">
            <li><a href="" class="footer-link">/historias</a></li>
            <li><a href="#galeria" class="footer-link">/instantes</a></li>
            <li><a href="#tienda" class="footer-link">/tienda</a></li>
          </ul>
          <ul class="nav" id="icon-container">
            <li class="nav-item"><a href="" class="nav-link footer-icon"><i class="fa fa-facebook fa-lg"></i></a></li>
            <li class="nav-item"><a href="" class="nav-link footer-icon"><i class="fa fa-twitter fa-lg"></i></a></li>
            <li class="nav-item"><a href="" class="nav-link footer-icon"><i class="fa fa-instagram fa-lg"></i></a></li>
          </ul>
        </div>

        <div class="col-md-2">
          <h5>Contacto</h5>
          <hr>
        </div>

        <div class="col-md-5 g-2"> <!--'g' is the gutter size, don't forget again, OMG! -->
          <form class="row g-2" action="contacto.php" method="post">
            <div class="col-6">
              <input type="text" class="form-control form-control-sm" placeholder="Nombre" name="nombre" required>
            </div>
            <div class="col-6">
              <input type="text" class="form-control form-control-sm" placeholder="Apellido" name="apellido">
            </div>
            <div class="col-12">
              <input type="email" class="form-control form-control-sm" placeholder="Correo" name="correo" required>
            </div>
            <div class="col-12">
              <textarea class="form-control form-control-sm" placeholder="Mensaje" name="mensaje" maxlength="300" required></textarea>
            </div>
            <div class="col-6">
              <button type="submit" class="btn btn-secondary-outline btn-sm" value="submit">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
