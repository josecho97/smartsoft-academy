var resHtml = document.getElementById('Html');
var finHtml = document.getElementById('HtmlFin');
var contProceso = 4;


$(document).ready(function(){
   $.ajax(
   {
	url: './proceHtml.php',
	method: "POST",
	data:{
		numero:20,
	}
   }).done(function(res){
		if(res === "proceso"){
				resHtml.innerHTML = `
					 <div class="curso">
				<div class="imagenHt"></div>
				<div class="texto">
				  <h3>Html</h3>
				  <button type="button" class="botoncito" onclick="location.href='';">Ir al Curso</button>
				</div>
			</div>
				`
				contProceso == 2;

			}else if(res === "finalizado"){
				finHtml.innerHTML = `
					 <div class="curso">
				<div class="imagenHt"></div>
				<div class="texto">
				  <h4>Html</h4>
				</div>
			</div>
				`
			}
   });
});




var resJava = document.getElementById('java');
var finJava = document.getElementById('javaFin');

$(document).ready(function(){
   $.ajax(
   {
	url: './proceJava.php',
	method: "POST",
	data:{
		numero:20,
	}
   }).done(function(res){
		if(res === "proceso"){
				resJava.innerHTML = `
					 <div class="curso">

				<div class="imagenJa"></div>
				<div class="texto">
				  <h3>Java</h3>
				  <button type="button" class="botoncito" onclick="location.href='';">Ir al Curso</button>
				</div>
				</div>
				`
				contProceso == 3;
			}else if(res === "finalizado"){
				finJava.innerHTML = `
					 <div class="curso">

				<div class="imagenJa"></div>
				<div class="texto">
				  <h4>Java</h4>
				</div>
				</div>
				`

			}
   });
});




var resPython = document.getElementById('python');
var finPython = document.getElementById('pythonFin');


$(document).ready(function(){
   $.ajax(
   {
	url: './procePython.php',
	method: "POST",
	data:{
		numero:20,
	}
   }).done(function(res){
		if(res === "proceso"){
				resPython.innerHTML = `
					<div class="curso">
				<div class="imagenPy"></div>
				<div class="texto">
				  <h3>Python</h3>
				  <button type="button" class="botoncito" onclick="location.href='';">Ir al Curso</button>
				</div>
			</div>
				`
				contProceso = 4;
			}else if(res === "finalizado"){
				finPython.innerHTML = `
					<div class="curso">
				<div class="imagenPy"></div>
				<div class="texto">
				  <h4>Python</h4>
				</div>
			</div>
				`

			}
   });
});

console.log(contProceso);




















var resVacioPro = document.getElementById('vacioPro');


$(document).ready(function(){
   $.ajax(
   {
	url: './proVacio.php',
	method: "POST",
	data:{
		numero:20,
	}
   }).done(function(res){
		if(res === "vacio"){
				resVacioPro.innerHTML = `
				<div class="curso">
				<div class="texto1">
				  <h5>Usted no tiene ningun Curso</h5>
				</div>
			</div>
			`
			}else {
				
				console.log(res);
			}
   });
});

console.log(contProceso);





var resVacioFin = document.getElementById('vacioFin');

$(document).ready(function(){
   $.ajax(
   {
	url: './finVacio.php',
	method: "POST",
	data:{
		numero:20,
	}
   }).done(function(res){
		if(res === "vacio"){
				resVacioFin.innerHTML = `
				<div class="curso">
				<div class="texto1">
				  <h5>Usted no finalizo ningun Curso</h5>
				</div>
			</div>
			`
			}else {
				
				console.log(res);
			}
   });
});

console.log(contProceso);