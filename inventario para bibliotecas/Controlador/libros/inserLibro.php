<?php 

require_once "../../Modelo/conexion.php";
require_once "CRUD.php";

$nombre = $_POST['libro'];
$seccion = $_POST['seccion'];
$categoria = $_POST['categoria'];
$desc = $_POST['descripcion'];

$libro = new libro();
$libro->insertar($nombre,$seccion,$categoria,$desc);




?>