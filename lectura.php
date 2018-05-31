<?php
	    class conect{
    	function lectura(){
    		$host = "localhost";
    		$user = "root";
    		$pw = "";
    		$db = "blog";

    		$con = mysqli_connect($host,$user,$pw) or die ("No se pudo conectar a la base de datos");
    		mysqli_select_db($con, $db) or die ("No se encontro la base de datos");

    		$query = "SELECT * FROM registrousuarios";
    		$resu = mysqli_query($con, $query);

    		while ($fila = mysqli_fetch_array($resu)) {
    			echo "$fila[idUsuario] <br>";
    			echo "$fila[Usuario]<br>";
    			echo "$fila[Usuarionombre]<br>";
    			# code...
    		}
    	}
    }
?>