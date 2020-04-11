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


    function chequearDatosDesdeForm()
    {
        if( !isset($_POST['mkNombre']) ){
            header('location: pantallaError.php');
        }
    }

    function agregarMarca()
    {

        $link = conectar();
        chequearDatosDesdeForm();
        $mkNombre = $_POST['mkNombre'];
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


    function marcaEnUso()
    {
        $idMarca = $_GET['idMarca'];
        $link = conectar();

        $sql = "SELECT mkNombre 
                    FROM productos p, marcas m
                    WHERE p.idMarca = m.idMarca
                      AND m.idMarca = ".$idMarca;

        $resultado = mysqli_query($link, $sql)
                    or die(mysqli_error($link));
        //$datos = mysqli_fetch_assoc($resultado);
        //$marca = $datos['mkNombre'];
        $cantidad = mysqli_num_rows($resultado);
        return $cantidad;

    }

    function verMarcaPorID()
    {
        $idMarca = $_GET['idMarca'];
        $link = conectar();
        $sql = "SELECT idMarca, mkNombre
                    FROM marcas
                    WHERE idMarca = ".$idMarca;
        $resultado = mysqli_query( $link, $sql )
                        or die(mysqli_error($link));
        $marca = mysqli_fetch_assoc($resultado);
        return $marca;
    }

    function eliminarMarca()
    {
        $idMarca = $_POST['idMarca'];
        $link = conectar();
        $sql = "DELETE FROM marcas
                    WHERE idMarca = ".$idMarca;

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