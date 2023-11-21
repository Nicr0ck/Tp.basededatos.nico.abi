<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso de Pokémon a la Pokédex</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Pokédex</h1>
        <ul class="nav">
            <li class="nav-item">
                <a class="btn btn-secondary" href="../index.php">Volver al Menú</a>
            </li>
        </ul>
        <form action="../controller/insert_Pokedex.php" method="post">
            <div class="mb-3">
                <label for="numero" class="form-label">Número:</label>
                <input type="number" class="form-control" name="numero" required placeholder="Número del Pokémon">
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" name="nombre" placeholder="Nombre del Pokémon">
            </div>
            <div class="mb-3">
                <label for="tipos" class="form-label">Tipo/s:</label>
                <input type="text" class="form-control" name="tipos" placeholder="Tipo/s del Pokémon">
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción de la Pokédex:</label>
                <input type="text" class="form-control" name="descripcion" placeholder="Descripción del Pokémon">
            </div>
            <div class="mb-3">
                <label for="habilidad" class="form-label">Habilidad/es:</label>
                <input type="text" class="form-control" name="habilidad" placeholder="Habilidad del Pokémon">
            </div>
            <div class="mb-3">
                <label for="peso" class="form-label">Peso (en Kg):</label>
                <input type="text" class="form-control" name="peso" placeholder="Peso del Pokémon">
            </div>
            <div class="mb-3">
                <label for="altura" class="form-label">Altura (En M):</label>
                <input type="text" class="form-control" name="altura" placeholder="Altura del Pokémon">
            </div>
            <div class="mb-3">
                <label for="categoria" class="form-label">Categoría:</label>
                <input type="text" class="form-control" name="categoria" placeholder="Categoría del Pokémon">
            </div>
            <button type="submit" class="btn btn-primary">Agregar Pokémon a la Pokédex</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>