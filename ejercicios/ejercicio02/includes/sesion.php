<?php

    session_start(); //Se activa el uso de sesiones
    if(!isset($_SESSION['logueado'])){

    //Volvemos al login con el error=fuera, es decir, se ha intentado acceder sin pasar por el login desde la URL
        header ("Location: ./index.php?error=fuera");

    }

?>