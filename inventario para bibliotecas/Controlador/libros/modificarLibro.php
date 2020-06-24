<?php 
 
require_once "../../Modelo/conexion.php";
require_once "CRUD.php";

$libro = new libro();
 
$Id = $_POST['id'];
$nom = $_POST['nombre'];
$categoria = $_POST['categoria'];
$seccion = $_POST['seccion'];
$desc = $_POST['descripcion'];


$actulizar = $libro->actualizar($id,$nom,$seccion,$categoria,$desc);



?>