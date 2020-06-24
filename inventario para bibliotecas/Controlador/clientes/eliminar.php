<?php 

require_once "../../Modelo/conexion.php";
require_once "CRUD.php";

$clientes = new clientes();

$_ID = $_GET['id'];

$eliminar= $clientes->eliminar($_ID);



?>