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

$sql = "INSERT INTO pokedex values($num,'$nom','$tip','$desc','$hab',$pe,$alt,'$categ')";
$result=$link->query($sql);

if($result == 1){
    echo "Se ingreso correctamente";
}else{
    echo "Algo anda mal :B";
}
?>
    <li><a class="btn" href="../index.php">Volver a la pagina principal</a></li>    
</body>
</html>
