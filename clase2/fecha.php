<?php
    date_default_timezone_set('America/Argentina/Buenos_Aires');

    $diaMes = date('d');
    $nMes = date('m');
    $anio = date('Y');
    echo $diaMes,'/',$nMes, '/', $anio;
?>
    <br>
<?php
    echo date('d/m/Y H:i:s');
?>
    <br>
<?php
    $diaSemana = date('l');
    switch ($diaSemana){
        case 'Monday':
            $diaSemana = 'Lunes';
            break;
        case 'Tuesday':
            $diaSemana = 'Martes';
            break;

        default:
            $diaSemana = 'Sábado';
    }
    echo $diaSemana;
?>
<br>
<?php
    $semana = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
    $nDiaSemana = date('w');
    echo 'Hoy es: ', $semana[$nDiaSemana];
?>
<br>
<?php
    echo time()
?>
