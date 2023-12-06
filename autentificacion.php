<?php
session_start();

$user = $_REQUEST['usr'];
$pass = $_REQUEST['pas'];

require("model/m_usuario.php");

$usuario = ValidarUsuario($user, $pass);

if ($usuario != null) {
    foreach ($usuario as $key => $value) {
        $idUsuario = $value['id_usuario'];
        $NombreUsuario = $value['NombreUsuario'];
        $Contraseña = $value['Contraseña'];
    }

    //crear variables de sesión
    $_SESSION['autentificado'] = TRUE;
    $_SESSION['id_session'] = $idUsuario;
    $_SESSION['nom_session'] = $NombreUsuario;

    header('location: admin.php');
} else {
    header('location: login.php');
}
