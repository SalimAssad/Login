<?php
include_once("MySQLConnection");

$usuario = $_POST["user"];
$correo = $_POST["email"];
$pase = $_POST["pass"];
$conf = $_POST["vpass"];

if($pase == $conf){
    $pase = md5($pase);
    mysqli_query($connection,"INSERT INTO clientes (nombre,email,password) values($usuario,$correo,$pase);");
    header("Location: Login.php?login=success");
}
else{
    header("location: Registro.php?reg=error");
}