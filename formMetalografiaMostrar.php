<?php
// Desactivar toda las notificaciónes del PHP xd
error_reporting(0);
ini_set("session.cookie_lifetime","14400");
ini_set("session.gc_maxlifetime","14400");
//var sesion
session_start();

if(isset($_SESSION['tecnico'])){
    $tec = $_SESSION['tecnico'];
    $reporteS = $_SESSION['reporteS'];
}else{
    header("location:notFound.html");
    die();
}
?>
<?php
    require 'metalografiaDAO.php';
        $m = new Metalografia();
        $forReportes = $m->buscarReporte($reporteS);
        foreach ($forReportes as $row){}
		require 'clientesDAO.php';
        $cl = new Cliente();
        $cliente = $cl->buscar($row->cacliente_clCliente);
		foreach ($forReportes as $row){
    ?>
<div class="saltopagina">
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	 <!-- ICONO PESTAÑA -->
   <link href="img/IC.png" rel="icon">
   <meta charset="utf8_general_ci">
   <title>Informe de metalografia</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/for_metalografia.css" type="text/css">
</head>
<div id="center" align="center">
<body align="center">
    <div class="encabezado">
        <table width="981" height="80" border="1">
            <tr>
                <td id="centrado" width="553">FORMATO</td>
                <td id="centrado" width="100">CODIGO</td>
                <td id="centrado" width="100">FOR-PIMP-05</td>
                <td id="centrado" width="200" rowspan="3"onclick="location.href='index2.php'"><span><img src="img/icon.png" alt="sample"></span></td>
            </tr>
            <tr>
                <td rowspan="2" id="negrita">INFORME DE ANALISIS METALOGRAFICO</td>
                <td id="centrado">VERSION</td>
                <td id="centrado">1</td>
            </tr>
            <tr>
                <td id="centrado">PAGINA</td>
                <td id="centrado"><label contenteditable="true">1 DE 1</label></td>
            </tr>
        </table>
    </div>
    <br>
    <br>
    <div class="borde">
        <div class="cuerpo">
            <table width="981" border="0">
                <tr>
                    <td width="134">CLIENTE:</td>
                    <td width="317"><input type="text" name="cliente" class="sinborde" value="<?php echo $cliente ?>" size="66" readonly="readonly"></td>
                    <td width="90">CONTRATO:</td>
                    <td width="340" colspan="2"><input type="text" name="contrato" value="<?php echo  $row->clContrato ?>" class="sinborde" size="48" readonly="readonly"></td>
                </tr>
            </table>
        </div>
        <br>
        <div class="cuerpo">
            <table width="981" border="0">
                <tr>
                    <td width="134">PROYECTO:</td>
                    <td colspan="5"><textarea id="textA" style="max-width:822px; min-width:822px;" cols="142" style="overflow-y:hidden" readonly="readonly" class="sinborde" name="descripcion"><?php echo  $row->deProyecto ?></textarea>
                </tr>
            </table> 
        </div>
        <br>
        <div class="cuerpo">
            <table width="981" border="0">
                <tr>
                    <td width="134">ORDEN DE TRABAJO:</td>
                    <td width="317"><input type="text"  class="sinborde" value="<?php echo  $row->clOrdenTrabajo ?>" size="66" readonly="readonly"></td>
                    <td width="90" align="center">FOLIO:</td>
                    <td width="340" colspan="2"><input type="text" value="<?php echo  $row->clFolio; ?>" class="sinborde" size="48" readonly="readonly"></td>
                </tr>
            </table>
        </div>
        <br>
        <div class="cuerpo">
            <table width="981" border="0">
                <tr>
                    <td width="210">NO. DE ISOMETRICO Y/O PLANO:</td>
                    <td width="210"><input type="text" value="<?php echo  $row->deIsometrico; ?>" class="sinborde" size="33" readonly="readonly"></td>
                    <td width="134">NUMERO DE REPORTE:</td>
                    <td width="144"><input type="text" value="<?php echo  $row->clNumReporte; ?>" class="sinborde" readonly="readonly"></td>
                    <td width="70">FECHA:</td>
                    <td width="156"><input type="text" value="<?php echo  $row->feTecnico; ?>" class="sinborde" readonly="readonly"></td>
                </tr>
            </table>
        </div>
        <br>
        <div class="cuerpo">
            <table width="981" border="0">
                <tr>
                    <td width="134">LUGAR:</td>
                    <td colspan="2"><textarea style="max-width:598px; min-width:598px;" id="textA"  style="overflow-y:hidden" class="sinborde"  cols="100" readonly="readonly"><?php echo  $row->deLugar; ?></textarea>
                    <td width="79">PARTIDA:</td>
                    <td width="350" colspan="2"><input type="text" value="<?php echo $row->clPartida; ?>" class="sinborde" size="19"></td>
                </tr>
            </table>
        </div>
        <br>
        <div class="cuerpo">
            <table width="981" border="0">
                <tr>
                    <td width="230">NOMBRE DE LA PIEZA / TRAZABILIDAD:</td>
                    <td width=""><input type="text" value="<?php echo  $row->deTrazabilidad; ?>" class="sinborde" size="117"></td>
                </tr>
            </table>
        </div>
        <br>
        <?php
                $x = $row->deTubEstruc;
                if($x == "Accesorio"){
                $a = "xxx";
                $b = "";
                $c = "";
                }
                elseif($x == "Tuberia"){
                $b = "xxx";
                $a = "";
                $c = "";
				}elseif($x == "Estructural"){
                $c = "xxx"; 
                $a = "";
                $b = "";
				}
            ?>
        <div class="cuerpo">
            <table width="981" border="0">
                <tr>
                    <td width="210">ACCESORIO:</td>
                    <td width="210"><input type="text" value="<?php echo  $a ?>" class="sinborde" size="33"></td>
                    <td width="134" align="center">TUBERIA:</td>
                    <td width="144"><input type="text" value="<?php echo  $b ?>" class="sinborde"></td>
                    <td width="70">ESTRUCTURAL:</td>
                    <td width="156"><input type="text" value="<?php echo  $c ?>" class="sinborde"></td>
                </tr>
            </table>
        </div>
        <br>
        <div class="cuerpo">
            <table width="981" border="0">
                <tr>
                    <td width="215">DESCRIPCI&Oacute;N DEL TRABAJO Y NOTAS:</td>
                    <td colspan="5"><textarea id="textA" style="max-width:750px; min-width:750px;" cols="121" readonly="readonly" class="sinborde"><?php echo  $row->deDescripcion; ?></textarea></td>
                </tr>
            </table>
        </div>
    </div><!--borde-->
    <br>
    <table width="981" class="table table-bordered">
        <tr>
            <td class="sombreado">ANALISIS QUIMICO</td>
        </tr>
    </table>
    <br>
    <div class="m_table">
        <table width="981" border="1">
            <tr>
                <td class="fields" colspan="3">NUMERO DE LIJA PARA EL DESBASTE</td>
                <td class="fields" colspan="2">MATERIAL PARA EL PULIDO</td>
                <td class="fields" colspan="2">DATOS DE ATAQUE QU&Iacute;MICO</td>
                <td class="fields" width="128">FASES PRESENTES</td>
                <td class="fields" width="125">ESPECIFICACI&Oacute;N APROXIMADA DEL MATERIAL</td>
            </tr>
            <tr>
                <td width="75"><label for="">240</label></td>
                <td width="75"><label for="">320</label></td>
                <td width="70"><label for="">400</label></td>
                <td class="fields" width="105">PA&Ntilde;O</td>
                <td width="105"><label for=""><?php echo  $row->dePano; ?></label></td>
                <td class="fields" width="120">REACTIVO</td>
                <td width="120"><label for=""><?php echo  $row->deReactivo; ?></td>
                <td rowspan="2"><label for=""><?php echo  $row->deFases; ?></td>
                <td rowspan="2"><label for=""><?php echo  $row->deEspecificacion; ?></td>
            </tr>
            <tr>
                <td><label for="">600</label></td>
                <td><label for="">1000</label></td>
                <td><label for="">1500</label></td>
                <td class="fields">ABRASIVO</td>
                <td><label for=""><?php echo  $row->deAbrasivo; ?></label></td>
                <td class="fields">TIEMPO</td>
                <td><label for=""><?php echo  $row->deTiempo; ?></label></td>
            </tr>
        </table>
    </div>
    <br><br>
    <div class="imag">
        <table width="981" height="500" border="0" class="img">
            <tr>
                <td width="264" height="264" style="border-width: 0px;">
	            <div id="preview"><img src="img/metalografia/<?php echo  $row->deImagen; ?>">
	            </div>
                <td width="21" ></td>
                <td width="264" style="border-width: 0px;">
	            <div id="">
	            <table>
	            <td>
	            <textarea cols="63" rows="17" class="obser">Observaciones: <?php echo  $row->deObservaciones; ?></textarea></div></td>
	            </td>
	            </table>
            </tr>
            <tr>
                <td id="imag" height="33">FOTOMICROGRAFIA A 100X</td>
                <td ></td>
                <td id="imag"></td>
            </tr>
            <tr>
                <td height="264" style="border-width: 0px;">
	                <div id="imag" height="264" align="center">
	                <img id="ver" ><img src="<?php echo  $row->deGrano; ?>"></di>
	            </td>
                <td></td>
                <td style="border-width: 0px;">
	                <div id="apreview"><img src="img/metalografia/<?php echo  $row->deImagen2; ?>"></div></td>
            </tr>
            <tr>
                <td id="imag">TAMA&Ntilde;O DE GRANO                 
                </td>                 
                <td></td>
                <td id="imag">FOTOGRAF&Iacute;A ESPEC&Iacute;FICA DONDE SE MUESTRA LA ZONA A LA CUAL SE LE<br> REALIZ&Oacute; LA METALOGRAFIA</td>
            </tr>
        </table>
    </div>
    <br>
    <br>
    <div class="footer">
        <table width="981" border="0" align="center">
            <tr>
                <td class="borde"><input type="text" size="30"></td>
                <td><input class="sinborde" type="text"></td>
                <td class="borde"><input type="text" size="30"></td>
            </tr>
            <tr>
                <td>
	            <input class="inputfinales" type="text" size="46" value="<?php echo  $row->deElabora; ?>" readonly="readonly">
	            <br>
	            <textarea class="inputfinales2" id="textA2" cols="300px" rows="3" style="max-width:300px;" readonly="readonly">ASESOR&Iacute;A E INSPECCI&Oacute;N EN CONSTRUCCI&Oacute;N COSTA FUERA, S.C.</textarea>
                <td>
	            <input class="inputfinales" type="text"  size="46">
	            <br>
	            <textarea class="inputfinales2" id="textA2" rows="3" cols="300px" style="max-width:300px;"></textarea>
                <td>
	            <input class="inputfinales" type="text"  size="46" value="<?php echo  $row->deAprueba; ?>" readonly="readonly">
	            <br>
	            <textarea class="inputfinales2" id="textA2" rows="3" cols="300px" style="max-width:300px;" readonly="readonly">ASESOR&Iacute;A E INSPECCI&Oacute;N EN CONSTRUCCI&Oacute;N COSTA FUERA, S.C.</textarea>
            </tr>
        </table>
    </div><!--footer-->
</div><!--center-->
</div><!--saltoPagina-->
<?php
}
?>
</form>
</body>
</html>
