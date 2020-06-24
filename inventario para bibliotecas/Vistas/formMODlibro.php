<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/animate.css">
    <link rel="stylesheet" href="estilos/estilos.css">
    <title>Modificar libro</title>
</head> 
<script src="Js/vue.js"></script>
<body>
    <div class="container">
        <?php include "menu.php"; ?>
        <div id="form-agg">
        <h1>Modificar Libro</h1> 
        <?php
        require_once "..\Modelo\conexion.php";
        $conexion = new conexion();
        $ins = $conexion->conectar();
        $_ID = $_GET['id'];
        $sql = "SELECT * FROM libros WHERE Id='$_ID'";
        $query = mysqli_query($ins,$sql);
        while ($datos = mysqli_fetch_array($query)) {
        
        ?>
        <form action="../Controlador/libros/modificarLibro.php" method="post">
            <input type="text" name="id" id="" hidden value="<?php echo $datos['Id']; ?>"> 
            <label for="">Nombre del libro</label><br>
            <input type="text" name="nombre" id="" value="<?php echo $datos['nom_libro']; ?>" ><br><br>
            <label for="">Seccion</label><br>
            <input type="text" name="seccion" id="" value="<?php echo $datos['seccion']; ?>"><br><br>
            <label for="">Categoria</label><br>
            <input type="text" name="categoria" id="" value="<?php echo $datos['categoria']; ?>"> 
            <br><br><br>
            <label for="">Descripcion</label><br>
            <textarea name="descripcion" value="<?php echo $datos['descripcion']; ?>" id="" cols="40" rows="10" ></textarea>
            <br><br><br>
            <input type="submit" value="Agregar">
        </form>
        <?php } ?>
        </div>
    </div>
    <script src="Js/efectos.js"></script>
</body>
</html>