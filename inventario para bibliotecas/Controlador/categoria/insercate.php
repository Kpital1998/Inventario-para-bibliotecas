<?php 

require_once "../../Modelo/conexion.php";
require_once "CRUD.php";


$insertar = new Categoria;

$categoria = $_POST['categoria']; 

$insertar->insertar($categoria);




?>