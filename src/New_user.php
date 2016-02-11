<?php
include_once("MySQLConnection.php");

$usuario = $_POST["user"];
$correo = $_POST["email"];
$pase = $_POST["pass"];
$conf = $_POST["vpass"];

if($pase == $conf){
    $pase = md5($pase);
    mysqli_query($connection,"INSERT INTO Clientes (nombre,email,password) values('$usuario','$correo','$pase');");
    mysqli_error($connection);
    header("Location: Login.php?login=success");
}
else{
    header("location: Registro.php?reg=error");
}