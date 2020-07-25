// crear tabla dinamica de resultado particulas
$(document).ready(function () {
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
    

    $('#insertarPieza').on('click', function () {
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
        $('.pieza input').each(function () {
            var pieza = $(this).val();
            //alert(junta);
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
    });//pruebaON*/
    $('#nuevoRegistro').on('click', function () {
        $('.pieza input').each(function () {
            var pieza = $(this).val();
            //alert(junta);
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
    });//pruebaON*/
    
});