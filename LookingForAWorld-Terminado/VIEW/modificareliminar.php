<?php
 session_start();
 $varsesion = $_SESSION['nombre'];
 if($varsesion == null || $varsesion = '') {
  $_SESSION['nombre'] = "anonimo";
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
	<title>LOOKING FOR A WORK</title>
</head>
<header>
	<h1 class="icon"><?php echo $_SESSION['nombre'];?></h1>
	<nav>
	  <ul>
		  <li><a  accesskey="r" href="#reviews">REVIEWS</a></li>
      <li><a  accesskey="c" href="#categorias">CATEGORIAS</a></li>
	  </ul>
	</nav>
</header>

<body>
<!--Segunda parte-->
<section>
	<div class="table-br">
       <h1 id="reviews" class="news">REVIEWS</h1>
       <?php
       include('../CONTROLLER/conexionbd.php');
       $juegos = "SELECT *  FROM juegos";
       $resultado = mysqli_query($conexion, $juegos);
       while($row=mysqli_fetch_assoc($resultado)) {
       ?>
        <div class="frame">
            <img  class="box-img" src="data:image/jpg;base64,<?php echo base64_encode($row['portada']); ?>" alt="Gears">
	        <div class="content">
                <h2><?php echo $row['nombre'];?></h2>
                <p>Descripción:<?php echo $row['descripcionCorta'];?></p>
                <a class= "sub" href="modificarJuego.php?id=<?php echo $row["id_juego"];?>"><button>modificar</button></a>
            </div>
        </div>

        <?php
    }
        ?>
</section>

<!-- segundo contenedor-->

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