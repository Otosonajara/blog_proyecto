<?php
    session_start();
    require("conexion.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            if(isset($_POST['registrar']) && $_POST['text-1']!="" && ['text-2']!="" && ['text-3']!="" && ['tipous']!="" && ['text-5']!=""){
                echo"Has presionado el boton registrarse";
                $user = $_POST['text-1'];
                $nombre = $_POST ['text-2'];
                $contra = $_POST ['text-3'];
                $contra = hash('sha512', $contra);
                $tipous = $_POST ['tipous'];
                $correo = $_POST['text-5'];

                $sql2= "SELECT * FROM registrousuarios WHERE Usuario = '$user' ";
                $sql3= "SELECT * FROM registrousuarios WHERE Correo_Usuario = '$correo' ";

                $result2= mysqli_query($con,$sql2);
                $result3= mysqli_query($con,$sql3);
               
                 
                $contar1= mysqli_num_rows($result2);
                $contar2= mysqli_num_rows($result3);
                

                if($contar1==1){
                    echo "el nombre de usuario ya esta registrado";
                }
                else {
                    if($contar2==1){
                        echo "La direccion de correo ya esta registrado";
                    }
                    else{
                    $sql="INSERT INTO registrousuarios( idUsuario, Usuario, Usuarionombre,password_us,Tipodeusuario,Correo_Usuario)
                     VALUES('', '$user', '$nombre', '$contra','$tipous', ' $correo')";
                     $result=mysqli_query($con,$sql);
                     $_SESSION['inicio_sesion']='dog';
                     header("location:iniciarSesion.php");
                    }
                }
                
            }
           else{
               
               //header("location:iniciarSesion.php");
               //header("location:iniciarSesion.php");
               echo '<li>porfavor llene los campos </li>';
            }
        ?>
        <br>
          <a href="iniciarSesion.php">INICIO</a>
    </body>
</html>