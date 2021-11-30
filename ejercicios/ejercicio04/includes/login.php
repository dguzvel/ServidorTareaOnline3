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
                $_SESSION["logueado"] = $_POST["usuario"]; //La sesión logueado se establece con el usuario que mantiene abierta su sesión
                $_SESSION["usuario"] = $_POST["usuario"];//El valor usuario de la sesión será el introducido en el formulario

                //Si el checkbox de recordar está marcado, se crearán las cookies
                if(isset($_POST["recordar"]) && ($_POST["recordar"] == "on")){

                    setcookie ("usuario", $_POST["usuario"] , time() + (15 * 24 * 60 * 60));//Nombre, valor y vencimiento de la cookie
                    setcookie ("password", $_POST["password"], time() + (15 * 24 * 60 * 60));
                    setcookie ("recordar", $_POST["recordar"], time() + (15 * 24 * 60 * 60));

                }else {//En caso contrario, las cookies se eliminarán. Obtendrán un valor vacío
                    
                    if(isset($_COOKIE["usuario"])){
                        setcookie ("usuario","");
                    }
                    if(isset($_COOKIE["password"])) {
                        setcookie ("password","");
                    }
                    if(isset($_COOKIE["recordar"])) {
                        setcookie ("recordar","");
                    }

                }

                //Si el checkbox de mantener la sesión abierta está marcado, se crea una cookie para esta sesión exclusiva del usuario
                if(isset($_POST["abierta"]) && ($_POST["abierta"] == "on")){

                    setcookie ("abierta", $_POST["usuario"] , time() + (15 * 24 * 60 * 60));//Nombre, valor y vencimiento de la cookie

                }else {//En caso contrario, las cookies se eliminarán. Obtendrán un valor vacío
                    
                    if(isset($_COOKIE["abierta"])){
                        setcookie ("abierta","");
                    }

                }

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