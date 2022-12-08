<?php

$url = "https://project-sgc-588f7-default-rtdb.firebaseio.com/alumnos.json";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// print_r($response);
$data = json_decode($response, true);
foreach ($data as $key => $value) {
    $cd = $data [$key] ["codigo"];
    if ($_POST["codigo"] == $cd) {
        echo $cd;
    }
}