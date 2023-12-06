<?php 
function ValidarUsuario($user, $pass) {
    require("conexion.php");

    $sql = "SELECT * FROM usuarios WHERE NombreUsuario = '$user' AND Contraseña = '$pass'";
    $res = mysqli_query($con, $sql);

    $datos = array();

    while ($fila = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
        $datos[] = $fila;
    }

    return $datos;

    mysqli_close($con);
}
?>