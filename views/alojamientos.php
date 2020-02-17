<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <!--My style-->
    <link rel="stylesheet" href="CSS/style.css" />
    <title>Alojamientos S.A</title>
  </head>
  <body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="#"
        ><i class="fab fa-canadian-maple-leaf fa-2x"></i
      ></a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarsExample04"
        aria-controls="navbarsExample04"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href=<?php
            if(isset($_SESSION["nombreUsuario"])){
              echo'inicio.php';
            }else{
              echo '../index.php';
            }
            ?>
              >Inicio <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="alojamientos.php">Alojamientos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="reservas.html">Reserva</a>
          </li>
        </ul>
        <?php
          if(!isset($_SESSION['nombreUsuario'])){
            echo '<div class="dropdown my-2 my-lg-0">';
            echo'<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
            echo '<i class=" icon fas fa-user"></i>';
            echo '</button>';
            echo'<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">';
            echo'<a class="dropdown-item" href="login.html">Iniciar Sesión</a>';
            echo'<a class="dropdown-item" href="register.html">Regístrate</a>';
            echo'</div>';
            echo'</div>';
          }
        
        
        
        ?>
      </div>
      <?php  if(isset($_SESSION["nombreUsuario"])){

      echo '<div class="container d-flex justify-content-end d-flex align-items-center">';
          
      echo '<span class="nav-link usuario" href="#"><i class="far fa-user"></i> Bienvenido '; 
                
      echo $_SESSION["nombreUsuario"];    
                        
      echo '</span>               
          
      </div>';
      echo '<button class="btn my-2 my-lg-0"><a type="button" class="btn btn-primary" href="principal.php"><i class="fas fa-shopping-cart"></i></a></button>';
      echo '<button class="btn my-2 my-lg-0"><a type="button" class="btn btn-danger" href="../index.php">Salir</a></button>';

      }?>
    </nav>
    <!--Navbar-->
    <!--Cuerpo Pagina-->
    <div class="container d-flex justify-content-center py-5">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../images/alojamiento1.jpg" alt="Card image cap" style="height:200px;" />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make up the
                    bulk of the card's content.
                  </p>
                  <?php
                  if(isset($_SESSION["nombreUsuario"])){
                  echo '<div class="d-flex justify-content-center">
                  <a href="cesta.php?id=1&&precio=120" class="btn btn-primary">Añadir a la cesta</a>
                  </div>';
                  }
                  ?>
                </div>

              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../images/alojamiento2.jpg" alt="Card image cap" style="height:200px;" />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make up the
                    bulk of the card's content.
                  </p>
                  <?php
                  if(isset($_SESSION["nombreUsuario"])){
                  echo '<div class="d-flex justify-content-center">
                  <a href="cesta.php?id=2&&precio=100" class="btn btn-primary">Añadir a la cesta</a>
                  </div>';
                  }
                  ?>
                </div>

              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../images/alojamiento3.jpg" alt="Card image cap" style="height:200px;" />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make up the
                    bulk of the card's content.
                  </p>
                  <?php
                  if(isset($_SESSION["nombreUsuario"])){
                  echo '<div class="d-flex justify-content-center">
                  <a href="cesta.php?id=3&&precio=140" class="btn btn-primary">Añadir a la cesta</a>
                  </div>';
                  }
                  ?>
                </div>

              </div>
            </div>
          </div>
    </div>
    <div class="container d-flex justify-content-center py-5">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../images/alojamiento4.jpg" alt="Card image cap" style="height:200px;" />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make up the
                    bulk of the card's content.
                  </p>
                  <?php
                  if(isset($_SESSION["nombreUsuario"])){
                  echo '<div class="d-flex justify-content-center">
                  <a href="cesta.php?id=4&&precio=160" class="btn btn-primary">Añadir a la cesta</a>
                  </div>';
                  }
                  ?>
                </div>

              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../images/alojamiento5.jpg" alt="Card image cap" style="height:200px;" />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make up the
                    bulk of the card's content.
                  </p>
                  <?php
                  if(isset($_SESSION["nombreUsuario"])){
                  echo '<div class="d-flex justify-content-center">
                  <a href="cesta.php?id=5&&precio=60" class="btn btn-primary">Añadir a la cesta</a>
                  </div>';
                  }
                  ?>
                </div>

              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../images/alojamiento6.jpg" alt="Card image cap" style="height:200px;" />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make up the
                    bulk of the card's content.
                  </p>
                  <?php
                  if(isset($_SESSION["nombreUsuario"])){
                  echo '<div class="d-flex justify-content-center">
                  <a href="cesta.php?id=6&&precio=80" class="btn btn-primary">Añadir a la cesta</a>
                  </div>';
                  }
                  ?>
                </div>

              </div>
            </div>
          </div>
    </div>
    <div class="container d-flex justify-content-center py-5">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../images/alojamiento7.jpg" alt="Card image cap" style="height:200px;" />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make up the
                    bulk of the card's content.
                  </p>
                  <?php
                  if(isset($_SESSION["nombreUsuario"])){
                  echo '<div class="d-flex justify-content-center">
                  <a href="cesta.php?id=7&&precio=75" class="btn btn-primary">Añadir a la cesta</a>
                  </div>';
                  }
                  ?>
                </div>

              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../images/alojamiento8.jpg" alt="Card image cap" style="height:200px;" />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make up the
                    bulk of the card's content.
                  </p>
                  <?php
                  if(isset($_SESSION["nombreUsuario"])){
                  echo '<div class="d-flex justify-content-center">
                  <a href="cesta.php?id=8&&precio=135" class="btn btn-primary">Añadir a la cesta</a>
                  </div>';
                  }
                  ?>
                </div>

              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../images/alojamiento9.jpg" alt="Card image cap" style="height:200px;" />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make up the
                    bulk of the card's content.
                  </p>
                  <?php
                  if(isset($_SESSION["nombreUsuario"])){
                  echo '<div class="d-flex justify-content-center">
                  <a href="cesta.php?id=9&&precio=50" class="btn btn-primary">Añadir a la cesta</a>
                  </div>';
                  }
                  ?>
                </div>

              </div>
            </div>
          </div>
    </div>
    <!--Cuerpo Pagina-->
    <!--Footer-->
    <footer class="footer-area bg-dark">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-3"></div>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <div class="row">
            <div
              class="col-sm-12 col-lg-6 d-flex align-items-center d-flex justify-content-center"
            >
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
        <div class="col-sm-12 col-md-6 col-lg-3"></div>
      </div>
    </footer>
    <!--Footer-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://kit.fontawesome.com/32dd640534.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
<!-- <table border=1>
  <tr><td>
      <img src="imagenes/nike.bmp" height="72" width="72">
  </td><td>
      <a href="cesta.php?producto=nike&precio=23.6"><img height="72" width="72" src="imagenes/Carrito.jpg" alt="Añadir al Carrito" /></a>
  </td>
  <tr><td>
      <img src="imagenes/adidas.bmp" height="72" width="72">
  </td><td>
      <a href="cesta.php?producto=adidas&precio=123.3"><img height="72" width="72" src="imagenes/Carrito.jpg" alt="Añadir al Carrito" /></a>
  </td></tr>
  <tr><td>
      <img src="imagenes/reebok.jpg" height="72" width="72">
  </td><td>
      <a href="cesta.php?producto=reebok&precio=35"><img height="72" width="72" src="imagenes/Carrito.jpg" alt="Añadir al Carrito" /></a>
  </td></tr>
<tr><td>
      <img src="imagenes/nikeid.png"height="72" width="72">
  </td><td>
      <a href="cesta.php?producto=nikeid&precio=105" ><img height="72" width="72" src="imagenes/Carrito.jpg" alt="Añadir al Carrito" /></a>
  </td></tr>
<tr><td>
      <img src="imagenes/nike-mercurial-superfly.jpg" height="72" width="72">
  </td><td>
      <a href="cesta.php?producto=nikemercurial&precio=85"><img height="72" width="72" src="imagenes/Carrito.jpg" alt="Añadir al Carrito" /></a>
  </td></tr>
<tr><td>
      <img src="imagenes/nikeft.jpeg" height="72" width="72">
  </td><td>
      <a href="cesta.php?producto=nikeft&precio=115"><img height="72" width="72" src="imagenes/Carrito.jpg" alt="Añadir al Carrito" /></a>
  </td></tr>
</table> -->