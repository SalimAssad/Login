<?php
include_once("MySQLConnection.php");

$email = $_POST['email'];

$sql = mysqli_query($connection, "select idCliente from Clientes where email='$email'");
if(mysqli_num_rows($sql) == 1){
    $client = mysqli_fetch_assoc($sql);
    $idClient = $client['idCliente'];
    mail($email, "Reinicio de contraseña", "Para reiniciar su contraseña ingrese al siguiente enlace: 192.100.213.232\\New_password.php?idCliente=$idClient", "From: salimassadsoporte@gmail.com");
}
header("Location: Email_reset.html");