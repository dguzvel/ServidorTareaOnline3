<?php

    //Se dan valores para un usuario y contraseña que sean válidos y puedan hacer login
    $usuarioValido = "Mortadelo";
    $passwordValido = "12345";

    //Se accede si se pulsa el botón para enviar información del formulario de login
    if(isset($_POST["submit"])){
        //Si ambos campos, usuario y conraseña, tienen información
        if((isset($_POST["usuario"]) && isset($_POST["password"])) && (!empty($_POST["usuario"]) && !empty($_POST["password"]))){
            //Se iniciará sesión si el usuario y contraseña son válidos
            if ($_POST["usuario"] == strcasecmp($_POST["usuario"], $usuarioValido) && $_POST["password"] == $passwordValido){

                session_start(); //Se activa el uso de sesiones
                $_SESSION["logueado"] = 1; //La sessión logueado se establece en 1, puede servir como contador de sesiones
                $_SESSION["usuario"] = $_POST["usuario"];//El valor usuario de la sesión será el introducido en el formulario
                header ("Location: ./principal.php");//Nos dirige a la página pricipal tras el login

            } else {
                //Si los valores de usuario y contraseña no son correctos volvemos a login y mostramos el error de datos no válidos
                header ("Location: ./index.php?error=incorrecto");

            }
        } else {
            //Si los campos han quedado vacíos volvemos a login y lo indicamos con un mensaje de error
            header ("Location: ./index.php?error=vacio");

        }

    }

?>