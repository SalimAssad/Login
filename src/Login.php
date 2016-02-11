<?php
include_once("MySQLConnection.php");
?>
<!DOCTYPE html>
<head lang="en">
    <meta charset="UTF-8">
</head>
<body bgcolor="#EEEEEE">
<div align="center">
    <div style="width: 200px; height: 150px; padding: 20px; background-color: rgba(0, 0, 0, 0); border: double">
        <form action="login_verify.php" method="post">
            <label>Usuario</label>
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
            <br>
            <a href="Email_reset.html" <label>Olvidaste tu contraseña? Haz click aquí</label> </a>

            
            

        </form>
    </div>
</div>
</body>