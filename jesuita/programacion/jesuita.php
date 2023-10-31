<?php
class Jesuita {
    private $conexion;

    // Constructor que recibe los datos de conexión a la base de datos
    public function __construct($host, $username, $passwd, $bdname) {
        // Establece una conexión a la base de datos MySQL
        $this->conexion = new mysqli($host, $username, $passwd, $bdname);
    }

    // Método para agregar un nuevo registro a la tabla "jesuita"
    public function anadir($id, $nombre, $firma) {
        $sql = "INSERT INTO jesuita (idJesuita, nombre, firma) VALUES ('$id', '$nombre', '$firma')";
        if ($this->conexion->query($sql) === TRUE) {
            return 'Jesuita insertado con exito';
        }
    }

    // Método para recuperar todos los registros de la tabla "jesuita"
    public function ver() {
        $sql = "SELECT idJesuita, nombre, firma FROM jesuita";
        $result = $this->conexion->query($sql);
        $registros = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $registros[] = $row;
            }
        }
        return $registros;
    }

    // Método para buscar un registro en la tabla "jesuita por ID
    public function consultarUnJesuita($id) {
        $sql = "SELECT idJesuita, nombre, firma FROM jesuita WHERE idJesuita = '$id'";
        $result = $this->conexion->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row;
        } else {
            return 'No hay un jesuita con ese id';
        }
    }

    // Método para actualizar un registro en la tabla "jesuita"
    public function actualizar($id, $nombre, $firma) {
        $sql = "UPDATE jesuita SET idJesuita = $id, nombre='$nombre', firma='$firma' WHERE idJesuita='$id'";
        if ($this->conexion->query($sql) === TRUE) {
            return "Jesuita actualizado con éxito.";
        }
    }

    // Método para eliminar un registro de la tabla "jesuita" por ID
    public function borrar($id) {
        $sql = 'DELETE FROM jesuita WHERE idJesuita='.$id;
        if ($this->conexion->query($sql) == true) {
            return "Jesuita eliminado con éxito.";
        } else {
            return 'No hay un jesuita con ese identificador';
        }
    }
}
?>