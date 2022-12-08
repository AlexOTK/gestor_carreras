<?php

include("config_FB.php");
include("firebase_DB.php");
$db = new firebase_DB($databaseURL);

$insert = $db->insert("materias", [
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
sleep(1);
?>
<div class="container-fluid">
    <div class="container" style="display: flex;
    align-items: center;
    justify-content: center;">
        <img src="../img/check.gif" alt="Check">
    </div>
</div>

<?php
header("Location: ../index.php?page=admin");
die();
?>