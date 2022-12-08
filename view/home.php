<link rel="stylesheet" href="css/style.css" />
<title>Gestor de contenidos de carrera</title>
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
                        <a class="nav-link" href="home">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#descripcion">Descripcion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#servicios">Servicios</a>
                    </li>
                </ul>
                <!-- Registrarce -->
                <form class="form-inline my-2 my-lg-0">
                    <a href="registro" class="btn btn-outline-dark my-2 my-sm-0 mr-3 text-uppercase">Registrar</a>
                </form>
            </div>
        </div>
    </nav>

    <div class="container-fluid banner_home">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>
                        Gestiona de mejor manera tus materias de la carrera
                    </h1>
                    <p>
                        Inicia secion y gestiona de manera mas sencilla las
                        clases que tendras a lo largo de tu carrera
                    </p>
                </div>

                <div class="col-lg-6" id="sign-up">
                    <form action="model/validar_user.php" method="post">
                        <h4>Inicio de sesión</h4>
                        <input type="text" class="form-control" placeholder="Codigo estudiantil" name="codigo" />
                        <input type="password" class="form-control" placeholder="Contraseña" name="pass" />
                        <?php
                        // $ingreso = new Ingreso();
                        // $ingreso -> ctrIngreso();
                        ?>
                        <input type="submit" class="submit-button" />

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid gtco-feature" id="descripcion">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="cover">
                        <div class="card">
                            <svg class="back-bg" width="100%" viewBox="0 0 900 700"
                                style="position: absolute; z-index: -1">
                                <defs>
                                    <linearGradient id="PSgrad_01" x1="64.279%" x2="0%" y1="76.604%" y2="0%">
                                        <stop offset="0%" stop-color="rgb(1,230,248)" stop-opacity="1" />
                                        <stop offset="100%" stop-color="rgb(29,62,222)" stop-opacity="1" />
                                    </linearGradient>
                                </defs>
                                <path fill-rule="evenodd" opacity="0.102" fill="url(#PSgrad_01)"
                                    d="M616.656,2.494 L89.351,98.948 C19.867,111.658 -16.508,176.639 7.408,240.130 L122.755,546.348 C141.761,596.806 203.597,623.407 259.843,609.597 L697.535,502.126 C748.221,489.680 783.967,441.432 777.751,392.742 L739.837,95.775 C732.096,35.145 677.715,-8.675 616.656,2.494 Z" />
                            </svg>
                            <!-- *************-->
                            <img src="img/computer.png" alt="Computadora" class="img-service cover">
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <h2>
                        Organizate
                    </h2>
                    <p>
                        la Ingenieria en Teleinformatica de la Univercidad de Guadalajara pone a su dispocicion esta
                        herramineta pra agestionar de forma grafica y dinamica las materias que devera de tomar para su
                        preparacion de educasion superior
                    </p>
                    <p>
                        <small>
                            Con ella tendras a la mano tu plan de estudios junto con los creditos que estaras acomulando
                            asi
                            como una mejor representacion de tus materias que cusrsastes, estas cursando y proximamente
                            cursaras.
                        </small>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid gtco-features" id="servicios">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h2>
                        Gestiona tus carreras<br />
                        de manera mas eficiente
                    </h2>
                    <p>
                        Registrate, llena unos pequeños datos y podras gosar de estas herramientas
                    </p>
                    <a href="registro">Registrar
                        <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
                <div class="col-lg-8">
                    <svg id="bg-services" width="100%" viewBox="0 0 1000 800">
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
                        <div class="col">
                            <div class="card text-center">
                                <div class="oval">
                                    <img class="card-img-top" src="img/schedule.svg" alt="Horarios" />
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">Horarios</h3>
                                    <p class="card-text">
                                        Podras acceder al horario de tus clases del semestre.
                                    </p>
                                </div>
                            </div>
                            <div class="card text-center">
                                <div class="oval">
                                    <img class="card-img-top" src="img/organizing.svg" alt="Organizador" />
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">
                                        Materias Reprobadas?
                                    </h3>
                                    <p class="card-text">
                                        No vuelvas a dejar materias en deudas, te notificaremos si alguna clase la
                                        llegues a
                                        deber
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-center">
                                <div class="oval">
                                    <img class="card-img-top" src="img/org.svg" alt="" />
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">Organiza tus materias</h3>
                                    <p class="card-text">
                                        Dale un seguimineto a lasmmaterias que vas cursando y las que dejastes
                                        pendientes.
                                    </p>
                                </div>
                            </div>
                            <div class="card text-center">
                                <div class="oval">
                                    <img class="card-img-top" src="img/sel.svg" alt="" />
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">
                                        Creditos
                                    </h3>
                                    <p class="card-text">
                                        Checa cuantos creditos te hacen falta para culminar tu acreditacion de tu
                                        carrera.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>