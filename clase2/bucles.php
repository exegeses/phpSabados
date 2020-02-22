<?php
    $marcas = [
        'Hyundai',
        'Samsung',
        'Honda',
        'Daewo',
        'Sanssyong',
        'DS',
        'Series M',
        'Lamborghini'
    ];
    $n = 0;
    $cantidad = count($marcas);
    echo '<ul>';
    while( $n < $cantidad ){
        echo '<li>',$marcas[$n], '</li>';
        $n++;
    }
    echo '</ul>';
