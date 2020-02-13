<?php
class Cliente {
    private $db;
    public $nombre;
    public $apellidos;
    public $dni;
    private $contraseña;
    private $telefono;
    private $direccion;
    private $localidad;
    private $ciudad;
    private $cp;
    private $email;


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
    public function __construct10($nom , $apes , $dni , $pass , $tlf , $dir , $loc , $ciudad , $cp , $email){
        $this->db = mysqli_connect('localhost', 'root', '','Alojamientos_rurales');
        $this->nombre = $nom;
        $this->apellidos = $apes;
        $this->dni = $dni;
        $this->contraseña = $pass;
        $this->telefono = $tlf;
        $this->direccion = $dir;
        $this->localidad = $loc;
        $this->ciudad = $ciudad;
        $this->cp = $cp;
        $this->email = $email;
    }

    private function set_names(){
        return $this->db->query("SET NAMES 'utf8'");
    }

    public function __construct2($nombre,$pass){
        $this->db = mysqli_connect('localhost', 'root', '','Alojamientos_rurales');
        $this->nombre = $nombre;
        $this->contraseña = $pass;
    }

    public function getClientes(){
        $array = array();
        $consulta = $this->db->query("SELECT * FROM cliente");
        while($fila = $consulta->fetch_assoc()){
            $array[] = $fila;
        }
        return $array;
    }

    public function getCliente($nombre,$password){
        // Si existe un usuario devuelve verdadero 
        // return $this->db->query("SELECT * FROM cliente WHERE nombre = '$nombre' AND contraseña = '$password'")->rowCount()==1;
        $sql = "SELECT * FROM cliente WHERE nombre = '$nombre' AND password ='$password'";
        $resultado = $this->db->query($sql);
        return mysqli_num_rows($resultado);
        
    }

    public function insertarCliente(){
        $sql = "INSERT INTO cliente (nombre,apellidos,dni,contraseña,telefono,direccion,localidad,ciudad,cp,email) VALUES 
        ('$this->nombre','$thios->apellidos','$this->dni', '$this->contraseña' ,
        '$this->telefono','$this->direccion','$this->localidad',
        '$this->ciudad',$this->cp,'$this->email')";
        
        if(mysqli_query($this->db,$sql)){
            echo("Cliente insertado correctamente");
        }else{
            echo("Error: ".$sql."<br>".mysqli_error($this->db));
        }
    }

    
}

?>