<?php

include("model/config_FB.php");
include("model/firebase_DB.php");
$db = new firebase_DB($databaseURL);

$data = $db->retrieve("alumnos");
$data = json_decode($data, 1);

$dname = "";
$dcodi = "";

if (is_array($data)) {
    foreach ($data as $key => $alumnos) {
        $cd = $data [$key] ["codigo"];
        $name = $data [$key] ["nombre"];

        if ($_GET["studen"] == $cd) {
            $dname = $name;
            $dcodi = $cd;
        }
    }
}
?>

<link rel="stylesheet" href="css/studen_style.css" />
<title>Horarios del Alumno</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent" id="nav">
        <!-- Logo udg -->
        <div class="container">
            <a class="navbar-brand">
                <img src="img/logo-udg.png" alt="Logo UDG" class="logo-udg" />
            </a>
            <!-- Nav-bar -->
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <label for="level" class="level" style="padding: 1rem 0 0 0;">
                            <h3 id="level"><?php echo $dcodi?></h3>
                        </label>
                    </li>
                </ul>
                <!-- Registrarce -->
                <form class="form-inline my-2 my-lg-0 name_studen">
                    <div class="container">
                        <div class="dropdown">
                            <button type="button" class="btn btn_sesion text-uppercase dropdown-toggle"
                                data-toggle="dropdown">
                                <?php echo $dname?>
                            </button>
                            <div class="dropdown-menu">
                                <h5 class="dropdown-header">Cuenta</h5>
                                <a class="dropdown-item" href="home">Cerrar sesion</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="htitulo_carrera" style="padding: 2rem 0 3rem 0;">
            <h2>Horario de carrera</h2>
            <p>Ingenieria en Teleinformatica</p>
        </div>
        <table class="table table-borderless">
            <thead>
                <tr>
                    <th>Lunes</th>
                    <th>Martes</th>
                    <th>Miercoles</th>
                    <th>Jueves</th>
                    <th>Viernes</th>
                </tr>
            </thead>
            <tr>
                <?php
        $data = $db->retrieve("materias");
$data = json_decode($data, 1);

$dmateria = "";
$ddocente = "";
$dedificio = "";
$daula = "";
$dhe = "";
$dhs = "";
$b = 0;
$cont = 0;
// echo'<script>
        //                     if(window.history.replaceState){
        //                         window.history.replaceState(null,null,window.location.href);
        //                     }';
if (is_array($data)) {
    foreach ($data as $key => $materias) {
        $dmateria  = $data [$key] ["materia"];
        $ddocente  = $data [$key] ["docente"];
        $dedificio  = $data [$key] ["edificio"];
        $daula  = $data [$key] ["aula"];
        $dhe  = $data [$key] ["hEntrada"];
        $dhs  = $data [$key] ["hSalida"];
        $dia = $data [$key] ["dia"];

        echo '<td>'.$dmateria.'<br>'.$ddocente.'<br>'.$dedificio.$daula.'<br><br>'.$dhe.':00
                - '.$dhs.':00</td>';


        $cont++;
        if ($cont == 5) {
            echo '</tr>';
            $cont = 0;
            $b++;
            if ($b == 4) {
                $b=0;
                break;
            }
        }
    }
}?>
                <tbody>
                    <?php  $ingresarDatos ?>
                </tbody>
        </table>
    </div>


    <div class="container-fluid gtco-features" id="servicios">
        <div class="container">
            <svg id="bg-services" width="auto" heigth="auto" viewBox="0 0 1000 800">
                <defs>
                    <linearGradient id="PSgrad_02" x1="64.279%" x2="0%" y1="76.604%" y2="0%">
                        <stop offset="0%" stop-color="rgb(1,230,248)" stop-opacity="1" />
                        <stop offset="100%" stop-color="rgb(29,62,222)" stop-opacity="1" />
                    </linearGradient>
                </defs>
                <path fill-rule="evenodd" opacity="0.102" fill="url(#PSgrad_02)"
                    d="M801.878,3.146 L116.381,128.537 C26.052,145.060 -21.235,229.535 9.856,312.073 L159.806,710.157 C184.515,775.753 264.901,810.334 338.020,792.380 L907.021,652.668 C972.912,636.489 1019.383,573.766 1011.301,510.470 L962.013,124.412 C951.950,45.594 881.254,-11.373 801.878,3.146 Z" />
            </svg>
            <div class="row">
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col">
                            <div class="card text-center">
                                <div class="oval">
                                    <img class="card-img-top" src="img/cursando.png" alt="Horarios" />
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">Matematicas Discretas</h3>
                                </div>
                            </div>
                            <div class="card text-center">
                                <div class="oval">
                                    <img class="card-img-top" src="img/cursando.png" alt="Organizador" />
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">
                                        Seminario de Proyecto Final
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-center">
                                <div class="oval">
                                    <img class="card-img-top" src="img/cursando.png" alt="" />
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">APTO VIII</h3>
                                </div>
                            </div>
                            <div class="card text-center">
                                <div class="oval">
                                    <img class="card-img-top" src="img/cursando.png" alt="" />
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">
                                        Fundamentos de auditoria informatica
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col">
                            <div class="card text-center">
                                <div class="oval">
                                    <img class="card-img-top" src="img/cursando.png" alt="Horarios" />
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">Tecnologias de la comunicacion</h3>
                                </div>
                            </div>
                            <div class="card text-center">
                                <div class="oval">
                                    <img class="card-img-top" src="img/cursando.png" alt="Organizador" />
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">
                                        Seminario de propiedad intelectual
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-center">
                                <div class="oval">
                                    <img class="card-img-top" src="img/alerta.png" alt="" />
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">Tecnologia cliente servidor</h3>
                                </div>
                            </div>
                            <div class="card text-center">
                                <div class="oval">
                                    <img class="card-img-top" src="img/alerta.png" alt="" />
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">
                                        Sistemas de Control
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="vista_creditos" style="width: 100%; padding: 4rem 0 5rem 0;">
                <h3 class="creditos">456</h3>
            </div>
        </div>
    </div>