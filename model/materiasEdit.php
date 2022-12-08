<?php

include("config_FB.php");
include("firebase_DB.php");
$db = new firebase_DB($databaseURL);

$id = $_POST['id'];
$update = $db->update("materias", $id, [
    "clave"     => $_POST['clave'],
    "materia" => $_POST['materia'],
    "arc"      => $_POST['arc'],
    "creditos"    => $_POST['creditos'],
    "edificio"    => $_POST['edificio'],
    "aula"    => $_POST['aula'],
    "docente"    => $_POST['docente'],
    "hEntrada"    => $_POST['hEntrada'],
    "hSalida"    => $_POST['hSalida'],
    "dia"    => $_POST['dia'],
    "seccion"    => $_POST['seccion']
]);

echo "data updated";