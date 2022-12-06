<?php

class Conexion
{
    public static function conectar()
    {
        //********* Conexion a la base de datos *********//
        $url  = "https://project-sgc-588f7-default-rtdb.firebaseio.com/";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        return $ch;
    }
}