<?php 

require_once "../../Modelo/conexion.php";
require_once "CRUD.php";

$clientes = new clientes();

$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$libro = $_POST['libro'];

$insertar = $clientes->insertar($cedula,$nombre,$apellido,$libro);

?>