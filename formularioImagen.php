<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//ES"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="google-translate-customization" content="38b4c046a62d54d0-e37d9424787f2e75-g5e8136f103156dcb-13">
	<link rel="stylesheet" type="text/css" href="estilo.css" media="screen,Projection,TV"/>
	<link rel="shortcut icon" href="yo.jpg" type="image/x-icon" />
	<script type='text/javascript' src='/validaFormularios.js'></script>
	<script language="javascript" type="text/javascript">
	function validaImagen(){
		if (document.subir.nombreImagen.value == "")
		{
			alert("Dale un nombre a tu imángen!");
			return false;
		}
		if (document.subir.file.value == "")
		{
			alert ("Selecciona una imágen");
			return false;
		}
		if (document.subir.categoria.value == "valorpordefecto")
		{
			alert ("Selecciona una categoria");
			return false;
		}
		if ((document.subir.subcategoria.value == "valorpordefecto") && (!document.subir.subcategoria.options[0].value == "vacio"))
		{
			alert ("Selecciona una subcategoria");
			return false;
		}	
		return true;
	}	
	function muestraSubCateg(lista){

		document.subir.subcategoria.options.length = 0;
		switch(lista)
		{
			case "naturaleza":
				document.subir.subcategoria.options[0]=new Option("Animales","animales");
				document.subir.subcategoria.options[1]=new Option("Earthporn","earthporn");
				document.subir.subcategoria.options[2]=new Option("Spaceporn","spaceporn");
				break;
			case "fiestas":
				document.subir.subcategoria.options[0]= new Option("Navidad","navidad");
				document.subir.subcategoria.options[1]= new Option("Halloween","halloween");
				break;
			case "arte":
				document.subir.subcategoria.options[0]= new Option("Botticelli","boticelli");
				document.subir.subcategoria.options[1]= new Option("Picasso","picasso");
				document.subir.subcategoria.options[2]= new Option("Klimt","klimt");
				document.subir.subcategoria.options[3]= new Option("Kandinsky","kandisnky");
				document.subir.subcategoria.options[4]= new Option("Van Gogh","van gogh");
				break;
			case "fantasia":
				document.subir.subcategoria.options[0]= new Option("Sin Subcategoria","vacio");
				break;
			case "personajes":
				document.subir.subcategoria.options[0]= new Option("Sin Subcategoria","vacio");
				break;
			case "colores":
				document.subir.subcategoria.options[0]= new Option("Sin Subcategoria","vacio");
				break;
			case "ciudad":
				document.subir.subcategoria.options[0]= new Option("Sin Subcategoria","vacio");
				break;
			case "kimidoll":
				document.subir.subcategoria.options[0]= new Option("Sin Subcategoria","vacio");
				break;
			default:
				document.subir.subcategoria.options[0]=new Option("Elija una Opción","valorpordefecto");
		}
		return true
	}
	</script>
	
  <title>SubirImagen</title>
</head>

<body>
	<?php
	session_start();
	if ($_SESSION['Logueado'] == 1){?>
	<p style="text-align: center">Por favor, completa el formulario</p><br />
    <form name="subir" action="subirImagen.php" method="post" enctype="multipart/form-data" onSubmit="return validaImagen()"> 
	Nombre de la Imagen: <input type="text" name="nombreImagen"><br /><br />
	
	<table width="50%" border="0" cellspacing="0" cellpadding="5">
	<tr>
	<td width="41%" align="right" valign="middle">Categoria :</td>
	<td width="59%" align="left" valign="middle">
		<select name="categoria" id="categoria" onchange="muestraSubCateg(this.options[this.selectedIndex].value);">
		<option value="valorpordefecto" selected>Elija una Opción</option>
		<option value="kimidoll">Kimidoll</option>
		<option value="ciudad">Ciudad</option>
		<option value="colores">Colores</option>
		<option value="personajes">Personajes</option>
		<option value="fantasia">Fantasia</option>
		<option value="arte">Arte</option>
		<option value="fiestas">Fiestas</option>
		<option value="naturaleza">Naturaleza</option>
		</select>
	</td>
	</tr>
	
	<tr>
	<td align="right" valign="middle">Subcategoria :</td>
	<td align="left" valign="middle">
		<script type="text/javascript" language="JavaScript">
			document.write('<select name="subcategoria"><option value="">Elija una Opción</option></select>')
		</script>
		<noscript>
			<select name="subcategoria" id="subcategoria" >
		<option value="valorpordefecto">Elija una Opción</option>
		</select>
		</noscript>
	</td>
	</tr>
	</table>
    
	Fichero: <input type="file" name="file"/><br /><br /><br />
   
	<input type="submit" value="Enviar">
	<input type="reset" name="Borrar Datos" style="width:100px;" tabindex="6" value="Borrar Datos" />
	
	</form>
	<?php
 } else 
 {
 ?> <script language="JavaScript> alert("Registrate o logueate para subir fotos"); </script><?php 
 } ?>
</body>
</html>