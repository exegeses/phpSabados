<?php

    function mostrarContenido($datos)
    {
        $salida = '<pre>';
        $salida .= print_r($datos);
        $salida .= '</pre>';
    }

    function dividir( $dividendo, $divisor )
    {
        if ( $divisor != 0 ){
            $resultado = $dividendo / $divisor;
            return $resultado;
        }

        return 'el divisor debe ser distinto de 0';

    }