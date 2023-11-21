<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso</title>
</head>
<body>
<?php
$num=$_POST["numero"];
$nom=$_POST["nombre"];
$tip=$_POST["tipos"];
$desc=$_POST["descripcion"];
$hab=$_POST["habilidad"];
$pe=$_POST["peso"];
$alt=$_POST["altura"];
$categ=$_POST["categoria"];

require_once("../config/database.php");

$sql = "UPDATE pokedex SET nombre ='$nom',tipos='$tip',descripcion='$desc',habilidad ='$hab', peso_kg =$pe,altura_m=$alt, categoria='$categ' WHERE numero = $num";
$result=$link->query($sql);

if($result == 1){
    echo "Se modifico correctamente";
}else{
    echo "Algo Anda mal papu";
}
?>
    <li><a class="btn" href="../index.php">Volver a la pagina principal</a></li>    
</body>
</html>
