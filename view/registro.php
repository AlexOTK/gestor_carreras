<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
    <!-- custom CSS -->
    <link rel="stylesheet" href="../css/registro_style.css" />
    <title>Gestor de contenidos de carrera</title>
    <style></style>
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
                    <a href="../index.php" class="btn btn-reg my-2 my-sm-0 mr-3 text-uppercase">Iniciar
                        Sesion</a>
                </form>
            </div>
        </div>
    </nav>

    <div class="card">
        <div class="container registro" id="dForm">
            <h4>Registro del alumno</h4>
            <input type="text" class="form-control" placeholder="Nombre del estudiante" />
            <input type="text" class="form-control" placeholder="Carrera" />
            <input type="text" class="form-control" placeholder="Codigo estudiantil" />
            <input type="password" class="form-control" placeholder="Contraseña" />
            <a href="#" class="submit-button">Registrarce
                <i class="fa fa-angle-right" aria-hidden="true"></i></a>
        </div>
    </div>

    <footer class="container-fluid" id="footer">
        <p>
            &copy; 2019. All Rights Reserved. Design by Univercidad de Guadalajara.
        </p>
    </footer>
</body>

</html>