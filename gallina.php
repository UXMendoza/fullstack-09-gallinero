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
            <h2>Añadir gallina:</h2>
            <form class="secciones" action="includes/recoger_gallina.php" method="post">
                <div class="formulario">
                    <div>
                        <label for="nombre">Nombre: </label>
                        <input type="text" name="nombre" id="nombre" required>
                    </div>
                    <div>
                        <label for="fecha_nacimiento">Fecha nacimiento:</label>
                        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="<?php echo date("Y-m-d") ?>" max="<?php echo date("Y-m-d"); ?>" required>
                    </div>
                    <div>
                        <label for="nombre">Raza: </label>
                        <select name="nombre_raza" id="nombre">
                            <?php
                            include_once("includes/funciones.php");
                            $razas = mostrarRazas();
                            foreach ($razas as $raza) {
                            ?>
                                <option value="<?php echo $raza->getNombre() ?>"><?php echo $raza->getNombre() ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div>
                        <input class="boton" type="submit" value="Enviar">
                    </div>
                </div>
            </form>
            <br>

            <?php
            include_once("includes/funciones.php");
            $gallinas = mostrarGallinasBorrar();
            // Solo mostrar el formulario si hay gallinas disponibles para borrar
            if (!empty($gallinas)): ?>

                <form class="formulario" action="includes/borrar_gallina.php" method="post">
                    <div>
                        <label for="id_borrar">Eliminar gallina (sin historial):</label>
                        <select name="id" id="id_borrar">
                            <?php
                            include_once("includes/funciones.php");
                            $gallinas = mostrarGallinasBorrar();
                            foreach ($gallinas as $gallina) {
                            ?>
                                <option value="<?php echo $gallina->getId(); ?>"><?php echo $gallina->getNombre(); ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <button class="boton boton-danger" type="submit">Eliminar</button>
                    </div>
                </form>
            <?php endif; ?>

        </div>

    </main>
    <?php include("footer.php") ?>
    <script src="includes/js/script.js"></script>
</body>

</html>