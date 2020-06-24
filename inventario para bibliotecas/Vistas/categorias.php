<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/estilos.css">
    <title>Categorias</title>
</head> 
<script src="Js/vue.js"></script>
<body>
    <div class="container">
    <?php include "menu.php"; ?>
    <div id="categorias">
        <center>
            <form action="../Controlador/categoria/insercate.php" method="post">
                <input type="text" name="categoria" id="" placeholder="Agregar seccion">
                <button><i class="fas fa-plus"></i></button>
            </form>
        </center>
        <br><br><br>
        <center>
        <ul> 
        <?php
        
        require_once "..\Modelo\conexion.php";
        require_once "../Controlador/categoria/CRUD.php";
        
        $categoria = new Categoria();

        $mostrar = $categoria->mostrar();

        foreach ($mostrar as $datos) {
        ?>
            <li><a href="librocategoria.php?categoria=<?php echo $datos['categoria']; ?>"><?php echo $datos['categoria']; ?></a></li>
        <?php } ?>
        </ul> 
        </center>
    </div>
    </div>
    <script src="Js/efectos.js"></script>
</body>
</html>