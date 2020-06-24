<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/animate.css">
    <link rel="stylesheet" href="estilos/estilos.css">
    <title>Libros</title>
</head> 
<script src="Js/vue.js"></script>
<body>
    <div class="container">
    <?php include "menu.php"; ?>
    
    <div id="ModalAlerta">
            <fieldset class="animated bounceInDown" v-show="alert==true" >
                <center>
                <img src="img/triangle.png" style="margin-top: -30px; margin-bottom: 10px;" alt="" width="80" height="80">
                <br><br>
                <h3>Estás seguro que desea eliminar?</h3><br><br>
                <input type="button" value="Cancelar" v-on:click="alert=false">
                <a v-bind:href="url"><input type="button" value="Eliminar" v-on:click="url='../Controlador/libros/eliminar.php?id='+id"></a>
                </center>
            </fieldset>
        </div>

        <div id="libros">
            <a href="agregarlibro.php"><button style="margin-right: 100px; cursor: pointer;"><img src="img/more.png" alt="" width="50" height="50" title="Agregar"></button></a>
            <br><br>
            <?php 
            
            require_once "..\Modelo\conexion.php";
            require_once "../Controlador/libros/CRUD.php";
        
            $libro = new libro();

             $mostrar = $libro->mostrar();

            foreach ($mostrar as $datos) {
            ?>
            <fieldset> 
                <br>
                <center><h1><?php echo $datos['nom_libro']; ?></h1></center> 
                <img src="img/book.png" alt="" width="80" height="80">
                <center>
                    <ul>
                        <li><h4>Categoría:</h4></li>
                        <li><p><?php echo $datos['categoria']; ?></p></li>
                        <li><h4>Sección:</h4></li>
                        <li><p><?php echo $datos['seccion']; ?></p></li>
                        <li><a href="formMODlibro.php?id=<?php echo $datos['Id']; ?>"><button style="background: blue;" title="Editar"><i class="fas fa-edit"></i></button></a></li>
                        <li><a href="#" v-on:click="id=<?php echo $datos['Id']; ?>"><button style="background: red;" title="Eliminar" v-on:click="alert=true"><i class="fas fa-trash"></i></button></a></li>
                    </ul>  
                </center> 
            </fieldset>
            <?php } ?>
    
        </div>
        
    </div>
    <script src="Js/efectos.js"></script>
</body>
</html>