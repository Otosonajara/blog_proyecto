<?php
session_start();

?>
<html>
    <head>
         <title> Mini juegos </title>
         <meta charset="UTF-8"> <!-- para errores de acento -->
         <link rel="stylesheet" href="css\cssblog.css">
         <link rel="Stylesheet" href="css\modal.css">
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
            <section class="juego">
                <iframe class="iframJuegos", src='http://www.minijuegostop.com.mx/showFlash.php?id=14390'></iframe>
                <br>
                <iframe class="iframJuegos" src='http://www.minijuegostop.com.mx/showFlash.php?id=17065'></iframe>
                <br>
                <iframe class="iframJuegos" src='http://www.minijuegostop.com.mx/showFlash.php?id=17803'></iframe>

            </section>
           </div>
           <iframe class="piefooter", src="footer.html"></iframe>
    </body>
</html>