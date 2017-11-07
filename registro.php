<?php
 include ('conexion.php');

	$nombre=htmlspecialchars(trim(strip_tags($_POST['nombre'])));
	$pass =md5(htmlspecialchars(trim(strip_tags($_POST['pass'])))); 

	 $conexion = mysql_connect($server, $usuario, $password);
	 mysql_select_db($nombre_db,$conexion) OR DIE ("Error: No es posible establecer la conexión");
	 
	 $sql="INSERT INTO usuario (nombre, pass) VALUES('$nombre','$pass')";
 	 $resul=mysql_query($sql,$conexion)  OR DIE ("Error ");
	
	 header("location: /login.html?remarks=success");

mysql_close($conexion);
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//ES"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="google-translate-customization" content="38b4c046a62d54d0-e37d9424787f2e75-g5e8136f103156dcb-13">
		 <link rel="stylesheet" type="text/css" href="estilo.css" media="screen,Projection,TV"/>
		 <link rel="shortcut icon" href="yo.jpg" type="image/x-icon" />

		<title>Registrate</title>
</head>
	
<body>	
	<h2>Registrate</h2>
	<p style="text-align: center"> Accede a tu cuenta: <br />
	<a href="login.html" title="Login" style="text-decoration:none; color: #FFFFFF">
		<span><Strong>Entrar</Strong></span></a>
	</p>
</body>
</html>