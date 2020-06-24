<?php 

class conexion{ 
    private $host="localhost";
    private $user="root";
    private $pass="";
    private $BD="biblioteca";

    public function conectar(){
        $conexion = mysqli_connect($this->host,$this->user,$this->pass,$this->BD); 
        
        return $conexion;
    }

}

?>