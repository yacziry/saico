
    $(document).ready(function(){
        /**
         * Funcion para a�adir una nueva columna en la tabla
         */
        $("#add").click(function(){
            // Obtenemos el numero de filas (td) que tiene la primera columna
            // (tr) del id "tabla"
            var tds=$("#tabla tr:first td").length;
            // Obtenemos el total de columnas (tr) del id "tabla"
            var trs=$("#tabla tr").length;
            var nuevaFila="<tr>";
            for(var i=0;i<tds;i++){
                // a�adimos las columnas
                nuevaFila+="<td><input></td>";
            }
            // A�adimos una columna con el numero total de filas.
            // A�adimos uno al total, ya que cuando cargamos los valores para la
            // columna, todavia no esta a�adida
            nuevaFila+="<td>";
            nuevaFila+="</tr>";
            $("#tabla").append(nuevaFila);
        });

		$(document).ready(function(){
		
		}
		)
		//mostrat
		$(document).ready(function(){
			$("#mostrar").click(function(){
				$('.target').show(3000,function() {
                alert ('imagen mostrada!');
		});
 
        /**
         * Funcion para eliminar la ultima columna de la tabla.
         * Si unicamente queda una columna, esta no sera eliminada
         */
        $("#del").click(function(){
            // Obtenemos el total de columnas (tr) del id "tabla"
            var trs=$("#tabla tr").length;
            if(trs>1)
            {
                // Eliminamos la ultima columna
                $("#tabla tr:last").remove();
            }
        });
    });

