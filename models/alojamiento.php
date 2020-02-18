<?php
class Alojamiento {
    private $db;
    public $nombre;
    public $direccion;
    public $localidad;
    public $ciudad;
    public $cp;
    public $foto;


    public function __construct(){
        //Get the arguments from the constructor
        $params = func_get_args();
        //Num of arguments
        $num_params = func_num_args();
        $function_constructor = '__construct'.$num_params;
        //Call a function with a regex
        if (method_exists($this,$function_constructor)){
            call_user_func_array(array($this,$function_constructor),$params);
        }

    }

    public function __construct0(){
        $this->db = mysqli_connect('localhost', 'root', '','Alojamientos_rurales');
    }

    public function __construct6($nom , $dir , $loc , $ciudad , $cp , $foto){
        $this->db = mysqli_connect('localhost', 'root', '','Alojamientos_rurales');
        $this->nombre = $nom;
        $this->direccion = $dir;
        $this->localidad = $loc;
        $this->ciudad = $ciudad;
        $this->cp = $cp;
        $this->foto = $foto;
    }

    public function getAlojamientos(){
        $array = array();
        $consulta = $this->db->query("SELECT * FROM alojamiento");
        while($fila = $consulta->fetch_assoc()){
            $array[] = $fila;
        }
        return $array;
    }

    public function getAlojamiento($idAlojamiento){
        $sql = "SELECT * FROM alojamiento WHERE id_alojamiento = '$idAlojamiento'";
        $resultado = $this->db->query($sql);
        $myArray = $resultado->fetch_assoc();
        // print_r($myArray["foto"]);
        return $myArray;
    }

    public function insertarAlojamiento(){
        $sql = "INSERT INTO alojamiento (nombre,direccion,localidad,ciudad,cp,foto) VALUES ('$this->nombre' , 
        '$this->direccion' , '$this->localidad' , '$this->ciudad' , '$this->cp' , '$this->foto')";

        if(mysqli_query($this->db,$sql)){
            echo("Alojamiento insertado correctamente");
        }else{
            echo("Error: ".$sql."<br>".mysqli_error($this->db));            
        }
    }

}




?>