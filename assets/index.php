<?php

    /*
        Autor: Roberto Rico Sandoval.
        Fille: Seguridad del sitio web por métodos de autoidentificación personal.
        Date: 06/ 04/ 2023
    */

    session_start();

    if(isset($_SESSION['usuario'])){

        header("location: bienvenida.php");
    }

    session_destroy();

?>

<!DOCTYPE html>
<!--
    Autor: Roberto Rico Sandoval.
    Fille: Registro y login con JS
    Date: 01 02/ 2023
-->

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login y registro con JS</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;
        0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:wght@300&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="./style/estilo.css">
    </head>

    <body>
        
        <main>
            <!--Contenedor principal de todos los elementos.-->
            <section class="contenedor_principal">
                
                <div class="caja_trasera">
                    <!--Espacio para los elementos del loggin.-->
                    <div class="caja_loggin">

                        <h1>¿Ya tienes una cuenta?</h1>
                        <p>Iniciar sesión para acceder.</p>

                        <button type="submit" id="iniciar_sesion" value="inicio">Iniciar sesión.</button>
                    </div>

                    <!--Espacio para los elementos del registro.-->
                    <div class="caja_registro">

                        <h1>¿Ya tienes una cuenta?</h1>
                        <p>Iniciar sesión para acceder.</p>

                        <button type="submit" id="registro" value="regi">Registro de usuario</button>
                    </div>

                </div>

                <div class="contenedor_loggin_registro">
                    <!--Formularios para registrarce o para iniciar sesión.-->
                    <form action="./PHP/loggin_usuario_be.php" method="POST" class="formulario_loggin">

                        <h2>Iniciar sesión.</h2>

                        <input type="email" placeholder="Correo electrónico" name="Correo" />
                        <input type="password" placeholder="Contraseña" name="Password" />
                        <button type="submit">Acceder</button>
                    </form>

                    <form action="./PHP/registro_usuario_be.php" method="POST" class="formulario_registro">

                        <h2>Registro.</h2>

                        <input type="text" placeholder="Nombre completo" name="Name"/>
                        <input type="email" placeholder="Correo electrónico" name="Correo"/>
                        <input type="text" placeholder="Usuario" name="Usuario"/>
                        <input type="password" placeholder="Password" name="Password"/>
                        <button type="submit">Enviar datos</button>
                    </form>
                </div>
            </section>
        </main>

        <script src="../assets/scripts/active.js"></script>
    </body>

</html>

