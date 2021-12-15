$(document.querySelectorAll(".CheckedAK")).click(function() { //Creamos la Funcion del Click

        var cantidadCheck = $(".CheckedAK:checked").length; //Creamos una Variable y Obtenemos el Numero de Checkbox que esten Seleccionados
        //$("#mensaje").text("Tienes Actualmente " + checked + " Checkbox " + "Seleccionado(s)"); //Asignamos a la Etiqueta <p> el texto de cuantos Checkbox ahi Seleccionados(Combinando la Variable)
        //checkBox = document.getElementsByName('m1');     
        //checkBoxActual = document.querySelector('.CheckedAK'); 
        // alert(checkBoxActual.value);
        /*  for(var i=0;i<checkBox.length;i++){
		      	
		      	if(checkBox[i].is(':checked') == true){
  						alert("Ingreso: "+ checkBox[i].checked);

  						//alert("Ingreso: "+ i);
  						//checkBox[i].disabled = true;
  						//document.querySelector(".CheckedAK").disabled = true;

	  				}
		      }*/
        /*
				$(':checkbox').each(function(index, item){
  if(item.checked == true){
   //accion que quieras realizar
  }
});
		      */


        actualizarProgreso(cantidadCheck);
    })
    .trigger("click"); //Simulamos el Evento Click(Desde el Principio, para que muestre cuantos ahi Seleccionados)

function actualizarProgreso(checkedActualizar) {
    var cantidadTotalCheck = 10;
    document.getElementById("barra").value = checkedActualizar * (100 / cantidadTotalCheck);
    desactivarCheckBoxActual();
}

function desactivarCheckBoxActual() {

}