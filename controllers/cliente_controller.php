<?php
require_once('../models/cliente.php');


if($_GET["form"]=="login"){
    $nombre = $_POST["nombre"];
    $password = $_POST["password"];
    $cliente = new Cliente($nombre,$password);
    if($cliente->getCliente($nombre,$password) > 0){//Si getCliente devuelve 1 existe el usuario, si es 0, error al logearse
        session_start();
        $_SESSION['nombreUsuario']=$nombre;
        header('Location: http://localhost/PHP_APP/views/inicio.php');
    }else{
        header('Location: http://localhost/PHP_APP/views/errorLogin.html');        
    }
}elseif($_GET["form"]=="register"){
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $dni = $_POST['dni'];
    $password = $_POST['password'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $localidad = $_POST['localidad'];
    $ciudad = $_POST['ciudad'];
    $cp = $_POST['cp'];
    $email = $_POST['email'];
    $cliente = new Cliente($nombre,$apellidos,$dni,$password,$telefono,$direccion,$localidad,$ciudad,$cp,$email);
    if($cliente->insertarCliente()){//Si la inserción es correcta o no
        header('Location: http://localhost/PHP_APP/views/inicio.php');
        session_start();
        $_SESSION['nombreUsuario']=$nombre;
    }else{
        header('Location: http://localhost/PHP_APP/views/errorRegister.html');
    }
    
}


?>