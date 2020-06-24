<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/animate.css">
    <link rel="stylesheet" href="estilos/estilos.css">
    <title>Agregar libro</title>
</head>
<script src="Js/vue.js"></script>
<body>
    <div class="container">
        <?php include "menu.php"; ?>
        <div id="form-agg">
        <h1>Modificar cliente</h1>
        <?php
        
            require_once "..\Modelo\conexion.php";
            require_once "../Controlador/clientes/CRUD.php";
            $clientes = new clientes();
            $_ID = $_GET['id'];
            $mostrar = $clientes->mostrarxId($_ID);
            
            foreach($mostrar as $datos){
                
        ?>
        <form action="../Controlador/clientes/modificarCliente.php" method="post">
            <input type="text" name="id" id="" hidden value="<?php echo $datos['Id']; ?>">
            <label for="">Cedula</label><br>
            <input type="text" name="cedula" id="" value="<?php echo $datos['cedula']; ?>" ><br><br>
            <label for="">Nombre</label><br>
            <input type="text" name="nombre" id="" value="<?php echo $datos['nombre']; ?>"> 
            <br><br><br>
            <label for="">Apellido</label><br>
            <input type="text" name="apellido" id="" value="<?php echo $datos['apellido']; ?>">
            <br><br><br>
            <label for="">Libro</label><br>
            <input type="text" name="libro" id="" value="<?php echo $datos['libro']; ?>">
            <br><br><br>
            <input type="submit" value="Modificar">
        </form>
        <?php } ?>
        </div>
    </div>
    <script src="Js/efectos.js"></script>
</body>
</html>