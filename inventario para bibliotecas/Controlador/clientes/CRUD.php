<?php 

class clientes{
    //Metodos
    public function insertar($cedula,$nombre,$ape,$libro){
        //conexion
        $conexion = new conexion();
        //instancia
        $ins = $conexion->conectar();
        $sql = "INSERT INTO cliente( cedula, nombre, apellido, libro) VALUES ('$cedula','$nombre','$ape','$libro')";
        //Ejecucion
        $query= mysqli_query($ins,$sql);
        //Condicion
        if ($query) {
            header("Location: ../../Vistas/clientes.php");
        }
    }

    public function mostrar(){
        //conexion
        $conexion = new conexion();
        //instancia
        $ins = $conexion->conectar();
        $sql = "SELECT * FROM cliente";
        //Ejejcucion
        $query = mysqli_query($ins,$sql);

        return mysqli_fetch_all($query,MYSQLI_ASSOC);
    }

    public function actualizar($id,$cedula,$nom,$ape,$libro){
        $conexion = new conexion();
        //instancia
        $ins = $conexion->conectar();
        $sql = "UPDATE cliente SET Id='$id',cedula='$cedula',nombre='$nom',apellido='$ape',libro='$libro' WHERE Id='$id'";
        //Ejecucion
        $query = mysqli_query($ins,$sql);
        //Condiciones
        if ($query) {
            header("Location: ../../Vistas/clientes.php");
        }
    }

    public function eliminar($id){
        //conexion
        $conexion = new conexion();
        //instancia
        $ins = $conexion->conectar();
        $sql = "DELETE FROM cliente WHERE Id='$id'";
        $query = mysqli_query($ins,$sql);
        if ($query) {
            header("Location: ../../Vistas/clientes.php");
        }
    }

    public function mostrarxId($id){
        //conexion
        $conexion = new conexion();
        //instancia
        $ins = $conexion->conectar();
        $sql = "SELECT * FROM cliente WHERE Id='$id'";
        //Ejejcucion
        $query = mysqli_query($ins,$sql);

        return mysqli_fetch_all($query,MYSQLI_ASSOC);
    }
}








?>