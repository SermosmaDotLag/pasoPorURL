<?php
    include ('lugar.php');
    include ('../../config/conexion.php');
    $lugar = new Lugar($host, $username, $passwd, $bdname);

    $ip = $_POST['ip'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];

    echo $lugar->crearLugar($ip, $nombre, $descripcion);
?>