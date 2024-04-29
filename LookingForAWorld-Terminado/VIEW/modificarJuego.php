<?php
 session_start();
 $varsesion = $_SESSION['nombre'];
 $varsesionAdmin = $_SESSION['id_usuarioAdm'];
 if($varsesionAdmin == null || $varsesionAdmin = '') {
     echo 'error al iniciar session';
     die();
 }
?>
<?php
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
    <link rel="stylesheet" type="text/css" href="../CSS/styles_category.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/styles_admin.css" />
	<title>LOOKING FOR A WORK</title>
</head>
<body>
<!--Segunda parte-->
<section>
	<div class="table-br-i">
       <h1 id="reviews" class="news">Modificar</h1>
        <div class="frame-adm-i-fondo">
            <div class="frame-adm-i">
                <form action="../CONTROLLER/updatejuego.php" method="post" enctype="multipart/form-data">
                <?php $resultado = mysqli_query($conexion, $juegoA);
                 while($row=mysqli_fetch_assoc($resultado)) { ?>
                    <input type="hidden" name="id" value="<?php echo $row['id_juego'];?>" required></p>
                    <p class="blanco">Nombre<input type="text"  value="<?php echo $row['nombre'];?>" name="nombre" required></p>
                    <p class="blanco">Portada <input type="file" value="" name="portada"></p>
                    <p class="blanco">Descripcion corta <textarea class="textarea-i" rows="7" cols="30" type="text" name="descripcionCorta" required><?php echo $row['descripcionCorta'];?></textarea></p>
                    <p class="blanco">Categoria <input type="text"  value="<?php echo $row['categoria'];?>" name="categoria" required></p>
                    <p class="blanco">Descripcion <textarea class="textarea-i" type="text" rows="10" cols="40" name="descripcion"required><?php echo $row['descripcion'];?></textarea></p>
                    <p class="blanco">Idioma<input type="text" value="<?php echo $row['Idiomas'];?>" name="idiomas" required></p>
                    <p class="blanco">Link<input type="text" value="<?php echo $row['link'];?>" name="link"required></p>
                    <p class="blanco">link  de pago<input type="text" value="<?php echo $row['linkPago'];?>" name="linkPago"required></p>
                  <?php } ?>
                    <input class="bottomh-i-form" type="submit" value="Actualizar">
                </form>
            </div>
        </div>
    </div>
</section>
<!-- segundo contenedor-->
<section>
  <a class = "sub" href="HomeAdmin.php"><button class="bottomh-i">Regresar al inicio</button></a>
  <a class = "sub" href="../CONTROLLER/cerrarSession.php"><button class="bottomh-i">Cerrar session</button></a>
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