<?php
// Desactivar toda las notificaciónes del PHP xd
//error_reporting(0);
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
    require 'liquidosDAO.php';
        $l = new Liquidos();
		//$forReportes = $l->buscarReporte("tt");
        $forReportes = $l->buscarReporte($reporteS);
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
			<title>Informe de Liquidos</title>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="css/for_metalografia.css" type="text/css">
		</head>
    <body>
	<div id="center" align="center">
        <div class="encabezado">
            <table width="981" height="80" border="1">
                <tr>
                    <td id="centrado" width="553">FORMATO</td>
                    <td id="centrado" width="100">CODIGO</td>
                    <td id="centrado" width="100">FOR-PINS-06</td>
                    <td id="centrado" width="200" rowspan="3"onclick="location.href='index2.php'"><span><img src="img/icon.png" alt="sample"></span></td>
                </tr>
                <tr>
                    <td rowspan="2" id="negrita">INFORME DE INSPECCION CON LIQUIDOS PENETRANTES</td>
                    <td id="centrado">VERSION</td>
                    <td id="centrado">1</td>
                </tr>
                <tr>
                    <td id="centrado">PAGINA</td>
                    <td id="centrado"><label contenteditable="true">X DE X</label></td>
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
						<td width="134">FOLIO:</td>
						<td width="250"><input type="text" name="folio" class="sinborde" value="<?php echo  $row->clFolio; ?>" size="35" readonly="readonly"></td>
						<td width="140">NUMERO DE REPORTE:</td>
						<td width="300" colspan="2"><input type="text" name="reporte" value="<?php echo  $row->clNumReporte; ?>" class="sinborde" size="25" readonly="readonly"></td>
						<td id="centrado" width="110">FECHA:</td>
						<td width="157"><input type="text" name="fecha" size="18" value="<?php echo  $row->feTecnico; ?>" class="sinborde" readonly="readonly"></td>
					</tr>
				</table>
			</div>
			<br>
			<div class="cuerpo">
				<table width="981" border="0">
					<tr>
						<td width="134">LUGAR:</td>
						<td colspan="2"><textarea style="max-width:598px;" id="textA" name="trazabilidad" style="overflow-y:hidden" class="sinborde"  cols="100" readonly="readonly"><?php echo  $row->deLugar; ?></textarea>
						<td width="79">PLANO:</td>
						<td width="350" colspan="2"><input type="text" name="plano" value="<?php echo  $row->clPlano; ?>" class="sinborde" size="19" readonly="readonly"></td>
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
			<br>
			<div class="cuerpo">
				<table width="981" border="0">
					<tr>
						<td width="150">CODIGO DE INSPECCION:</td>
						<td width="317"><input type="text" name="cliente" class="sinborde" value="<?php echo  $row->clCod_Inspeccion; ?>" size="63" readonly="readonly"></td>
						<td width="120">PROCEDIMIENTO:</td>
						<td width="340" colspan="2"><input type="text" name="procedimiento" value="PRO-PINS-06" class="sinborde" size="43" readonly="readonly"></td>
					</tr>
				</table>
			</div>
		</div><!--borde-->
		<br>
		<div class="cuerpo">
			<table width="981" border="1" height="70">
				<tr>
					<td colspan="7" class="fields">MATERIALES USADOS</td>
			    </tr>
				<tr>
					<td class="fields">CONSUMIBLE</td>
					<td class="fields">MARCA</td>
					<td class="fields">MODELO</td>
					<td class="fields">LOTE</td>
					<td class="fields">TIEMPO</td>
					<td class="fields">APLICACION</td>
					<td class="fields">TIPO</td>
				</tr>
				<tr align="center">
					<td>PENETRANTE</td>
					<td><input type="text" class="sinborde" size="10" value="<?php echo $row->deMarca1; ?>"></td>
					<td><input type="text" class="sinborde" size="10" value="<?php echo $row->deModelo1; ?>"></td>
					<td><input type="text" class="sinborde" size="10" value="<?php echo $row->deLote1; ?>"></td>
					<td><input type="text" class="sinborde" size="10" value="<?php echo $row->deTiempo1; ?>"></td>
					<td><input type="text" class="sinborde" size="10" value="<?php echo $row->deAplicacion1; ?>"></td>
					<td><input type="text" class="sinborde" size="10" value="<?php echo $row->deTipo1; ?>"></td>	
				</tr>
				<tr align="center">
					<td>REMOVEDOR</td>
					<td><input type="text" class="sinborde" size="10" value="<?php echo  $row->deMarca1; ?>"></td>
					<td align="center"><input type="text" class="sinborde" size="10" value="<?php echo $row->deModelo2; ?>"></td>
					<td align="center"><input type="text" class="sinborde" size="10" value="<?php echo $row->deLote2; ?>"></td>
					<td align="center">NA</td>
					<td align="center"><input type="text" class="sinborde" size="10" value="<?php echo $row->deAplicacion2; ?>"></td>
					<td align="center"><input type="text" class="sinborde" size="10" value="<?php echo $row->deTipo2; ?>"></td>
				</tr>
				<tr align="center">
					<td>REVELADOR</td>
					<td><input type="text" class="sinborde" size="10" value="<?php echo  $row->deMarca3; ?>"></td>
					<td align="center"><input type="text" class="sinborde" size="10" value="<?php echo $row->deModelo3; ?>"></td>
					<td align="center"><input type="text" class="sinborde" size="10" value="<?php echo $row->deLote3; ?>"></td>
					<td align="center"><input type="text" class="sinborde" size="10" value="<?php echo $row->deTiempo3; ?>"></td>
					<td align="center"><input type="text" class="sinborde" size="10" value="<?php echo $row->deAplicacion3; ?>"></td>
					<td align="center"><input type="text" class="sinborde" size="10" value="<?php echo $row->deTipo3; ?>"></td>
				</tr>
			</table>
		</div>
		<br>
		<div class="borde">
			<div class="cuerpo">
				<table width="981" border="0">
					<tr>
						<td width="134">TIPO DE MATERIAL:</td>
						<td width="317"><input type="text" name="cliente" class="sinborde"  size="66" readonly="readonly" value="<?php echo  $row->deTipoMaterial; ?>"></td>
						<td width="120">COMPONENTE:</td>
						<td width="340" colspan="2"><input type="text" name="contrato" class="sinborde" size="43" readonly="readonly" value="<?php echo  $row->deComponente; ?>"></td>
					</tr>
				</table>
			</div>
			<br>
			<div class="cuerpo">
				<table width="981" border="0">
					<tr>
						<td width="170">CONDICION SUPERFICIAL:</td>
						<td width="317"><input type="text" name="cliente" class="sinborde" size="66" readonly="readonly" value="<?php echo  $row->deCondicion_Sup; ?>"></td>
						<td width="120">TEMPERATURA:</td>
						<td width="340" colspan="2"><input type="text" name="contrato" class="sinborde" size="37" readonly="readonly" value="<?php echo  $row->deTemperatura; ?>"></td>
					</tr>
				</table>
			</div>
			<br>
			<div class="cuerpo">
				<table width="981" border="0">
					<tr>
						<td width="230">TIPO DE LUZ:</td>
						<td width="317"><input type="text" class="sinborde" size="66" value="<?php echo  $row->deTipo_Luz; ?>"></td>
						<td width="150">INTENSIDAD:</td>
						<td width="340"><input type="text" class="sinborde" size="51" value="<?php echo  $row->deIntensidad; ?>"></td>
					</tr>
				</table>
			</div>
		</div>
		<br>
		<div class="cuerpo">
			<table width="981" height="180" border="1">
				<caption class="title"></caption>   
				<thead>
                    <tr class="fields">
                        <td colspan="5" align="center">RESULTADOS</td>
                    </tr>
                    <tr class="fields">
                        <td colspan="5">PIEZA: <input class="sinborde" type="text" name="pieza" size="110" style="background-color:C0C0BF;" disabled></td>
                    </tr>
                    <tr class="fields">
                        <th>JUNTA</th>
                        <th>LONGITUD EN m</th>
                        <th>DISCONTINUIDAD</th>
                        <th>EVALUACION</th>
                        <th>OBSERVACIONES</th>
                    </tr>
                </thead>
				<tbody>
				</tbody>
			</table>
		</div>
		<div class="footerParticulas">
			<table width="981" border="0" align="center">
				<tr>
					<td class="borde" align="center"><input type="text"></td>
					<td class="borde" align="center"><input type="text"></td>
					<td class="borde" align="center"><input type="text"></td>
				</tr>
				<!--tr>
					<td><input type="text" placeholder="Nombre y firma" class="sinborde" size="30"></td>
					<td><input type="text" placeholder="Nombre y firma" class="sinborde" size="30"></td>
					<td><input type="text" placeholder="Nombre y firma" class="sinborde" size="30"></td>
				</tr-->
				<tr>
					<td>
					<input class="inputfinales" type="text" size="46" value="<?php echo  $row->deFirma1; ?>">
					<br>
					<textarea class="inputfinales2" id="textA2" cols="300px" rows="3" style="max-width:300px;" style="font-weight: bold;"><?php echo  $row->deEmpresa1; ?></textarea>
					<td>
					<input class="inputfinales" type="text"  size="46" value="<?php echo  $row->deFirma2; ?>">
					<br>
					<textarea class="inputfinales2" id="textA2" rows="3" cols="300px" style="max-width:300px;"  style="font-weight: bold;"><?php echo  $row->deEmpresa2; ?></textarea>
					<td>
					<input class="inputfinales" type="text"  size="46" value="<?php echo  $row->deFirma3; ?>">
					<br>
					<textarea class="inputfinales2" id="textA2" rows="3" cols="300px" style="max-width:300px;"  style="font-weight: bold;"><?php echo  $row->deEmpresa3; ?></textarea>
				</tr>
			</table>
		</div>
    </div><!--center-->
</div><!--saltopagina-->
<br>
<!--*********************Segunda hojaaaa*********************************-->
<div class="saltopagina">
	<div id="center" align="center">
		<div class="encabezado">
			<table width="981" height="80" border="1">
				<tr>
					<td id="centrado" width="553">FORMATO</td>
					<td id="centrado" width="100">CODIGO</td>
					<td id="centrado" width="100">FOR-PINS-05</td>
					<td id="centrado" width="200" rowspan="3"onclick="location.href='index2.php'"><span><img src="img/icon.png" alt="sample"></span></td>
				</tr>
				<tr>
					<td rowspan="2" id="negrita">INFORME DE INSPECCION CON LIQUIDOS PENETRANTES</td>
					<td id="centrado">VERSION</td>
					<td id="centrado">1</td>
				</tr>
				<tr>
					<td id="centrado">PAGINA</td>
					<td id="centrado"><label contenteditable="true">X DE X</label></td>
				</tr>
			</table>
		</div>
	</div>
	<br>       
	<div id="center" align="center">
		<div class="borde">
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
						<td width="134">FOLIO:</td>
						<td width="250"><input type="text" name="folio" class="sinborde" value="<?php echo  $row->clFolio; ?>" size="35" readonly="readonly"></td>
						<td width="140">NUMERO DE REPORTE:</td>
						<td width="300" colspan="2"><input type="text" name="reporte" value="<?php echo  $row->clNumReporte; ?>" class="sinborde" size="25" readonly="readonly"></td>
						<td id="centrado" width="110">FECHA:</td>
						<td width="157"><input type="text" name="fecha" size="18" value="<?php echo  $row->feTecnico; ?>" class="sinborde" readonly="readonly"></td>
					</tr>
				</table>
			</div>
			<br>
			<div class="cuerpo">
				<table width="981" border="0">
					<tr>
						<td width="134">LUGAR:</td>
						<td colspan="2"><textarea style="max-width:598px;" id="textA" name="trazabilidad" style="overflow-y:hidden" class="sinborde"  cols="100" readonly="readonly"><?php echo  $row->deLugar; ?></textarea>
						<td width="79">PLANO:</td>
						<td width="350" colspan="2"><input type="text" name="plano" value="<?php echo  $row->clPlano; ?>" class="sinborde" size="19" readonly="readonly"></td>
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
			<br>
			<div class="cuerpo">
				<table width="981" border="0">
					<tr>
						<td width="150">CODIGO DE INSPECCION:</td>
						<td width="317"><input type="text" name="cliente" class="sinborde" value="<?php echo  $row->clCod_Inspeccion; ?>" size="63" readonly="readonly"></td>
						<td width="120">PROCEDIMIENTO:</td>
						<td width="340" colspan="2"><input type="text" name="procedimiento" value="PRO-PINS-05" class="sinborde" size="43" readonly="readonly"></td>
					</tr>
				</table>
			</div>
			<br>
			<div class="encabezado">
				<table width="970" border="3">
					<tr>
						<td align="center">REGISTRO FOTOGRAFICO</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>
							<table width="970" border="0">
								</tr>
									<td width="470" height="300">
										<div id="preview"> <img src="img/liquidos/<?php echo  $row->deImagen1; ?>"> </div>
									</td>
									<td width="470" height="300">
										<div id="apreview"> <img src="img/liquidos/<?php echo  $row->deImagen2; ?>"></div>
									</td>
								</tr>
								<tr>
									<td align="center"><input size="50" class="sinborde" value="<?php echo  $row->deDescripcion1; ?>"></td>
									<td align="center"><input size="50" class="sinborde" value="<?php echo  $row->deDescripcion2; ?>"></td>
								</tr>
								<tr>
									<td width="470" height="300">
										<div id="bpreview"> <img src="img/liquidos/<?php echo  $row->deImagen3; ?>"></div>
									</td>
									<td width="470" height="300">
										<div id="cpreview"> <img src="img/liquidos/<?php echo  $row->deImagen4; ?>"></div>
									</td>
								</tr>
								<tr>
									<td align="center"><input size="50" class="sinborde" value="<?php echo  $row->deDescripcion3; ?>"></td>
									<td align="center"><input size="50" class="sinborde" value="<?php echo  $row->deDescripcion4; ?>"></td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</div><!--DIV encabezado-->
		</div><!--borde--></div><!--borde-->
		<div class="footerParticulas">
			<table width="981" border="0" align="center">
				<tr>
					<td class="borde" align="center"><input type="text"></td>
					<td class="borde" align="center"><input type="text"></td>
					<td class="borde" align="center"><input type="text"></td>
				</tr>
				<!--tr>
					<td><input type="text" placeholder="Nombre y firma" class="sinborde" size="30"></td>
					<td><input type="text" placeholder="Nombre y firma" class="sinborde" size="30"></td>
					<td><input type="text" placeholder="Nombre y firma" class="sinborde" size="30"></td>
				</tr-->
				<tr>
					<td>
					<input class="inputfinales" type="text" size="46" value="<?php echo  $row->deFirma1; ?>">
					<br>
					<textarea class="inputfinales2" id="textA2" cols="300px" rows="3" style="max-width:300px;" style="font-weight: bold;"><?php echo  $row->deEmpresa1; ?></textarea>
					<td>
					<input class="inputfinales" type="text"  size="46" value="<?php echo  $row->deFirma2; ?>">
					<br>
					<textarea class="inputfinales2" id="textA2" rows="3" cols="300px" style="max-width:300px;"  style="font-weight: bold;"><?php echo  $row->deEmpresa2; ?></textarea>
					<td>
					<input class="inputfinales" type="text"  size="46" value="<?php echo  $row->deFirma3; ?>">
					<br>
					<textarea class="inputfinales2" id="textA2" rows="3" cols="300px" style="max-width:300px;"  style="font-weight: bold;"><?php echo  $row->deEmpresa3; ?></textarea>
				</tr>
			</table>
		</div>
	</div><!--center-->
</div><!--saltopag-->
<?php
}
?>
</form>
</body>
</html>
