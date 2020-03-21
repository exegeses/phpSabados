<?php

    ###################################
    ######## rutina de conexion #######

    define('SERVER', 'localhost');
    define('USUARIO', 'root');
    define('CLAVE', 'root');
    define('BASE', 'catalogoPHP');

    function conectar()
    {
        $link = mysqli_connect(
            SERVER,
            USUARIO,
            CLAVE,
            BASE
        );
        return $link;
    }
