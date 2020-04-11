<?php
    require 'config/config.php';
    require 'funciones/usuarios.php';
    $nombreApellido = $_SESSION['nombreApellido'];
        logout();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Salir de Sistema</h1>

        <div class="alert alert-info col-6 mx-auto">
            Gracias <?= $nombreApellido; ?> por si visita.
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>