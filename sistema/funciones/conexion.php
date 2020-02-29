<?php

    ###################################
    ######## rutina de conexion #######

    define('SERVER', 'localhost');
    define('USUARIO', 'root');
    define('CLAVE', '');
    define('BASE', 'catalogo');

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
