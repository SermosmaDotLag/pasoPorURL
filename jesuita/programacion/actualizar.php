<?php
    include('jesuita.php');
    include('../../config/conexion.php');
    
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $firma = $_POST["firma"];
    
    $crud = new Jesuita($host, $username, $passwd, $bdname);
    $crud->actualizar($id, $nombre, $firma)
?>