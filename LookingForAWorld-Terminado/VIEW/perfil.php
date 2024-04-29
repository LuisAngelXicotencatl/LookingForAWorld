<!--Se asigna un valor al la varible ADM si no exite un valor-->
<?php
session_start();
error_reporting(0);

$varsesion = $_SESSION['id_usuario'];
if($varsesion == "0" || $varsesion = NULL) {
  echo 'error al iniciar sesión';
  die();
}

$id = $_SESSION['id_usuario'];

include("../CONTROLLER/conexionbd.php");

$juegoC = "SELECT `comentarios`.`id_comentario`, `comentarios`.`id_juego`, `comentarios`.`id_usuario`, `comentarios`.`comentario`, `usuarios`.`nomUsuario`, `usuarios`.`imgPerfil`
FROM `comentarios` 
	LEFT JOIN `usuarios` ON `comentarios`.`id_usuario` = `usuarios`.`id_usuario` where `comentarios`.`id_usuario` = '$id'";
$juegoA = "SELECT `usuarios`.`id_usuario`, `usuarios`.`nombre`, `usuarios`.`correo`, `usuarios`.`imgPerfil`, `usuarios`.`nomUsuario`, `usuarios`.`password` FROM `usuarios` where `usuarios`.`id_usuario` = '$id'";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../CSS/styles_head.css" />
	<link rel="stylesheet" type="text/css" href="../CSS/styles_table.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/styles_footer.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/styles_game.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/styles_category.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/styles_admin.css" />
	<title>LOOKING FOR A WORK</title>
</head>
<body>
<header>
<h1 class="icon"><a class="sub" href="Home.php">世界を探し</a> "<?php echo $_SESSION['nombre'];?>"</h1>
	<nav>
	 <ul>
	  <li><a accesskey="r" href="#contribuciones">Contribuciones</a></li>
    </ul>
	</nav>
</header>
<section id="inicio">
    <div class="label-br">
        <?php
        $resultado = mysqli_query($conexion, $juegoC);
        $row=mysqli_fetch_assoc($resultado);{
        ?>
		<h1 class="label"><img  class="perfil-perfil" src="data:image/jpg;base64,<?php echo base64_encode($row['imgPerfil']); ?>" alt="Imagen de perfil"><p><?php echo $row["alias"];?></h1>
		<h3><?php echo $row["nomUsuario"];?></h3>
        <button id = "modificarPerfil" class="button-is-perfil">modificar perfil</button></a>
        <?php
        }
        ?>
	</div>
</section>
<!--Segunda parte-->
<div class="tercer">
<section>
	<div id="modificar_perfil" class="table-br-i" style="display:none;">
       <h1 id="perfil" class="news">Perfil<?php echo $row['nombre'];?></h1>
        <div class="frame-adm-i-fondo">
            <div class="frame-adm-i">
                <form action="../CONTROLLER/actualizarPerfil.php" method="post" enctype="multipart/form-data">
                <?php $resultado = mysqli_query($conexion, $juegoA);
                  $row=mysqli_fetch_assoc($resultado);{?>
                    <input type="hidden" name="id" value="<?php echo $row['id_usuario'];?>" required></p>
                    <p class="blanco">Nombre<input type="text"  value="<?php echo $row['nombre'];?>" name="nombre" required></p>
                    <p class="blanco">Portada <input type="file" value="" name="imgPerfil"></p>
                    <p class="blanco">Correo <input class="text" type="text" value ="<?php echo $row['correo'];?>" name="correo" required></input></p>
                    <p class="blanco">Nombre de usuario <input type="text"  value="<?php echo $row['nomUsuario'];?>" name="nomUsuario" required></p>
                  <?php } ?>
                    <input class="bottomh-i-form" type="submit" value="Actualizar">
                </form>
            </div>
        </div>
    </div>
</section>

<script src="../CONTROLLER/scriptperfil.js"></script>

    <h1 id="contribuciones" class="news">Contribuciones</h1>
    <?php 
    $resultadob = mysqli_query($conexion, $juegoC);
    foreach(mysqli_fetch_all($resultadob, MYSQLI_ASSOC) as $row)
    { ?>
      <div id = "comentario" class="flex">
        <!--imprime perfil y nombre -->
        <div class="flax-i">
          <img  class="perfil" src="data:image/jpg;base64,<?php echo base64_encode($row['imgPerfil']); ?>" alt="Imagen de perfil"><p><?php echo $row["nomUsuario"];?></p>
        </div>  
        <!--comentario -->
        <div class="tercer-com"><?php echo $row["comentario"];?><?php echo $row["id_juego"];?>
        <a class = "sub" href="juego.php?id=<?php echo $row["id_juego"];?>"><button class="button-is">ir al juego</button></a>
            <!--botton solo para eliminar comentario -->
              <a class = "sub" href="../CONTROLLER/eliminarcomentario.php?id=<?php echo $row["id_comentario"];?>">
              <button class="button-is">Eliminar mi comentario</button></a>
        </div>    
      </div>
    <?php }?>
  </div>



<section>
  <a class= "sub" href="Home.php"><button class="bottomh">Regresar al inicio</button></a>
  <?php if($varsesion != "anonimo") { ?><a class= "sub" href="../CONTROLLER/cerrarSession.php"><button class="bottomh">Cerrar session</button></a><?php } ?></div>
  <?php if($varsesion == "anonimo" || $varsesion == NULL ) { ?><a class = "sub" href="../CONTROLLER/cerrarSession.php"><button class="bottomh">Iniciar session</button></a><?php } ?></div>
  <?php if($varsesionADM > 0 ) { ?><a class = "sub" href="HomeAdmin.php"><button class="bottomh">Regresar inicio administrados</button></a><?php } ?></div>
</section>

<footer>
      <div>
        LokingForAWork<br />
        世界を探して <br />
        Sekai o Sagashite
      </div>
</footer>
</body>
</html>