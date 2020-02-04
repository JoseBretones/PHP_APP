<?php
class Cliente {
    private $db;
    public $nombre;
    public $apellidos;
    public $dni;
    private $telefono;
    private $direccion;
    private $localidad;
    private $ciudad;
    private $cp;
    private $email;

    public function __construct($nom , $apes , $dni , $tlf , $dir , $loc , $ciudad , $cp , $email){
        $this->db = mysqli_connect('localhost', 'root', '','Alojamientos_rurales');
        $this->nombre = $nom;
        $this->apellidos = $apes;
        $this->dni = $dni;
        $this->telefono = $tlf;
        $this->direccion = $dir;
        $this->localidad = $loc;
        $this->ciudad = $ciudad;
        $this->cp = $cp;
        $this->email = $email;
    }

    public function getClientes(){
        $consulta = $this->db->query("SELECT * FROM cliente");
        while($consulta)
    }
}

?>