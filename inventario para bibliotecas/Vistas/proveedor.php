<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/animate.css">
    <link rel="stylesheet" href="estilos/estilos.css">
    <title>Proveedores</title>
</head> 
<script src="Js/vue.js"></script>
<body>
    <div class="container">
    <?php include "menu.php"; ?>

    <div id="modal">
                <fieldset v-show="mostrar==true" class="animated bounceInDown" >
                    <center><h3>Agregar Proveedor</h3></center>
                    <button v-on:click="mostrar=false">X</button>
                    <img src="img/employer.png" alt="" width="120" height="120">
                    <form action="../Controlador/proveedores/insertarProveedor.php" method="post">
                        <label for="">Cedula</label><br>
                        <input type="text" name="cedula" id="cedula" v-model="input1"><br><br>
                        <label for="">Nombre</label><br>
                        <input type="text" name="nombre" id="nombre" v-model="input2"><br><br>
                        <label for="">Apellido</label><br>
                        <input type="text" name="apellido" id="apellido" v-model="input3"><br><br>
                        <label for="">Libro</label><br>
                        <input type="text" name="libro" id="libro" v-model="input4">
                        <br><br>
                        <input type="submit" value="Agregar" v-bind:style="style_button">
                    </form>
                    <br><br><br>
                    <center>
                    <progress v-bind:value="progress" max="100"></progress>
                    <br><br>
                    <p v-if="progress==100" >Formulario completo</p>
                    </center>
                </fieldset>
        </div>

           <div id="ModalAlerta">
            <fieldset class="animated bounceInDown" v-show="alert==true" >
                <center>
                <img src="img/triangle.png" style="margin-top: -30px; margin-bottom: 10px;" alt="" width="80" height="80">
                <br><br>
                <h3>Estás seguro que desea eliminar?</h3><br><br>
                <input type="button" value="Cancelar" v-on:click="alert=false">
                <a v-bind:href="url"><input type="button" value="Eliminar" v-on:click="url='../Controlador/proveedores/eliminarPro.php?Id='+id"></a>
                </center>
            </fieldset>
        </div>

        <div id="main2">
            <button style="margin-top: 20px; margin-right: 100px; cursor: pointer; float: right;border-radius: 50px; border: 0;" v-on:click="mostrar=true"><img src="img/more.png" alt="" width="50" height="50" title="Agregar"></button>
            <br><br><br>
        <ul>
        <?php 

        require_once "..\Modelo\conexion.php";
        require_once "../Controlador/proveedores/CRUD.php";
        
        $proveedor = new proveedores();
        $mostrar = $proveedor->mostrar();

        foreach ($mostrar as $datos) {
        ?> 
            <li>
            <fieldset>
                <ul>
                    <ol><center><img src="img/user.png" alt="" width="90" height="90"></center></ol>
                    <ol><h4>Cedula: <?php echo $datos['cedula']; ?></h4></ol>
                    <ol><h4>Nombre: <?php echo $datos['nombre']; ?></h4></ol>
                    <ol><h4>Apellido: <?php echo $datos['apellido'];?></h4></ol>
                    <ol><h4>Libro: <?php echo $datos['libro']; ?></h4></ol>
                </ul>
                <a href="formMODproveedor.php?id=<?php echo $datos['Id']; ?>"><input type="button" value="Modificar"></a>
                <a href="#" v-on:click="id=<?php echo $datos['Id']; ?>"><input type="button" value="Eliminar" v-on:click="alert=true"></a>
            </fieldset>
            </li>
        <?php }?>
        </ul>
        </div> 

    </div>
    <script src="Js/efectos.js"></script>
</body>
</html>