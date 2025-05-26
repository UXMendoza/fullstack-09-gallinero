<?php include('header.php'); ?>

<body>
    <main>
        <div class="card contenedor">
            <h2>Añadir gallina:</h2>
            <form class="secciones" action="includes/recoger_gallina.php" method="post">
                <div>
                    <label for="nombre">Nombre: </label>
                    <input type="text" name="nombre" id="nombre" required>
                </div>
                <div>
                    <label for="fecha_nacimiento">Fecha nacimiento:</label>
                    <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" required>
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
            </form>
            <br>
            <form class="secciones" action="includes/borrar_gallina.php" method="post">
                <div>
                    <label for="id_borrar">Eliminar gallina:</label>
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
                    <button class="boton" type="submit"><span class="material-icons-sharp">
                            delete
                        </span></button>
                </div>
            </form>
        </div>

    </main>
    <?php include("footer.php") ?>
</body>

</html>