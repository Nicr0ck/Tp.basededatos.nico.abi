<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/estilos.css">
    <title>Ingreso</title>
</head>
<body>
<table>
  <h1>Vista de Pokedex</h1>
  <li><a class="btn" href="../index.php">Volver a la pagina principal</a></li>    
  <tr>
              <td>Numero de pokedex</td>
              <td>Nombre</td>
              <td>Tipos</td>
              <td>Descripcion</td>
              <td>Habilidad</td>
              <td>Altura(M)</td>
              <td>peso(Kg)</td>
              <td>Categoria</td>
            </tr>
  <?php
  require_once("../config/database.php");

  $sql = "SELECT * FROM pokedex;";
  $result=$link->query($sql);

  while($row_client = mysqli_fetch_array($result))
  {
      echo "
      <div>
            <tr>
              <td>".$row_client['numero']."</td>
              <td>".$row_client['nombre']."</td>
              <td>".$row_client['tipos']."</td>
              <td>".$row_client['descripcion']."</td>
              <td>".$row_client['habilidad']."</td>
              <td>".$row_client['altura_m']."</td>
              <td>".$row_client['peso_kg']."</td>
              <td>".$row_client['categoria']."</td>
              <td>
              <a href='../view/modificacion_Pokemon.php?id=".$row_client['numero']."'>Modificar</a>
              </td>
            </tr>
          </div>
            ";
  }




?>
</table>
</body>
</html>

