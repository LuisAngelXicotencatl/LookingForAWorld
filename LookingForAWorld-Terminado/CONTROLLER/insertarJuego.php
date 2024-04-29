<?php
include("conexionbd.php");

$nombre = $_POST["nombre"];
$portada = addslashes(file_get_contents($_FILES['portada']['tmp_name']));
$descripcionCorta = $_POST["descripcionCorta"];
$categoria = $_POST["categoria"];
$descripcion = $_POST["descripcion"];
$idiomas = $_POST["idiomas"];
$link = $_POST["link"];
$linkPago = $_POST["linkPago"];


$registerJuego = "INSERT INTO `juegos` (`id_juego`, `nombre`, `portada`, `descripcionCorta`, `categoria`, `descripcion`, `Idiomas`, `link`, `linkPago`) VALUES 
(null, '$nombre', '$portada', '$descripcionCorta', '$categoria','$descripcion', '$idiomas', '$link', '$linkPago')";


$resultado = mysqli_query($conexion, $registerJuego);
if($resultado) {
    $id_juego = mysqli_insert_id($conexion);
    session_start();
    $_SESSION['id_juego']= $id_juego;
    header("Location: ../VIEW/agregarjuegoCategoria.php");
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
