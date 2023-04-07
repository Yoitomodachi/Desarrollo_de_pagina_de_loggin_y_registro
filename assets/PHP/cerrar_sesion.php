<?php

    /*
        Autor: Roberto Rico Sandoval.
        Fille: Cerrar sesión..
        Date: 06/ 04/ 2023
    */

    session_start();
    session_destroy();

    header("location: ../index.php");

?>

