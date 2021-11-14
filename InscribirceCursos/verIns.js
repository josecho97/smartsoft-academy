var resHtml = document.getElementById('insHtml');
var contProceso = 20;

$(document).ready(function(){
   $.ajax(
   {
	url: './insHtml.php',
	method: "POST",
	data:{
		numero:20,
	}
   }).done(function(res){
		if(res === "si"){
			resHtml.innerHTML = `
				<input type="button" class="botonRegistro" onclick="location.href='';" value="Ir al Curso" />
			`
			}else {
			resHtml.innerHTML = `
				<input type="button" class="botonRegistro" onclick="location.href='inscribirceHTML.php';" value="Inscribirse" />
			`
			}
   });
});

console.log(contProceso);



var resJava = document.getElementById('insJava');
var contProceso = 20;

$(document).ready(function(){
   $.ajax(
   {
	url: './insJava.php',
	method: "POST",
	data:{
		numero:20,
	}
   }).done(function(res){
		if(res === "si"){
			resJava.innerHTML = `
				<input type="button" class="botonRegistro" onclick="location.href='';" value="Ir al Curso" />
			`
			}else {
			resJava.innerHTML = `
				<input type="button" class="botonRegistro" onclick="location.href='inscribirceJava.php';" value="Inscribirse" />
			`
			}
   });
});

console.log(contProceso);




var resPython = document.getElementById('insPython');
var contProceso = 20;

$(document).ready(function(){
   $.ajax(
   {
	url: './insPython.php',
	method: "POST",
	data:{
		numero:20,
	}
   }).done(function(res){
		if(res === "si"){
			resPython.innerHTML = `
				<input type="button" class="botonRegistro" onclick="location.href='';" value="Ir al Curso" />
			`
			}else {
			resPython.innerHTML = `
				<input type="button" class="botonRegistro" onclick="location.href='inscribircePythom.php';" value="Inscribirse" />
			`
			}
   });
});

console.log(contProceso);











