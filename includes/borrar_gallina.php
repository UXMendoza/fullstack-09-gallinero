<?php
include_once("../includes/gallina.class.php");

$id = $_POST['id'];

$gallina = new Gallina();
$gallina->setId($id);
$gallina->borrar();

header("Location: ../index.php");
