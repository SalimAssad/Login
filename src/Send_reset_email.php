<?php
include_once("MySQLConnection.php");

$email = $_POST['email'];

$sql = mysqli_query($connection, "select idCliente from Clientes where email='$email'");
if(mysqli_num_rows($sql) == 1){
    $client = mysqli_fetch_assoc($sql);
    $idClient = $client['idCliente'];
    $message = wordwrap("Para reiniciar su contraseña ingrese al siguiente enlace: 192.100.213.232\\New_password.php?idCliente=$idClient", 70);
    $mail = @mail($email, "Reinicio de contraseña", $message, "From: jsfsoporte@gmail.com");
    if($mail)
        echo "funciono";
    else
        echo "no funciono";

}
//header("Location: Email_reset.html");