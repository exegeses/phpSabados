<?php  
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Panel de administración de Marcas</h1>

        <a href="admin.php" class="btn btn-outline-secondary m-2">
            Volver a principal
        </a>

        <table class="table table-hover table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>id</th>
                    <th>Marca</th>
                    <th colspan="2">
                        <a href="" class="btn btn-dark">
                            Agregar
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>nombre marca</td>
                    <td>
                        <a href="" class="btn btn-outline-secondary">
                            Modificar
                        </a>
                    </td>
                    <td>
                        <a href="" class="btn btn-outline-secondary">
                            Eliminar
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>

        <a href="admin.php" class="btn btn-outline-secondary m-2">
            Volver a principal
        </a>

    </main>

<?php  include 'includes/footer.php';  ?>