<?php
include('conexionbd.php');
$perfil = "SELECT *  FROM `usuarios` WHERE `id_usuario` = 1";
$resultado = mysqli_query($conexion, $perfil);

if($resultado){
  
    header("location: ../VIEW/Home.php");

}else{
    ?>
    <?php
    include("index.php");
  ?>
  <h1 class="bad">USUARIO o PASSWORD NO EXISTEN</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);