// crear tabla dinamica de resultado particulas
$(document).ready(function () {
    var count = 0;
    //inserta renglon dinamico
    $("#insertar").on('click', function () {
        count++;
        var nuevaFila = "<tr>";

        nuevaFila += "<td class='id'>" + "<input>" + "</td>";
        nuevaFila += "<td class='elemento'>" + "<input>" + "</td>";
        nuevaFila += "<td class='noDeAceptacion'>" + "<input>" + "</td>";
        nuevaFila += "<td class='noDeSerie'>" + "<input>" + "</td>";
        nuevaFila += "<td class='noDeColada'>" + "<input>" + "</td>";
        nuevaFila += "<td class='profundidad'>" + "<input>" + "</td>";
        nuevaFila += "<td class='espesor'>" + "<input>" + "</td>";
        nuevaFila += "<td class='longitud'>" + "<input>" + "</td>";
        nuevaFila += "<td class='desdeX'>" + "<input>" + "</td>";
        nuevaFila += "<td class='desdeY'>" + "<input>" + "</td>";
        nuevaFila += "<td class='espesorMax'>" + "<input>" + "</td>";
        nuevaFila += "<td class='espesorMin'>" + "<input>" + "</td>";
        nuevaFila += "<td class='areaBarrido'>" + "<input>" + "</td>";
        nuevaFila += "<td class='resultado'>" + "<input>" + "</td>";
        //}
        nuevaFila += "</tr>";
        if(count <= 15){
        $("#tablaReportes").append(nuevaFila);
        //alert(count);
        }
    });
    var aID = Array();
    var aElemento = Array();  
    var aNoDeAceptacion = Array();
    var aNoDeSerie = Array();
    var aNoDeColada = Array();
    var aProfundidad = Array();
    var aEspesor = Array();
    var aDesdeX = Array();
    var aDesdeY = Array();
    var aEspesorMax = Array();
    var aEspesorMin = Array();
    var aAreaBarrido = Array();
    var aResultado = Array();

    $("#prueba").on('click', function(){
        $(".pieza input").each(function(){
            var pieza = $(this).val();
            $(".junta input").each(function(){
                var junta = $(this).val();
                if(aPieza.length > 120){
                    alert('Array lleno ' + aPieza);
		        }else{
                    aPieza.push(pieza);
                    aPieza.push(junta);
                    //alert('Se agrego un valor nuevo ' + aPieza)
                    console.log(aPieza);
		        }
            });
        });
        
    /*$("#prueba").on('click', function(){
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
        });*/
        $(".elemento input").each(function(){
            var elemento = $(this).val();
            if(aelemento.length > 12){
                alert('Array lleno ' + aelemento);
		    }else{
                aelemento.push(elemento);
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
    //console.log(aPieza);
    //console.log(aJuntas);
});