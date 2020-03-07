<?php

    ###################################
    ########## CRUD DE CATEGORIAS #########

    function listarCategorias()
    {
        $link = conectar();
        $sql = "SELECT idCategoria, catNombre
                   FROM categorias";

        $resultado = mysqli_query( $link, $sql )
                        or die(mysqli_error($link));
        $resultado = mysqli_query( $link, $sql );
        return $resultado;
    }

    /**
     * listarCategorias()
     * verCategoriaPorID()
     * agregarCategoria()
     * modificarCategoria()
     * eliminarCategoria()
     */