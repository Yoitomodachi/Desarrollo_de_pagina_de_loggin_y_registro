<?php

    /*
        Autor: Roberto Rico Sandoval.
        Fille: Seguridad del sitio web por métodos de autoidentificación personal.
        Date: 06/ 04/ 2023
    */

    session_start();

    if(!isset($_SESSION['usuario'])){

        echo '<script>
            alert("Por favor debes iniciar sesión.");
            window.location = "./index.php";
        </script>';

        session_destroy();
        die();
    }

?>

<!DOCTYPE html>
<!--
    Autor: Roberto Rico Sandoval.
    Fille: Página de bienvenida en PHP.
    Date: 04 / 04 / 2023
-->

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;
    0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./style/portales.css">

</head>

<body>
    
    <h1 id="letra_del_portal">Bienvenido al sitio web.</h1>
    <i><a class="link_del_portal" href="https://bongo.cat">Click aquí para iniciar la simulación.</a></i>
    <img class="imagenes_del_portal" src="./imagenes/gatito.png"/>
    <i><a class="link_del_portal" href="./PHP/cerrar_sesion.php">Cerrar sesión.</a></i>

    
</body>

</html>

