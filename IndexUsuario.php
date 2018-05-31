<?php
    session_start();
    require("conexion.php");
?>
<html>
    <head>
        <title>Pagina Principal</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css\cssblog.css">

        <div id="fb-root"></div>
        <script>
         (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
             if (d.getElementById(id)) return;
             js = d.createElement(s); js.id = id;
             js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11';
             fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
       </script>
      
       <script type="text/javascript">
         (function(d) {
             var cwjs, id='chatwing-js';  if(d.getElementById(id)) {return;}
             cwjs = d.createElement('script'); cwjs.type = 'text/javascript'; cwjs.async = true; cwjs.id = id
              cwjs.src = "//chatwing.com/code/215c3860-f0dd-11e7-8891-c7c8ee325ccc/popout";
                d.getElementsByTagName('head')[0].appendChild(cwjs);
             })(document);
        </script>

    </head>
    <body>
       <div class="contenedor">
           <iframe class="encabezado"  src="encabezado.html"></iframe>
           <br>
           <script class="colorfecha" > document.write(new Date()) </script>
           <br>
            <nav>    
                    <a href="indexCliente.php" > Inicio |</a>  
                    <a href="minijuegos.php" > Mini Juegos  |</a>
                    <a href="descargas.php" > Descargas |</a>
            </nav> 
            <br>
             <section>
                    <script> 
                            window.alert("Bienvenido Usuario") 
                            </script>
                <h1>Noticias</h1>
              <br>
              <article>
                 <h2>
                      <b>WHITE NOISE 2 SALDRÁ EN PLAYSTATION 4 EL PRÓXIMO VIERNES 14</b>
                </h2>
                <img src="css/img/noticia1.jpg">
                 <p>Aprovechando el tirón de terror que producen los viernes 13 <br>
                  (nunca he estado demasiado seguro de esto.... ¿a quién no le gustan los viernes?)<br>
                  los chicos de Mildstone Studios aprovecharán para lanzar su multijugador 
                  asimétrico White Noise 2 en la consola de Sony.  
                 </p>
                 <a href="http://www.soloindies.com/noticias/white-noise-2-saldra-en-playstation-4-el-proximo-viernes-13">Más información</a>
              </article>
              <article>
                 <h2>
                    <b>STICK FIGHT, EL CONTRAATAQUE DE LOS MUÑECOS PALO</b>
                 </h2>
                  <img src="css/img/noticia2.jpg">
                  <p> El primer juego que programé (diría que también fue el último)
                     era un Son Goku hecho con carácteres 
                    ASCII que se movía por la pantalla 
                    (con su animación de dos frames de caminar) y lanzaba kames en... </p>
                    <a href="http://www.soloindies.com/noticias/stick-fight-el-contraataque-de-los-munecos-palo">Más información</a> <br>
              </article>
              <article>
                  <h2>
                    <b>PROJECTION: FIRST LIGHT, LA LUZ DE LAS MARIONETAS CHINAS</b>
                  </h2>
                  <img src="css/img/noticia3.jpg">
                  <p>Volvemos a los "puzleformas", ese semigénero mezcla del géneros de las plataformas y los puzles. 
                      Ni mucho de uno ni mucho de otro, todo en la justa medida. La propuesta que nos ocupa nos ha llamado...</p>
                  <a href="http://www.soloindies.com/noticias/projection-first-light-la-luz-de-las-marionetas-chinas">Más información</a>
             </article>
             <article>
                    <h2>
                      <b>HOY SALIÓ EL ÚLTIMO JUEGO DE LOCOMALITO: SUPER HYDORAH</b>
                    </h2>
                   <img src="css/img/noticia4.jpg">
                    <p> Super Hydorah es la versión remasterizada de Hydorah, un shoot'em up gratuito
                       (como la mayoría de juegos de Locomalito, su creador)al que podrás 
                       jugar descargándolo aquí. Super Hydorah tiene más... </p>
                       <a href="http://www.soloindies.com/noticias/hoy-salio-el-ultimo-juego-de-locomalito-super-hydorah">Más información</a>

             </article>
           </section>
          </div>
          <iframe class="piefooter", src="footer.html"></iframe>
    </body>       
</html>