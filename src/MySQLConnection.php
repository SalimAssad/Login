<?php

$connection = mysqli_connect("localhost", "root", "excelsos", "Prueba");

if(!$connection)
    exit("Error - no se pudo conectar con la base de datos");