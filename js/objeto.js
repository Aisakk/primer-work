var boton = document.getElementById('boton');

boton.addEventListener("click", validacion);


function validacion () {
	// body...
	var nombre = document.forms["formulario"]["nombre"].value;
	var asunto = document.forms["formulario"]["asunto"].value;
	var correo = document.forms["formulario"]["correo"].value;
	var boton = document.getElementById('boton').value;

	if(nombre == ""){
		alert("El Campo Nombre está Vacio");
		return false;
	}
	else if(asunto == ""){
		alert("El Campo Asunto está Vacio");
		return false;
	}
	else if(correo == ""){
		alert("El Campo Correo está Vacio");
		return false;
	}
	else{
		 alert("Mensaje Enviado Exitosamente");
	}
}