<?php
function ListarProductosNuevos(){
    require("conexion.php");

    $sql = "SELECT * FROM productos WHERE entrada = 'Nuevo'";
    $res = mysqli_query($con, $sql);

    $datos = array();

    while ($fila = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
        $datos[] = $fila;
    }

    return $datos;

    mysqli_close($con);
}

function ListarProductos(){
    require("conexion.php");

    $sql = "SELECT * FROM productos";
    $res = mysqli_query($con, $sql);

    $datos = array();

    while ($fila = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
        $datos[] = $fila;
    }

    return $datos;

    mysqli_close($con);
}

function RegistrarProducto($nom, $des, $pre, $sto, $cat, $ent){
    require("conexion.php");

    $sql = "INSERT INTO productos() VALUES(NULL, '$nom', '$des', '$pre', '$sto', '$cat', '$ent')";
    mysqli_query($con, $sql);

    return "SI";
    
    mysqli_close($con);
}

function EliminarProducto($idProducto){
    require("conexion.php");

    $sql = "DELETE FROM productos WHERE idProducto = '$idProducto'";
    $res = mysqli_query($con, $sql);

    if ($res) return "SI"; else return "NO";

    mysqli_close($con);
}

function ConsultarProducto($idProducto){
    require("conexion.php");

    $sql = "SELECT * FROM productos WHERE idProducto = '$idProducto'";
    $res = mysqli_query($con, $sql);

    $datos = array();

    while ($fila = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
        $datos[] = $fila;
    }

    return $datos;

    mysqli_close($con);
}

function ActualizarProducto($idp, $nom, $des, $pre, $sto, $cat, $ent){
    require("conexion.php");

    $sql = "UPDATE productos SET 
    Nombre = '$nom',
    Descripcion = '$des',
    Precio = '$pre',
    Stock = '$sto',
    Categoria = '$cat',
    entrada = '$ent'
    WHERE idProducto = '$idp'";
    $res = mysqli_query($con, $sql);

    if ($res) return "SI"; else return "NO";

    mysqli_close($con);
}