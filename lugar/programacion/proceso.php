<?php

    $ip = $_GET['ip'];
    $tipo = $_GET['tipo'];

    echo $tipo;
    echo $ip;
    if($tipo = 'b')
        header("Location:borrar.php?ip=".$ip);
    if($tipo = 'm')
        header("Location:borrar.php?ip=".$ip);
?>