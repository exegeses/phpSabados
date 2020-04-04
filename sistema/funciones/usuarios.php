<?php

    ###################################
    ###### login + autenticación ######

    function login()
    {
        $usuEmail = $_POST['usuEmail'];
        $usuPass = $_POST['usuPass'];
        $link = conectar();
        $sql = "SELECT 1
                    FROM usuarios
                    WHERE usuEmail = '".$usuEmail."'
                     AND  usuPass  = '".$usuPass."'";
        $resultado = mysqli_query($link, $sql)
                                or die( mysqli_error($link) );
        //$cantidad = mysqli_fetch_assoc($resultado);
        $cantidad = mysqli_num_rows($resultado);

        if( $cantidad == 0 ){ // no hay coincidencia
            //redirección a formLogin
            header('location: formLogin.php?error=1');
        }
        else{
            ##rutina de autenticación
            //???

            //redirección a admin
            header('location: admin.php');
        }
    }

    ###################################
    ########## CRUD DE Usuarios #########

    /**
     * listarProductos()
     * verProductoPorID()
     * agregarProducto()
     * modificarProducto()
     * eliminarProducto()
     */