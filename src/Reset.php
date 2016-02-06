<?php
include_once("MySQLConnection");

$idClient = $_POST['idCliente'];
$password = $_POST['password'];
$verify_password = $_POST['verify_password'];

if($password == $verify_password){
    $password = md5($password);
    mysqli_query($connection, "update from Clientes set password = '$password' where idCliente = '$idClient'");
    header("Location: Login.php");
}

prueba;