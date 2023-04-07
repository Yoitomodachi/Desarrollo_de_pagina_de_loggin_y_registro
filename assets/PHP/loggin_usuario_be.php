<!--
    Autor: Roberto Rico Sandoval.
    Fille: Buscar registros en la base de datos, para validar el loggín.
    Date: 04/ 04/ 2023
-->

<?php

    session_start();

    include 'conexion_be.php';

    // Agregar valores a variables de PHP desde metadatos (Name) en HTML.
    $correo = $_POST['Correo'];
    $password = $_POST['Password'];

    $password = hash('sha512', $password);

    $validar_loggin = mysqli_query($conexion, "SELECT * FROM usuarios_registrados WHERE
    correo = '$correo' AND passw = '$password'");

    if(mysqli_num_rows($validar_loggin) > 0){

        $_SESSION['usuario'] = $correo;

        echo '<script>
            alert("Bienvenido.");
            window.location = "../bienvenida.php";
        </script>';
        exit;
    }else{

        echo '<script>
            alert("El usuario no existe. Por favor verifique los datos.");
            window.location = "../index.php";
        </script>';

        exit;
    }

?>

