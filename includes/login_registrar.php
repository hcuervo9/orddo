<?php

include('conexion.php');

error_reporting(0);

$user= $_POST['usuario'];
$password= $_POST['password'];

$documento = $_POST['documento'];
$nombre = $_POST['nombre'];
$apelldio = $_POST['apellido'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$cargo = $_POST['cargo'];

$warning = $_GET['warning'];

/*
//iniciar sesion
if (isset($_POST['btnIngresar'])) {
    $query = mysqli_query($conexion,"SELECT * FROM loginpag where usuario = '$user' and password = '$password'");
    $nr = mysqli_num_rows($query);

    if (($nr == 1)&&(password_verify($password, $nr))) {
        echo "<script> alert('Bienvenido $user'); window.location='../inicio.php' </script>";
    }else{
        echo "<script> alert('Usuario no existe'); window.location='index.php' </script>";
    }

}*/

/*
if(isset($_POST['btnRegistrar'])){
    $pass_crip = password_hash($password, PASSWORD_DEFAULT);
    $queryregistrar = "INSERT INTO loginpag(usuario,password) values('$user', '$pass_crip')";
    if(mysqli_query($conexion,$queryregistrar)){
        echo "<script> alert('Usuario registrado: $user'); window.location='../index.php' </script>";
    }else{
        echo "Error: ";
    }
}*/

//encriptacion
function encrypt($string, $key){
    $result ='';
    for($i = 0;$i<strlen($string); $i++){
        $char = substr($string,$i,1);
        $keychar = substr($key,($i % strlen($key))- 1,1);
        $char = chr(ord($char)+ord($keychar));
        $result .=$char;
    }
    return base64_encode($result);
}

function desencrypt($string, $key){
    $result ='';
    $string = base64_decode($string);
    for($i = 0;$i<strlen($string); $i++){
        $char = substr($string,$i,1);
        $keychar = substr($key,($i % strlen($key))- 1,1);
        $char = chr(ord($char)-ord($keychar));
        $result .=$char;
    }
    return $result;
}

//registro
if (isset($_POST['btnRegistrar'])) {
    $sqlgrabar = "INSERT INTO usuarios(UsuUsuario,UsuPassword) values('$user', '$password')";
    $sqlgrabar2 = "INSERT INTO empleados(EmDocumento, EmNombre, EmApellido, EmTelefono, EmEmail, EmCargo) VALUES ('$documento', '$nombre','$apelldio','$telefono','$email','$cargo')";
    if (mysqli_query($conexion,$sqlgrabar)) {
        echo "<script> alert('Usuario registrado: $user'); window.location='./registerUser.php' </script>";
    }else{
        echo "Error: ";
    }
    if(mysqli_query($conexion,$sqlgrabar2)){
        echo "<script> alert('Nombre: $nombre');</script>";
    }else{
        echo "Error en empleados";
    }
}

//inicio sesion
if (isset($_POST['btnIngresar'])) {

    if ($user == "" || $password == ""){
        echo "<script> alert('Existen campos vacios'); window.location='../index.php' </script>";
    }else{
        $query = mysqli_query($conexion,"SELECT * FROM usuarios where UsuUsuario = '$user' and UsuPassword = '$password'");
        $nr = mysqli_num_rows($query);
        if ($nr == 1) {
            session_start();
            $_SESSION["usuario"]=$_POST["usuario"];
            echo "<script> alert('Bienvenido $user'); window.location='../inicio.php' </script>";
        }else{
            echo "<script> alert('Usuario o contraseña incorrecta'); window.location='../index.php' </script>";
        }
    }
}
/*
if(isset($_POST['btnIngresar'])){
    $queryusuario = mysqli_query($conexion, "SELECT * FROM loginpag WHERE usuario = '$user'");
    $nr = mysqli_num_rows($queryusuario);
    $buscarpass = mysqli_fetch_array($queryusuario);
    if(($nr == 1)&&(password_verify($password, $buscarpass['password']))){
        echo "<script> alert('Bienvenido $user'); window.location='../inicio.php' </script>";
    }
    else{
        echo "<script> alert('Usuario no existe'); window.location='../index.php' </script>";
    }
}*/


?>