<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- custom CSS -->
    <?php
        if (isset($_GET["page"])) {
            if ($_GET["page"] == "registro" ||
                $_GET["page"] == "studen" ||
                $_GET["page"] == "home" ||
                $_GET["page"] == "admin") {
                include "view/".$_GET["page"].".php";
            } else {
                include "view/error404.php";
            }
        } else {
            include "view/home.php";
        }
    ?>
    <footer class="container-fluid" id="footer">
        <p>
            &copy; 2019. All Rights Reserved. Design by Univercidad de Guadalajara.
        </p>
    </footer>
    </body>

</html>