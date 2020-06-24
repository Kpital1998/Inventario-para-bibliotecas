<?php 

require_once "../../Modelo/conexion.php";
require_once "CRUD.php";

$libro= new libro();

$_ID = $_GET['id']; 

$eliminar= $libro->eliminar($_ID);



?>