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
        <h1>Agregar Libro</h1>
        <form action="../Controlador/libros/inserLibro.php" method="post">
            <label for="">Nombre del libro</label><br>
            <input type="text" name="libro" id=""><br><br>
            <label for="">Categorias</label>
            <select name="categoria" id="">
            <?php
        
              require_once "..\Modelo\conexion.php";
              require_once "../Controlador/categoria/CRUD.php";
        
              $categoria = new Categoria();

              $mostrar = $categoria->mostrar();

              foreach ($mostrar as $datos) {
            ?>
                <option value="<?php echo $datos['categoria']; ?>"><?php echo $datos['categoria']; ?></option>
            <?php }?>
            </select>
            <br><br><br>
            <label for="">Secciones</label>
            <select name="seccion" id="">
            <?php 
        
              require_once "..\Modelo\conexion.php";
              require_once "../Controlador/seccion/CRUD.php";
        
              $obj = new seccion();
              $mostrar = $obj->mostrar();

              foreach ($mostrar as $seccion) {
            ?>
                <option value="<?php echo $seccion['seccion']; ?>"><?php echo $seccion['seccion']; ?></option>
            <?php } ?>
            </select>
            <br><br><br>
            <label for="">Descripcion</label><br>
            <textarea name="descripcion" id="" cols="70" rows="10"></textarea>
            <br><br><br>
            <input type="submit" value="Agregar">
        </form>
        </div>
    </div>
    <script src="Js/efectos.js"></script>
</body>
</html>