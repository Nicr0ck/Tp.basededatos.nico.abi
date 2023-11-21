<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            font-size: 18px;
            text-decoration: none;
            color: #fff;
            background-color: #3498db;
            border-radius: 5px;
            border: 2px solid #2980b9;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #2980b9;
        }

        div {
            margin-bottom: 20px;
            color: #555;
        }
    </style>
    <title>Pokemon proyecto web</title>
</head>
<body>
    <div class="container">
        <h1>Sistema de ingreso y vista de pokedex</h1>
        <div>Desea Ingresar, modificar o ver</div>
        <a class="btn" href="view/ingreso_pokedex.php">Ingresar</a>
        <a class="btn" href="view/modificacion_pokedex.php">Modificar</a>
        <a class="btn" href="controller/all_pokedex.php">Ver</a>
    </div>
</body>
</html>