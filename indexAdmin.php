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
                    <a href="indexAdmin.php" > Inicio |</a>  
                    <a href="minijuegos.php" > Mini Juegos  |</a>
                    <a href="descargas.php" > Descargas |</a>  
            </nav> 
            <br>
             <section>
                    <script> 
                            window.alert("Bienvenido Administrador") 
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
              <div class="fb-page" data-href="https://www.facebook.com/My-Indie-Spot-MIS-744162512457723/?notif_id=1515015796235974&amp;notif_t=page_invite" data-tabs="timeline" data-width="485" data-height="510" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/My-Indie-Spot-MIS-744162512457723/?notif_id=1515015796235974&amp;notif_t=page_invite" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/My-Indie-Spot-MIS-744162512457723/?notif_id=1515015796235974&amp;notif_t=page_invite">My Indie Spot - MIS</a></blockquote></div>
             </article>
             <article>
             <div class="fb-comments" data-href="https://www.facebook.com/My-Indie-Spot-MIS-744162512457723/?hc_ref=ARS0olYjMmyK5dgcPK5-I9VGJiyyLww9v3NxR2p7G0Ebx9rNEtczn_34IBgWI42oTfw&amp;fref=nf" data-width="420" data-numposts="8"></div>
             </article>
           </section>
          </div>
          <iframe class="piefooter", src="footer.html"></iframe>
    </body>       
</html>