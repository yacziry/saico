// crear tabla dinamica de resultado particulas
$(document).ready(function () {
    var count = 0;
    //inserta renglon dinamico
    $("#insertar").on('click', function () {
        count++;
        var nuevaFila = "<tr>";

        nuevaFila += "<td class='id'>" + "<input name='id[]' " + "</td>";
        nuevaFila += "<td class='elemento'>" + "<input name='elemento[]'  " + "</td>";
        nuevaFila += "<td class='noDeAceptacion'>" + "<input name='noDeAceptacion[]' " + "</td>";
        nuevaFila += "<td class='noDeSerie'>" + "<input name='noDeSerie[]' " + "</td>";
        nuevaFila += "<td class='noDeColada'>" + "<input name='noDeColada[]' "  + "</td>";
        nuevaFila += "<td class='indicacion'>" + "<input name='indicacion[]' "  + "</td>";
        nuevaFila += "<td class='profundidad'>" + "<input name='profundidad[]' "  + "</td>";
        nuevaFila += "<td class='espesor'>" + "<input name='espesor[]' "  + "</td>";
        nuevaFila += "<td class='longitud'>" + "<input name='longitud[]' "  + "</td>";
        nuevaFila += "<td class='desdeX'>" + "<input name='desdeX[]' "  + "</td>";
        nuevaFila += "<td class='desdeY'>" + "<input name='desdeY[]' "  + "</td>";
        nuevaFila += "<td class='espesorMax'>" + "<input name='espesorMax[]' "  + "</td>";
        nuevaFila += "<td class='espesorMin'>" + "<input name='espesorMin[]' "  + "</td>";
        nuevaFila += "<td class='areaBarrido'>" + "<input name='areaBarrido[]' "  + "</td>";
        nuevaFila += "<td class='resultado'>" + "<input name='resultado[]' "  + "</td>";
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
    var aIndicacion = Array();
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
    $('#finalizar').on('click', function () {
        $('.id input').each(function () {
            var id = $(this).val();
            //alert(id);
       });
        $('.elemento input').each(function () {
             var elemento = $(this).val();
             //alert(elemento);
        });
        $('.noDeAceptacion input').each(function () {
             var noDeAceptacion = $(this).val();
             //alert(noDeAceptacion);
        });
        $('.noDeSerie input').each(function () {
             var noDeSerie = $(this).val();
             //alert(noDeSerie);
        });
        $('.noDeColada input').each(function () {
             var noDeColada = $(this).val();
             //alert(noDeColada);
        });
        $('.indicacion input').each(function () {
             var indicacion = $(this).val();
             //alert(indicacion);
        });
        $('.profundidad input').each(function () {
             var profundidad = $(this).val();
             //alert(profundidad);
        });
        $('.espesor input').each(function () {
             var espesor = $(this).val();
             //alert(espesor);
        });
        $('.longitud input').each(function () {
             var longitud = $(this).val();
             //alert(longitud);
        });
        $('.desdeX input').each(function () {
             var desdeX = $(this).val();
             //alert(desdeX);
        });
        $('.desdeY input').each(function () {
             var desdeY = $(this).val();
             //alert(desdeY);
        });
        $('.espesorMax input').each(function () {
             var espesorMax = $(this).val();
             //alert(espesorMax);
        });
        $('.espesorMin input').each(function () {
             var espesorMin = $(this).val();
             //alert(espesorMin);
        });
        $('.areaBarrido input').each(function () {
             var areaBarrido = $(this).val();
             //alert(areaBarrido);
        });
        $('.resultado input').each(function () {
             var resultado = $(this).val();
             //alert(resultado);
        });
            $.ajax({
                type: 'POST',
                url: 'recibeTablaBocaTubo.php',
                data: jQuery('#tablaResultado').serialize(),
                cache: false,
                success: function (data) {
                    //$("#resultado").load('formParticulas.php');
                    $("#resultado").load(" #resultado");
                //mostrar lo que recibimos
                console.log(data);
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