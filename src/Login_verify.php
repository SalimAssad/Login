<?php
include_once("MySQLConnection.php");

$user = $_POST["user"];
$password = $_POST["password"];


$query = mysqli_query($connect, "select * from clientes where idCliente = $user");

if(mysqli_num_rows($query) > 0){
    $row = mysqli_fetch_assoc($query);

    if($row['mostrar']) {
        if (md5($password) == $row['password']) {
            session_start();
            $_SESSION['name'] = $row['nombre'];
            header('Location: Menu.php');
        } else {
            header('Location: Login.php');
        }
    }else{
        header('Location: Login.php');
    }
}else{
    $validation_query = mysqli_query($connect, "select idCliente from clientes");
    if(mysqli_num_rows($validation_query) == 0){
        header('Location: Registro.php');
    }else{
        header('Location: Login.php');
    }
}

mysqli_close($connect);
?>