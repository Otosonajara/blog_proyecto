<html>
<head>
<title>Administracion</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css\cssblog.css">
</head>
<body>
<div class="contenedor">
            <iframe class="encabezado"  src="encabezado.html"></iframe>
             <br>
             <script class="colorfecha" > document.write(new Date()) </script>
             <br>
             <nav>    
                    <a href="paginaPrincipal.php" > Inicio |</a>  
                    <a href="minijuegos.php" > Mini Juegos  |</a>
                    <a href="descargas.php" > Descargas |</a>  
                    <a href="iniciarSesion.php" > Iniciar Sesion |</a> 
             </nav> 
             <br>
             <section>
                <h1>Administracion de Usuarios</h1>
              <br>
              <article>
			      <?php
			          include("lectura.php");
			          $con = new conect();
			           $con->lectura();
		           ?>
              </article>
           </section>
          </div>
          <iframe class="piefooter", src="footer.html"></iframe>
</body>
</html>