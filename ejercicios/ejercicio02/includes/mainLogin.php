<main>
    <section class="container cuerpo text-center">

        <h3 id="titulo">Login de Usuario</h3>
        <br>
        <!-- Formulario HTML que realizará la acción de la ruta establecida -->
        <form action="" method="POST" enctype="multipart/form-data">

            <label for="usuario">
                Usuario:
                <input type="text" name="usuario" class="form-control" 
                    <?php
                        if(isset($_POST["usuario"])){
                            echo "value='{$_POST["usuario"]}'";
                        }
                    ?>
                />
            </label>
            <br><br>

            <label for="password">
                Contraseña:
                <input type="password" name="password" class="form-control"
                    <?php
                        if(isset($_POST["password"])){
                            echo "value='{$_POST["password"]}'";
                        }
                    ?>
                />
            </label>
            <br><br>

            <label>
                <input type="checkbox" name="recordar" />
                Recuérdame
            </label>
            <br><br>

            <?php

                //Accede si hay valores en ?error= tras la ruta de la página
                if(isset($_GET["error"])){

                    if ($_GET["error"] == "incorrecto") {

                    echo '<div class="alert alert-danger">'."Usuario o Contraseña incorrectos".'</div> <br>';

                    }elseif ($_GET["error"] == "fuera") {

                    echo '<div class="alert alert-danger">'."No se puede acceder directamente, debe hacer login".'</div> <br>';

                    }elseif ($_GET["error"] == "vacio") {

                        echo '<div class="alert alert-danger">'."Debe rellenar sus credenciales".'</div> <br>';
    
                    }
                        
                }

            ?>

            <input type="submit" value="Enviar" name="submit" class="btn btn-success" />

        </form>

    </section>
</main>