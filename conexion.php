<?php
    $BBDD_host="localhost";
    $BBDD_user="root";
    $BBDD_pass="";
    $BBDD_BBDD="blog";
    $con=mysqli_connect($BBDD_host,$BBDD_user,$BBDD_pass);
    if(mysqli_connect_errno()){
        echo "No se ha podido conectar al host";
    }
    mysqli_set_charset($con,"UTF8");

    mysqli_select_db($con,$BBDD_BBDD) or die ("Error al conectar el BBDD");
?>
