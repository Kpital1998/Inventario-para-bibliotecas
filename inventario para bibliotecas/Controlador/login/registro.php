<?php
require_once "../../Modelo/conexion.php";
$conexion = new conexion();
$conectar = $conexion->conectar();

$user=$_POST['user'];
$pass=$_POST['pass'];

$insertar="INSERT INTO registro( usuario, contrasena) VALUES ('$user','$pass')";

if ($insertar) {
    $query=mysqli_query($conectar,$insertar);
    switch ($query) {
        case true:
            header("Location: ../../Vistas/index.php");
            break;
        
        default:
            $mensaje="Usuario no registrado";
            break;
    }
}
?>