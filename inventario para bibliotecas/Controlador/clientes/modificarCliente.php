<?php 

require_once "../../Modelo/conexion.php";
require_once "CRUD.php";

$clientes = new clientes();
 
$Id = $_POST['id'];
$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$libros = $_POST['libro'];


$actulizar = $clientes->actualizar($Id,$cedula,$nombre,$apellido,$libros);

?>