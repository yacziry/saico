// JavaScript codigo que elige norma en el select tiempo real
$(document).ready(function () {
    $(document).on('change', '#clNorma', function (event) {
        cNorma = $("#clNorma option:selected").text();
        
        $.post("formObtenerNormas.php",
            {
                norma: cNorma,
            },
            function (data, status) {
                aJSON = JSON.parse(data);
                cad = "";
                for (i = 0; i < aJSON.length; i++) {

                    c = aJSON[i].c;
                    mn = aJSON[i].mn;
                    p = aJSON[i].p;
                    s = aJSON[i].s;
                    si = aJSON[i].si;
                    cu = aJSON[i].cu;
                    ni = aJSON[i].ni;
                    cr = aJSON[i].cr;
                    mo = aJSON[i].mo;
                    v = aJSON[i].v;
                    nb = aJSON[i].nb;
                    n = aJSON[i].n;
                    deBrinell_Max = aJSON[i].deBrinell_Max;
                    deKsi_Max = aJSON[i].deKsi_Max;
                    deKsi_Min = aJSON[i].deKsi_Min;
                    deCedencia = aJSON[i].deCedencia;
                    deNotas = aJSON[i].deNotas;
                }
                $("#vlPromedioC").html(c);
                $("#vlPromedioMn").html(mn);
                $("#vlPromedioP").html(p);
                $("#vlPromedioS").html(s);
                $("#vlPromedioSi").html(si);
                $("#vlPromedioCu").html(cu);
                $("#vlPromedioNi").html(ni);
                $("#vlPromedioCr").html(cr);
                $("#vlPromedioMo").html(mo);
                $("#vlPromedioV").html(v);
                $("#vlPromedioNb").html(nb);
                $("#vlPromedioN").html(n);
                $("#numDurezaBrin2").html(deBrinell_Max);
                $("#numResTensionMax").html(deKsi_Max);
                $("#numResTensionMin").html(deKsi_Min);
                $("#numResCedenciaMin").html(deCedencia);
                $("#nota").html(deNotas);
        });//post
    });//onChange
    //abrir el modal
    $(document).on('change', '#clNorma', function (event) {
        cNorma = $("#clNorma option:selected").text();
            if(cNorma == "Agregar"){
                $("#agregarModal").modal();
                //alert(cNorma);
            }
    });//onChange
    //insertar datos del modal  a DB
    $("#enviar").click(function () {
        $('#clNorma').find('option').remove();
        norma = $("#norma").val();
        deBrinell_Max = $("#deBrinell_Max_modal").val();
        deKsi_Min = $("#deKsi_Min_modal").val();
        deCedencia = $("#deCedencia").val();
        deKsi_Max = $("#deKsi_Max").val();
        c = $("#c_modal").val();
        mn = $("#mn").val();
        p = $("#p").val();
        s = $("#s").val();
        si = $("#si").val();
        cu = $("#cu").val();
        ni = $("#ni").val();
        cr = $("#cr").val();
        mo = $("#mo").val();
        v = $("#v").val();
        nb = $("#nb").val();
        n = $("#n").val();
        deNotas = $("#deNotas").val();
        enviaNorma();
    });//click
    function llenaCombo(){
        $.ajax({
            url: 'llamarCombo.php',
            type: 'GET',
            dataType: 'Json',
            success: function(respuesta){
                for (i = 0; i < respuesta.length; i++) {
                    $('#clNorma').append('<option value="' + respuesta[i]['norma'] + '">' + respuesta[i]['norma']+'</option>');
                }
                    console.log(respuesta);
            }
        })
    }
    
    function enviaNorma(){
        $.ajax({
            url: 'formObtenerTablasNormas.php',
            type: 'POST',         
            data: {norma, deBrinell_Max, deKsi_Min, deCedencia, deKsi_Max, c,
            mn, p, s, si, cu, ni, cr, mo, v, nb, n, deNotas},
            //dataType: 'Json',
            success: function(respuesta){
                //alert("nicee");
                llenaCombo();               
            }
        })
    }
        /*norma = $("#norma").val();
        deBrinell_Max = $("#deBrinell_Max_modal").val();
        deKsi_Min = $("#deKsi_Min_modal").val();
        deCedencia = $("#deCedencia").val();
        deKsi_Max = $("#deKsi_Max").val();
        c = $("#c_modal").val();
        mn = $("#mn").val();
        p = $("#p").val();
        s = $("#s").val();
        si = $("#si").val();
        cu = $("#cu").val();
        ni = $("#ni").val();
        cr = $("#cr").val();
        mo = $("#mo").val();
        v = $("#v").val();
        nb = $("#nb").val();
        n = $("#n").val();
        deNotas = $("#deNotas").val();
        //alert(iNumReport);
        $.post("formObtenerTablasNormas.php",
            {
                norma: norma,
                deBrinell_Max: deBrinell_Max,
                deKsi_Min: deKsi_Min,
                deCedencia: deCedencia,
                deKsi_Max: deKsi_Max,
                c: c,
                mn: mn,
                p: p,
                s: s,
                si: si,
                cu: cu,
                ni: ni,
                cr: cr,
                mo: mo,
                v: v,
                nb: nb,
                n: n,
                deNotas: deNotas
            },
            function (data, status) {
               aJSON = JSON.parse(data);
               for (i = 0; i < aJSON.length; i++) {
               pq = aJSON[i].norma;
                     $("#prueba3").html(pq);
               }
        });//post
    });//click*/
    
});//ready