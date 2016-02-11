<?php
/**
 * Created by IntelliJ IDEA.
 * User: jaime
 * Date: 2/7/2016
 * Time: 3:14 PM
 */
include_once("MySQLConnection.php");

$user = $_POST["user"];
$password = $_POST["password"];


$query = mysqli_query($connection, "select * from Clientes where email = '$user'");

if(mysqli_num_rows($query) > 0){
    $row = mysqli_fetch_assoc($query);

        if (($password) == $row['password']) {
            header('Login.php?login=SESION_INICIADA');
        } else {
            header('Location: Login.php?=log=error');
        }

}else{
    $validation_query = mysqli_query($connection, "select idCliente from Clientes");
    if(mysqli_num_rows($validation_query) == 0){
        header('Location: Login.php?=NO_HAY_NADA_EN_BDD');
    }else{
        header('Login.php?login=SESION_INICIADA');
    }
}

mysqli_close($connection);
?>