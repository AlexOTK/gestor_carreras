<?php


        $url = "https://project-sgc-588f7-default-rtdb.firebaseio.com/alumnos.json";



        $ch = curl_init();


        curl_setopt($ch, CURLOPT_URL, $url);


        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);



        $response = curl_exec($ch);


        curl_close($ch);


        if (isset($_POST["codigo"])) {
            $data = json_decode($response, true);

            foreach ($data as $key => $value) {
                $cd = $data [$key] ["codigo"];
                $pass = $data [$key] ["pass"];

                if ($_POST["codigo"] == $cd && $_POST["pass"] == $pass) {
                    $_SESSION["ingresoStuden"] = "ok";
                    header("Location: ../index.php?page=studen&studen=$cd");
                    die();
                } else {
                    header("Location: ../index.php?page=home");
                    die();
                }
            }
        } else {
            header("Location: ../index.php?page=home");
            die();
        }