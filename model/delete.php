<?php

include("config_FB.php");
include("firebase_DB.php");
$db = new firebase_DB($databaseURL);

$id = $_GET['id'];
if ($id != "") {
    $delete = $db->delete("materias", $id);
    echo "data deleted";
}