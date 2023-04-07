<!--
    Autor: Roberto Rico Sandoval.
    Fille: Registro de la base de datos.
    Date: 27/ 03/ 2023
-->

<?php

    // Incluir paquetes y módulos en PHP.
    include 'conexion_be.php';

    // Agregar valores a variables de PHP desde metadatos (Name) en HTML.
    $nombre_completo = $_POST['Name'] ??null;
    $correo = $_POST['Correo'] ??null;
    $usuario = $_POST['Usuario'] ??null;
    $password = $_POST['Password'];
    
    // Encriptación de la contraseña del usuario.
    // [hash] = Función predeterminada y general de encriptación en php.
    // [sha512] = Método o modo de encriptación seleccionado para el dato.
    $encriptacion = hash('sha512', $password);

    // Insertar datos a una base de datos SQL desde PHP.
    $query = "INSERT INTO usuarios_registrados(nombre_de_usuario, correo, usuario, passw)
              VALUES('$nombre_completo', '$correo ', '$usuario', '$encriptacion')";

    // Verificar que el correo y el usuario no se repita en la base de datos.
    // [mysqli_num_rows] = Verifica que no se repita un dato en una fila de la tabla.
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios_registrados WHERE correo = '$correo' ");

    if(mysqli_num_rows($verificar_correo) > 0){

        echo '<script>
            alert("Este correo ya esta registrado. Intenta con otro diferente.");
            window.location = "../index.php";
        </script>';
        exit();
    }

    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios_registrados WHERE usuario = '$usuario' ");

    if(mysqli_num_rows($verificar_usuario) > 0){

        echo '<script>
            alert("Este usuario ya esta registrado. Intenta con uno nuevo.");
            window.location = "../index.php";
        </script>';
        exit();
    }

    // Ejecutar la conexión de la base de datos SQL desde una querry.
    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){

        echo '<script> 
            alert("Usuario registrado existosamente");
            window.location = "../index.php";
        </script>';
    }else{

        echo '<script> 
            alert("A ocurrido un error. Intentalo de nuevo.");
            window.location = "../index.php";
        </script>';
    }

    mysqli_close($conexion);
?>

