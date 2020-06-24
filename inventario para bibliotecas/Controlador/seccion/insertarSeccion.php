<?php 

require_once "../../Modelo/conexion.php";
require_once "CRUD.php";

$insertar = new seccion();

$seccion = $_POST['seccion'];

$insertar->insertar($seccion);





?>