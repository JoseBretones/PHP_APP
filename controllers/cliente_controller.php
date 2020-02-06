<?php
require_once('../models/cliente.php');


if($_GET["form"]=="login"){
    $cliente = new Cliente();
    $nombre = $_POST["nombre"];
    $password = $_POST["password"];

    if($cliente->getCliente($nombre,$password)){
        header("location: ");
    }else{
        header("location: ");
    }


}


?>