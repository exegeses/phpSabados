<?php

    /**
     * función para sumar dos números
     * @param int $num1
     * @param int $num2
     * @return int $resultado
     */
    function sumar($num1, $num2)
    {
        $resultado = $num1 + $num2;
        return $resultado;
    }

    /**
     * función ppra encriptar una clave
     * @param string $clave
     * @return string $claveEncriptada
     */
    function encriptar($clave)
    {
        $claveEncriptada = password_hash($clave, PASSWORD_BCRYPT );
        return $claveEncriptada;
    }


    function bolder($frase)
    {
        echo '<b>', $frase, '</b><br>';
    }

    function duplica($numero)
    {
        $resultado = $numero * 2;
        return $resultado;
    }


    bolder('PHP y mySQL');
    bolder('otro texto');
    bolder(25*333);

    bolder( duplica(8) );

?>
.
<br>
<?php
        echo sumar(3, 7)
?>
<hr>
<?php
    echo encriptar('marcos');
?>

