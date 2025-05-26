<?php include('header.php'); ?>

<body>
    <main>
        <div class="card contenedor">
            <h2>Añadir raza:</h2>
            <form class="secciones" action="includes/recoger_raza.php" method="post">
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
            <form class="secciones" action="includes/borrar_raza.php" method="post">
                <div>
                    <label for="nombre_eliminar">Eliminar raza:</label>
                    <select name="nombre" id="nombre_eliminar">
                        <?php
                        include_once("includes/funciones.php");
                        $razas = mostrarRazasBorrar();
                        foreach ($razas as $raza) {
                        ?>
                            <option value="<?php echo $raza->getNombre(); ?>"><?php echo $raza->getNombre(); ?></option>
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