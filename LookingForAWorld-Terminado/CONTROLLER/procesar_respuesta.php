<!-- METODO CONECTADO A AGREGAR OFERTA PARA QUE SE REALIZE EL INSERT*/ -->
<?php
include("conexionbd.php");

$id_publicacion = $_POST["id"];
$numero_usuario = $_POST["usuario"];
$respuesta = $_POST["respuesta"];



$insertar = "INSERT INTO `respuesta` (`id_respuesta`, `id_publicacion`, `numero_usuario`, `respuesta`) VALUES (NULL, '$id_publicacion', '$numero_usuario', '$respuesta')";

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
