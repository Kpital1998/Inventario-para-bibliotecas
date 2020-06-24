<?php 

class Categoria{
    public $categoria;

    public function insertar($inser){
        //Se llama la conexion
        $conexion = new conexion;
        //Se instancia el metodo donde está
        $ins = $conexion->conectar();
        $this->categoria = $inser;
        //Se agrega el codigo sql
        $sql = "INSERT INTO categoria(categoria) VALUES ('$inser')";
        $query= mysqli_query($ins,$sql);
        if ($query) {
            header("Location: ../../Vistas/categorias.php") ;
        }else {
            return "Ingreso no exitoso";
        }
    }

    public function mostrar(){
        //Se llama la conexion
        $conexion = new conexion;
        //Se instancia el metodo donde está
        $ins = $conexion->conectar();
        $sql= "SELECT * FROM categoria";
        $query = mysqli_query($ins,$sql);

        return mysqli_fetch_all($query,MYSQLI_ASSOC);
    }
}


?>