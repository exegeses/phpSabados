<?php

    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $check = marcaEnUso();

    if( $check == 0 ){
            //traer datos de la marca y moatrar el form
    }
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Baja de una marca</h1>

<?php
    if ( $check > 0 ){
?>
            <div class="alert alert-danger">
                No se puede eliminar la marca seleccionada,
                ya que hay productos asignados.
                <br>
                <a href="adminMarcas.php" class="btn btn-outline-secondary">
                    volver a panel de marcas
                </a>

            </div>
<?php
    }
?>

        formulario mostrando
        datos de la marca a eliminar
        +
        botón de confirmación

    </main>

<?php  include 'includes/footer.php';  ?>