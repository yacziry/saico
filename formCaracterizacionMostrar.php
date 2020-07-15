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
	$clNorma = $_SESSION['clNorma'];
}else{
    header("location:notFound.html");
    die();
}
?>
<?php
    require 'caracterizacionDAO.php';
	require 'clientesDAO.php';
	require 'normasDAO.php';

		$n = new Normas();
		$normas = $n->buscarNormaSelected($clNorma);
		foreach ($normas as $rowNorma){}

        $c = new Caracterizacion();
        $forReportes = $c->buscarReporte($reporteS);
        foreach ($forReportes as $row){}
		
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
                    <td rowspan="2" id="negrita">INFORME DE CARACTERIZACION DE MATERIALES</td>
                    <td id="centrado">VERSION</td>
                    <td id="centrado">1</td>
                </tr>
                <tr>
                    <td id="centrado">PAGINA</td>
                    <td id="centrado"><label contenteditable="true">1 DE 1</label></td>
                </tr>
            </table>
        </div>
    </div>
        <br>       
        <div id="center" align="center">
        <div class="borde">
            <div class="cuerpo">
                <table width="981" border="0">
                    <tr>
                        <td width="134">CLIENTE:</td>
                        <td width="317"><input type="text" name="cliente" class="sinborde" value="<?php echo $cliente ?>" size="66" readonly="readonly"></td>
                        <td width="90">CONTRATO:</td>
                        <td width="340" colspan="2"><input type="text" name="contrato" value="<?php echo  $row->clContrato; ?>" class="sinborde" size="48" readonly="readonly"></td>
                    </tr>
                </table>
            </div>
            <br>
            <div class="cuerpo">
                <table width="981" border="0">
                    <tr>
                        <td width="134">PROYECTO:</td>
                        <td colspan="5"><textarea id="textA" style="max-width:822px; min-width:822px;" cols="142" style="overflow-y:hidden" readonly="readonly" class="sinborde" name="descripcion"><?php echo  $row->deProyecto; ?></textarea>
                    </tr>
                </table> 
            </div>
            <br>
            <div class="cuerpo">
                <table width="981" border="0">
                    <tr>
                        <td width="134">ORDEN DE TRABAJO:</td>
                        <td width="317"><input type="text"  class="sinborde" value="<?php echo  $row->clOrdenTrabajo; ?>" size="66" readonly="readonly"></td>
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
                        <td width="210"><input type="text" value="<?php echo $a; ?>" class="sinborde" size="33"></td>
                        <td width="134" align="center">TUBERIA:</td>
                        <td width="144"><input type="text" value="<?php echo $b; ?>" class="sinborde"></td>
                        <td width="70">ESTRUCTURAL:</td>
                        <td width="156"><input type="text" value="<?php echo $c; ?>" class="sinborde"></td>
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
                <td class="sombreado">ENSAYO DE DUREZA</td>
            </tr>
        </table>
        <br>
		<div class="m_table">
			<table width="981" border="1">
				<tr>
					<td colspan="6" class="fields" class="fields">DATOS DEL EQUIPO</td>
				</tr>
				<tr align="center">
					<td class="fields">MARCA</td>
					<td width="200"><label class="texto"><?php echo  $row->deMarca1; ?></td>
					<td class="fields">MODELO</td>
					<td width="200"><label class="texto"><?php echo  $row->deModelo1; ?></td>
					<td class="fields">NO.SERIE</td>
					<td width="200"><label class="texto"><?php echo  $row->deSerie1; ?></td>
				</tr>
			</table>
			<br>
			<table width="981" border="1">
				<tr>
					<td colspan="7" class="fields">VALORES TOMADOS DE DUREZA</td>
				</tr>
				<tr align="center">
					<td width="120"><label class="texto"><?php echo  $row->numDureza1; ?></td>
					<td width="120"><label class="texto"><?php echo  $row->numDureza2; ?></td>
					<td width="120"><label class="texto"><?php echo  $row->numDureza3; ?></td>
					<td width="120"><label class="texto"><?php echo  $row->numDureza4; ?></td>
					<td width="120"><label class="texto"><?php echo  $row->numDureza5; ?></td>
					<td rowspan="2" class="fields" width="120">PROMEDIO</td>
					<td rowspan="2"><label class="texto"><?php echo  $row->clPromedio; ?></label></td>
				</tr>
				<tr align="center">
					<td><label class="texto"><?php echo  $row->numDureza6; ?></td>
					<td><label class="texto"><?php echo  $row->numDureza7; ?></td>
					<td><label class="texto"><?php echo  $row->numDureza8; ?></td>
					<td><label class="texto"><?php echo  $row->numDureza9; ?></td>
					<td><label class="texto"><?php echo  $row->numDureza10; ?></td>										
				</tr>
			</table>
			<br>
			<table width="981" border="1">
				<tr>
					<td colspan="7" class="fields">DATOS DEL MATERIAL</td>
				</tr>
				<tr align="center" class="fields">
					<td>DESCRIPCION DEL MATERIAL</td>
					<td>DUREZA BRINELL</td>
					<td>RESISTENCIA A LA TENSION (KSI)</td>
					<td>RESISTENCIA A LA CEDENCIA (KSI)</td>
					<td>TAMA&Ntilde;O DE GRANO</td>					
				</tr>
				<tr align="center">
					<td><label class="texto"><?php echo  $row->deMaterial; ?></td>
					<td><label class="texto"><?php echo  $row->clPromedio; ?></td>
					<td><label class="texto"><?php echo  $row->numResTension; ?></td>
					<td><label class="texto"><?php echo  $row->numResCedencia; ?></td>
					<td><label class="texto"><?php echo  $row->clTamanoGrano; ?></td>										
				</tr>
			
				<tr align="center" class="fields">
					<td>NORMA DE REFERENCIA</td>
					<td>DUREZA BRINELL, MAX</td>
					<td>RESISTENCIA A LA TENSI&Oacute;N MINIMA ESPECIFICADA (KSI)</td>
					<td>RESISTENCIA A LA CEDENCIA MINIMA ESPECIFICADA (KSI)</td>
					<td>RESISTENCIA A LA TENSI&Oacute;N M&Aacute;XIMA ESPECIFICADA (KSI)</td>					
				</tr>
				<tr align="center">
					<td><label class="texto"><?php echo  $row->canorma_norma; ?></td>
					<td><label class="texto"><?php echo  $rowNorma[deBrinell_Max]; ?></td>
					<td><label class="texto"><?php echo  $rowNorma[deKsi_Min]; ?></td>
					<td><label class="texto"><?php echo  $rowNorma[deCedencia]; ?></td>
					<td><label class="texto"><?php echo  $rowNorma[deKsi_Max]; ?></td>										
				</tr>
			</table>
		</div><!--m_table-->
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
					<td colspan="6" class="fields" class="fields">DATOS DEL EQUIPO</td>
				</tr>
				<tr align="center">
					<td class="fields">MARCA</td>
					<td width="200"><label class="texto"><?php echo  $row->deMarca2; ?></td>
					<td class="fields">MODELO</td>
					<td width="200"><label class="texto"><?php echo  $row->deModelo2; ?></td>
					<td class="fields">NO.SERIE</td>
					<td width="200"><label class="texto"><?php echo  $row->deSerie2; ?></td>
				</tr>
			</table>
		</div><!-- m_table-->
		<br>
		<div style="width:981; padding:3px;" class="m_table">
			<div style="width:40%; float:left;">
				<table width="400" border="1">
					<tr>
						<td colspan="3" class="fields">COMPOSICI&Oacute;N QU&Iacute;MICA TE&Oacute;RICA VS PROMEDIO DE VALORES EN LA PIEZA ANALIZADA</td>
                    </tr>
                    <tr class="fields">
						<td>ELEMENTO</td>
                        <td>PROMEDIOS DE LA PIEZA ANALIZADA</td>
                        <td>COMPOSICI&Oacute;N QU&Iacute;MICA TEORICA</td>
                    </tr>
                    <tr>
						<td class="fields">C</td>
                        <td><label class="texto"><?php echo  $row->vlPromedioC; ?></td>
                        <td><?php echo  $rowNorma[c]; ?></td>
                    </tr>
                    <tr>
						<td class="fields">Mn</td>
                        <td><label class="texto"><?php echo  $row->vlPromedioMn; ?></td>
                        <td><?php echo  $rowNorma[mn]; ?></td>
                    </tr>
                    <tr>
						<td class="fields">P</td>
                        <td><label class="texto"><?php echo  $row->vlPromedioP; ?></td>
                        <td><?php echo  $rowNorma[p]; ?></td>
                    </tr>
                    <tr>
						<td class="fields">S</td>
                        <td><label class="texto"><?php echo  $row->vlPromedioS; ?></td>
                        <td><?php echo  $rowNorma[s]; ?></td>
                    </tr>
                    <tr>
						<td class="fields">Si</td>
                        <td><label class="texto"><?php echo  $row->vlPromedioSi; ?></td>
                        <td><?php echo  $rowNorma[si]; ?></td>
                    </tr>
                    <tr>
						<td class="fields">Cu</td>
                        <td><label class="texto"><?php echo  $row->vlPromedioCu; ?></td>
                        <td><?php echo  $rowNorma[cu]; ?></td>
                    </tr>
                    <tr>
						<td class="fields">Ni</td>
                        <td><label class="texto"><?php echo  $row->vlPromedioNi; ?></td>
                        <td><?php echo  $rowNorma[ni]; ?></td>
                    </tr>
                    <tr>
						<td class="fields">Cr</td>
                        <td><label class="texto"><?php echo  $row->vlPromedioCr; ?></td>
                        <td><?php echo  $rowNorma[cr]; ?></td>
                    </tr>
                    <tr>
						<td class="fields">Mo</td>
                        <td><label class="texto"><?php echo  $row->vlPromedioMo; ?></td>
                        <td><?php echo  $rowNorma[mo]; ?></td>
                    </tr>
                    <tr>
						<td class="fields">V</td>
                        <td><label class="texto"><?php echo  $row->vlPromedioV; ?></td>
                        <td><?php echo  $rowNorma[v]; ?></td>
                    </tr>
                    <tr>
						<td class="fields">Nb</td>
                        <td><label class="texto"><?php echo  $row->vlPromedioNb; ?></td>
                        <td><?php echo  $rowNorma[nb]; ?></td>
                    </tr>
					<tr>
						<td class="fields">N</td>
                        <td><label class="texto"><?php echo  $row->vlPromedioN; ?></td>
                        <td><?php echo  $rowNorma[n]; ?></td>
                    </tr>
                </table>
            </div>
            <div style="width:40%; float:right;">
				<table borde="1">               
					<tr>
						<td style="border-width: 0px;">                        
	                    <div id="resultadosImage"><img src="img/caracterizacion/<?php echo  $row->deImagen; ?>">
	                    </div>
                        <td width="21" ></td>
                        <td width="224" style="border-width: 0px;">
	                    <div id=""></div>
                        </td>
                    </tr>
                </table>
            </div>
        </div><!--FINDIV2-->
		<br><br>
		<div class="footer">
            <table width="981" border="0" align="center">
                <tr>
                    <td class="borde" align="center"><input type="text" size="30"></td>
                    <td align="center"><input class="sinborde" type="text"></td>
                    <td class="borde" align="center"><input type="text" size="30"></td>
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
</div><!--saltopagina-->

<div class="saltopagina">
	<div id="center" align="center">
		<div class="encabezado">
			<table width="981" height="80" border="1">
				<tr>
					<td id="centrado" width="553">FORMATO</td>
					<td id="centrado" width="100">CODIGO</td>
					<td id="centrado" width="100">FOR-PIMP-05</td>
					<td id="centrado" width="200" rowspan="3"onclick="location.href='index2.php'"><span><img src="img/icon.png" alt="sample"></span></td>
				</tr>
				<tr>
					<td rowspan="2" id="negrita">INFORME DE CARACTERIZACION DE MATERIALES</td>
					<td id="centrado">VERSION</td>
					<td id="centrado">1</td>
				</tr>
				<tr>
					<td id="centrado">PAGINA</td>
					<td id="centrado"><label contenteditable="true">2 DE 2</label></td>
				</tr>
			</table>
		</div>
	</div>
	<br>       
	<div id="center" align="center">
		<div class="borde">
			<div class="cuerpo">
				<table width="981" border="0">
					<tr>
						<td width="134">CLIENTE:</td>
						<td width="317"><input type="text" name="cliente" class="sinborde" value="<?php echo $cliente ?>" size="66" readonly="readonly"></td>
						<td width="90">CONTRATO:</td>
						<td width="340" colspan="2"><input type="text" name="contrato" value="<?php echo  $row->clContrato; ?>" class="sinborde" size="48" readonly="readonly"></td>
					</tr>
				</table>
			</div>
			<br>
			<div class="cuerpo">
				<table width="981" border="0">
					<tr>
						<td width="134">PROYECTO:</td>
						<td colspan="5"><textarea id="textA" style="max-width:822px; min-width:822px;" cols="142" style="overflow-y:hidden" readonly="readonly" class="sinborde" name="descripcion"><?php echo  $row->deProyecto; ?></textarea>
					</tr>
				</table> 
			</div>
			<br>
			<div class="cuerpo">
				<table width="981" border="0">
					<tr>
						<td width="134">ORDEN DE TRABAJO:</td>
						<td width="317"><input type="text"  class="sinborde" value="<?php echo  $row->clOrdenTrabajo; ?>" size="66" readonly="readonly"></td>
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
			<div class="cuerpo">
				<table width="981" border="0">
					<tr>
						<td width="210">ACCESORIO:</td>
						<td width="210"><input type="text" value="<?php echo  $a; ?>" class="sinborde" size="33"></td>
						<td width="134" align="center">TUBERIA:</td>
						<td width="144"><input type="text" value="<?php echo  $b ?>" class="sinborde"></td>
						<td width="70">ESTRUCTURAL:</td>
						<td width="156"><input type="text" value="<?php echo  $c; ?>" class="sinborde"></td>
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
					<td class="sombreado">ANALISIS METALOGRAFICO</td>
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
						<td width="75"><label class="texto">240</label></td>
						<td width="75"><label class="texto">320</label></td>
						<td width="70"><label class="texto">400</label></td>
						<td class="fields" width="105">PA&Ntilde;O</td>
						<td width="105"><label class="texto"><?php echo  $row->dePano; ?></label></td>
						<td class="fields" width="120">REACTIVO</td>
						<td width="120"><label class="texto"><?php echo  $row->deReactivo; ?></td>
						<td rowspan="2"><label class="texto"><?php echo  $row->deFases; ?></td>
						<td rowspan="2"><label class="texto"><?php echo  $row->canorma_norma; ?></td>
					</tr>
					<tr>
						<td><label class="texto">600</label></td>
						<td><label class="texto">1000</label></td>
						<td><label class="texto">1500</label></td>
						<td class="fields">ABRASIVO</td>
						<td><label class="texto"><?php echo  $row->deAbrasivo; ?></label></td>
						<td class="fields">TIEMPO</td>
						<td><label class="texto"><?php echo  $row->deTiempo; ?></label></td>
					</tr>
				</table>
			</div>
			<br><br>
			<div class="imag">
				<table width="981" height="500" border="0" class="img">
					<tr>
						<td width="264" height="264" style="border-width: 0px;">
						<div id="preview"><img src="img/caracterizacion/<?php echo  $row->deImagen2; ?>">
						</div>
						<td width="21" ></td>
						<td width="264" style="border-width: 0px;">
						<div id="">
						<table>
						<td>
						<textarea cols="63" rows="17" class="obser"><?php echo  $row->deObservaciones; ?></textarea></div></td>
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
	                    <img id="ver"><img src="<?php echo  $row->deGrano; ?>"></div>
	                    </td>
                        <td></td>
                        <td style="border-width: 0px;">
	                    <div id="bpreview"><img src="img/caracterizacion/<?php echo  $row->deImagen3; ?>"></div></td>
                    </tr>
					<tr>
						<td id="imag">TAMA&Ntilde;O DE GRANO <?php echo  $row->clTamanoGrano; ?> COMPARATIVA ASTM E-112</td>                 
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
						<td class="borde" align="center"><input type="text" size="30"></td>
						<td align="center"><input class="sinborde" type="text"></td>
						<td class="borde" align="center"><input type="text" size="30"></td>
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
		</div><!--borde-->
	</div><!--center-->
</div><!--saltopag-->
<?php
}
?>
</form>
</body>
</html>
