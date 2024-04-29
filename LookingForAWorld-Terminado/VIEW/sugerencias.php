<?php
session_start();
$id = $_SESSION['id_usuario'];
if ($id == null || $id == '0') {
    echo 'error al iniciar sesión';
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
       <h1 id="reviews" class="news">sugerencias</h1>
        <div class="frame-adm-i-fondo">
            <div class="frame-adm-i">
                <form action="../CONTROLLER/insertarsugerencia.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $_SESSION['id_usuario'];?>" required></p>
                    <p class="blanco">sugerencias <input type="text" placeholder="Descripcion" name="sugerencia"required></p>
                    <input class="bottomh-i" type="submit" value="enviar">
                </form>
            </div>
        </div>
    </div>
</section>
<!-- segundo contenedor-->

<footer>
      <div>
        LokingForAWork<br />
        世界を探して <br />
        Sekai o Sagashite
      </div>
</footer>
</body>
</html>