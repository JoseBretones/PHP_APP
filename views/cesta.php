<?php
session_cache_limiter();
session_name('cesta');
session_start();


	if (!isset($_GET['borrar']))
	{
		if (isset($_SESSION['producto']))
		{
            //no es el primer producto en la cesta
            //compruebo si el producto estaba ya en la cesta
            if(in_array($_GET["producto"],$_SESSION["producto"]))
            {
                $posicion = array_search($_GET["producto"],$_SESSION["producto"]);
                $_SESSION["unidades"][$posicion]++;
            }
            else
            {
            //si el producto no estaba ya en la cesta
            $indice = $_SESSION["contador"];
            $_SESSION["contador"]++;
            $_SESSION["producto"][$indice] = $_GET["producto"];
            $_SESSION["precio"][$indice] = $_GET["precio"];
            $_SESSION["unidades"][$indice] = 1;
            
            }
		}
		else
	    {
            $_SESSION["contador"] = 1;
            $_SESSION["producto"][0] = $_GET["producto"];
            $_SESSION["unidades"][0] = 1;
            $_SESSION["precio"][0] = $_GET["precio"];

        }
		
	}
    else
    {
        $borrarIndice = array_search($_GET["borrar"],$_SESSION["producto"]);
        unset($_SESSION["producto"][$borrarIndice]);
        unset($_SESSION["unidades"][$borrarIndice]);
        unset($_SESSION["precio"][$borrarIndice]);
        $_SESSION["contador"]--;
    }
    if($_SESSION["contador"] > 0)
    {
        mostrar();
    }
    else
    {
        echo "Cesta vacía...<a href=principal.php>Volver</a>";
    }



function mostrar()
{
$cabecera='<table border="1" align="center" width="40%"><caption>Estado de su cesta</caption>';
$cabecera.= '<tr><th>Artículo</th><th>Unidades</th><th>Precio</th><th>Subtotal</th><th>Borrar?</td></tr>';
echo $cabecera;
$suma = 0;


foreach($_SESSION["producto"] as $indice => $valor)
{
    $cadena =  "<tr><td>".$valor."</td><td>".$_SESSION["unidades"][$indice];
    $cadena.="</td><td>".$_SESSION["precio"][$indice]."</td><td>";
    $cadena.=$_SESSION["unidades"][$indice]*$_SESSION["precio"][$indice]."</td>";
    $cadena.="<td align=center><a href=cesta.php?borrar=".$valor."><img src=imagenes/papelera.gif height=54 width=64 ></a></td></tr>";
    echo $cadena;
    $suma = $suma + $_SESSION["unidades"][$indice]*$_SESSION["precio"][$indice];
}

echo"<tfoot>
    <tr>
      <td colspan=3 align='center'>Suma</td>
      <td>".$suma."</td>
    </tr>
  </tfoot>
</table>";
/*
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
*/

echo "<table id='enlaces'align='center'><tr><td>";
echo "<a href='principal.php'>Seguir Comprando</a>";
echo "</td><td>";
echo "<a href='Anular.php'>Anular Compra</a>";
echo "</td><td>";
echo "<a href='confirmar.php'>Confirmar Pedido</a>";
echo "</td></tr></table>";
}


echo "</div>";


function recorrer()
{

}
?>