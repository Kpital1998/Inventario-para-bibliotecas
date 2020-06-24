<?php 

class libro{
    
    //Metodo de insertar
    public function insertar($nom,$cate,$secc,$des){
        $conexion = new conexion();
        $ins = $conexion->conectar();
        $sql = "INSERT INTO libros (nom_libro, seccion, categoria, descripcion) VALUES ('$nom','$cate','$secc','$des')";
        //Ejecucion
        $query = mysqli_query($ins,$sql);
        //Condicion
        if ($query) {
            header("Location: ../../Vistas/libros.php");
        }
    }
    //Metodo mostrar
    public function mostrar(){
        $conexion = new conexion();
        $ins = $conexion->conectar();
        $sql = "SELECT * FROM libros";
        //Ejecucion
        $query = mysqli_query($ins,$sql);

        return mysqli_fetch_all($query,MYSQLI_ASSOC);
    }

    public function actualizar($id,$nom,$seccion,$categoria,$desc){
        $conexion = new conexion();
        //instancia 
        $ins = $conexion->conectar();
        $sql = "UPDATE libros SET Id='$id',nom_libro='$nom',seccion='$seccion',categoria='$categoria',descripcion='$desc' WHERE Id='$id'";
        //Ejecucion
        $query = mysqli_query($ins,$sql);
        //Condiciones
        if ($query) {
            header("Location: ../../Vistas/libros.php");
        }
    }

    public function eliminar($id){
        $conexion = new conexion();
        //instancia
        $ins = $conexion->conectar();
        $sql = "DELETE FROM libros WHERE Id='$id'";
        $query = mysqli_query($ins,$sql);
        //Condiciones
        if ($query) {
            header("Location: ../../Vistas/libros.php");
        }
    }

}





?>