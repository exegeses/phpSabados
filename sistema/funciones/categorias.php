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
        return $resultado;
    }

    /**
     * listarCategorias()
     * verCategoriaPorID()
     * agregarCategoria()
     * modificarCategoria()
     * eliminarCategoria()
     */