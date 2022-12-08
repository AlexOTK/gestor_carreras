    <link rel="stylesheet" href="css/registro_style.css" />
    <title>Gestor de contenidos de carrera</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent" id="nav">
            <!-- Logo udg -->
            <div class="container">
                <a class="navbar-brand">
                    <img src="../img/logo-udg-w.png" alt="Logo UDG" class="logo-udg" />
                </a>
                <!-- Nav-bar -->
                <div id="my-nav" class="collapse navbar-collapse">
                    <div class="navbar-nav mr-auto">
                    </div>
                    <!-- Registrarce -->
                    <form class="form-inline my-2 my-lg-0">
                        <a href="home" class="btn btn-reg my-2 my-sm-0 mr-3 text-uppercase">Iniciar
                            Sesion</a>
                    </form>
                </div>
            </div>
        </nav>

        <div class="card">
            <div class="container registro" id="dForm">
                <form action="model/signup.php" method="post">
                    <h4>Registro del alumno</h4>
                    <input type="text" class="form-control" placeholder="Nombre del estudiante" name="nombre" />
                    <input type="text" class="form-control" placeholder="Carrera" name="carrera" />
                    <input type="text" class="form-control" placeholder="Codigo estudiantil" name="codigo" />
                    <input type="password" class="form-control" placeholder="Contraseña" name="pass" />
                    <input type="submit" class="submit-button" />
                </form>
            </div>
        </div>