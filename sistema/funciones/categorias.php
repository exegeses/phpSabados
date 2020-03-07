<?php

    ###################################
    ########## CRUD DE CATEGORIAS #########

    function listarCategorias()
    {
        $link = conectar();
        $sql = "SELECT idCategoria, catNombre
                   FROM categorias";
<<<<<<< HEAD
        $resultado = mysqli_query( $link, $sql )
                        or die(mysqli_error($link));
=======
        $resultado = mysqli_query( $link, $sql );
>>>>>>> master
        return $resultado;
    }

    /**
     * listarCategorias()
     * verCategoriaPorID()
     * agregarCategoria()
     * modificarCategoria()
     * eliminarCategoria()
     */