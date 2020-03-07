<?php

    ###################################
    ########## CRUD DE MARCAS #########


/**
 * función para listar Marcas
 * @return bool|mysqli_result
 */
    function listarMarcas()
    {
        $link = conectar();
        $sql = "SELECT idMarca, mkNombre
                    FROM marcas";
        $resultado = mysqli_query( $link, $sql )
                        or die(mysqli_error($link));
        return $resultado;
    }


    function agregarMarca()
    {
        $mkNombre = $_POST['mkNombre'];
        $link = conectar();

        $sql = "INSERT INTO marcas
                    (mkNombre)
                    VALUE 
                    ( '".$mkNombre."' )";
        $resultado = mysqli_query($link, $sql)
                        or die(mysqli_error($link));
        if($resultado){
            $id = mysqli_insert_id($link);
            $salida = [$resultado, $id, $mkNombre];
        }
        return $salida;
    }


    /**
     * listarMarcas()
     * verMarcaPorID()
     * agregarMarca()
     * modificarMarca()
     * eliminarMarca()
     */