<?php
    require 'funciones2.php';
    $lenguajes = ['C', 'C++', 'Objective C', 'C#', 'Java', 'PHP', 'Python' ];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
        <h1>vista de uso de funciones</h1>

        <p>
            en este archivo requeriamos la biblioteca de funciones 2.
            y llamamos a sus funciones
        </p>

        <h2>Ver contenido de mi array</h2>

            <?php mostrarContenido($lenguajes); ?>

        <h2>llamar a función dividir</h2>
        <?= dividir(6, 'mandarina') ?>

</body>
</html>
