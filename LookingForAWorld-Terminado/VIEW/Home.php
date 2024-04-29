<!--Se asigna un valor al la varible ADM si no exite un valor-->
<?php
session_start();
error_reporting(0);
$ADM = $_SESSION['id_usuarioAdm'];
if($ADM == null || $ADM = '') {
  $_SESSION['id_usuarioAdm'] = "0";
}


$ID = $_SESSION['id_usuario'];
if($ID == null || $ID = '') {
  $_SESSION['id_usuario'] = "0";
}

$varsesion = $_SESSION['nombre'];
if($varsesion == null || $varsesion = '') {
   $_SESSION['nombre'] = "anonimo";
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
    <link rel="stylesheet" type="text/css" href="../CSS/styles_buscar.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/styles.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/styles_game.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/styles_admin.css" />
	<title>LOOKING FOR A WORK</title>
</head>
<body>
<header class="nav">
<h1 class="icon"><a class="sub" href="Home.php">世界を探し</a><a class="sub" href="perfil.php">"<?php echo $_SESSION['nombre'];?>"</a></h1>
	<nav>
	  <ul>
		  <li><a accesskey="r" href="#juegos">JUEGOS</a></li>
      <li><a accesskey="c" href="#categorias">CATEGORIAS</a></li>
    </ul>
	</nav>
</header>
<section id="inicio">
	<?php
   $val=rand(1,11);
if($val==1)
{
?>
  <section>
    <div class="label-br">
		<h1 class="label">"Lo siento Mario, pero la princesa está en otro castillo."</h1>
		<h3>Super Mario Bros.</h3>
    <form action="busquedaLIKE.php" method="post">
    <div class="buscar">
      <input name="descripcion" id="descripcion" type="text" class="buscar_juego" placeholder="ingresa el nombre del juego">
      <a class="presionar">
        <i class="icon-buscar"></i>
      </a>
    </div> 
    </form>
	</div>
  </section>
  <?php
}
else if($val==2)
{
?>
  <section>
	<div class="label-br">
		<h1 class="label">"No dependas de nadie en este mundo... Porque hasta tu propia sombra te abandona en la oscuridad."</h1>
		<h3>Devil May Cry 3. Vergil</h3>
    <form action="busquedaLIKE.php" method="post">
    <div class="buscar">
      <input name="descripcion" id="descripcion" type="text" class="buscar_juego" placeholder="ingresa el nombre del juego">
      <a class="presionar">
        <i class="icon-buscar"></i>
      </a>
    </div> 
    </form>
	</div>
  </section>
      <?php
    }
else if($val==3)
{
  ?>
  <section>
    <div class="label-br">
		<h1 class="label">"Hay cosas que olvidamos... Y hay cosas que no podemos olvidar, es gracioso, no sé cual es mas triste"</h1>
		<h3>Silent Hill 3.</h3>
    <form action="busquedaLIKE.php" method="post">
    <div class="buscar">
      <input name="descripcion" id="descripcion" type="text" class="buscar_juego" placeholder="ingresa el nombre del juego">
      <a class="presionar">
        <i class="icon-buscar"></i>
      </a>
    </div> 
    </form>
	</div>
  </section>
  <?php
}
else if($val==4)
{
?>
  <section>
	<div class="label-br">
		<h1 class="label">"La esperanza es lo que nos hace más fuertes. Es la razón por la que estamos aquí. Es con lo que luchamos cuando todo lo demás se ha perdido"</h1>
		<h3>God of War</h3>
    <form action="busquedaLIKE.php" method="post">
    <div class="buscar">
      <input name="descripcion" id="descripcion" type="text" class="buscar_juego" placeholder="ingresa el nombre del juego">
      <a class="presionar">
        <i class="icon-buscar"></i>
      </a>
    </div> 
    </form>
	</div>
    </section>
      <?php
    }
else if($val==5)
{
  ?>
  <section>
    <div class="label-br">
		<h1 class="label">"Me siento como si pudiera… como si pudiera… ¡conquistar el mundo!"</h1>
		<h3>Day of Tentacle.</h3>
    <form action="busquedaLIKE.php" method="post">
    <div class="buscar">
      <input name="descripcion" id="descripcion" type="text" class="buscar_juego" placeholder="ingresa el nombre del juego">
      <a class="presionar">
        <i class="icon-buscar"></i>
      </a>
    </div> 
    </form>
	</div>
  </section>
  <?php
}
if($val==6)
{
?>
  <section>
    <div class="label-br">
		<h1 class="label">"Es increíble lo que una persona puede llegar a olvidar... pero es más sorprendente lo que puede llegar a esconder"</h1>
		<h3>Final Fantasy VII</h3>
    <form action="busquedaLIKE.php" method="post">
    <div class="buscar">
      <input name="descripcion" id="descripcion" type="text" class="buscar_juego" placeholder="ingresa el nombre del juego">
      <a class="presionar">
        <i class="icon-buscar"></i>
      </a>
    </div> 
    </form>
	</div>
  </section>
  <?php
}
else if($val==7)
{
?>
  <section>
	<div class="label-br">
		<h1 class="label">"La mente humana no está preparada para despertar sabiendo que ese será su último día de vida, pero para mí eso es un lujo, no una maldición. Saber que llega el fin es una liberación"</h1>
		<h3>Call of Duty: Modern Warfare 2</h3>
    <form action="busquedaLIKE.php" method="post">
    <div class="buscar">
      <input name="descripcion" id="descripcion" type="text" class="buscar_juego" placeholder="ingresa el nombre del juego">
      <a class="presionar">
        <i class="icon-buscar"></i>
      </a>
    </div> 
    </form>
	</div>
    </section>
      <?php
    }
else if($val==8)
{
  ?>
  <section>
    <div class="label-br">
		<h1 class="label">"Nada es verdad. Todo está permitido"</h1>
		<h3>Assassin's Creed</h3>
    <form action="busquedaLIKE.php" method="post">
    <div class="buscar">
      <input name="descripcion" id="descripcion" type="text" class="buscar_juego" placeholder="ingresa el nombre del juego">
      <a class="presionar">
        <i class="icon-buscar"></i>
      </a>
    </div> 
    </form>
	</div>
  </section>
  <?php
}
else if($val==9)
{
?>
  <section>
	<div class="label-br">
		<h1 class="label">"Al final, ¿Qué distingue al hombre libre del esclavo? ¿Dinero? ¿Poder? No. El hombre elige. El esclavo obedece"</h1>
		<h3>Bioshock</h3>
    <form action="busquedaLIKE.php" method="post">
    <div class="buscar">
      <input name="descripcion" id="descripcion" type="text" class="buscar_juego" placeholder="ingresa el nombre del juego">
      <a class="presionar">
        <i class="icon-buscar"></i>
      </a>
    </div> 
    </form>
	</div>
    </section>
<?php
}
else if($val==10)
{
?>
  <section>
    <div class="label-br">
		<h1 class="label">"El hombre adecuado en el sitio equivocado puede cambiar el rumbo del mundo"</h1>
		<h3>Half-Life 2.</h3>
    <form action="busquedaLIKE.php" method="post">
    <div class="buscar">
      <input name="descripcion" id="descripcion" type="text" class="buscar_juego" placeholder="ingresa el nombre del juego">
      <a class="presionar">
        <i class="icon-buscar"></i>
      </a>
    </div> 
    </form>
	</div>
  </section>
<?php
}
else if($val==11)
{
?>
  <section>
    <div class="label-br">
		<h1 class="label">“La gente dice «lo siento» sin parar. ¿Sabes cuántas veces he oído esa frase? Demasiadas. 
			Y rara vez quien la pronuncia lo siente de verdad. Normalmente lo que quiere decir es «siento que me hayan pillado"</h1>
		<h3>jaque al psicoanalista.</h3>
    <form action="busquedaLIKE.php" method="post">
    <div class="buscar">
      <input name="descripcion" id="descripcion" type="text" class="buscar_juego" placeholder="ingresa el nombre del juego">
      <a class="presionar">
        <i class="icon-buscar"></i>
      </a>
    </div> 
    </form>
	</div>
  </section>
  <?php
}
?>
</section>
<!--
<body>
<section id="inicio" class= slider-container>
  <section>
    <div class="label-br">
		<h1 class="label">"Lo siento Mario, pero la princesa está en otro castillo."</h1>
		<h3>Super Mario Bros.</h3>
    <div class="buscar">
      <input tipe="text" class="buscar_juego" placeholder="ingresa el nombre del juego">
      <a href="" class="presionar">
        <i class="icon-buscar"></i>
      </a>
    </div> 
	</div>
  </section>

  <section>
	<div class="label-br">
		<h1 class="label">"No dependas de nadie en este mundo... Porque hasta tu propia sombra te abandona en la oscuridad."</h1>
		<h3>Devil May Cry 3. Vergil</h3>
    <div class="buscar">
      <input tipe="text" class="buscar_juego" placeholder="ingresa el nombre del juego">
      <a href="" class="presionar">
        <i class="icon-buscar"></i>
      </a>
    </div> 
	</div>
  </section>

  <section>
    <div class="label-br">
		<h1 class="label">"Hay cosas que olvidamos... Y hay cosas que no podemos olvidar, es gracioso, no sé cual es mas triste"</h1>
		<h3>Silent Hill 3.</h3>
    <div class="buscar">
      <input tipe="text" class="buscar_juego" placeholder="ingresa el nombre del juego">
      <a href="" class="presionar">
        <i class="icon-buscar"></i>
      </a>
    </div> 
	</div>
  </section>

  <section>
	<div class="label-br">
		<h1 class="label">"La esperanza es lo que nos hace más fuertes. Es la razón por la que estamos aquí. Es con lo que luchamos cuando todo lo demás se ha perdido"</h1>
		<h3>God of War</h3>
    <div class="buscar">
      <input tipe="text" class="buscar_juego" placeholder="ingresa el nombre del juego">
      <a href="" class="presionar">
        <i class="icon-buscar"></i>
      </a>
    </div> 
	</div>
    </section>

  <section>
    <div class="label-br">
		<h1 class="label">"Me siento como si pudiera… como si pudiera… ¡conquistar el mundo!"</h1>
		<h3>Day of Tentacle.</h3>
    <div class="buscar">
      <input tipe="text" class="buscar_juego" placeholder="ingresa el nombre del juego">
      <a href="" class="presionar">
        <i class="icon-buscar"></i>
      </a>
    </div> 
	</div>
  </section>

  <section>
    <div class="label-br">
		<h1 class="label">"Es increíble lo que una persona puede llegar a olvidar... pero es más sorprendente lo que puede llegar a esconder"</h1>
		<h3>Final Fantasy VII</h3>
    <div class="buscar">
      <input tipe="text" class="buscar_juego" placeholder="ingresa el nombre del juego">
      <a href="" class="presionar">
        <i class="icon-buscar"></i>
      </a>
    </div> 
	</div>
  </section>

  <section>
	<div class="label-br">
		<h1 class="label">"La mente humana no está preparada para despertar sabiendo que ese será su último día de vida, pero para mí eso es un lujo, no una maldición. Saber que llega el fin es una liberación"</h1>
		<h3>Call of Duty: Modern Warfare 2</h3>
    <div class="buscar">
      <input tipe="text" class="buscar_juego" placeholder="ingresa el nombre del juego">
      <a href="" class="presionar">
        <i class="icon-buscar"></i>
      </a>
    </div> 
	</div>
    </section>

  <section>
  <div class="label-br">
		<h1 class="label">"Nada es verdad. Todo está permitido"</h1>
		<h3>Assassin's Creed</h3>
    <div class="buscar">
      <input tipe="text" class="buscar_juego" placeholder="ingresa el nombre del juego">
      <a href="" class="presionar">
        <i class="icon-buscar"></i>
      </a>
    </div> 
	</div>
  </section>

  <section>
	<div class="label-br">
		<h1 class="label">"Al final, ¿Qué distingue al hombre libre del esclavo? ¿Dinero? ¿Poder? No. El hombre elige. El esclavo obedece"</h1>
		<h3>Bioshock</h3>
    <div class="buscar">
      <input tipe="text" class="buscar_juego" placeholder="ingresa el nombre del juego">
      <a href="" class="presionar">
        <i class="icon-buscar"></i>
      </a>
    </div> 
	</div>
    </section>

  <section>
    <div class="label-br">
		<h1 class="label">"El hombre adecuado en el sitio equivocado puede cambiar el rumbo del mundo"</h1>
		<h3>Half-Life 2.</h3>
    <div class="buscar">
      <input tipe="text" class="buscar_juego" placeholder="ingresa el nombre del juego">
      <a href="" class="presionar">
        <i class="icon-buscar"></i>
      </a>
    </div> 
	</div>
  </section>

  <section>
    <div class="label-br">
		<h1 class="label">“La gente dice «lo siento» sin parar. ¿Sabes cuántas veces he oído esa frase? Demasiadas. 
			Y rara vez quien la pronuncia lo siente de verdad. Normalmente lo que quiere decir es «siento que me hayan pillado"</h1>
		<h3>jaque al psicoanalista.</h3>
    <div class="buscar">
      <input tipe="text" class="buscar_juego" placeholder="ingresa el nombre del juego">
      <a href="" class="presionar">
        <i class="icon-buscar"></i>
      </a>
    </div> 
	</div>
  </section>
</section>
<script>
var slides = document.getElementsByClassName("label-br");
showSlides();

function showSlides() {
  var randomIndex = Math.floor(Math.random() * slides.length);
  for (var i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slides[randomIndex].style.display = "block";  
  setTimeout(showSlides, 10000);
}
</script>
-->
<!--Segunda parte-->
<section>
	<div class="table-br">
       <h1 id="juegos" class="news">JUEGOS</h1>
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
                <p><?php echo $row['descripcionCorta'];?></p>
                <a class= "sub" href="juego.php?id=<?php echo $row["id_juego"];?>"><button>mas</button></a>
            </div>
        </div>

        <?php
    }
        ?>
</section>
<!--
	    <div class="frame">
           <img  class="box-img" src="../IMG/2.webp" alt="Gears">
	       <div class="content">
                <h2>Outlas</h2>
                <p>Descripción: Outlast es un videojuego de terror en primera persona desarrollado por Red Barrels, una compañía fundada por antiguos miembros del equipo de desarrolladores de otros juegos como Prince of Persia, Assassin's Creed </p>
                <button>mas</button>
            </div>
        </div>

		<div class="frame">
           <img  class="box-img" src="../IMG/3.jpeg" alt="Gears">
	       <div class="content">
                <h2>Halo</h2>
                <p>Halo es una franquicia de videojuegos de ciencia ficción creada y desarrollada por Bungie Studios hasta Halo Reach, y gestionada ahora por 343 Industries, propiedad de Xbox Game Studios. </p>
                <button>mas</button>
            </div>
        </div>

		<div class="frame">
           <img  class="box-img" src="../IMG/4.jpg" alt="Gears">
	       <div class="content">
                <h2>Call of duty</h2>
                <p>Call of Duty es una serie de videojuegos de disparos en primera persona, de estilo bélico, desarrollada principal e inicialmente por Infinity Ward, Treyarch, Sledgehammer Games y en menor proporción Raven Software y distribuida por Activision</p>
                <button>mas</button>
            </div>
        </div>

		<div class="frame">
           <img  class="box-img" src="../IMG/5.jpg" alt="Gears">
	       <div class="content">
                <h2>Deus Ex: Mankind Divided</h2>
                <p>Deus Ex: Mankind Divided es un videojuego de rol, sigilo y acción en primera persona desarrollado por Eidos Montreal y distribuido por Square Enix. Es el quinto videojuego de la serie Deus Ex y la secuela de Deus Ex: Human Revolution.</p>
                <button>mas</button>
            </div>
        </div>
    </div>

</section>
-->
<!-- segundo contenedor-->

<section>
  <div class="table-br">

    <h1 id="categorias" class="news">CATEGORIAS</h1>

    <section class="types">
      <a href="categoria.php">
        <div class="framexbox">
          <div class="contentxbox">
          </div>
            <button name="xbox" class="textxbox">Xbox</button>
        </div>
      </a>

      <a href="categoriaplay.php">
        <div class="frameplay">
          <div class="contentplay">
          </div>
            <button class="textplay">Play</button>
        </div>
      </a>

      <a href="categoriaNIntendo.php">
        <div class="framenintendo">
          <div class="contentnintendo">
          </div>
            <button class="textnintendo">Nintendo</button>
        </div>
      </a>

      <a href="categoriaPC.php">
        <div class="framepc">
          <div class="contentpc">
          </div>
            <button class="textpc">PC</button>
        </div>
      </a>
    </section>
  </div>
</section>

<footer>
<section>
  <div class="fondo-footer">
		<h1 class="label-footer">"Looking for a world"</h1>
    <a class="sub" href="sugerencias.php"><h3>Enviar comentarios</h3></a>
      <div class="flex-horixontal-botones">
        <div><a class= "sub" href="Home.php"><button class="bottomh">Regresar al inicio</button></a></div>
        <div><?php if($varsesion != "anonimo") { ?><a class= "sub" href="../CONTROLLER/cerrarSession.php"><button class="bottomh">Cerrar session</button></a><?php } ?></div>
        <div><?php if($varsesion == "anonimo" || $varsesion == NULL ) { ?><a class = "sub" href="../CONTROLLER/cerrarSession.php"><button class="bottomh">Iniciar session</button></a><?php } ?></div>
        <div><?php if($varsesionADM > 0 ) { ?><a class = "sub" href="HomeAdmin.php"><button class="bottomh">Regresar inicio administrados</button></a><?php } ?></div>
      </div>
      <div class="borde">
      </div>
      <div class="flex-horixontal" style="margin-top: auto;">
        <div class="footer-name">LookingForAWorlk</div>
        <div class="footer-name">世界を探して</div>
        <div class="footer-name">Sekai o Sagashite</div>
      </div>
	</div>
</section>
</footer>
</body>
</html>