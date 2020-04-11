<?php
    require 'config/config.php';
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Formulario de contacto</h1>

        <div class="alert alert-secondary m-2 p-4 col-8 mx-auto">

            <form action="contacto.php" method="post">

                Nombre: <br>
                <input type="text" name="nombre" class="form-control">
                <br>
                Email: <br>
                <input type="email" name="email" class="form-control">
                <br>
                Comentarios: <br>
                <textarea name="comentarios" class="form-control" ></textarea>
                <br>
                <button class="btn btn-dark btn-block">Enviar</button>

            </form>

        </div>


    </main>

<?php  include 'includes/footer.php';  ?>