<?php
include('conexionbd.php');


$id = $_POST["id"];
$nombre = $_POST["nombre"];
$portada = addslashes(file_get_contents($_FILES['portada']['tmp_name']));
$descripcionCorta = $_POST["descripcionCorta"];
$categoria = $_POST["categoria"];
$descripcion = $_POST["descripcion"];
$idiomas = $_POST["idiomas"];
$link = $_POST["link"];
$linkPago = $_POST["linkPago"];


$actualizar = "UPDATE `juegos` SET `nombre` = '$nombre', `portada` = '$portada', `descripcionCorta` = '$descripcionCorta',
 `categoria` = '$categoria', `descripcion` = '$descripcion', `Idiomas` = '$idiomas', `link` = '$link', `linkPago` = '$linkPago' WHERE `juegos`.`id_juego` = '$id'";


$resultado = mysqli_query($conexion, $actualizar);
if($resultado) {
    session_start();
    $_SESSION['id_juegoACT']= $id;
    header("Location: ../VIEW/actualizarjuegoCategoria.php");
} else {
    echo "<script>alert('Error al comentar'); window.history.go(-1);</script>";
}