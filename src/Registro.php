<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>JSF Solutions</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <form action="New_user.php" method="POST" class="col-lg-6 col-lg-offset-3">
        <h1 class="page-header">Registro<br><small>Introduzca los datos que se piden a continuación</small></h1>
        <fieldset>
            <p>
                <label for="usuario">Nombre de usuario: </label>
                <input class="form-control" id="usuario" name="user" type="text" placeholder="Usuario" required autofocus="on">
            </p>
            <p>
                <label for="correo">E-mail: </label>
                <input class="form-control" id="correo" name="email" type="email" placeholder="ejemplo@ejemplo.com" required>
            </p>
            <p>
                <label for="pase">Contraseña: </label>
                <input class="form-control" id="pase" name="pass" type="password" placeholder="Contraseña" required>
            </p>
            <p>
                <label for="conf">Confirmar contraseña: </label>
                <input class="form-control" id="conf" name="vpass" type="password" placeholder="Escriba de nuevo su clave" required>
            </p>
            <input class="btn btn-primary col-lg-offset-5" value="Registrar" type="submit" id="registrar" name="registrar">
        </fieldset>
        <br><br>
        <?php
            if(isset($_GET["reg"])){
                if($_GET["reg"]=="error"){
                    echo "<div class='alert alert-danger' role='alert'>Las contraseñas no coinciden, inténtelo de nuevo...</div>";
                }
            }
        ?>
    </form>
</body>
</html>