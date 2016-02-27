<?php
/**
 * Created by IntelliJ IDEA.
 * User: jaime
 * Date: 2/7/2016
 * Time: 3:14 PM
 */
include_once("MySQLConnection.php");
?>
<!DOCTYPE html>
<head lang="en">
    <title>JSF Solutions</title>
    <meta charset="UTF-8">
</head>
<body bgcolor="#EEEEEE">
<div align="center">
    <div style="width: 200px; height: 170px; padding: 20px; background-color: rgba(0, 0, 0, 0); border: double">
        <form action="Login_verify.php" method="post">
            <label>Usuario (e-mail)</label>
            <br>
            <input class="form-control" type="text" name="user" required>
            <br>
            <label>Contraseña</label>
            <br>
            <input class="form-control" type="password" name="password" required>
            <br>
            <br>
            <input type="submit">
            <a href="Registro.php"> <input type="button" value="Register"> </a>
            <br> <br>
            <a href="Send_reset_email.php" >Olvidaste tu contraseña? Haz click aquí </a>

            
            

        </form>
    </div>
</div>
</body>