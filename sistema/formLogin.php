<?php

    require 'config/config.php';
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Ingreso a sistema</h1>

        <div class="alert alert-secondary m-2 p-4 col-8 mx-auto">
            <form action="login.php" method="post">
                Usuario:<br>
                <input type="text" name="usuEmail" class="form-control">
                <br>
                Clave:<br>
                <input type="password" name="usuPass" class="form-control">
                <br>
                <button class="btn btn-dark btn-block">Ingresar</button>
            </form>
        </div>

<?php
    if ( isset( $_GET['error'] ) ){
        $titulo = 'Ingreso no  permitido';
        $mensaje = 'Debe loguearse para ingresar a sistema';
        if( $_GET['error'] == 1 ){
            $titulo = 'Error en el login';
            $mensaje = 'Nombre de usuario y/o contraseña incorrectos';
        }
?>
        <script>

            Swal.fire(
                '<?= $titulo; ?>',
                '<?= $mensaje; ?>',
                'error'
            )

        </script>
<?php

    }
?>


    </main>

<?php  include 'includes/footer.php';  ?>