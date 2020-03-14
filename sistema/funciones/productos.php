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

    function subirArchivo()
    {

        $prdImagen = 'noDisponible.jpg';
        if( $_FILES['prdImagen']['error'] == 0  ){
            $ruta = 'productos/';
            $prdImagen = $_FILES['prdImagen']['name'];
            $temp = $_FILES['prdImagen']['tmp_name'];
            move_uploaded_file($temp, $ruta.$prdImagen );
        }
        return $prdImagen;
    }

    function agregarProducto()
    {
        $prdNombre = $_POST['prdNombre'];
        $prdPrecio = $_POST['prdPrecio'];
        $idMarca = $_POST['idMarca'];
        $idCategoria = $_POST['idCategoria'];
        $prdPresentacion = $_POST['prdPresentacion'];
        $prdStock = $_POST['prdStock'];
        $prdImagen = subirArchivo();

        $link = conectar();
        $sql = "INSERT INTO productos
                    VALUES
                    ( DEFAULT, 
                      '".$prdNombre."',
                      ".$prdPrecio.",
                      ".$idMarca.",
                      ".$idCategoria.",
                      '".$prdPresentacion."',
                      ".$prdStock.",
                      '".$prdImagen."'
                     )";
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