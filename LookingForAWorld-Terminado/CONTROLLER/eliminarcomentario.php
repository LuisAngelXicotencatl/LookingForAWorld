<!-- METODO CONECTADO a ELIMINAR OFERTA QUE REALIZA LA ELIMINACION DE LA BASE DE DATOS*/ -->
<?php
include("conexionbd.php");

$id = $_GET["id"];
$eliminar = "DELETE FROM comentarios WHERE id_comentario = '$id'";

$resultado = mysqli_query($conexion, $eliminar);

if($resultado) {
    echo "<script>alert('Comentario eliminado'); window.history.go(-1);</script>";
} else {
    echo "<script>alert('ERROR AL ELIMINAR PUBLICACION'); window.history.go(-1);</script>";
}


/*<!-- 
──────────▄
────────▄██
─▄▀██▀█▀█▀███▀ 
▀▀▀▀▀████▀▀▀
──────▀██
-->
*/