<?php
    include 'includes/login_registrar.php';
    error_reporting(0);
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleRegis.css">
    <link rel="src" href="js/script.js">
    <link rel="icon" href="img/logo_Orddo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed&display=swap" rel="stylesheet">
    <title>ORDDO | Registro de usuario</title>
</head>
<body>

    <?php
        session_start();
        if(!isset($_SESSION["usuario"])){
            header("location:index.php");
        }
    ?>

    <div class="conteiner">

        <form action="" method="post">
            <div class="circulo"><img src="img/logo_Orddo.png" alt=""></div>
            <p class="title">Registro</p>

            <label>
                <input placeholder="nombre" type="text" id="nombre" name="nombre" min="3" maxlength="30">
            </label>
            <label>
                <input placeholder="email" type="text" id="email" name="email" min="0" maxlength="30">
            </label><br>
            <label>
                <input placeholder="apellido" type="text" id="apellido" name="apellido" min="5" maxlength="30">
            </label>
            <label>
                <input placeholder="telefono" type="text" id="telefono"  name="relefono" min="5" maxlength="30">
            </label><br>
            <label>
                <input placeholder="documento" type="text" id="documento" name="documento" min="5" maxlength="11">
            </label>
            <label>
                <input list="cargo-list" placeholder="cargo" name="cargo">
                <datalist id="cargo-list">
                    <option value="Em. General" />
                    <option value="Administrador" />
                </datalist>
            </label><br>
            <label>
                <input placeholder="usuario" type="text" id="usuario" name="usuario" min="5" maxlength="30">
            </label>
            <label>
                <input placeholder="password" type="password" id="password" name="password" min="5" maxlength="30">
            </label><br>
            <div class="iper">
                <a href="index.php">ya tengo una cuenta</a>
            </div>
            <button id="buttonRes" name="btnRegistrar">
                Registrar
            </button>
            <button id="buttonRes" class="btnRegresar"name="btnRegresar">
                <a href="inicio.php">Regresar</a>
            </button>
        </form>

    </div>
    
</body>
</html>