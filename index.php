<?php
session_start();
session_destroy();
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
    <link rel="stylesheet" href="views/CSS/style.css">
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
              <a class="nav-link" href="./index.php">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="views/alojamientos.php">Alojamientos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="views/reservas.html">Reserva</a>
            </li>
          </ul>
          <div class="dropdown my-2 my-lg-0">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class=" icon fas fa-user"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="views/login.html">Iniciar Sesión</a>
              <a class="dropdown-item" href="views/register.html">Regístrate</a>
            </div>
          </div>
        </div>
      </nav>
      <!--Navbar-->
      <!--Cuerpo Pagina-->
      <div class="container d-flex justify-content-center">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="images/paisaje1.jpg" alt="First slide" width="800px" height="400px">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/paisaje2.jpg" alt="Second slide" width="800px" height="400px">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/paisaje3.jpeg" alt="Third slide" width="800px" height="400px">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="container d-flex justify-content-center">
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 class="display-4">Reserva tu alojamiento rural, ¿A qué esperas?</h1>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor fuga non aspernatur ab consectetur? Quas praesentium laudantium possimus debitis? Eaque illo incidunt eligendi ratione atque laboriosam. Cum aperiam magnam beatae.</p>
          </div>
        </div>
      </div>
      <div class="container d-flex justify-content-center">
        <div class="row">
          <div class="columna col-sm-12 col-md-12 col-lg-4">
            <div class="card" style="width: 18rem;">
              <img src="images/playa.jpg" class="card-img-top" alt="playa" width="200px" height="200px">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="columna col-sm-12 col-md-12 col-lg-4">
            <div class="card" style="width: 18rem;">
              <img src="images/montaña.jpg" class="card-img-top" alt="montaña" width="200px" height="200px">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="columna col-sm-12 col-md-12 col-lg-4">
            <div class="card" style="width: 18rem;">
              <img src="images/campo.jpg" class="card-img-top" alt="campo" width="200px" height="200px">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
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