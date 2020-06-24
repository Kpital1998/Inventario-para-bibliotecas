<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/animate.css">
    <link rel="stylesheet" href="estilos/estilos.css">
    <title>modificar Proveedor</title>
</head> 
<script src="Js/vue.js"></script>
<body>
    <div class="container">
        <?php include "menu.php"; ?>
        <div id="form-agg">
        <h1>modificar Proveedor</h1>
        <?php
        require_once "..\Modelo\conexion.php";
        $conexion = new conexion();
        $ins = $conexion->conectar();
        $_ID = $_GET['id'];
        $sql = "SELECT * FROM `proveedor` WHERE Id='$_ID'";
        $query = mysqli_query($ins,$sql);
        while ($datos = mysqli_fetch_array($query)) {
        
        ?>
        <form action="../Controlador/proveedores/modificarProveedor.php" method="post">
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
            <input type="submit" value="Agregar">
        </form>
        <?php } ?>
        </div>
    </div>
    <script src="Js/efectos.js"></script>
</body>
</html>