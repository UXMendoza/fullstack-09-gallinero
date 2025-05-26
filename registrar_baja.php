<?php include('header.php'); ?>

<body>
    <main>
        <div class="card contenedor">
            <h2>Registrar baja:</h2>
            <form class="secciones" action="includes/recoger_baja.php" method="post">
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
                    <div>
                        <label for="causa">causa:</label>
                        <input type="radio" name="causa" id="sacrificada" value="sacrificada" required>
                        <label for="sacrificada">sacrificada</label>
                        <input type="radio" name="causa" id="muerte_natural" value="muerte_natural" required>
                        <label for="muerte_natural">muerte natural</label>
                    </div>
                </div>
                <div>
                    <input class="boton" type="submit" value="Enviar">
                </div>
            </form>
            <br>
            <form class="secciones" action="includes/borrar_baja.php" method="post">
                <div>
                    <label for="id_borrar">Resusitar gallina:</label>
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