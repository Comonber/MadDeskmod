/**
 * @author Berta
 */



function validaRegistro(){ // detecta los espacios pero no los null 
	var a=document.forms["registro"]["nombre"].value;
	var b=document.forms["registro"]["pass"].value;
	
	if ((a.length <1 ||(a.indexOf(' ') != -1)) && (b.length <1 || (b.indexOf(' ') != -1))){
  		alert("Por favor , rellena todos los campos");
  		return false;
  	}
	
	if (a.length <1 ||(a.indexOf(' ') != -1)){
  		alert("Debes escoger un nombre con el que registrarte");
  		return false;
  	}
	if (b.length <1 || (b.indexOf(' ') != -1)){
  		alert("Elige una constraseña");
  		return false;
  	}
}


function validaAcceso(){
	var c=document.forms["Acceder"]["nombre"].value;
	var d=document.forms["Acceder"]["pass"].value;
	
	if ((c.length <1 || (c.indexOf(' ') != -1)) && (d.length <1 || (d.indexOf(' ') != -1))){
  		alert("Por favor , rellena todos los campos");
  		return false;
  	}
	
	if (c.length <1 || (c.indexOf(' ') != -1)){
  		alert("Introduce tu nombre de usuario");
  		return false;
  	}
	if (d.length <1 || (d.indexOf(' ') != -1)){
  		alert("Introduce tu constraseña");
  		return false;
  	}
	
}

