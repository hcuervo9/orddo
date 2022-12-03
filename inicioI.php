<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylePri.css">
    <link rel="stylesheet" href="css/normalize.css">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        if(!isset($_SESSION["usuario"])){
            header("location:index.php");
        }
    ?>

    <header>
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
    </header>
    
</body>
</html>