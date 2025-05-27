<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallinero del Abuelito | Inicio</title>
    <link rel="stylesheet" href="includes/css/style.css">
    <link rel="shortcut icon" href="./img/chicken.svg" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+Great+Primer:ital@0;1&display=swap" rel="stylesheet">
</head>

<body>

    <?php include('header.php'); ?>

    <main>
        <div class="card contenedor">
            <h2>Añadir raza:</h2>
            <form class="formulario" action="includes/recoger_raza.php" method="post">
                <div>
                    <label for="nombre">Nombre: </label>
                    <input type="text" name="nombre" id="nombre" required>
                </div>
                <div>
                    <label for="descripcion">Descripcion:</label>
                    <textarea rows="6" name="descripcion" id="descripcion"></textarea>
                </div>
                <div>
                    <input class="boton" type="submit" value="Enviar">
                </div>
            </form>

            <br>

            <?php
            include_once("includes/funciones.php");
            $razas = mostrarRazasBorrar();
            // Solo mostrar el formulario si hay razas disponibles para borrar
            if (!empty($razas)): ?>

                <form class="secciones" action="includes/borrar_raza.php" method="post">

                    <label for="nombre_eliminar">Eliminar raza (sin gallina registrada):</label>
                    <select name="nombre" id="nombre_eliminar">
                        <?php
                        include_once("includes/funciones.php");
                        $razas = mostrarRazasBorrar();
                        foreach ($razas as $raza) {
                        ?>
                            <option value="<?php echo $raza->getNombre(); ?>">
                                <?php echo $raza->getNombre(); ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>
                    <button class="boton boton-danger" type="submit">Eliminar</button>
                </form>
            <?php endif; ?>
        </div>

    </main>
    <?php include("footer.php") ?>
    <script src="includes/js/script.js"></script>
</body>

</html>