<?php
include_once("../includes/raza.class.php");

$nombre = $_POST['nombre'];

$raza = new Raza();
$raza->setNombre($nombre);
$raza->borrar();

header("Location: ../index.php");
