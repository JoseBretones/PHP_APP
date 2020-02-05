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

    public function __construct($nom , $apes , $dni , $pass , $tlf , $dir , $loc , $ciudad , $cp , $email){
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

    public function getClientes(){
        $array = array();
        $consulta = $this->db->query("SELECT * FROM cliente");
        while($fila = $consulta->fetch_assoc()){
            array[] = $fila;
        }
        return $array;
    }

    public function getCliente($idCliente){
        $consulta = $this->db->query("SELECT * FROM cliente WHERE id_cliente = '$idCliente'");
        return $consulta;
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