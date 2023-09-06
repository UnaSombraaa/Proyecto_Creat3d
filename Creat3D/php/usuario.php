<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuración de Usuario</title>
    <link href="css/formulario.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<header>
    <!-- Aquí coloca el contenido de tu encabezado -->
</header>
<section class="container-content">
    <article>
        <h1>Configuración de Usuario</h1>
        <form method="POST" action="guardar_configuracion.php">
            <!-- Aquí coloca los campos de configuración que necesites -->
            <div class="form-outline mb-4">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" value="Nombre del usuario">
            </div>
            <div class="form-outline mb-4">
                <label for="email" class="form-label">Correo Electrónico:</label>
                <input type="email" id="email" name="email" class="form-control" value="correo@example.com">
            </div>
            <!-- Agrega más campos según tus necesidades -->

            <button type="submit" class="btn btn-primary">Guardar Configuración</button>
        </form>
    </article>
</section>
</body>
</html>