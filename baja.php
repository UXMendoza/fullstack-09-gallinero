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
            <h2>Registrar baja:</h2>
            <form class="formulario" action="includes/recoger_baja.php" method="post">
                <div>
                    <label for="fecha">Fecha de baja: </label>
                    <input type="date" name="fecha" id="fecha" value="<?php echo date("Y-m-d") ?>" max="<?php echo date("Y-m-d"); ?>">
                </div>
                <div>
                    <div>
                        <label for="nombre">Nombre gallina: </label>
                        <select name="nombre" id="nombre">
                            <?php
                            include_once("includes/funciones.php");
                            $gallinas = mostrarGallinasVivas();
                            foreach ($gallinas as $gallina) {
                            ?>
                                <option value="<?php echo $gallina->getId() ?>"><?php echo $gallina->getNombre() ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div style="padding-top: 20px;">
                        <label for="causa">Causa:</label>
                        <div style="margin-bottom: 5px;">
                            <input type="radio" name="causa" id="sacrificada" value="sacrificada" required>
                            <label for="sacrificada">sacrificada</label>
                        </div>
                        <div>
                            <input type="radio" name="causa" id="muerte_natural" value="muerte_natural" required>
                            <label for="muerte_natural">muerte natural</label>
                        </div>
                    </div>
                </div>
                <div>
                    <input class="boton" type="submit" value="Enviar">
                </div>
            </form>
            <br>
            <form class="formulario" action="includes/borrar_baja.php" method="post">
                <div>
                    <!-- <label for="id_borrar">Resusitar gallina:</label> -->
                    <select name="id_gallina" id="id_borrar">
                        <?php
                        include_once("includes/funciones.php");
                        $gallinas = mostrarBajasBorrar();
                        foreach ($gallinas as $gallina) {
                        ?>
                            <option value="<?php echo $gallina->getId() ?>"><?php echo $gallina->getNombre() ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <button class="boton boton-danger" type="submit">Resusitar gallina</button>
                </div>
            </form>
        </div>

    </main>
    <?php include("footer.php") ?>
    <script src="includes/js/script.js"></script>
</body>

</html>