<?php

include("config_FB.php");
include("firebase_DB.php");
$db = new firebase_DB($databaseURL);

$insert = $db->insert("alumnos", [
    "nombre"     => $_POST['nombre'],
    "carrera" => $_POST['carrera'],
    "codigo"      => $_POST['codigo'],
    "pass"    => $_POST['pass']
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
header("Location: ../index.php?page=registro");
die();
?>