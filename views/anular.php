<!--PAGINA INICIO UNA VEZ USUARIO ESTÉ LOGEADO-->
<?php
session_start();
unset($_SESSION["unidades"]);
              unset($_SESSION["producto"]);
              unset($_SESSION["precio"]);
              unset($_SESSION["contador"]);
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--My style-->
    <link rel="stylesheet" href="CSS/style.css">
    <title>Alojamientos S.A</title>
  </head>
  <body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><i class="fab fa-canadian-maple-leaf fa-2x"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarsExample04">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="inicio.php">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="alojamientos.php">Alojamientos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="reservas.html">Reserva</a>
            </li>
          </ul>  
          <div class="container d-flex justify-content-end d-flex align-items-center">
          
                <span class="nav-link usuario" href="#"><i class="far fa-user"></i> Bienvenido <?php 
                  echo $_SESSION["nombreUsuario"];                
                ?></span>               
          
          </div>
          <!--<button class="btn my-2 my-lg-0"><a type="button" class="btn btn-primary" href="cesta.php"><i class="fas fa-shopping-cart"></i></a></button>     -->
          <button class="btn my-2 my-lg-0"><a type="button" class="btn btn-danger" href="../index.php">Salir</a></button>
        </div>
      </nav>
      <!--Navbar-->
      <!--Cuerpo Pagina-->
        <div class="container py-5">
            <div class="text-center" style="margin:0 auto;">
                <div>
                    <i class="fas fa-ban fa-5x" style="color:black;"></i>
                </div>
            </div>
            <div class="text-center warning-factories">
                <h3>¡Tu cesta está vacía!</h3>
                <p style="display:inline-block;">Vuelve a <a href="alojamientos.php">Alojamientos</a> y reserva...</p>
            </div>
        </div>
      <!--Cuerpo Pagina-->
      <!--Footer-->
      <footer class="footer-area bg-dark">
          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-3">          
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
              <div class="row">
                <div class="col-sm-12 col-lg-6 d-flex align-items-center d-flex justify-content-center">
                  <ul class="rrss list-inline ml-3">
                    <li><i class="fab fa-instagram fa-2x instagram"></i></li>
                    <li><i class="fab fa-twitter fa-2x twitter"></i></li>
                    <li><i class="fab fa-facebook fa-2x facebook"></i></li>
                  </ul>
                </div>
                <div class="col-sm-12 col-lg-6">
                  <h4 class="footer-widget-title">Popular Category</h4>
                  <ul class="menu-footer-1">
                    <li>
                      <a href="#">Wordpress</a>
                    </li>
                    <li>
                      <a href="#">Plugins</a>
                    </li>
                    <li>
                      <a href="#">Joomla Template</a>
                    </li>
                    <li>
                      <a href="#">Admin Template</a>
                    </li>
                    <li>
                      <a href="#">HTML Template</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
              <div class="row">
                <div class="col-sm-12 col-lg-6">
                  <h4 class="footer-widget-title">Our Company</h4>
                  <ul class="menu-footer-1">
                    <li>
                      <a href="#">About Us</a>
                    </li>
                    <li>
                      <a href="#">How It Works</a>
                    </li>
                    <li>
                      <a href="#">Affiliates</a>
                    </li>
                    <li>
                      <a href="#">Testimonials</a>
                    </li>
                    <li>
                      <a href="#">Contact Us</a>
                    </li>
                    <li>
                      <a href="#">Plan &amp; Pricing</a>
                    </li>
                    <li>
                      <a href="#">Blog</a>
                    </li>
                  </ul>
                </div>
                <div class="col-sm-12 col-lg-6">
                  <h4 class="footer-widget-title">Our Company</h4>
                  <ul class="menu-footer-1">
                    <li>
                      <a href="#">About Us</a>
                    </li>
                    <li>
                      <a href="#">How It Works</a>
                    </li>
                    <li>
                      <a href="#">Affiliates</a>
                    </li>
                    <li>
                      <a href="#">Testimonials</a>
                    </li>
                    <li>
                      <a href="#">Contact Us</a>
                    </li>
                    <li>
                      <a href="#">Plan &amp; Pricing</a>
                    </li>
                    <li>
                      <a href="#">Blog</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">          
            </div>
          </div>
      </footer>
      <!--Footer-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/32dd640534.js" crossorigin="anonymous"></script>
  </body>
</html>
