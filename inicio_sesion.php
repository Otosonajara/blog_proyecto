<?php
  session_start();
  require("conexion.php");
  if(isset($_POST['button'])){
    if($_POST['txtUserid']!=" " && $_POST['txtPassword']!=" "){
          $mail1=$_POST['txtUserid'];
          $pass1=$_POST['txtPassword'];
          $consultaX="SELECT * FROM registrousuarios WHERE Usuario = '$mail1' AND  password_us = '$pass1'"  ;
          $resultado=mysqli_query($con,$consultaX);
          $countX=mysqli_num_rows($resultado);
          if($countX==1){
              header("location:paginaPrincipal.php");
          }
    }
    else
    {
    echo "<li>porfavor llene los campos </li>";
   }
   header("location:paginaPrincipal.php");
  }
?>