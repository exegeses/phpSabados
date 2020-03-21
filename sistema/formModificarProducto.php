<?php

    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    require 'funciones/categorias.php';
    require 'funciones/productos.php';
    $marcas = listarMarcas();
    $categorias = listarCategorias();
    $producto = verProductoPorID();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Formulario de modificación de un producto</h1>

        <div class="alert bg-light col-md-9 mx-auto">
            <form action="modificarProducto.php" method="post" enctype="multipart/form-data">

                Nombre: <br>
                <input type="text" name="prdNombre" value="<?= $producto['prdNombre']; ?>" class="form-control" required>
                <br>
                Precio: <br>
                <input type="number" name="prdPrecio" value="<?= $producto['prdPrecio']; ?>" class="form-control" step="0.01" min="0" required>
                <br>
                Marca: <br>
                <select name="idMarca" class="form-control" required>
                    <option value="<?= $producto['idMarca'] ?>"><?= $producto['mkNombre']; ?></option>
<?php
            while ( $marca = mysqli_fetch_assoc($marcas) ){
?>
                    <option value="<?= $marca['idMarca']; ?>"><?= $marca['mkNombre']; ?></option>
<?php
            }
?>
                </select>

                <br>
                Categoría: <br>
                <select name="idCategoria" class="form-control" required>
                    <option value="<?= $producto['idCategoria'] ?>"><?= $producto['catNombre'] ?></option>
<?php
            while ( $categoria = mysqli_fetch_assoc($categorias) ){
?>
                    <option value="<?= $categoria['idCategoria']; ?>"><?= $categoria['catNombre']; ?></option>
<?php
            }
?>

                </select>

                <br>
                Presentación: <br>
                <textarea name="prdPresentacion" class="form-control"><?= $producto['prdPresentacion'] ?></textarea>
                <br>
                Stock: <br>
                <input type="number" name="prdStock" value="<?= $producto['prdStock']; ?>" class="form-control" min="0" required>
                <br>
                Imagen: <br>
                <img src="productos/<?= $producto['prdImagen']; ?>" class="img-thumbnail">
                <input type="hidden" name="prdImagenActual" value="<?= $producto['prdImagen']; ?>">
                <br>
                <input type="file" name="prdImagen" class="form-control">
                <br>
                <input type="hidden" name="idProducto" value="<?= $producto['idProducto'] ?>">
                <button class="btn btn-dark">Modificar producto</button>
                <a href="adminProductos.php" class="btn btn-outline-secondary">
                    Volver a admin productos
                </a>

            </form>

        </div>

    </main>

<?php  include 'includes/footer.php';  ?>