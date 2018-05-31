<?php
    session_start();
    require("conexion.php");

    if($_POST){
    //validacion del formulario
        $usuario = $_POST["text-1"];
        $nombre = $_POST["text-2"];
        $contrasenia = $_POST["text-3"];
        $tipo = $_POST["tipous"];
        $mail = $_POST["text-5"];

        $claseUsuario =" ";
        $claseNombre = " ";
        $claseContra = " ";
        $claseTipo = " ";
        $claseMail = " ";

        if($usuario == " ") {
            $msgUsuario = " Falta ingresar el usuario";
            $claseUsuario = "error";

        }
        if($nombre == " ") {
            $msgNombre = " Falta ingresar el nombre";
            $claseNombre = "error";
        }
        if($contrasenia == " ") {
            $msgContra = " Falta ingresar la contraseña";
            $claseContra = "error";
        }
        if($tipo == " ") {
            $msgTipo = " Falta ingresar el tipo de usuario";
            $claseTipo = "error";
        }
        if($mail == " ") {
            $msgMail = " Falta ingresar el correo";
            $claseMail= "error";
        }
    }
?>
<html>
    <head>
      <link rel="stylesheet" href="css\css_Sesion.css">
      <link rel="stylesheet" href="css\cssblog.css">
      <link rel="stylesheet" href="css\modal.css">
      <meta charset="UTF-8">
      <title> Iniciar Sesion </title>
    </head>
   
   <body>
      <div class="contenedor">
          <iframe class="encabezado" src="encabezado.html"></iframe>
           <nav>
                    <a href="paginaPrincipal.php" > Inicio |</a>  
                    <a href="minijuegos.php" > Mini Juegos  |</a>
                    <a href="descargas.php" > Descargas |</a>  
                    <a href="iniciarSesion.php" > Iniciar Sesion |</a> 
          </nav>
           <br>
           
          <form class="secRegistro" method="POST" action="inicio_sesion.php">
               <label class="L-1">Binvenido Gamer</label>
                <br>
                <img src="css/img/usuario.jpg" id="img-1"> 
                <br>
                <label>Usuario: </label><input  id="txt-2" type="text" required="required" name="txtUserid">
                <br>
                <label >Contraseña: </label><input id="txt-3" type="password" required="required" name="txtPassword">
                <br>
                <input type="submit" name="button" value="Iniciar sesi&oacute;n"  class="btn-1">
                <br>
                <label>Si no tienes una cuenta <a href="#openModal">Registrate aqui</a> </label>
          </form>
          
              <form id="openModal" class="modalDialog" action="registro.php" method="POST">
                  <div>
                     <a href="#close" title="close" class="close">X</a>
                      <br>
                      <img src="css\img\usuario.jpg" id="img-1">
                      <br>
                        <div class="divForm" class= "<? echo $claseUsuario; ?>" >
                            <label>Usuario: </label> <input type="text" placeholder="&#128100; Usuario" required="required"  name="text-1" id="txt-1">
                        </div>
                        <br>
                        <div class="divForm" class= "<? echo $claseNombre;?>">
                            <label>Nombre: </label> <input type="text" placeholder="&#128100; Nombre" required="required" name="text-2" id="txt-2">
                        </div>
                        <div class="divForm" class= "<? echo $claseContra; ?>" >
                            <label>Contraseña: </label> <input type="Password" required="required" placeholder="&#128272; Contrase&ntilde;a" name="text-3" id="txt-3">
                        </div>
                      <br>
                      <div class="divForm" class= "<? echo $claseTipo; ?>">
                        <select name="tipous">
                        <option value="">Selecciona privilegios</option>
                        <option value="Administrador">Administrador</option>
                        <option value="Usuario">Usuario</option>
                      </select>
                      </div>
                      <br>
                      <div class = "divForm" class= "<? echo $claseMail; ?>">
                          <label>E-mail: </label> <input type="email" placeholder="&#128100; E-mail" required="required" name="text-5" id="txt-5">
                      </div>
                      <br>
                          <input type="checkbox" name="chb_1"> <label>Acepto todos los teminos de servicio</labe>
                          <input class="btn-1" type="submit" name="registrar" value="Registrar">
                  </div>
                </form>
            </div>
            <iframe class="piefooter", src="footer.html"></iframe>
   </body>
</html>
