<?php

    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $productos = listarProductos();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Catálogo de productos</h1>

        <div class="row">

<?php
    while ( $producto = mysqli_fetch_assoc( $productos ) ){  
?>

        <div class="card col-4 my-4">
            <img src="productos/<?= $producto['prdImagen'] ?>" class="card-img-top">

            <div class="card-body">
                 <span class="display-4"><?= $producto['prdNombre'] ?></span>
                <br>
                Marca: <?= $producto['mkNombre'] ?>
                <br>
                Categoría: <?= $producto['catNombre'] ?>
                <br>
                Precio:
                <spam class="lead text-info">
                    $<?= number_format($producto['prdPrecio'], 2, ',', '.') ?>
                </spam>
                <br>

                <a href="#" class="btn btn-block btn-outline-secondary py-2 my-2">
                    ver detalle
                </a>

            </div>
        </div>

<?php
    }
?>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>