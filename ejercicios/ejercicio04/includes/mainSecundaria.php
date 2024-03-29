<main>

    <nav class="navbar navbar-dark bg-dark">
    <!-- Incluimos un nav con un botón toggler, tres líneas verticales, que podrá desplegarse y mostrar un menú -->
    <div class="navbar navbar-toggleable-md navbar-light bg-faded">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <a class="navbar-brand" href="includes/logout.php">Cerrar sesión</a>
    </nav>
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
                <button type="button" class="btn btn-light" onclick="location.href='./principal.php'">Inicio</button>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <button type="button" class="btn btn-light" onclick="location.href='./secundaria.php'">Página 2</button>
        </div>
    </div>

    <section class="container cuerpo text-center">

        <h2 id="titulo">Mi Sitio - Página 2</h2>
        <br>
        <h3>
            <img class="textoImagen" src="includes/images/usuario.png" />
            &nbsp;&nbsp;&nbsp;&nbsp; Bienvenido <?php
                                                    if(isset($_COOKIE["abierta"])){
                                                        echo $_COOKIE["abierta"];
                                                    }else{ 
                                                        echo $_SESSION["logueado"];
                                                    }
                                                ?>
        </h3>

    </section>
    
</main>