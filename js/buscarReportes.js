
//obtener tecnica de combo
$(document).ready(function () {
    $(document).on('change', '#tecnica', function (event) {
        cTecnica = $("#tecnica option:selected").text();
    });//onchange

    // OBTENER LOS ELEMNTOS DINAMICOS JQUERY
    $(document).on('click', '#ver', function(){       
        clNumReporte = $("#clNumReporte").val();      
            $.ajax(
                {
                    type: 'POST',
                    url: 'formEncontrarNr.php',
                    data: cTecnica, clNumReporte,
                    success: function (data) {
                        //alert("todo bien");
                        $("#cargaexterna").load("formMostrarMetalografiaNR.php");
                        $("#ocultar").hide();
                    //arregloJson = JSON.parse(result);
                    //alert('resultado' + result);
                    //return false;
                    //if (result == true) {
                    //    $('#bienvenido').html("bienvenido");
                    },//succ,
                    error: function() {
                        alert("There was some error performing the AJAX call");
                    }
                });//ajax
    });

    //JQuery para numero de reporte
    $("#clNumReporte").keyup(function () {
        iNumReport = $("#clNumReporte").val();
        $.post("formEncontrarNr.php",
            {
                tecnica: cTecnica,
                clNumReporte: iNumReport
            },
            function (data, status) {
                aJSON = JSON.parse(data);
                cad = "";
                if(cTecnica == "Metalografia") {
                    for (i = 0; i < aJSON.length; i++) {
                        cad += "<tr><td>" + aJSON[i].clContrato + "</td><td>" + aJSON[i].clContrato + "</td><td>" + aJSON[i].clNumReporte + "</td><td>" + aJSON[i].feTecnico + "</td><td><a href='formMostrarMetalografiaNR.php'><p id='link'>VER</p></a></td><td><a href='formActualizarMetalografia.php'><p id='link'>Actualizar</p></a></td></tr>";
                        //asigno variable a numero de reporte
                        numReporte = aJSON[i].clNumReporte;
                    }
                //$("#tablaReportes").html(cad);
                if(aJSON == false){ $("#sinRegistros").html("No hay registros"); }
                }//ifMetalografia                                               

                if(cTecnica == "Caracterizacion") {
                    for (i = 0; i < aJSON.length; i++) {
                         cad += "<tr><td>" + aJSON[i].clContrato + "</td><td>" + aJSON[i].clContrato + "</td><td>" + aJSON[i].clNumReporte + "</td><td>" + aJSON[i].feTecnico + "</td><td><a href='formMostrarCaracterizacionNR.php'><p id='link'>VER</p></a></td><td><a href='formActualizarCaracterizacion.php'><p id='link'>Actualizar</p></a></td></tr>";
                    }
                }//ifCarcat
                $("#sinRegistros").css("display", "none");
                //$("#tablaReportes").html(cad);

                if(cTecnica == "Particulas") {
                    for (i = 0; i < aJSON.length; i++) {
                         cad += "<tr><td>" + aJSON[i].clContrato + "</td><td>" + aJSON[i].clContrato + "</td><td>" + aJSON[i].clNumReporte + "</td><td>" + aJSON[i].feTecnico + "</td><td><a href='formMostrarParticulasNR.php'><p id='link'>Ver</p></button></td><td><a href='formActualizarParticulas.php'><p id='link'>Actualizar</p></a></td></tr>";
                    }
                }//ifpart
                $("#sinRegistros").css("display", "none");
                //$("#tablaReportes").html(cad);

                if(cTecnica == "Liquidos") {
                    for (i = 0; i < aJSON.length; i++) {
                         cad += "<tr><td>" + aJSON[i].clContrato + "</td><td>" + aJSON[i].clContrato + "</td><td>" + aJSON[i].clNumReporte + "</td><td>" + aJSON[i].feTecnico + "</td><td><a href='formMostrarLiquidosNR.php'><p id='link'>Ver</p></button></td><td><a href='formActualizarLiquidos.php'><p id='link'>Actualizar</p></a></td></tr>";
                    }
                }//ifliq
                $("#sinRegistros").css("display", "none");
                $("#tablaReportes").html(cad);

                if(cTecnica == "Dureza") {
                    for (i = 0; i < aJSON.length; i++) {
                         cad += "<tr><td>" + aJSON[i].clContrato + "</td><td>" + aJSON[i].clContrato + "</td><td>" + aJSON[i].clNumReporte + "</td><td>" + aJSON[i].feTecnico + "</td><td><a href='formMostrarDurezaNR.php'><p id='link'>Ver<p/></button></td><td><a href='formActualizarDureza.php'><p id='link'>Actualizar</p></a></td></tr>";
                    }
                }//ifliq
                $("#sinRegistros").css("display", "none");
                $("#tablaReportes").html(cad);

                if(cTecnica == "Ultrasonido") {
                    for (i = 0; i < aJSON.length; i++) {
                         cad += "<tr><td>" + aJSON[i].clContrato + "</td><td>" + aJSON[i].clContrato + "</td><td>" + aJSON[i].clNumReporte + "</td><td>" + aJSON[i].feTecnico + "</td><td><a href='formMostrarDurezaNR.php'><p id='link'>Ver<p/></button></td><td><a href='formActualizarDureza.php'><p id='link'>Actualizar</p></a></td></tr>";
                    }
                }//ifliq
                $("#sinRegistros").css("display", "none");
                $("#tablaReportes").html(cad);
        });//post 
    });//keyup

    //JQuery para feccha 
    $("#submit").click(function () {
        feInicio = $("#feInicio").val();
        feFin = $("#feFin").val();
        //alert(feInicio);
        $.post("formObtenerRepF.php",
            {
                tecnica: cTecnica,
                feInicio: feInicio,
                feFin: feFin
            },
            function (data, status) {
                aJSON = JSON.parse(data);
               
                    cad = "";
                    if(cTecnica == "Metalografia") {
                        for (i = 0; i < aJSON.length; i++) {
                            cad += "<tr><td>" + aJSON[i].clContrato + "</td><td>" + aJSON[i].clContrato + "</td><td>" + aJSON[i].clNumReporte + "</td><td>" + aJSON[i].feTecnico + "</td><td><a href='#'><p id='link'>Ver</p></a></td><td><a href='#'><p id='link'>Actualizar<p></a></td></tr>";
                        }
                    $("#tablaReportes").html(cad);
                    }//Metalografiaif

                    if(cTecnica == "Caracterizacion") {
                        for (i = 0; i < aJSON.length; i++) {
                            cad += "<tr><td>" + aJSON[i].clContrato + "</td><td>" + aJSON[i].clContrato + "</td><td>" + aJSON[i].clNumReporte + "</td><td>" + aJSON[i].feTecnico + "</td><td><a href='#'><p id='link'>Ver</p></a></td><td><a href='#'><p id='link'>Actualizar</p></a></td></tr>";
                        }
                    $("#tablaReportes").html(cad);
                    }//Metalografiaif

                    if(cTecnica == "Particulas") {
                        for (i = 0; i < aJSON.length; i++) {
                            cad += "<tr><td>" + aJSON[i].clContrato + "</td><td>" + aJSON[i].clContrato + "</td><td>" + aJSON[i].clNumReporte + "</td><td>" + aJSON[i].feTecnico + "</td><td><a href='#'><p id='link'>Ver</p></a></td><td><a href='#'><p id='link'>Actualizar</p></a></td></tr>";
                        }
                    $("#tablaReportes").html(cad);
                    }//Metalografiaif

                    if(cTecnica == "Liquidos") {
                        for (i = 0; i < aJSON.length; i++) {
                            cad += "<tr><td>" + aJSON[i].clContrato + "</td><td>" + aJSON[i].clContrato + "</td><td>" + aJSON[i].clNumReporte + "</td><td>" + aJSON[i].feTecnico + "</td><td><a href='#'><p id='link'>Ver</p></a></td><td><a href='#'><p id='link'>Actualizar</p></a></td></tr>";
                        }
                    $("#tablaReportes").html(cad);
                    }//Metalografiaif

                    if(cTecnica == "Dureza") {
                        for (i = 0; i < aJSON.length; i++) {
                            cad += "<tr><td>" + aJSON[i].clContrato + "</td><td>" + aJSON[i].clContrato + "</td><td>" + aJSON[i].clNumReporte + "</td><td>" + aJSON[i].feTecnico + "</td><td><a href='#'><p id='link'>Ver</p></a></td><td><a href='#'><p id='link'>Actualizar</p></a></td></tr>";
                        }
                    $("#tablaReportes").html(cad);
                    }//Metalografiaif
        });//post
    });//click
    //JQuery para cliente 
    $(document).on('change', '#cliente', function (event) {
        cliente = $("#cliente option:selected").text();
        //alert(cliente);
        $.post("formObtenerRepCl.php",
            {
                tecnica: cTecnica,
                cliente: cliente
            },
            function (data, status) {
                aJSON = JSON.parse(data);

                cad = "";
                if(cTecnica == "Caracterizacion") {
                    for (i = 0; i < aJSON.length; i++) {
                        cad += "<tr><td>" + aJSON[i].clContrato + "</td><td>" + aJSON[i].clContrato + "</td><td>" + aJSON[i].clNumReporte + "</td><td>" + aJSON[i].feTecnico + "</td><td><a href='#'><p id='link'>Ver</p></a></td><td><a href='#'><p id='link'>Actualizar<p></a></td></tr>";
                    }                  
                $("#tablaReportes").html(cad);
                $("#sinRegistros").hide();
                }//Caracterizacion

                if(cTecnica == "Metalografia") {
                    for (i = 0; i < aJSON.length; i++) {
                        cad += "<tr><td>" + aJSON[i].clContrato + "</td><td>" + aJSON[i].clContrato + "</td><td>" + aJSON[i].clNumReporte + "</td><td>" + aJSON[i].feTecnico + "</td><td><a href='#'><p id='link'>Ver</p></a></td><td><a href='#'><p id='link'>Actualizar</p></a></td></tr>";
                    }
                $("#tablaReportes").html(cad);
                $("#sinRegistros").hide();
                }//Caracterizacion

                if(cTecnica == "Dureza") {
                    for (i = 0; i < aJSON.length; i++) {
                        cad += "<tr><td>" + aJSON[i].clContrato + "</td><td>" + aJSON[i].clContrato + "</td><td>" + aJSON[i].clNumReporte + "</td><td>" + aJSON[i].feTecnico + "</td><td><a href='#'><p id='link'>Ver</p></a></td><td><a href='#'><p id='link'>Actualizar</p></a></td></tr>";
                    }
                $("#tablaReportes").html(cad);
                $("#sinRegistros").hide();
                }//Caracterizacion

                if(cTecnica == "Particulas") {
                    for (i = 0; i < aJSON.length; i++) {
                        cad += "<tr><td>" + aJSON[i].clContrato + "</td><td>" + aJSON[i].clContrato + "</td><td>" + aJSON[i].clNumReporte + "</td><td>" + aJSON[i].feTecnico + "</td><td><a href='#'><p id='link'>Ver</p></a></td><td><a href='#'><p id='link'>Actualizar</p></a></td></tr>";
                    }
                $("#tablaReportes").html(cad);
                $("#sinRegistros").hide();
                }//Caracterizacion

                if(cTecnica == "Liquidos") {
                    for (i = 0; i < aJSON.length; i++) {
                    cad += "<tr><td>" + aJSON[i].clContrato + "</td><td>" + aJSON[i].clContrato + "</td><td>" + aJSON[i].clNumReporte + "</td><td>" + aJSON[i].feTecnico + "</td><td><a href='#'><p id='link'>Ver</p></a></td><td><a href='#'><p id='link'>Actualizar<p></a></td></tr>";
                }
                $("#tablaReportes").html(cad);
                $("#sinRegistros").hide();
                }//Caracterizacion
        });//parametro  
    });//onchange
    //JQuery para palabra clave 
    $("#palabraCl").keyup(function () {
        palabraCl = $("#palabraCl").val();
        //alert(palabraCl);
        $.post("formObtenerRepPcl.php",
            {
                tecnica: cTecnica,
                palabraCl: palabraCl
            },
            function (data, status) {
                aJSON = JSON.parse(data);

                cad = "";
                for (i = 0; i < aJSON.length; i++) {
                    //cad += "<tr><td>" + aJSON[i].norma + "</td><td>" + aJSON[i].c + "</td></tr>";
                    cad += "<tr><td>" + aJSON[i].cacliente_clCliente + "</td><td>" + aJSON[i].clContrato + "</td><td>" + aJSON[i].clNumReporte + "</td><td>" + aJSON[i].feTecnico + "</td><td><a href='#'><p id='link'>Ver</p></a></td><td><a href='#'><p id='link'>Actualizar<p></a></td></tr>";
                }
                $("#tablaReportes").html(cad);

        });//parametro  
    });//keyup
});//ready