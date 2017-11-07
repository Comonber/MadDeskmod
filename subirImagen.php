<?
session_start();
include ('conexion.php');

	$nombreImagen= $_POST['nombreImagen'];
	$categoria= $_POST['categoria'];
	$subcategoria= $_POST['subcategoria'];
	
	$idu = $_SESSION['id_U'];

			$temp=$_FILES["file"]["tmp_name"];
    		$size = filesize($temp); 
   			$foto = addslashes(fread(fopen($temp, "r"), $size));
	

	 $conexion = mysql_connect($server, $usuario, $password);
	 mysql_select_db($nombre_db,$conexion) OR DIE ("Error: No es posible establecer la conexión");
	 

//consultas

 	
				
				
	   $sql="INSERT INTO imagen (nombreImagen, categoria, subcategoria, foto, id_U) 
       			VALUES('$_POST[nombreImagen]','$_POST[categoria]','$_POST[subcategoria]','$foto','$idu')";
	
	
	 $resul=mysql_query($sql,$conexion)  OR DIE ("Error ");
	 

	 header("location: /index.html?remarks= success");

mysql_close($conexion);
?>