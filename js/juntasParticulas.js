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
    //inserta renglon combinado dinamico
    $("#").on('click', function () {
        count++;
        var nuevaFila = "<tr>";
        for (var i = 0; i < 1; i++) {
            // añadimos las columnas
            nuevaFila += "<td colspan='5' class='pieza'><input name='pieza[]' size='120' value='pieza: '></td>";
        }
        nuevaFila += "<td>";
        nuevaFila += "</tr>";
        if(count <= 12){
        $("#tablaReportes").append(nuevaFila);
        }
    });
<<<<<<< HEAD

    $('#insertarPieza').on('click', function () {
        var pieza = $('#pieza').val();
        $('.pieza input').each(function () {
            var pieza = $(this).val();
            alert(junta);
       });
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
                data: jQuery('#tablaResultado').serialize(),
                cache: false,
                success: function (data) {
                    //$("#resultado").load('formParticulas.php');
                    $("#resultado").load(" #resultado");
                //mostrar lo que recibimos
                console.log(data);
                }
            });
    });//pruebaON
    $('#finalizar').on('click', function () {
        var pieza = $('#pieza').val();
        $('.pieza input').each(function () {
            var pieza = $(this).val();
            //alert(junta);
       });
        $('.junta input').each(function () {
             var junta = $(this).val();
             //alert(junta);
=======
    var aPieza = Array();
    var aJuntas = Array();  
    var aLongitud = Array();
    var aDiscontinuidad = Array();
    var aEvaluacion = Array();
    var aObservaciones = Array();
    var aTotal = Array();
    var aUnaPieza = Array();
    piezaManual
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
        var piezaManual = $("#piezaManual").val();
        if(piezaManual){
            aUnaPieza.push(piezaManual);
            alert(aUnaPieza);
		}else{
            
            alert("vacio");
		}
        
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
        $(".longitud input").each(function(){
            var longitud = $(this).val();
            if(aLongitud.length > 12){
                alert('Array lleno ' + aLongitud);
		    }else{
                aLongitud.push(longitud);
                //alert('Se agrego un valor nuevo ' + aLongitud);
                //console.log(aLongitud);
		    }
>>>>>>> f366292e7f394ed27fc1c67f44fc8f226b12f1d4
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
                data: jQuery('#tablaResultado').serialize(),
                cache: false,
                success: function (data) {
                    //$("#resultado").load('formParticulas.php');
                    $("#resultado").load(" #resultado");
                //mostrar lo que recibimos
                console.log(data);
                }
            });
    });//pruebaON
    
    
});