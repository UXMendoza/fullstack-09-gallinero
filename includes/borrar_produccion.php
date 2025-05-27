<?php
include_once("../includes/produccion.class.php");

$fechaRecogida = $_POST['fecha_eliminar'];

$produccion = new Produccion();
$produccion->setFechaRecogida($fechaRecogida);
$produccion->borrar();

header("Location: ../index.php");
