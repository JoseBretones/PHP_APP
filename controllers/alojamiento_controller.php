<?php
require('../models/alojamiento.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $alojamiento = new Alojamiento();
    $myArray = $alojamiento->getAlojamiento($id);
}
?>