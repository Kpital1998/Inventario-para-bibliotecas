<?php 

require_once "../../Modelo/conexion.php";
require_once "CRUD.php";

$proveedor = new proveedores();

$_ID = $_GET['Id']; 
 
$eliminar= $proveedor->eliminar($_ID);



?>