
function productos() {
	var tbody = $('#lista_productos tbody');
	var fila_contenido = tbody.find('tr').first().html();
	var fila_contenido2 = tbody.find('td').first().html();
	//Agregar fila nueva.
	$('#lista_productos .button_agregar_producto').click(function(){
		var fila_nueva = $('<tr></tr>');
		fila_nueva.append(fila_contenido);
		tbody.append(fila_nueva);
	});
	///Agregar fila nueva.
	/*$('#lista_productos .button_agregar_producto').click(function(){
		var fila_nueva = $('<tr></tr>');
		fila_nueva.append(fila_contenido2);
		tbody.append(fila_nueva);		
	});*/
	//Eliminar fila.
	/*$('#lista_productos').on('click', '.button_eliminar_producto', function(){		
		$(this).parents('tr').eq(0).remove();
	});*/
}

