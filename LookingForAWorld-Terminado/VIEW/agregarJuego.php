<?php
 session_start();
 $varsesion = $_SESSION['nombre'];
 if($varsesion == null || $varsesion = '') {
     echo 'error al iniciar session';
     die();
 }
 error_reporting(0);
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
	<div class="table-br">
       <h1 id="reviews" class="news">AGREGAR</h1>
        <div class="frame-adm-i-fondo">
            <div class="frame-adm-i">
                <form action="../CONTROLLER/insertarJuego.php" method="post" enctype="multipart/form-data">
                    <p class="blanco">Nombre<input type="text" placeholder="Gears" name="nombre" required></p>
                    <p class="blanco">Portada <input type="file" name="portada" required></p>
                    <p class="blanco">Descripcion corta <input type="text" placeholder="no mayor a 200 caracteres" name="descripcionCorta" required></p>
                    <p class="blanco">Categoria <input type="text" placeholder="Terror/Accion/Aventura" name="categoria" required></p>
                    <p class="blanco">Descripcion <input type="text" placeholder="Descripcion" name="descripcion"required></p>
                    <p class="blanco">Idioma<input type="text" placeholder="Ingles/Español " name="idiomas" required></p>
                    <p class="blanco">Link<input type="text" placeholder="Link para descarga gratuita" name="link"required></p>
                    <p class="blanco">link  de pago<input type="text" placeholder="link  de pago" name="linkPago"required></p>
                    <input class="bottomh-i" type="submit" value="Ingresar">
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