<?php
 session_start();
 $varsesion = $_SESSION['nombre'];
 $varjuego = $_SESSION['id_juego'];
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
       <h1 id="reviews" class="news"><?php echo $_SESSION['id_juego'];?></h1>
        <div class="frame-adm-i-fondo">
            <div class="frame-adm-i">
            <form action="../CONTROLLER/agregarJuegoCategoria.php" method="post">
                <label >Esta disponible en xbox?<br>
                   <select name="xbox">
                       <option value="">(select one)</option>
                       <option value="Disponible">Disponible</option>
                       <option value="No disponible">No disponible</option>
                   </select>
               </label><br>
               <label>Esta disponible en Playstation?<br>
                   <select name="play">
                       <option value="null">(select one)</option>
                       <option value="Disponible">Disponible</option>
                       <option value="No disponible">No disponible</option>
                   </select>
               </label><br>
               <label>Esta disponible en Nintendo?<br>
                   <select name="nintendo">
                       <option value="null">(select one)</option>
                       <option value="Disponible">Disponible</option>
                       <option value="No disponible">No disponible</option>
                   </select>
               </label><br>
               <label>Esta disponible en PC?<br>
                   <select name="pc">
                       <option value="null">(select one)</option>
                       <option value="Disponible">Disponible</option>
                       <option value="No disponible">No disponible</option>
                   </select>
               </label>
            <input class="bottomh-i" type="submit" value="Ingresar">
            </form>
            </div>
        </div>
    </div>
</section>
<!-- segundo contenedor-->
<section>
  <a href=""><button class="bottomh-i">Regresar al inicio</button></a>
  <a href=""><button class="bottomh-i">Cerrar session</button></a>
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