console.log('funka');

var formulario = document.getElementById('formulario');
var respuesta = document.getElementById('respuesta');

formulario.addEventListener('submit', function(e){
	e.preventDefault();
	console.log('me diste wey')

	var datos = new FormData(formulario);

	console.log(datos)
	console.log(datos.get('login-usuario'))
	console.log(datos.get('login-contraseña'))

	fetch('post.php',{
		method:'POST', 
		body: datos
	})
		.then( res => res.json())
		.then(data => {
			console.log(data)
			if(data === 'error'){
				respuesta.innerHTML = `
					 <h2 class="errorInicio">Nombre de usuario o contraseña equivocada</h2>
				`

			}else if(data === 'corecto'){
				 window.location.href = "catalogo.html";// esta es la linea que redirige a la pantalla catalogo
			}
		})
})
