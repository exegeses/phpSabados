<?php

    require 'config.php';

    $link = mysqli_connect(
                            'localhost',
                            'root',
                            '',
                            'catalogo'
                        );

    $sql = "SELECT idCategoria, catNombre
                FROM categorias";

    $resultado = mysqli_query( $link, $sql);
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
        while( $categoria = mysqli_fetch_array($resultado) ){
            echo $categoria[0], ' ';
            echo $categoria[1], '<br>';
        }

?>
</body>
</html>
