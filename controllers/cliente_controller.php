<?php
require_once('../models/cliente.php');

print_r($_GET);
if($_GET["form"]=="login"){
    $nombre = $_POST["nombre"];
    $password = $_POST["password"];
    $cliente = new Cliente($nombre,$password);
    echo("Entré");
    if($cliente->getCliente($nombre,$password)){
        echo("Existe");
    }else{
       echo("No existe");
    }


}


?>