<?php

    $marcas = [
        'Hyundai',
        'Samsung',
        'Honda',
        'Daewo',
        'Sanssyong'
    ];
    echo $marcas[2];
?>
<pre>
<?php print_r($marcas); ?>
</pre>
<br>
<?php
    echo $_GET['nombre'];
?>
<br>
<?php
    $marcas2 = [
        'Citroën' => 'Xara',
        'Peugeaot' => 207,
        'Porsche' => 'Carrera',
        'Aston Martin' => 'DS9'
    ];
?>
<pre><?php print_r($marcas2); ?></pre>
<?php
    $marcas2['Toyota'] = 'Corolla';
?>
<pre><?php print_r($marcas2); ?></pre>
