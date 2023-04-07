<!--
    Autor: Roberto Rico Sandoval.
    Fille: Registro de la base de datos.
    Date: 27/ 03/ 2023
-->

<?php

    // Establecer conexión de una base de datos SQL desde PHP
    //(Nombre/IP del servidor, usuario administrativo, contraseña, nombre de la base de datos).
    
    $conexion = mysqli_connect("localhost", "root", "", "usuarios_de_la_app_en_la_nube");

    /*
    if($conexion){
        echo 'Conectado exitosamente a la base de datos.';
    }else{
        echo 'No se a podido conectar a la base de datos.';
    }
    */

?>

