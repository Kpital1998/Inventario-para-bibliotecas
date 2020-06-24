<?php 
 
class proveedores{
    //metodos
    public function insertar($cedula,$nombre,$apellido,$libro){
        //Conexion
        $conexion = new conexion();
        //instancia 
        $ins = $conexion->conectar();
        $sql = "INSERT INTO proveedor(cedula, nombre, apellido, libro) VALUES ('$cedula','$nombre','$apellido','$libro')";
        //Ejecucion
        $query = mysqli_query($ins,$sql);
        //condicion
        if ($query) {
            header("Location: ../../Vistas/proveedor.php");
        }
    }

    public function mostrar(){
        //Conexion
        $conexion = new conexion();
        //instancia 
        $ins = $conexion->conectar();
        $sql = "SELECT * FROM proveedor";
        //Ejecucion
        $query = mysqli_query($ins,$sql);

        return mysqli_fetch_all($query,MYSQLI_ASSOC);
    }

    public function actualizar($id,$cedula,$nom,$ape,$libro){
        $conexion = new conexion();
        //instancia
        $ins = $conexion->conectar();
        $sql = "UPDATE proveedor SET Id='$id',cedula='$cedula',nombre='$nom',apellido='$ape',libro='$libro' WHERE Id='$id'";
        //Ejecucion
        $query = mysqli_query($ins,$sql);
        //Condiciones
        if ($query) {
            header("Location: ../../Vistas/proveedor.php");
        }
    }

    public function eliminar($id){
        $conexion = new conexion();
        //instancia
        $ins = $conexion->conectar();
        $sql = "DELETE FROM proveedor WHERE Id='$id'";
        $query = mysqli_query($ins,$sql);
        //Condiciones
        if ($query) {
            header("Location: ../../Vistas/proveedor.php");
        }
    }
}







?>