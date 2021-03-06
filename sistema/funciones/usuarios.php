<?php

    ###################################
    ###### login + autenticación ######

    function login()
    {
        $usuEmail = $_POST['usuEmail'];
        $usuPass = $_POST['usuPass'];
        $link = conectar();
        $sql = "SELECT usuNombre, usuApellido
                    FROM usuarios
                    WHERE usuEmail = '".$usuEmail."'
                     AND  usuPass  = '".$usuPass."'";
        $resultado = mysqli_query($link, $sql)
                                or die( mysqli_error($link) );
        $cantidad = mysqli_num_rows($resultado);

        if( $cantidad == 0 ){ // no hay coincidencia
            session_unset();
            session_destroy();
            //redirección a formLogin
            header('location: formLogin.php?error=1');
        }
        else{
            ##rutina de autenticación
            $_SESSION['login'] = 1;
            $datos = mysqli_fetch_assoc($resultado);
            $_SESSION['nombreApellido'] = $datos['usuNombre'].' '.$datos['usuApellido'];
            //redirección a admin
            header('location: admin.php');
        }
    }

    function logout()
    {
        session_unset();
        session_destroy();
        header('refresh:3; url=index.php');
    }

    function autenticar()
    {
        if( !isset($_SESSION['login']) ){
            header('location: formLogin.php?error=2');
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