<?php
$name = "Gema";
?>

<link rel="stylesheet" href="css/admin_style.css" />
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
                            <h3 id="level">Administrador de la carrera</h3>
                        </label>
                    </li>
                </ul>
                <!-- Registrarce -->
                <form class="form-inline my-2 my-lg-0 name_studen">
                    <div class="container">
                        <div class="dropdown">
                            <button type="button" class="btn btn_sesion text-uppercase dropdown-toggle"
                                data-toggle="dropdown">
                                <?php echo $name ?>
                            </button>
                            <div class="dropdown-menu">
                                <h5 class="dropdown-header">Herramientas</h5>
                                <a class="dropdown-item" href="admin">Inicio</a>
                                <h5 class="dropdown-header">Cuenta</h5>
                                <a class="dropdown-item" href="#">Cerrar sesion</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </nav>
    <div class="container gtco-features">
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
        </div>

        <?php
    include "view/addMaterias.php";
?>