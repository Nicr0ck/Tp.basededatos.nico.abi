<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/estilos.css">
    <title>Vista de Pokedex</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Vista de Pokedex</h1>
        <ul class="nav">
            <li class="nav-item">
                <a class="btn btn-secondary" href="../index.php">Volver a la página principal</a>
            </li>
        </ul>
        <table>
            <tr>
                <th>Número de Pokedex</th>
                <th>Nombre</th>
                <th>Tipos</th>
                <th>Descripción</th>
                <th>Habilidad</th>
                <th>Altura (M)</th>
                <th>Peso (Kg)</th>
                <th>Categoría</th>
                <th>Acciones</th>
            </tr>
            <?php
                require_once("../config/database.php");

                $sql = "SELECT * FROM pokedex;";
                $result = $link->query($sql);

                while ($row_client = mysqli_fetch_array($result)) {
                    echo "
                    <tr>
                        <td>" . $row_client['numero'] . "</td>
                        <td>" . $row_client['nombre'] . "</td>
                        <td>" . $row_client['tipos'] . "</td>
                        <td>" . $row_client['descripcion'] . "</td>
                        <td>" . $row_client['habilidad'] . "</td>
                        <td>" . $row_client['altura_m'] . "</td>
                        <td>" . $row_client['peso_kg'] . "</td>
                        <td>" . $row_client['categoria'] . "</td>
                        <td>
                            <a href='../view/modificacion_Pokemon.php?id=" . $row_client['numero'] . "'>Modificar</a>
                        </td>
                    </tr>
                    ";
                }
            ?>
        </table>
    </div>
</body>
</html>
