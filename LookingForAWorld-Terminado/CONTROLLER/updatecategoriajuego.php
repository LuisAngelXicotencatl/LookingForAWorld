<?php
include('conexionbd.php');


session_start();
$id_juego = $_SESSION['id_juegoACT'];
$xbox = $_POST["xbox"];
$play = $_POST["play"];
$nintendo = $_POST["nintendo"];
$pc = $_POST["pc"];



$actualizarCategoria = "UPDATE `plataformas` SET `xbox` = '$xbox', `play` = '$play', `nintendo` = '$nintendo', `pc` = '$pc' 
WHERE `plataformas`.`id_plataforma` = '$id_juego'";


$resultado = mysqli_query($conexion, $actualizarCategoria);
if($resultado) {
    header("Location: ../VIEW/Home.php");
} else {
    echo "<script>alert('Error al comentar'); window.history.go(-1);</script>";
}