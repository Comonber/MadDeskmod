<?php

include('conexion.php');

  $pass =md5(htmlspecialchars(trim(strip_tags($_POST['pass'])))); 
  $nombre = htmlspecialchars(trim(strip_tags($_POST['nombre'])));
 
 
	
	//conexion
	 $conexion = mysql_connect($server, $usuario, $password);
	 mysql_select_db($nombre_db,$conexion) OR DIE ("Error: No es posible establecer la conexión");
	 
	 //consulta
	 	
	 
    	$query=mysql_query("SELECT id_U FROM usuario WHERE nombre = '$nombre' AND pass = '$pass'",$conexion); 
		$count= mysql_num_rows($query);
		$user= mysql_fetch_array($query);
    	if($count==1){
    		
    		session_start();
             $_SESSION['Logueado'] = 1; 
			 $_SESSION['id_U'] = $user;
			header("location: /index.html?remarks=si");
			//echo "Bienvenido, '".$nombre."'";
       	}
        else{
   
        	//echo 'Nombre de usuario o Contrase&ntilde;a incorrecta.';
			header("location: /login.html?remarks=no");
			}
    					
	mysql_close($conexion);
?>