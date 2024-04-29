<!-- METODO CONECTADO A AGREGAR OFERTA PARA QUE SE REALIZE EL INSERT*/ -->
<?php
include("conexionbd.php");

$juego = $_POST["juego"];
$usuario = $_POST["usuario"];
$comentar = $_POST["comentar"];



$insertar = "INSERT INTO comentarios (id_juego, id_usuario, comentario) VALUES 
('$juego','$usuario','$comentar')";

$resultado = mysqli_query($conexion, $insertar);
if($resultado) {
    echo("<script>alert('Comentario publicado'); window.history.go(-1);</script>");
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
