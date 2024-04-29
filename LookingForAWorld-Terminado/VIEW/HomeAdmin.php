<?php
 session_start();
 $varsesionAdm = $_SESSION['id_usuarioAdm'];
 $_SESSION['nombre'];
 
 if($varsesionAdm == 0){
  echo 'error de acceso';
  die();
 }
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
<section id="inicio">
  <section>
    <div class="label-br">
		<h1 class="label">"LOKING FOR A WORK"</h1>
		<h3 class="h3-i"><?php echo $_SESSION['nombre'];?></h3>
	</div>
  </section>
</section>
<!--Segunda parte-->
<section>
	<div class="table-br">
       <h1 id="reviews" class="news">OPCIONES</h1>

        <div class="frame-adm">
            <img  class="box-img" src="../IMG/Viñetas.png" alt="Gears">
	        <div class="content">
                <h2>Agregar Juegos</h2>
                <a class = "sub" href="agregarJuego.php"><button>mas</button></a>
            </div>
        </div>

        <div class="frame-adm">
            <img  class="box-img" src="../IMG/Viñetas.png" alt="Gears">
	        <div class="content">
                <h2>Modificar juegos</h2>
                <a class = "sub" href="modificareliminar.php"><button>mas</button></a>
            </div>
        </div>

        <div class="frame-adm">
            <img  class="box-img" src="../IMG/Viñetas.png" alt="Gears">
	        <div class="content">
                <h2>Ir a interfaz usuario</h2>
                <a class = "sub" href="Home.php"><button>mas</button></a>
            </div>
        </div>
    </div>
<section>
  <a class="sub" href="#inicio"><button class="bottomh">Regresar al inicio</button></a>
  <a class= "sub" href="../CONTROLLER/cerrarSession.php"><button class="bottomh">Cerrar sesión</button></a>
  <?php if( $varsesionAdm > 0 ) { ?><a class = "sub" href="HomeAdmin.php"><button class="bottomh">Regresar inicio administrados</button></a><?php } ?></div>
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