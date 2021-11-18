var respuesta = document.getElementById('insHtml');
var contProceso = 20;

$(document).ready(function(){
   $.ajax(
   {
	url: './php/insHtml.php',
	method: "POST",
	data:{
		numero:20,
	}
   }).done(function(res){
		if(res === "si"){
			respuesta.innerHTML = `
				<input type="button" class="botonRegistro" onclick="location.href='cursos/moduloHtml.html';" value="Ir al Curso" />
			`
			}else {
			respuesta.innerHTML = `
				<input type="button" class="botonRegistro" onclick="location.href='php/inscribirceHtml.php';" value="Inscribirse" />
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
	url: './php/insJava.php',
	method: "POST",
	data:{
		numero:20,
	}
   }).done(function(res){
		if(res === "si"){
			resJava.innerHTML = `
				<input type="button" class="botonRegistro" onclick="location.href='cursos/moduloJava.html';" value="Ir al Curso" />
			`
			}else {
			resJava.innerHTML = `
				<input type="button" class="botonRegistro" onclick="location.href='php/inscribirceJava.php';" value="Inscribirse" />
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
	url: './php/insPython.php',
	method: "POST",
	data:{
		numero:20,
	}
   }).done(function(res){
		if(res === "si"){
			resPython.innerHTML = `
				<input type="button" class="botonRegistro" onclick="location.href='cursos/moduloPython.html';" value="Ir al Curso" />
			`
			}else {
			resPython.innerHTML = `
				<input type="button" class="botonRegistro" onclick="location.href='php/inscribircePython.php';" value="Inscribirse" />
			`
			}
   });
});













