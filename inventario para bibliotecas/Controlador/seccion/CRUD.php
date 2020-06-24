<?php 

class seccion{

    public function insertar($seccion){
        //Se llama la conexion
        $conexion = new conexion();
        //Instancia del metodo
        $ins = $conexion->conectar();
        $sql = "INSERT INTO seccion(seccion) VALUES ('$seccion')";
        //Se ejecuta funcion
        $query = mysqli_query($ins,$sql);

        if ($query) {
           header("Location: ../../Vistas/secciones.php");
        }else {
            return "Registro no exitoso";
        }
    }

    public function mostrar(){
        //Se llama la conexion
        $conexion = new conexion();
        //Instancia del metodo
        $ins = $conexion->conectar();
        $sql = "SELECT * FROM seccion";
        //Se ejecuta funcion
        $query = mysqli_query($ins,$sql);

        return mysqli_fetch_all($query,MYSQLI_ASSOC);
    }
}


?>