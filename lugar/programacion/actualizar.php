<?php
    $ip = $_POST["ip"];
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    include('lugar.php');
    include('../../config/conexion.php');
    $crud = new Lugar($host, $username, $passwd, $bdname);
    echo $crud->actualizarLugar($ip, $nombre, $descripcion)
?>