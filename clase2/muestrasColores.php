<?php
    $nombreColor = [
                        'verde', 'rojo', 'azul',
                        'amarillo', 'naranja', 'violeta',
                        'celeste', 'marron', 'rosa'
                    ];
    $codigoColor = [
                        '#2a2', '#d00', '#02a',
                        '#ff0', '#f60', '#929',
                        '#aff', '#520', '#faa'
                    ];
    $i = 0;
    $cantidad = count($nombreColor);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>muestras</title>
    <style>
        #muestras{
            width: 150px;
            padding: 16px 0px 20px 20px;
            border: 1px solid #aaa;
        }
            #muestras span{
                border: 1px solid #ccc;
                width: 16px;
                height: 16px;
                display: inline-block;
                position: relative;
                top: 5px;
                margin-right: 10px;
            }
    </style>
</head>
<body>
    <h1>muestra de colores</h1>

    <div id="muestras">
<?php
        while( $i < $cantidad ){
?>
        <span style="background-color: <?= $codigoColor[$i]; ?>;"></span> <?= $nombreColor[$i]; ?>
        <br>
<?php
            $i++;
        }
?>
    </div>

</body>
</html>

