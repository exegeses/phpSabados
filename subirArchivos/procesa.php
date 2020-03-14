<?php

    require '../baseDeDatos/config.php';
    $prdImagen = $_FILES['prdImagen'];

    verContenido($prdImagen);

?>
<hr>
<?php

    function subirArchivo()
    {

        $prdImagen = 'noDisponible.jpg';
        if( $_FILES['prdImagen']['error'] == 0  ){
            $ruta = 'productos/';
            $prdImagen = $_FILES['prdImagen']['name'];
            $temp = $_FILES['prdImagen']['tmp_name'];
            move_uploaded_file($temp, $ruta.$prdImagen );
        }
        return $prdImagen;
    }

    subirArchivo();