<?php
include("conexionbd.php");

$id = $_POST["id"];
$sugerencia = $_POST["sugerencia"];

$enviar = "INSERT INTO `sugerencias` (`id_usuario`, `sugerencia`) VALUES ('$id', '$sugerencia')";


$resultado = mysqli_query($conexion, $enviar);
if($resultado) {
    header("Location: ../VIEW/home.php");
} else {
    echo "<script>alert('Error al comentar'); window.history.go(-1);</script>";
}