// crear tabla dinamica de resultado particulas
$(document).on('ready', function () {
    var count = 0;
    //inserta renglon dinamico
    $("#insertar").on('click', function () {
        count++;
        var nuevaFila = "<tr>";

        nuevaFila += "<td class='junta'>" + "<input name='junta[]'>" + "</td>";
        nuevaFila += "<td class='longitud'>" + "<input name='longitud[]'>" + "</td>";
        nuevaFila += "<td class='discontinuidad'>" + "<input name='discontinuidad[]' value='Ninguna'>" + "</td>";
        nuevaFila += "<td class='evaluacion'>" + "<input name='evaluacion[]' value='Aceptado'>" + "</td>";
        nuevaFila += "<td class='observaciones'>" + "<input name='observaciones[]' value='---'>" + "</td>";
        //}
        nuevaFila += "</tr>";
        if(count <= 12){
        $("#tablaReportes").append(nuevaFila);
        //alert(count);
        }
    });
    //inserta renglon combinado dinamico
    $("#combinar").on('click', function () {
        count++;
        var nuevaFila = "<tr>";
        for (var i = 0; i < 1; i++) {
            // a�adimos las columnas
            nuevaFila += "<td colspan='5' class='pieza'><input size='120' value='pieza: '></td>";
        }
        nuevaFila += "<td>";
        nuevaFila += "</tr>";
        if(count <= 12){
        $("#tablaReportes").append(nuevaFila);
        }
    });

    $('#prueba').on('click', function () {
        var pieza = $('#pieza').val();

        $('.junta input').each(function () {
             var junta = $(this).val();
             //alert(junta);
        });
        $('.longitud input').each(function () {
             var longitud = $(this).val();
             //alert(longitud);
        });
        $('.discontinuidad input').each(function () {
             var discontinuidad = $(this).val();
             //alert(discontinuidad);
        });
        $('.evaluacion input').each(function () {
             var evaluacion = $(this).val();
             //alert(evaluacion);
        });
        $('.observaciones input').each(function () {
             var observaciones = $(this).val();
             //alert(observaciones);
        });
            $.ajax({
                type: 'POST',
                url: 'recibeTablaParticulas.php',
                data: jQuery('#tablaResultado').serialize(), pieza,
                cache: false,
                success: function (data) {
                //mostrar lo que recibimos
                console.log(data);
                }
            });
    });//pruebaON
    
    
    //$("#prueba").on('click', function(){
               
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
        /*$(".longitud input").each(function(){
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