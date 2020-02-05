<?php
class Reserva {
    private $db;
    public $idCliente;
    public $idAlojamiento;
    public $fechaEntrada;
    public $fechaSalida;

    public function __construct($id_Cliente , $id_Alojamiento , $fecha_Entrada , $fecha_Salida){
        $this->db = mysqli_connect('localhost', 'root', '','Alojamientos_rurales');
        $this->idCliente = $id_Cliente;
        $this->idAlojamiento = $id_Alojamiento;
        $this->fechaEntrada  = $fecha_Entrada;
        $this->fechaSalida = $fecha_Salida;
    }

    public function getReserva($idCliente){
        $consulta = $this->db->query("SELECT * FROM reserva WHERE id_cliente = '$idCliente'");
        return $consulta;
    }

    public function insertarReserva(){
        $sql = "INSERT INTO reserva (id_cliente,id_alojamiento,fecha_entrada,fecha_salida) 
        VALUES ('$this->idCliente' , '$this->idAlojamiento' , '$this->fechaEntrada' , '$this->fechaSalida')";

        if(mysqli_query($this->db,$sql)){
            echo("Reserva insertada correctamente");
        }else{
            echo("Error: ".$sql."<br>".mysqli_error($this->db));
        }
    }
}


?>