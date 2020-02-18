<?php
session_start();
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
          <button class="btn my-2 my-lg-0"><a type="button" class="btn btn-primary" href="cesta.php"><i class="fas fa-shopping-cart"></i></a></button>     
          <button class="btn my-2 my-lg-0"><a type="button" class="btn btn-danger" href="../index.php">Salir</a></button>
        </div>
      </nav>
      <!--Navbar-->
      <!--Cuerpo Pagina-->
      <?php
      require('../controllers/alojamiento_controller.php');
      print_r($myArray['foto']);
      if (!isset($_GET['borrar']))
      {
        if (isset($_SESSION['producto']))
        {
                //no es el primer producto en la cesta
                //compruebo si el producto estaba ya en la cesta
                if(in_array($_GET["id"],$_SESSION["producto"]))
                {
                    $posicion = array_search($_GET["id"],$_SESSION["producto"]);
                    $_SESSION["unidades"][$posicion]++;
                }
                else
                {
                //si el producto no estaba ya en la cesta
                $indice = $_SESSION["contador"];
                $_SESSION["contador"]++;
                $_SESSION["producto"][$indice] = $_GET["id"];
                $_SESSION["precio"][$indice] = $_GET["precio"];
                $_SESSION["unidades"][$indice] = 1;                
                }
        }
        else
          {
                $_SESSION["contador"] = 1;
                $_SESSION["producto"][0] = $_GET["id"];
                $_SESSION["unidades"][0] = 1;
                $_SESSION["precio"][0] = $_GET["precio"];
            }
        
      }
        else
        {
         
            $borrarIndice = array_search($_GET["borrar"],$_SESSION["producto"]);
            $index = $borrarIndice;
            
            if($_SESSION['unidades'][$borrarIndice]>1){
              $_SESSION['unidades'][$borrarIndice]--;
            }else{
              unset($_SESSION["unidades"][$borrarIndice]);
              unset($_SESSION["producto"][$borrarIndice]);
              unset($_SESSION["precio"][$borrarIndice]);
              $_SESSION["contador"]--;
            }            
        }
        if($_SESSION["contador"] > 0)
        {
            mostrar();
        }
        else
        {
          header('Location: http://localhost/PHP_APP/views/Anular.php?');
        }
    
    
    
    function mostrar()
    {
    $cabecera = "<div class='container py-5'>";
    $cabecera='<table class="table" border="1" align="center" width="40%"><caption>Estado de su cesta</caption>';
    $cabecera.= '<tr><th>Foto</th><th>Artículo</th><th>Unidades</th><th>Precio</th><th>Subtotal</th><th>Borrar?</td></tr>';
    echo $cabecera;
    $suma = 0;    
    foreach($_SESSION["producto"] as $indice => $valor)
    {
      echo $myArray["foto"];
        //Jugaremos con el controlador de Alojamoiento para extraer datos de la db y exponerlos en la tabla
        
        $cadena =  "<tr><td><img src='C:\\xampp\\htdocs\\PHP_APP\\images\\"."'/></td><td>".$valor."</td><td>".$_SESSION["unidades"][$indice];
        $cadena.="</td><td>".$_SESSION["precio"][$indice]."</td><td>";
        $cadena.=$_SESSION["unidades"][$indice]*$_SESSION["precio"][$indice]."</td>";
        $cadena.="<td align=center><a href=cesta.php?borrar=".$valor."><i class='fas fa-trash fa-2x' style='color:black;'></i></a></td></tr>";
        echo $cadena;
        $suma += $_SESSION["unidades"][$indice]*$_SESSION["precio"][$indice];
    }
    
    echo"<tfoot>
        <tr>
          <td colspan=3 align='center'>Suma</td>
          <td>".$suma."</td>
        </tr>
      </tfoot>
    </table>
    </div>";    
    echo "<table id='enlaces'align='center'><tr><td>";
    echo "<button class='btn btn-primary'><a href='alojamientos.php' style='color:white;'>Seguir Comprando</a></button>";
    echo "</td><td>";
    echo "<button class='btn btn-danger'><a href='Anular.php' style='color:white;'>Anular Compra</a></button>";
    echo "</td><td>";
    echo "<button class='btn btn-success'><a href='confirmar.php' style='color:white;'>Confirmar Pedido</a></button>";
    echo "</td></tr></table>";
    echo "</div>";
    }
    
    
    echo "</div>";
    
      ?>
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
                  <h4 class="footer-widget-title">Provincias</h4>
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
