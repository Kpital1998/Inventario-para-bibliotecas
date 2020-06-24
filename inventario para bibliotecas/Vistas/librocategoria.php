<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/estilos.css">
    <title>Mostrar libros</title>
</head>
<script src="Js/vue.js"></script>
<body>
    <div class="container">
    <?php include "menu.php"; ?>
    <div id="tablas">
    <center>
            <?php  
                
                require_once "..\Modelo\conexion.php";
                $conexion = new conexion();
                $ins = $conexion->conectar();
                $_categoria = $_GET['categoria'];
                $sql = "SELECT * FROM libros WHERE categoria='$_categoria'";
                $query = mysqli_query($ins,$sql);
            ?>
           <h3><?php echo $_categoria; ?></h3> 
        <table>
            <thead>
                <tr>
                    <td v-for="datos in tabla">{{datos}}</td>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($query)) {                  
                ?>
                <tr>
                    <td><?php echo $row['nom_libro']; ?></td><td><?php echo $row['categoria']; ?></td><td><?php echo $row['seccion']; ?></td><td><?php echo $row['descripcion']; ?></td>
                </tr>
                <?php  
                }
                ?>
            </tbody>
        </table>
    </center>
    </div>
    </div>
    <script src="Js/efectos.js"></script>
</body>
</html>