<?php
//Creamos la conexión sin tener creada la bd
$db = mysqli_connect('localhost', 'root', '');

//Comprobamos si ha sido exitosa la conexión
if(!$db){

    echo "Error al conectar la Base de Datos:".mysqli_connect_error()."</br>";

}else{

    echo "Conexión exitosa..."."</br>";

}

//Creamos la db con el procedimiento mysqli_query, pasandole por parámetros la conexión de mi db y un string con la consulta a ejecutar
if (mysqli_query($db, "CREATE DATABASE IF NOT EXISTS Alojamientos_rurales ")) { // se ejecuta la consulta

    echo "Base de datos creada en MySQL por procedimientos "."</br>";
 
 } else {
 
    //mysqli_error regresa el error al intentar ejecutar una consulta
 
    echo "Error al ejecutar consulta " . mysqli_error($db)."</br>";
 
 }


//Hacemos conexión una vez creada la bd
$db = mysqli_connect('localhost', 'root', '','Alojamientos_rurales');
if(!$db){

    echo "Error al conectar la Base de Datos:".mysqli_connect_error()."</br>";

}else{

    echo "Conexión exitosa a nuestra bd Alojamientos_rurales..."."</br>";

}




//Guardamos el string de la creación de las tablas que necesitamos
$createTableCliente = "
CREATE TABLE IF NOT EXISTS cliente (
    `id_cliente` INT(5) AUTO_INCREMENT,
    `nombre` VARCHAR(45) NOT NULL,
    `apellidos` VARCHAR(45) NOT NULL,
    `dni` VARCHAR(10) NOT NULL,
    `password` VARCHAR(20) NOT NULL,
    `telefono` INT(9) NOT NULL,
    `direccion` VARCHAR(30) NOT NULL,
    `localidad` VARCHAR(20) NOT NULL,
    `ciudad` VARCHAR(15) NOT NULL,
    `cp` INT(5) NOT NULL,
    `email` VARCHAR(50) NOT NULL,
    PRIMARY KEY (`id_cliente`)
);";

$createTableAlojamiento = "
    CREATE TABLE IF NOT EXISTS alojamiento (
        `id_alojamiento` INT(5) AUTO_INCREMENT,
        `nombre` VARCHAR(45) NOT NULL,
        `direccion` VARCHAR(45) NOT NULL,
        `localidad` VARCHAR(20) NOT NULL,
        `ciudad` VARCHAR(15) NOT NULL,
        `cp` INT(5) NOT NULL,            
        `foto` VARCHAR(20) NOT NULL,
        PRIMARY KEY (`id_alojamiento`)
    );";

$createTableReserva ="
         CREATE TABLE IF NOT EXISTS reserva (
        `id_reserva` INT(5) AUTO_INCREMENT,
        `id_cliente` INT(5),
        `id_alojamiento` INT(5),
        `fecha_entrada` DATE NOT NULL,
        `fecha_salida` DATE NOT NULL,
        PRIMARY KEY (`id_reserva`),
        FOREIGN KEY (`id_cliente`) REFERENCES cliente(`id_cliente`),
        FOREIGN KEY (`id_alojamiento`) REFERENCES alojamiento(`id_alojamiento`)
    );";


if (mysqli_query($db, $createTableCliente)) { // se ejecuta la consulta de la creación de las tablas

    echo "Tabla cliente creada en MySQLI por procedimientos"."</br>";
    
} else {
    
    //mysqli_error regresa el error al intentar ejecutar una consulta
    
    echo "Error al ejecutar consulta " . mysqli_error($db)."</br>";
    
}

if (mysqli_query($db, $createTableAlojamiento)) { // se ejecuta la consulta de la creación de las tablas

    echo "Tabla alojamiento creada en MySQLI por procedimientos"."</br>";
    
} else {
    
    //mysqli_error regresa el error al intentar ejecutar una consulta
    
    echo "Error al ejecutar consulta " . mysqli_error($db)."</br>";
    
}

if (mysqli_query($db, $createTableReserva)) { // se ejecuta la consulta de la creación de las tablas

    echo "Tabla reserva creada en MySQLI por procedimientos"."</br>";
    
} else {
    
    //mysqli_error regresa el error al intentar ejecutar una consulta
    
    echo "Error al ejecutar consulta " . mysqli_error($db)."</br>";
    
}
    
//Por último cerramos la conexión a la db
 mysqli_close($db);
?>