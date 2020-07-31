// crear tabla dinamica de resultado particulas
$(document).ready(function () {
     var count = 0;
     //inserta renglon dinamico
     $("#insertar").on('click', function () {
          count++;
          var nuevaFila = "<tr>";

          nuevaFila += "<td style='height: 26px;' class='id'>" + "<input name='id[]' required> " + "</td>";
          nuevaFila += "<td style='height: 26px;' class='elemento'>" + "<input name='elemento[]' required>" + "</td>";
          nuevaFila += "<td style='height: 26px;' class='diametro'>" + "<input name='diametro[]' required>" + "</td>";
          nuevaFila += "<td style='height: 26px;' class='noDeAceptacion'>" + "<input name='noDeAceptacion[]' required>" + "</td>";
          nuevaFila += "<td style='height: 26px;' class='noDeSerie'>" + "<input name='noDeSerie[]' required>" + "</td>";
          nuevaFila += "<td style='height: 26px;' class='noDeColada'>" + "<input name='noDeColada[]' required>" + "</td>";
          nuevaFila += "<td style='height: 26px;' class='espesorNominal'>" + "<input name='espesorNominal[]' required> " + "</td>";
          nuevaFila += "<td style='height: 26px;' class='indicacion'>" + "<input name='indicacion[]' required>" + "</td>";
          nuevaFila += "<td style='height: 26px;' class='largo'>" + "<input name='largo[]' required>" + "</td>";
          nuevaFila += "<td style='height: 26px;' class='ancho'>" + "<input name='ancho[]' required>" + "</td>";
          nuevaFila += "<td style='height: 26px;' class='desdeX'>" + "<input name='desdeX[]' required>" + "</td>";
          nuevaFila += "<td style='height: 26px;' class='desdeY'>" + "<input name='desdeY[]' required>" + "</td>";
          nuevaFila += "<td style='height: 26px;' class='espesorMax'>" + "<input name='espesorMax[]' required>" + "</td>";
          nuevaFila += "<td style='height: 26px;' class='espesorMin'>" + "<input name='espesorMin[]' required>" + "</td>";
          nuevaFila += "<td style='height: 26px;' class='areaBarrido'>" + "<input name='areaBarrido[]' required>" + "</td>";
          nuevaFila += "<td style='height: 26px;' class='resultado'>" + "<input name='resultado[]' required>" + "</td>";
          //}
          nuevaFila += "</tr>";
          if (count <= 20) {
               $("#tablaReportes").append(nuevaFila);
               //alert(count);
          }
     });

     $("#insertarPieza").on('click', function () {
          $('.id input').each(function () {
               var id = $(this).val();
               //alert(id);
          });
          $('.elemento input').each(function () {
               var elemento = $(this).val();
               //alert(elemento);
          });
          $('.diametro input').each(function () {
               var diametro = $(this).val();
               //alert(diametro);
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
          $('.espesorNominal input').each(function () {
               var espesorNominal = $(this).val();
               //alert(espesorNominal);
          });
          $('.indicacion input').each(function () {
               var indicacion = $(this).val();
               //alert(indicacion);
          });
          $('.largo input').each(function () {
               var largo = $(this).val();
               //alert(largo);
          });
          $('.ancho input').each(function () {
               var ancho = $(this).val();
               //alert(ancho);
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
     $('#finalizar').on('click', function () {
          $('.id input').each(function () {
               var id = $(this).val();
               //alert(id);
          });
          $('.elemento input').each(function () {
               var elemento = $(this).val();
               //alert(elemento);
          });
          $('.diametro input').each(function () {
               var diametro = $(this).val();
               //alert(diametro);
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
          $('.espesorNominal input').each(function () {
               var espesorNominal = $(this).val();
               //alert(espesorNominal);
          });
          $('.indicacion input').each(function () {
               var indicacion = $(this).val();
               //alert(indicacion);
          });
          $('.largo input').each(function () {
               var largo = $(this).val();
               //alert(largo);
          });
          $('.ancho input').each(function () {
               var ancho = $(this).val();
               //alert(ancho);
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
                    //window.location.href = '../validarBocaTuboFinalizar.php';
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