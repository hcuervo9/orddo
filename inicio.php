<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleIn.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed&display=swap" rel="stylesheet">
    <title>ORDDO | admin</title>

</head>
<body>
    <?php
        session_start();
        if(!isset($_SESSION["usuario"])){
            header("location:index.php");
        }
    ?>

    <div class="header">
        <div class="logo">
            <img src="img/Logo.png" class="logoOrddo" width="270px" alt="">
        </div>
        <div class="dropdown">
            <button class="dropbtn" id="usuarioSe" ><?php 
                echo $_SESSION["usuario"]
            ?></button>
            <div class="dropdown-content">
                <a href="#">Opciones</a>
                <a href="cierreSesion.php">Cerra Sesión</a>
            </div>
        </div>
    </div>
        <div class="ini-container">
            <div class="conteiner">
                <nav class="">
                    <ul class="menu">
                        <p>MENU</p>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Pedidos</a></li>
                        <li><a href="#">Catalogo</a></li>
                        <li><a href="#">Clientes</a></li>
                        <p>SEGURIDAD</p>
                        <li><a href="registerUser.php">Gestion</a></li>
                    </ul>
                </nav>
            </div>

            <div class="con-ini">

                <div class="div-emple">
        
                </div>
                <div class="div-pedi">
        
                </div>
            </div>
        
        </div>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>