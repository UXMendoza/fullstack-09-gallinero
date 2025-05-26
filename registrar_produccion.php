<?php include('header.php'); ?>

<body>
    <main>
        <div class="card contenedor">
            <table class="tabla_produccion" border="1">
                <h2>Añadir producción:</h2>
                <tr>
                    <td>
                        <form class="secciones" action="includes/recoger_produccion.php" method="post">
                            <table>
                                <tr>
                                    <td><label for="fecha_recogida">Fecha:</label></td>
                                    <td><input type="date" name="fecha_recogida" id="fecha_recogida" value="<?php echo date("Y-m-d") ?>" max="<?php echo date("Y-m-d"); ?>"></td>
                                </tr>

                                <?php
                                include_once("includes/funciones.php");
                                $gallinas = mostrarGallinasVivas();
                                foreach ($gallinas as $gallina) {
                                ?>
                                    <tr>
                                        <td><label for="<?php echo $gallina->getId() ?>"><?php echo $gallina->getNombre(); ?>:</label></td>
                                        <td>
                                            <div class="tab_prod">
                                                <input type="radio" id="zero_<?php echo $gallina->getId() ?>" name="<?php echo $gallina->getId() ?>" value="0">
                                                <label for="zero_<?php echo $gallina->getId() ?>">0</label>
                                                <input type="radio" id="uno_<?php echo $gallina->getId() ?>" name="<?php echo $gallina->getId() ?>" value="1" required checked>
                                                <label for="uno_<?php echo $gallina->getId() ?>">1</label>
                                                <input type="radio" id="dos_<?php echo $gallina->getId() ?>" name="<?php echo $gallina->getId() ?>" value="2">
                                                <label for="dos_<?php echo $gallina->getId() ?>">2</label>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </table>
                            <input class="boton" type="submit" value="Enviar">
                        </form>
                    </td>
                </tr>
            </table>
            <br>
            <form class="secciones" action="includes/borrar_produccion.php" method="post">
                <div>
                    <label for="fecha_eliminar">Eliminar produccion:</label>
                    <input type="date" name="fecha_eliminar" id="fecha_eliminar" value="<?php echo date("Y-m-d") ?>" max="<?php echo date("Y-m-d"); ?>">
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