<!--Se asigna un valor al la varible ADM si no exite un valor-->
<?php
session_start();
error_reporting(0);
$varsesionADM = $_SESSION['id_usuarioAdm'];
$ADM = $_SESSION['id_usuarioAdm'];
if($ADM == null || $$ADM = '') {
  $_SESSION['id_usuarioAdm'] = "0";
}

//se asigna un nombre de usuario si no se inicio session

$varsesion = $_SESSION['nombre'];
$varid = $_SESSION['id_usuario'];
if($varid == null || $varid = '') {
  $_SESSION['id_usuario'] = "0";
}

// se agrega la conexion a la base de datos y se realizan las consultas

include("../CONTROLLER/conexionbd.php");
$id = $_GET["id"];
$_SESSION['id_juegos']= $id;
$juegoA = "SELECT * FROM juegos where id_juego = '$id'";
$juegoB = "SELECT * FROM plataformas where id_juego = '$id'";
$juegoC = "SELECT `comentarios`.`id_comentario`, `comentarios`.`Id_juego`, `comentarios`.`id_usuario`, `comentarios`.`comentario`, `usuarios`.`imgPerfil`, `usuarios`.`nomUsuario` FROM `comentarios` LEFT JOIN `usuarios` ON `comentarios`.`id_usuario` = `usuarios`.`id_usuario` where id_juego = '$id'";
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
	<title>LOOKING FOR A WORK</title>
</head>

<body>
  <header>
  	<h1 class="icon"><a class="sub" href="Home.php">世界を探し</a> "<?php echo $_SESSION['nombre'];?>"</h1>
  	<nav>
  	  <ul>
  		  <li><a  accesskey="r" href="#comentario">COMENTARIOS</a></li>
  	  </ul>
  	</nav>
  </header>

  <!--Segunda parte-->
	<div class="table-br">
    <?php $resultado = mysqli_query($conexion, $juegoA);
    while($row=mysqli_fetch_assoc($resultado)) { ?>
    <h1 id="reviews-i" class="news-i"><?php echo $row['nombre'];?></h1>

      <div class="frame-four">
        <img  class="box-imgs" src="data:image/jpg;base64,<?php echo base64_encode($row['portada']); ?>" alt="Gears">
        <h2 class="tipos-juego">Categoria: <?php echo $row['categoria'];?></h2>
        <h2 class="tipos-juego">Idiomas: <?php echo $row['Idiomas'];?></h2>
      </div>

    <div class="frame-four">
	    <div class="content">
        <p>Descripción: <?php echo $row['descripcion'];?></p>
      </div>
      <?php
                if($varsesion != "anonimo") { ?>
                <a class="sub" href="<?php echo $row['link'];?>" target="_blank"><h2 class="tipos-juego">Link de descarga</h2></a>
                <a class="sub" href="<?php echo $row['linkPago'];?>" target="_blank"><h2 class="tipos-juego">Link de descarga de pago</h2></a>
                <?php } ?>
      <?php } ?>
      <?php $resultado = mysqli_query($conexion, $juegoB);
      while($row=mysqli_fetch_assoc($resultado)) { ?>
      <ul class="list-i">
        <li class="list-i">Xbox: <?php echo $row["xbox"];?></li>
        <li class="list-i">PLAYSTASION:  <?php echo $row["play"];?></li>
        <li class="list-i">Nintendo: <?php echo $row["nintendo"];?></li>
        <li class="list-i">PC: <?php echo $row["pc"];?></li>
      </ul>
      <?php } ?>
    </div>
  </div>

  <!--COMENTARIOS -->
  <div class="tercer">
    <h1 id="reviews" class="news">Comentarios</h1>
    <?php 
    $resultado = mysqli_query($conexion, $juegoC);
    foreach(mysqli_fetch_all($resultado, MYSQLI_ASSOC) as $row)
    { ?>
      <div id = "comentario" class="flex">
        <!--imprime perfil y nombre -->
        <div class="flax-i">
          <img  class="perfil" src="data:image/jpg;base64,<?php echo base64_encode($row['imgPerfil']); ?>" alt="Imagen de perfil"><p><?php echo $row["nomUsuario"];?></p>
        </div>  
        <!--comentario -->
        <div class="tercer-com"><?php echo $row["comentario"];?>
          <!--Responder un comentario -->
            <button class="button-is responder">Responder</button>
            <div class="contenedorRespuesta" style="display:none;"> 
              <?php if($varsesion != "anonimo") { ?>
                <form id="formularioRespuesta" action="../CONTROLLER/procesar_respuesta.php" method="POST">
                  <input type="hidden" name="usuario" value="<?php echo $_SESSION['id_usuario']; ?>">
                  <input type="hidden" name="id" value="<?php echo $row['id_comentario'];?>" required></p>
                  <textarea name="respuesta"></textarea>
                <input class="button-is enviarRespuesta" type="submit" value="enviar">
              <?php } ?>
              </form>
            </div>
            <!--botton solo para administrados -->
            <?php if($varsesionADM != 0 ) { ?>
              <a class = "sub" href="../CONTROLLER/eliminarcomentario.php?id=<?php echo $row["id_comentario"];?>">
              <button class="button-is">Eliminar comentario</button></a>
            <?php } ?>
        </div>    
      </div>
      <!--inicio de respuestas anidadas -->
      <section style="display:none;" class="contenedorcomentario">
        <?php 
        $juegod = "SELECT `respuesta`.`id_respuesta`, `respuesta`.`id_publicacion`, `respuesta`.`numero_usuario`, `respuesta`.`respuesta`, `usuarios`.`id_usuario` AS `numeroU`, `usuarios`.`nomUsuario` AS `alias`, `usuarios`.`imgPerfil` AS `foto` FROM `respuesta` LEFT JOIN `usuarios` ON `respuesta`.`numero_usuario` = `usuarios`.`id_usuario` WHERE id_publicacion = {$row['id_comentario']}";
        $resultado = mysqli_query($conexion, $juegod);
        foreach(mysqli_fetch_all($resultado, MYSQLI_ASSOC) as $row) { ?>
          <div class="flex-respuesta">
            <div class="flax-i">
              <img  class="perfil-respuesta" src="data:image/jpg;base64,<?php echo base64_encode($row['foto']); ?>" alt="Imagen de perfil"><p><?php echo $row["alias"];?></p>
            </div>
            <div class="tercer-com-i"><?php echo $row["respuesta"];?>
              <!--botton solo para administrados -->
              <?php if($varsesionADM > 0 ) { ?>
                <a class = "sub" href="../CONTROLLER/eliminarcomentario.php?id=<?php echo $row["id_respuesta"];?>">
                <button class="button-is">Eliminar comentario</button></a>
                <?php } ?>
            </div>
          </div>
        <?php } ?>
      </section>
      <!--fin de respuestas anidadas -->
    <?php }?>
  </div>


  <!--script para el formulario -->
  <script src="../CONTROLLER/scriptcomentario.js"></script>

  <!--Iniciar session -->
  <div class="tercer-is">
    <?php if($varsesion == "anonimo") { ?>
      <div class="flex">
        <div class="flax-i">
          <img  class="perfil" src="../IMG/admin.jpg" alt="Imagen de perfil"><p>PandaAnonimo</p>
        </div>
        <div class="com-inicia">Inicia session para poder comentar y descargar!!</div>
      </div>
    <?php } ?>
  </div>
  
  <!--comentar -->
  <div class="tercer-is">
    <?php
    if($varsesion != "anonimo") { ?>
      <form class="perfil" action="../CONTROLLER/comentar.php" method="post">
        <div>Comenta!!</div>
        <div class="tercer-comentario">
          <input type="hidden" name="juego" value="<?php echo $_SESSION['id_juegos']; ?>">
          <input type="hidden" name="usuario" value="<?php echo $_SESSION['id_usuario']; ?>">
          <div class="answer">
            <textarea id="comentar" name="comentar" id= "comentar" rows="5" cols="24" placeholder="Comenta..."></textarea> 
          </div>
          <button type="submit">comentar</button>
        </div>
      </form>
    <?php } ?>
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