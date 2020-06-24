<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/estilos.css">
    <title>Index</title>
</head> 
<script src="Js/vue.js"></script>
<body>
    <div class="container">
        <?php include "menu.php";  ?> 
        <div id="main2">
            <ul style="margin-left: 36%; margin-top: 80px;">
                <li><img src="img/customer.png" alt="" width="60" height="60"><p>Clientes</p></li>
                <li><img src="img/employer.png" alt="" width="60" height="60"><p>Proveedores</p></li>
                <li><img src="img/book.png" alt="" width="60" height="60"><p>Libros</p></li>
                <li><img src="img/user.png" alt="" width="60" height="60"><p>Configuraciones</p></li>
            </ul>
            <br><br><br><br>
            <center>
                <h1> {{saludo}} Administrador</h1>
                <br><br>
                <img src="img/user.png" alt="" width="120" height="120">
            </center>
        </div> 
    </div>
    <script src="Js/efectos.js"></script>
</body>
</html>