<?php

    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    require 'funciones/categorias.php';
    $marcas = listarMarcas();
    $categorias = listarCategorias();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Formulario de alta de un nuevo producto</h1>

        <div class="alert bg-light col-md-9 mx-auto">
            <form action="agregarProducto.php" method="post" enctype="multipart/form-data">

                Nombre: <br>
                <input type="text" name="prdNombre" class="form-control" required>
                <br>
                Precio: <br>
                <input type="number" name="prdPrecio" class="form-control" step="0.01" min="0" required>
                <br>
                Marca: <br>
                <select name="idMarca" class="form-control" required>
                    <option value="">Seleccione una Marca</option>
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
                    <option value="">Seleccione una categoría</option>
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
                <textarea name="prdPresentacion" class="form-control"></textarea>
                <br>
                Stock: <br>
                <input type="number" name="prdStock" class="form-control" min="0" required>
                <br>
                Imagen: <br>
                <input type="file" name="prdImagen" class="form-control">
                <br>
                <button class="btn btn-dark">Agregar producto</button>
                <a href="adminProductos.php" class="btn btn-outline-secondary">
                    Volver a admin productos
                </a>

            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>