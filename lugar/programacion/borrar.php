<?php
    $ip = $_GET["ip"];
    include('lugar.php');
    include('../../config/conexion.php');
    $lugar = new Lugar($host, $username, $passwd, $bdname);
    echo $lugar->borrarLugar($ip)
?>