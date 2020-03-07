<?php

    ###################################
    ########## CRUD DE USUARIOS #########

    function litarProductos()
    {
        $link = conectar();
        $sql = "SELECT idProducto, prdNombre, prdPrecio,
                   p.idMarca, mkNombre,
                   p.idCategoria, catNombre,
                   prdPresentacion, prdStock,
                   prdImagen
                FROM productos p, marcas m, categorias c 
                WHERE p.idMarca = m.idMarca
                 AND p.idCategoria = c.idCategoria";
        $resultado = mysqli_query($link, $sql)
                        or die(mysqli_error($link));
        return $resultado;
    }

    /**
     * listarUsuarios()
     * verUsuarioPorID()
     * agregarUsuario()
     * modificarUsuario()
     * eliminarUsuario()
     */