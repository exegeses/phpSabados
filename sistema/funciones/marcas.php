<?php

    ###################################
    ########## CRUD DE MARCAS #########

/**
 * función para listar Marcas
 * @return $listaMarcas mysqli_result
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

    /**
     * listarMarcas()
     * verMarcaPorID()
     * agregarMarca()
     * modificarMarca()
     * eliminarMarca()
     */