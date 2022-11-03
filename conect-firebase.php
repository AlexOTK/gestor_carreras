<?php
 $data = '("concepto" :"Curso de PHP", "subtotal":"200", "ID":"1")';
 $url  = "https://pruebas-19edf.firebaseio.com/presupuestos.jso":
 $ch = curl_init();
 curl_setopt( ($ch, CURLOPT_URL, $url);
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch,
                 CURLOPT_POST, 1):
curl_setopt($ch,
                 CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, arrayl'Content-Type: text/plain'));

 ?>
