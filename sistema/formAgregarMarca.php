<?php  
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de una nueva Marca</h1>

        <div class="alert bg-light p-3">
            <form action="agregarMarca.php" method="post">
                Marca
                <br>
                <input type="text" name="mkNombre" class="form-control">
                <br>
                <button class="btn btn-dark">Agregar marca</button>
                <a href="adminMarcas.php" class="btn btn-outline-secondary ml-2">
                    Volver a panel de marcas
                </a>
            </form>
        </div>
    </main>

<?php  include 'includes/footer.php';  ?>