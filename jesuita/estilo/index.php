<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="jesuita.css">
        <title>APP jesuita</title>
    </head>
    <body>
        <h1>Formulario de Jesuitas</h1>
        <h2>Añadir jesuitas</h2>
        <form action="../programacion/crear.php" method="post">
            <label for="id">Número de puesto:</label>
            <input type="text" name="id" id="id" required><br>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required><br>
            <label for="firma">Firma:</label>
            <input type="text" name="firma" id="firma" required><br>
            <input type="submit" value="Enviar">
        </form>
        <h2>Actualizar un jesuita:</h2>
            <form action="../programacion/actualizar.php" method="post">
                <label for="id">Número de puesto:</label>
                <input type="text" name="id" required><br>
                <label for="nombre">Nuevo Nombre:</label>
                <input type="text" name="nombre" required><br>
                <label for="firma">Nueva Firma:</label>
                <textarea name="firma" required></textarea><br>
                <input type="submit" name="update" value="Actualizar">
            </form>
        <h2>Borrar Jesuitas</h2>
        <form action="../programacion/borrar.php" method="get">
            <label for="id">Número de puesto:</label>
            <input type="text" name="id" id="id" required><br>
            <input type="submit" value="Enviar">
        </form>
        <h2>Listado de Jesuitas:</h2>
            <table>
                <tr>
                    <th>Número de puesto</th>
                    <th>Nombre del jesuíta</th>
                    <th>Firma del jesuíta</th>
                </tr>
                <?php
                include ('../programacion/jesuita.php');
                include ('../../config/conexion.php');
                $jesuita = new Jesuita($host, $username, $passwd, $bdname);
                $jesuitas = Array();
                $jesuitas = $jesuita->ver();

                foreach ($jesuitas as $row) {
                    echo "<tr>";
                    echo '<td>'.$row["idJesuita"].' <a href="../programacion/borrar.php?idJesuita='.$row["idJesuita"].'">Borrar</a></td>';
                    echo "<td>" . $row["nombre"] . "</td>";
                    echo "<td>" . $row["firma"] . "</td>";
                    echo "</tr>";
                }
                ?>
            </table>
    </body>
</html>