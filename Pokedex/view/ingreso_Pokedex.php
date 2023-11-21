<!DOCTYPE html>
<html>
<head>
    <title>Ingreso de pokemon a la pokedex</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Pokedex</h1>
        <li><a class="btn" href="../index.php">Volver al Menu</a></li>
        <form action="../controller/insert_Pokedex.php" method="post">
            <div class="mb-3">
                <label for="numero" class="form-label">Numero:</label>
                <input type="number" class="form-control" name="numero" require placeholder="Número del Pokémon">
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
                <label for="descripcion" class="form-label">Descripcion de pokedex:</label>
                <input type="text" class="form-control" name="descripcion" placeholder="Descripcion del Pokémon">
            </div>
            <div class="mb-3">
                <label for="habilidad" class="form-label">Habilidad/es:</label>
                <input type="text" class="form-control" name="habilidad" placeholder="Habilidad del Pokémon">
            </div>
            <div class="mb-3">
                <label for="peso" class="form-label">Peso(en Kg):</label>
                <input type="text" class="form-control" name="peso" placeholder="Peso del Pokémon">
            </div>
            <div class="mb-3">
                <label for="altura" class="form-label">Altura(En M):</label>
                <input type="text" class="form-control" name="altura" placeholder="Altura del Pokémon">
            </div>
            <div class="mb-3">
                <label for="categoria" class="form-label">Categoria:</label>
                <input type="text" class="form-control" name="categoria" placeholder="Categoría del Pokémon">
            </div>
            <button type="submit" class="btn btn-primary">Agregar Pokemon a Pokedex</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>