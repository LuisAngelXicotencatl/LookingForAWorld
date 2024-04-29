<?php
include("conexionbd.php");

session_start();
$id_juego = $_SESSION['id_juego'];
$xbox = $_POST["xbox"];
$play = $_POST["play"];
$nintendo = $_POST["nintendo"];
$pc = $_POST["pc"];

$registerCategoria = "INSERT INTO `plataformas` (`id_plataforma`, `id_juego`, `xbox`, `play`, `nintendo`, `pc`) VALUES 
(null, '$id_juego', '$xbox', '$play', '$nintendo','$pc')";


$resultado = mysqli_query($conexion, $registerCategoria);
if($resultado) {
    header("Location: ../VIEW/HomeAdmin.php");
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
