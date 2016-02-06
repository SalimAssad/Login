<?php

$connection = mysqli_connect("localhost", "root", "excelsos", "Prueba");

if($connection -> connect_error)
    die("Connection failed: " . $connection -> connect_error);