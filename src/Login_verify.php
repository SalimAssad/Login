<?php

include_once("MySQLConnection.php");

$user = $_POST["user"];
$password = $_POST["password"];


$query = mysqli_query($connection, "select * from Clientes where email = '$user'");

if(mysqli_num_rows($query) > 0){
    echo "hola putos";
    $row = mysqli_fetch_assoc($query);

        if (md5($password) == $row['password']) {
            header('Location: Login.php?login=SESION_INICIADA');
        } else {
            header('Location: Login.php?log=error');
        }

}else{
    header('Location: Login.php?log=NO_EXISTE_USUARIO');
}

mysqli_close($connection);
?>