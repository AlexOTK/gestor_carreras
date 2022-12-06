<?php

function subirHorarios()
{
    $datos = "{";
    $keys = array_keys($_POST);
    for ($i=0; $i<count($keys)-2; $i++) {
        $par = '"'.$keys[$i].'":"'.$_POST[$keys[$i]].'"';
        $datos = $datos . $par . ", ";
    }
    $datos = $datos ."}";
    echo $datos . "<br>";


    //********* Conexion a la base de datos *********//
    $url  = "https://project-sgc-588f7-default-rtdb.firebaseio.com/";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $datos);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/plain'));

    //********* Verificar errores *********//
    $resp = curl_exec($ch);
    if (curl_errno($ch)) {
        echo "Error al insertar:".curl_errno($ch);
    } else {
        echo "Registro agregado";
    }
    //********* Cerrar conexion *********//
    curl_close($ch);
}

function verHorarios()
{
    //********* Conexion a la base de datos *********//
    $url  = "https://project-sgc-588f7-default-rtdb.firebaseio.com/";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $respuesta = curl_exec($ch);
    curl_close($ch);
    //********* Cambiar a tipo json *********//
    $data = json_decode($respuesta, true);

    //********* Creacion de la tabla del Horario *********//
    echo "<table class='table table-striped table-sm'>
	        <thead>
                    <tr>
                        <th scope='col'>Hora</th> 
                        <th scope='col'>Lunes</th>
                        <th scope='col'>Martes</th>
                        <th scope='col'>Miercoles</th>
                        <th scope='col'>Jueves</th>
                        <th scope='col'>Viernes</th>
                    </tr>
                </thead>
            <tbody>
	";

    foreach ($data as $key => $value) {
        if (isset($data[$key])) {
            echo "<tr>";
            echo "<td>" . $data[$key]["Hora"] . "</td>";
            echo "<td>" . $data[$key]["Lunes"] . "</td>";
            echo "<td>" . $data[$key]["Martes"] . "</td>";
            echo "<td>" . $data[$key]["Miercoles"] . "</td>";
            echo "<td>" . $data[$key]["Juevez"] . "</td>";
            echo "<td>" . $data[$key]["Viernes"] . "</td>";
            echo "</tr>";
        }
    }
    echo "</tbody>
        </table>";
}

function login()
{
    $user = "";
    $clave ="";
    $nombre="";
    $tipo="";

    if (isset($_POST['user'])) {
        $user = $_POST['user'];
    }
    if (isset($_POST['password'])) {
        $clave = $_POST['password'];
    }

    //********* Conexion a la base de datos *********//
    $url = "https://pizzeria-8513a-default-rtdb.firebaseio.com/usuarios.json";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $respuesta = curl_exec($ch);
    curl_close($ch);
    //********* Cambiar a tipo json *********//
    $data = json_decode($respuesta, true);

    $encontrado = 0;
    foreach ($data as $key => $value) {
        if (isset($data[$key])) {
            $usr = $data[$key]["nombreusr"] ;
            $cla = $data[$key]["contraseña"];

            if (strcmp($user, $usr)==0 && strcmp($clave, $cla)==0) {
                $encontrado=1;
                $nombre = $data[$key]["nombre"] ;
                $tipo = $data[$key]["tipo"] ;
                break;
            }
        }
    }

    if ($encontrado==1) {
        if (strcmp($tipo, "administrador")==0) {
            header("Location: administrador.php?nombre=$nombre");
        }
    } else {
        echo "usuario o contraseña incorrectos";
    }
}