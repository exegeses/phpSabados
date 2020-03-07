<?php
    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $chequeo = agregarMarca();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de una nueva marca</h1>
<?php
        $class = 'danger';
        $mensaje = 'No se pudo agregar la marca '.$chequeo[2];
        if($chequeo[0]){
            $class = 'success';
            $mensaje = 'Marca '.$chequeo[2];
            $mensaje .= ' con el id: '.$chequeo[1].' agregada correctamente';
        }
?>
        <div class="alert alert-<?= $class; ?>">
            <?= $mensaje; ?>
        </div>
    </main>

<?php  include 'includes/footer.php';  ?>