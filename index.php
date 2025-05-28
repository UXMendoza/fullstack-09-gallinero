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
            <div class="secciones">
                <div class="seccion">
                    <h2>Mís Gallinas 🐔</h2>
                    <table cellspacing>
                        <tr>
                            <th>Nombre</th>
                            <th>Fecha de nacimiento</th>
                            <th>Raza</th>
                        </tr>
                        <?php
                        include_once("includes/funciones.php");
                        $gallinas = mostrarGallinas();
                        foreach ($gallinas as $gallina) {
                        ?>
                            <tr>
                                <td><?php echo $gallina->getNombre(); ?></td>
                                <td><?php echo $gallina->getFechaNacimiento(); ?></td>
                                <td><?php echo $gallina->getNombreRaza(); ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="card contenedor">
            <div class="secciones">
                <div class="seccion">
                    <h2>Estadisticas 📈</h2>
                    <div style="display: flex;flex-wrap: wrap;justify-content: center; gap: 10px;">
                        <div class="seccion">
                            <table>
                                <tr>
                                    <th class="th_cabecera" colspan="3">Gallinas más productivas 🏆</th>
                                </tr>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Cantidad</th>
                                </tr>
                                <?php
                                include_once("includes/funciones.php");
                                $filas = mostrarGallinasMasProductivas();
                                foreach ($filas as $fila) {
                                ?>
                                    <tr>
                                        <td><?php echo $fila["nombre"]; ?></td>
                                        <td><?php echo $fila['total']; ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </table>
                        </div>
                        <div class="seccion">
                            <table>
                                <tr>
                                    <th class="th_cabecera" colspan="3">Dias más productivos 🏆</th>
                                </tr>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Cantidad</th>
                                </tr>
                                <?php
                                include_once("includes/funciones.php");
                                $filas = mostrarDiasMasProductivos();
                                foreach ($filas as $fila) {
                                ?>
                                    <tr>
                                        <td><?php echo $fila["fecha_recogida"]; ?></td>
                                        <td><?php echo $fila['huevos']; ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                    <div class="seccion">
                        <table>
                            <tr>
                                <th class="th_cabecera" colspan="3">Producción X gallina (última semana) 🥚</th>
                            </tr>
                            <tr>
                                <th>Nombre</th>
                                <th>Raza</th>
                                <th>Cantidad</th>
                            </tr>
                            <?php
                            include_once("includes/funciones.php");
                            $filas = mostrarProduccionSemana();
                            foreach ($filas as $fila) {
                            ?>
                                <tr>
                                    <td><?php echo $fila["nombre"]; ?></td>
                                    <td><?php echo $fila["nombre_raza"]; ?></td>
                                    <td><?php echo $fila['total']; ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </div>
                    <div class="seccion">
                        <table>
                            <tr>
                                <th class="th_cabecera" colspan="3">Producción diaria (última semana) 🥚</th>
                            </tr>
                            <tr>
                                <th>Fecha</th>
                                <th>Huevos</th>
                            </tr>
                            <?php
                            include_once("includes/funciones.php");
                            $filas = mostrarMediaSemanal();
                            foreach ($filas as $fila) {
                            ?>
                                <tr>
                                    <td><?php echo $fila["fecha_recogida"]; ?></td>
                                    <td><?php echo $fila['cantidad']; ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </div>
                    <div class="seccion">
                        <table>
                            <tr>
                                <th class="th_cabecera" colspan="3">Producción media último mes 🥚</th>
                            </tr>
                            <tr>
                                <th>Raza</th>
                                <th>Cantidad diaria</th>
                            </tr>
                            <?php
                            include_once("includes/funciones.php");
                            $filas = mostrarMediaRazaMes();
                            foreach ($filas as $fila) {
                            ?>
                                <tr>
                                    <td><?php echo $fila["nombre_raza"]; ?></td>
                                    <td><?php echo $fila['total']; ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </div>
                    <div class="seccion">
                        <table>
                            <tr>
                                <th class="th_cabecera" colspan="3">Dias sin producir 🥚</th>
                            </tr>
                            <tr>
                                <th>Nombre</th>
                                <th>Cantidad</th>
                            </tr>
                            <?php
                            include_once("includes/funciones.php");
                            $filas = mostrarDiasSinProducir();
                            foreach ($filas as $fila) {
                            ?>
                                <tr>
                                    <td><?php echo $fila["nombre"]; ?></td>
                                    <td><?php echo $fila['dias_sin_producir']; ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </div>
                    <div class="seccion">
                        <table>
                            <tr>
                                <th class="th_cabecera" colspan="3">Gallinas Mos sobre la media 🐔</th>
                            </tr>
                            <tr>
                                <th>Nombre</th>
                                <th>Cantidad diaria</th>
                            </tr>
                            <?php
                            include_once("includes/funciones.php");
                            $filas = mostrarMosEncimaMedia();
                            foreach ($filas as $fila) {
                            ?>
                                <tr>
                                    <td><?php echo $fila["nombre"]; ?></td>
                                    <td><?php echo $fila['ROUND(AVG(produccion.cantidad), 2)']; ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </table>
                        <table>
                            <tr>
                                <th class="th_cabecera" colspan="3">Promedio de huevos 🥚</th>
                            </tr>
                            <tr>
                                <th>Periodo</th>
                                <th>Cantidad</th>
                            </tr>
                            <?php
                            include_once("includes/funciones.php");
                            $filas = mostrarEstadisticasHuevos();
                            foreach ($filas as $fila) {
                            ?>
                                <tr>
                                    <td><?php echo $fila["estadisticas"]; ?></td>
                                    <td><?php echo $fila['cantidad']; ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </table>
                        <table>
                            <tr>
                                <th class="th_cabecera" colspan="3">Razas más productivas 🐔</th>
                            </tr>
                            <tr>
                                <th>Nombre</th>
                                <th>Cantidad</th>
                            </tr>
                            <?php
                            include_once("includes/funciones.php");
                            $filas = mostrarProduccionRaza();
                            foreach ($filas as $fila) {
                            ?>
                                <tr>
                                    <td><?php echo $fila["nombre_raza"]; ?></td>
                                    <td><?php echo $fila['SUM(produccion.cantidad)']; ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </div>
                    <div style="display: flex;flex-wrap: wrap;justify-content: center;">
                        <table>
                            <tr>
                                <th class="th_cabecera" colspan="3">Máxima producción ⬆️</th>
                            </tr>
                            <tr>
                                <th>Mes</th>
                                <th>Huevos</th>
                            </tr>
                            <?php
                            include_once("includes/funciones.php");
                            $filas = mostrarMesAlta();
                            foreach ($filas as $fila) {
                            ?>
                                <tr>
                                    <td><?php echo $fila["mes"]; ?></td>
                                    <td><?php echo $fila['total_produccion']; ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </table>
                        <table>
                            <tr>
                                <th class="th_cabecera" colspan="3">Mínima producción ⬇️</th>
                            </tr>
                            <tr>
                                <th>Mes</th>
                                <th>Huevos</th>
                            </tr>
                            <?php
                            include_once("includes/funciones.php");
                            $filas = mostrarMesBaja();
                            foreach ($filas as $fila) {
                            ?>
                                <tr>
                                    <td><?php echo $fila["mes"]; ?></td>
                                    <td><?php echo $fila['total_produccion']; ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </div>
                    <table>
                        <tr>
                            <th class="th_cabecera" colspan="3">Media X gallina 🐔</th>
                        </tr>
                        <tr>
                            <th>Nombre</th>
                            <th>Cantidad</th>
                        </tr>
                        <?php
                        include_once("includes/funciones.php");
                        $filas = mostrarPromedio();
                        foreach ($filas as $fila) {
                        ?>
                            <tr>
                                <td><?php echo $fila["nombre"]; ?></td>
                                <td><?php echo $fila['media']; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                    <table>
                        <tr>
                            <th class="th_cabecera" colspan="3">Dia de la semana más productivo 🥚</th>
                        </tr>
                        <tr>
                            <th>Dia</th>
                            <th>Cantidad</th>
                        </tr>
                        <?php
                        include_once("includes/funciones.php");
                        $filas = mostrarDaySemana();
                        foreach ($filas as $fila) {
                        ?>
                            <tr>
                                <td><?php echo $fila["dia"]; ?></td>
                                <td><?php echo $fila['cantidad']; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="card_baja contenedor">
            <div class="secciones">
                <div class="seccion">
                    <h2>Bajas ✝</h2>
                    <table class="table_baja">
                        <tr>
                            <th>Nombre</th>
                            <th>Fecha de obito</th>
                            <th>Causa</th>
                        </tr>
                        <?php
                        include_once("includes/funciones.php");
                        $gallinas = mostrarBajas();
                        foreach ($gallinas as $gallina) {
                        ?>
                            <tr>
                                <td><?php echo $gallina->getIdGallina(); ?></td>
                                <td><?php echo $gallina->getFecha(); ?></td>
                                <td><?php echo $gallina->getCausa(); ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <?php include("footer.php") ?>
</body>

</html>