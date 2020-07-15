// obtener el ultimo reporte por cliente en Liquidos
$(document).ready(function () {
    $(document).on('change', '#cliente', function (event) {
        cliente = $("#cliente option:selected").text();
        $.post("ultimoReporteLi.php",
            {
                cliente: cliente
            },
            function (data, status) {
                aJSON = JSON.parse(data);
                if(aJSON == false){
                n = "No hay registros";
                    $("#mostrarReporte").val(n);
                    }else{
                        for (i = 0; i < aJSON.length; i++) {
                            cad = aJSON[i].clNumReporte;
                        }
                    $("#mostrarReporte").val(cad);
                }
        });//post 
    });//onchange
});//ready

