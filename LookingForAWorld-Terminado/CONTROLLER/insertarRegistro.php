<?php
include("conexionbd.php");

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$imgPerfil = addslashes(file_get_contents($_FILES['imgPerfil']['tmp_name']));
$nomUsuario = $_POST["nomUsuario"];
$password = $_POST["password"];


$register = "INSERT INTO `usuarios` (`id_usuario`, `nombre`, `correo`, `imgPerfil`, `nomUsuario`, `password`) VALUES 
(null, '$nombre', '$correo', '$imgPerfil', '$nomUsuario', '$password')";


$resultado = mysqli_query($conexion, $register);
if($resultado) {
    header("Location: ../index.php");
} else {
    echo "<script>alert('Error al comentar'); window.history.go(-1);</script>";
}

/*
─────────────────────
──────────▄──────────
────────▄██──────────
─▄▀██▀█▀█▀███▀───────
▀▀▀▀▀████▀▀▀─────────
──────▀██────────────
─────────────────────
*/
