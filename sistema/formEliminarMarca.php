<?php

    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $check = marcaEnUso();

    if( $check == 0 ){
        //traer datos de la marca y moatrar el form
        $marca = verMarcaPorID();
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
    else{
?>

        <div class="card border-danger text-danger col-6 p-0 mx-auto">
            <div class="card-header">
                <h2>Confirmación de baja de una marca</h2>
            </div>
            <div class="card-body">
                Marca: <?= $marca['mkNombre'] ?>
                <form action="eliminarMarca.php" method="post">
                    <input type="hidden"
                           name="idMarca"
                           value="<?= $marca['idMarca']; ?>">
                    <button class="btn btn-danger my-3 btn-block">Confirmar baja</button>
                    <a href="adminMarcas.php" class="btn btn-outline-secondary btn-block">
                        volver a panel de marcas
                    </a>
                </form>
            </div>
        </div>

        <script>
            //sweet alert

            Swal.fire({
                title: '¿Desea eliminar la marca seleccionada?',
                text: "Esta acción no se puede deshacer",
                type: 'warning',
                showCancelButton: true,
                cancelButtonColor: '#4e555d',
                cancelButtonText: 'Volver a Panel',

                confirmButtonColor: '#d33',
                confirmButtonText: 'Si, la quiero eliminar'

            }).then((result) => {
                if ( !result.value ) {
                    //redirección a panel
                    window.location = 'adminMarcas.php';
                }
            })

        </script>

<?php
    }
?>
    </main>

<?php  include 'includes/footer.php';  ?>