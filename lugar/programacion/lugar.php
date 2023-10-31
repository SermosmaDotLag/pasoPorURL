<?php

    class Lugar
    {
        private $conn;
        
        public function __construct($servername, $username, $password, $dbname)
        {
            $this->conn = new mysqli($servername, $username, $password, $dbname);
        }

        public function actualizarLugar($ip, $nombre, $descripcion)
        {
            $sql = 'UPDATE lugar SET ip = "'.$ip.'", lugar = "'.$nombre.'", descripcion = "'.$descripcion.'" WHERE ip = "'.$ip.'"';
            if ($this->conn->query($sql) == TRUE) {
                return 'Lugar actualizado con exito';
            }
        }

        public function borrarLugar($ip)
        {
            $sql = 'DELETE FROM lugar WHERE ip = "'.$ip.'"';
            echo '<p>'.$this->conn->errno.'</p>';
            echo '<p>'.$this->conn->error.'</p>';
            if ($this->conn->query($sql) == TRUE) {
                return 'Lugar borrado con exito';
            }
        }

        public function crearLugar($ip, $nombre, $descripcion)
        {
            $sql = 'INSERT INTO lugar (ip, lugar, descripcion) VALUES ("'.$ip.'", "'.$nombre.'", "'.$descripcion.'")';
            if ($this->conn->query($sql) == TRUE) {
                return 'Lugar insertado con exito';
            }
        }

        public function listarLugares()
        {
            $sql = "SELECT ip, lugar, descripcion FROM lugar";
            $result = $this->conn->query($sql);
            $lugares = array();

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $lugares[] = $row;
                }
            }

            return $lugares;
        }
    }
?>