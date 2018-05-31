<?php
session_start();
require("conexion.php");
?>
<html>
<head>
	<title>Downloads</title>
	<link rel="stylesheet" type="text/css" href="css\cssblog.css">
	<link rel="stylesheet" href="css\descargas.css">
	<meta charset="UTF-8">
</head>
<body>
	<div class="contenedor">
		<iframe class="encabezado"  src="encabezado.html"></iframe>
            <nav>
                    <a href="paginaPrincipal.php" > Inicio |</a>  
                    <a href="minijuegos.php" > Mini Juegos  |</a>
                    <a href="descargas.php" > Descargas |</a>  
                    <a href="iniciarSesion.php" > Iniciar Sesion |</a> 
			</nav> 
			<br>
		<section id="sec_1">
		<label>Por favor seleccione la descarga que desea</label>
		<br>
		<label>Fondos de pantalla</label>
		<br>
		<a id="a_1" href="descargas\foto_1.jpg" download="Fondo de pantalla">Descargar Archivo</a>
		<br>
		<a id="a_2" href="descargas\foto_2.png" download="Fondo de pantalla">Descargar Archivo</a><br>
		<a id="a_3" href="descargas\foto_3.jpg" download="Fondo de pantalla">Descargar Archivo</a>
		</section>
	</div>
	<iframe class="piefooter", src="footer.html"></iframe>
</body>
</html>