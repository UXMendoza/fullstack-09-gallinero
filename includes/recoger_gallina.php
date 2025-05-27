<?php
include_once("../includes/gallina.class.php");

$nombre = $_POST['nombre'];
$fechaNacimiento = $_POST['fecha_nacimiento'];
$nombreRaza = $_POST['nombre_raza'];

$gallina = new Gallina();
$gallina->crearGallina($nombre, $fechaNacimiento, $nombreRaza);
$gallina->insertar();

header("Location: ../index.php");
