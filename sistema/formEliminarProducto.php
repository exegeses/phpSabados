<?php

    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $producto = verProductoPorID();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Baja de un producto</h1>

        <div class="card col-8 border-danger text-danger p-0 mx-auto">
            <div class="card-header">
                <h2><?= $producto['prdNombre'] ?></h2>
            </div>
            <div class="card-body">

                <div class="row align-items-center">
                    <div class="col">
                        <img src="productos/<?= $producto['prdImagen'] ?>" class="img-thumbnail">
                    </div>
                    <div class="col">
                        Precio: $<?= number_format( $producto['prdPrecio'], 2, ',', '.' ); ?>
                        <br>
                        Marca:  <?= $producto['mkNombre'] ?>
                        <br>
                        Categoría: <?= $producto['catNombre'] ?>
                        <br>
                        Presentación: <?= $producto['prdPresentacion'] ?>
                        <br>
                        Stock: <?= $producto['prdStock'] ?>
                        <br>

                        <form action="eliminarProducto.php" method="post">
                            <input type="hidden"
                                   name="idProducto"
                                   value="<?= $producto['idProducto']; ?>">

                            <button class="btn btn-danger my-3 btn-block">Confirmar baja</button>
                            <a href="adminProductos.php" class="btn btn-outline-secondary btn-block">
                                volver a panel de productos
                            </a>

                        </form>


                    </div>
                </div>

            </div>
        </div>

        <script>
            //sweet alert

            Swal.fire({
                title: '¿Desea eliminar el producto seleccionado?',
                text: "Esta acción no se puede deshacer",
                type: 'warning',
                showCancelButton: true,
                cancelButtonColor: '#4e555d',
                cancelButtonText: 'Volver a Panel',

                confirmButtonColor: '#d33',
                confirmButtonText: 'Si, lo quiero eliminar'

            }).then((result) => {
                if ( !result.value ) {
                    //redirección a panel
                    window.location = 'adminProductos.php';
                }
            })

        </script>

    </main>

<?php  include 'includes/footer.php';  ?>