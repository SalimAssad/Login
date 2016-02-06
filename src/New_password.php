<?php
if(isset($_GET['idCliente'])) {
    $idCliente = $_GET['idCliente'];
    ?>
    <!DOCTYPE html>
    <html>
    <head lang="es">
        <meta charset="UTF-8">
        <title>Nueva contraseña</title>
    </head>
    <body>
    <div>
        <form action="Reset.php" method="post">
            <input type="hidden" name="idCliente" value="<?php echo $idCliente ?>">
            <label>New password</label>
            <br>
            <input type="password" name="password">
            <label>Verify new password</label>
            <br>
            <input type="password" name="verify_password">
            <br>
            <input type="submit">
        </form>
    </div>
    </body>
    </html>
<?php
}else{
    header("Location: Login.php");
}