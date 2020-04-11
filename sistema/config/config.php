<?php

    ####################################
    ##### archivo de configuración

    session_start(); //habilitamos sesion de manerta global


    function verContenido($datos)
    {
        echo '<pre>';
        print_r($datos);
        echo '</pre>';
    }