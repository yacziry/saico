// crear tabla dinamica de resultado particulas
$(document).ready(function () {
    var count = 0;
    //inserta renglon dinamico
    $("#insertar").on('click', function () {
        count++;
        var nuevaFila = "<tr>";

        nuevaFila += "<td class='junta'>" + "<input>" + "</td>";
        nuevaFila += "<td class='longitud'>" + "<input>" + "</td>";
        nuevaFila += "<td class='discontinuidad'>" + "<input value='Ninguna'>" + "</td>";
        nuevaFila += "<td class='evaluacion'>" + "<input value='Aceptado'>" + "</td>";
        nuevaFila += "<td class='observaciones'>" + "<input value='---'>" + "</td>";
        //}
        nuevaFila += "</tr>";
        if(count <= 12){
        $("#tablaReportes").append(nuevaFila);
        //alert(count);
        }
    });
    var aJuntas = Array();  
    var aLongitud = Array();
    var aDiscontinuidad = Array();
    var aEvaluacion = Array();
    var aObservaciones = Array();
    var aTotal = Array();

    $("#prueba").on('click', function(){
        $(".pieza input").each(function(){
            var pieza = $(this).val();
            if(aPieza.length > 12){
                alert('Array lleno ' + aPieza);
		    }else{
                aPieza.push(pieza);
                //alert('Se agrego un valor nuevo ' + aPieza)
                //console.log(aJuntas);
		    }
        });
    });
    $("#prueba").on('click', function(){
        $(".junta input").each(function(){
            var junta = $(this).val();
            if(aJuntas.length > 12){
                alert('Array lleno ' + aJuntas);
		    }else{
                aJuntas.push(junta, pieza);
                //aPieza.push(pieza);
                //alert('Se agrego un valor nuevo ' + aJuntas)
                //console.log(aJuntas);
		    }
        });
        $(".longitud input").each(function(){
            var longitud = $(this).val();
            if(aLongitud.length > 12){
                alert('Array lleno ' + aLongitud);
		    }else{
                aLongitud.push(longitud);
                //alert('Se agrego un valor nuevo ' + aLongitud);
                //console.log(aLongitud);
		    }
        });
        $(".discontinuidad input").each(function(){
            var discontinuidad = $(this).val();
            if(aDiscontinuidad.length > 12){
                alert('Array lleno ' + aDiscontinuidad);
		    }else{
                aDiscontinuidad.push(discontinuidad);
                //alert('Se agrego un valor nuevo ' + aDiscontinuidad)
                //console.log(aDiscontinuidad);
		    }
        });
        $(".evaluacion input").each(function(){
            var evaluacion = $(this).val();
            if(aEvaluacion.length > 12){
                alert('Array lleno ' + aEvaluacion);
		    }else{
                aEvaluacion.push(evaluacion);
                //alert('Se agrego un valor nuevo ' + aEvaluacion)
                //console.log(aEvaluacion);
		    }
        });
        $(".observaciones input").each(function(){
            var observaciones = $(this).val();
            if(aObservaciones.length > 12){
                alert('Array lleno ' + aObservaciones);
		    }else{
                aObservaciones.push(observaciones);
                //alert('Se agrego un valor nuevo ' + aObservaciones)
                //console.log(aObservaciones);
		    }
        });
    });
    var aPieza = Array(); 
    //inserta renglon combinado dinamico
    $("#combinar").on('click', function () {
        count++;
        var nuevaFila = "<tr>";
        for (var i = 0; i < 1; i++) {
            // añadimos las columnas
            nuevaFila += "<td colspan='5' class='pieza'><input size='120' value='pieza: '></td>";
        }
        nuevaFila += "<td>";
        nuevaFila += "</tr>";
        if(count <= 12){
        $("#tablaReportes").append(nuevaFila);
        }
    });
    /*$("#prueba").on('click', function(){
        $(".pieza input").each(function(){
            var pieza = $(this).val();
            if(aPieza.length > 12){
                alert('Array lleno ' + aPieza);
		    }else{
                aPieza.push(pieza);
                //alert('Se agrego un valor nuevo ' + aPieza)
                //console.log(aJuntas);
		    }
        });
    });*/
    //alert(aTotal);
    console.log(aPieza);
    console.log(aJuntas);
});