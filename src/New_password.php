<?php
    if (isset($_GET['idCliente'])) {
        $idCliente = $_GET['idCliente'];
    ?>
    <!DOCTYPE html>
    <html>
    <head lang="es">
        <meta charset="UTF-8">
        <title>Nueva contraseña</title>

        <link href="css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
    <div align="center">
        <div align="left" style="width: 230px; height: 140px; padding: 10px; margin-top: 130px;">
            <form action="Reset.php" method="post">
                <input type="hidden" name="idCliente" value="<?php echo $idCliente ?>">
                <label for="password">Nueva contraseña</label>
                <br>
                <input class="form-control" type="password" id="password" name="password">
                <label for="verify_password">Verificar nueva contraseña</label>
                <br>
                <input class="form-control" type="password" id="verify_password" name="verify_password">

                <div align="center" style="margin: 10px">
                    <input class="btn" type="submit">
                </div>
            </form>
        </div>
    </div>
    </body>
    </html>
<?php
} else {
    header("Location: Login.php");
}