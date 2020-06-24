<?php 

require_once "../../Modelo/conexion.php";
require_once "CRUD.php";

$proveedores = new proveedores();

$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$libro = $_POST['libro'];

$insertar = $proveedores->insertar($cedula,$nombre,$apellido,$libro);

?>