<?php 
require_once "../../Modelo/conexion.php";
$conexion = new conexion();
$conectar = $conexion->conectar();

$user=$_POST['user'];
$pass=$_POST['pass'];

$select="SELECT * FROM registro WHERE usuario='$user' and contrasena='$pass'";

$query=mysqli_query($conectar,$select);

$row= mysqli_fetch_row($query);

if ($row>0) {
    session_start();
    $_SESSION['user']="$user";
    header("Location: ../../Vistas/index-2.php");
    exit;
}



?>