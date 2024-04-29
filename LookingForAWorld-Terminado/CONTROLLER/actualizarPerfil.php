<?php
include('conexionbd.php');


$id = $_POST["id"];
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$imgPerfil = addslashes(file_get_contents($_FILES['imgPerfil']['tmp_name']));
$nomUsuario = $_POST["nomUsuario"];




$actualizar = "UPDATE `usuarios` SET `nombre` = '$nombre', `correo` = '$correo', `imgPerfil` = '$imgPerfil', `nomUsuario` = '$nomUsuario'
WHERE `usuarios`.`id_usuario` = '$id'";


$resultado = mysqli_query($conexion, $actualizar);
if($resultado) {
    header("Location: ../VIEW/perfil.php");
} else {
    echo "<script>alert('Error al comentar'); window.history.go(-1);</script>";
}