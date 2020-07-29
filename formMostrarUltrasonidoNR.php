<?php
// Desactivar toda las notificaci�nes del PHP xd
//error_reporting(0);
ini_set("session.cookie_lifetime", "14400");
ini_set("session.gc_maxlifetime", "14400");
//var sesion
session_start();

if (isset($_SESSION['tecnico'])) {
	$tec = $_SESSION['tecnico'];
	$clNumReporte = $_SESSION['clNumReporte'];
} else {
	header("location:notFound.html");
	die();
}
?>
<?php
require 'bocaTuboDAO.php';
$bdt = new bocaDeTubo();
//$forReportes = $bdt->buscarReporte("tt");
$forReportes = $bdt->buscarReporte($clNumReporte);
foreach ($forReportes as $row) {
}
require 'clientesDAO.php';
$cl = new Cliente();
$cliente = $cl->buscar($row->cacliente_clCliente);
foreach ($forReportes as $row) {
?>
	<!DOCTYPE html>

	<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<!-- ICONO PESTA�A -->
		<link href="img/IC.png" rel="icon">
		<meta charset="utf8_general_ci">
		<title>Informe de Liquidos</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/for_metalografia.css" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script>
			$(function() {
				$('#fileContents').val(document.documentElement.innerHTML);

			});
		</script>
	</head>

	<body>
		<div class="saltopaginas">
			<div id="center" align="center">
				<div class="encabezado">
					<table width="981" height="80" border="1">
						<tr>
							<td id="centrado" width="553">FORMATO</td>
							<td id="centrado" width="100">CODIGO</td>
							<td id="centrado" width="100">FOR-PINS-12</td>
							<td id="centrado" width="200" rowspan="3" onclick="location.href='formBuscarNr.php'"><span><img src="./img/icon.png" alt="sample"></span></td>
						</tr>
						<tr>
							<td rowspan="2" id="negrita">INFORME DE INSPECCIÓN ULTRASÓNICA
								CON HAZ RECTO EN BOCA DE TUBERIA</td>
							<td id="centrado">VERSION</td>
							<td id="centrado">0</td>
						</tr>
						<tr>
							<td id="centrado">PAGINA</td>
							<td id="centrado"><label contenteditable="true">X DE X</label></td>
						</tr>
					</table>
				</div>
			</div>
			<br>
			<br>
			<div id="center" align="center">
				<div class="borde">
					<div class="cuerpo">
						<table width="981" border="0">
							<tr>
								<td id="centrado">FECHA:</td>
								<td><input type="text" name="fecha" size="60" value="<?php echo  $row->feTecnico; ?>" class="sinborde" readonly="readonly"></td>
								<td>LUGAR:</td>
								<td><textarea style="max-width:598px;" id="textA" name="trazabilidad" style="overflow-y:hidden" class="sinborde" cols="80" readonly="readonly"><?php echo  $row->deLugar; ?></textarea>

							</tr>
						</table>
					</div>
					<br>
					<div class="cuerpo">
						<table width="981" border="0">
							<tr>
								<td>CLIENTE:</td>
								<td><input type="text" name="cliente" class="sinborde" value="<?php echo $cliente ?>" size="80" readonly="readonly"></td>
								<td>CONTRATO:</td>
								<td colspan="2"><input type="text" name="contrato" value="<?php echo  $row->clContrato; ?>" class="sinborde" size="53" readonly="readonly"></td>
							</tr>
							</tr>
						</table>
					</div>
					<br>
					<div class="cuerpo">
						<table width="981" border="0">
							<tr>
								<td>PROYECTO:</td>
								<td colspan="5"><textarea id="textA" style="max-width:915px; min-width:322px;" cols="220" style="overflow-y:hidden" readonly="readonly" class="sinborde" name="descripcion"><?php echo  $row->deProyecto; ?></textarea>

							</tr>
						</table>
					</div>
					<br>
					<div class="cuerpo">
						<table width="981" border="0">
							<tr>
								<td>NUMERO DE REPORTE:</td>
								<td><input type="text" name="reporte" value="<?php echo  $row->clNumReporte; ?>" class="sinborde" size="50" readonly="readonly"></td>
								<td> N° DE PLANO:</td>
								<td> <input type="text" name="folio" class="sinborde" value="<?php echo  $row->clPlano; ?>" size="55" readonly="readonly"></td>

						</table>
					</div>
					<br>
					<div class="cuerpo">
						<table width="981" border="0">
							<tr>
								<td>DESCRIPCI&Oacute;N DEL TRABAJO Y NOTAS:</td>
								<td colspan="5"><textarea id="textA" style="max-width:750px; min-width:750px;" cols="125" readonly="readonly" class="sinborde"><?php echo  $row->deDescripcion; ?></textarea></td>
							</tr>
						</table>
					</div>
					<br>
					<div class="cuerpo">
						<table width="981" border="0">
							<tr>
								<td>CODIGO UTILIZADO: </td>
								<td><input type="text" name="cliente" class="sinborde" value="<?php echo  $row->clCodigo; ?>" size="63" readonly="readonly"></td>
								<td>MATERIAL: </td>
								<td><input type="text" name="cliente" class="sinborde" value="<?php echo  $row->deMaterial; ?>" size="63" readonly="readonly"></td>

							</tr>
						</table>
					</div>

				</div>
				<!--borde-->
				<br>
				<br>
				<div style="overflow-x:auto;" class="cuerpo">
					<table style="max-width: 981px; min-width: 700px" border="1">
						<thead>
							<tr style="height: 33px;">
								<th style="width: 361px; height: 33px; background-color: antiquewhite;" colspan="2">EQUIPO</th>
								<th style="width: 538px; height: 33px; background-color: antiquewhite;" colspan="4">TRANSDUCTOR</th>
								<th style="width: 389px; height: 33px; background-color: antiquewhite;" colspan="2">ACOPLANTE</th>
							</tr>
						</thead>
						<tbody>
							<tr style="height: 27px;">
								<td style="background-color: darkgray; height: 27px; ">MARCA:</td>
								<td style="width: 297px; height: 27px; text-align: center;"><input class="sinborde" type="text" style="text-align: center" value="<?php echo $row->deMarca; ?>"></td>
								<td style="background-color: darkgray; height: 27px;">MARCA:</td>
								<td style="width: 490px; height: 27px; text-align: center;" colspan="3"><input class="sinborde" style="text-align: center" type="text" value="<?php echo $row->deMarca2; ?>"></td>
								<th style=" height: 27px;" colspan="2">BLOQUE</th>
							</tr>
							<tr style="height: 27px; ">
								<td style="background-color: darkgray; height: 27px;">MODELO:</td>
								<td style="width: 297px; height: 27px; text-align: center; "><input class="sinborde" style="text-align: center;" type="text" value="<?php echo $row->deModelo; ?>"></td>
								<td style="background-color: darkgray; height: 27px;">MODELO:</td>
								<td style="width: 490px; height: 27px; text-align: center;" colspan="3"><input class="sinborde" style="text-align: center;" type="text" value="<?php echo $row->deModelo2; ?>"></td>
								<td style="background-color: darkgray; height: 27px;">TIPO:</td>
								<td style="width: 327px; height: 27px; text-align: center;"><input class="sinborde" type="text" style="text-align: center;" value="<?php echo $row->deTipo; ?>"></td>
							</tr>
							<tr style="height: 27px;">
								<td style="background-color: darkgray; height: 27px;">N.S.</td>
								<td style="width: 297px; height: 27px; text-align: center;"><input class="sinborde" type="text" style="text-align: center;" value="<?php echo $row->deNs; ?>"></td>
								<td style="background-color: darkgray; height: 27px;">N.S.</td>
								<td style="width: 190px; height: 27px; text-align: center;"><input class="sinborde" type="text" style="text-align: center;" value="<?php echo $row->deNs2; ?>"></td>
								<td style="background-color: darkgray; height: 27px;">FREC:</td>
								<td style="width: 227px; height: 27px; text-align: center;"><input class="sinborde" type="text" style="text-align: center;" value="<?php echo $row->deFrec; ?>"></td>
								<td style="background-color: darkgray; height: 27px;">N.S.</td>
								<td style="width: 327px; height: 27px; text-align: center;"><input class="sinborde" type="text" style="text-align: center;" value="<?php echo $row->deNs3; ?>"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<br>
				<br>
				<div style="overflow-x:auto;" class="cuerpo flip-scroll">
					<table border="1" class="cf" style="height: 50px; max-width: 981px; min-width: 700px;">
						<tbody>
							<tr style="height: 33px;">
								<th style=" text-align: center; height: 27px; background-color: antiquewhite;" colspan="11">Ajuste del Equipo</th>
							</tr>
							<tr style="height: 27px;">
								<td style="background-color: darkgray;">GANANCIA:</td>
								<td style="width: 190px; text-align: center;"><input class="sinborde" type="text" style="text-align: center;" value="<?php echo $row->deGanancia; ?>"></td>
								<td style="background-color: darkgray;">TIPO:</td>
								<td style="width: 190px; text-align: center;" colspan="2"><input class="sinborde" type="text" style="text-align: center;" value="<?php echo $row->deTipo; ?>"></td>
								<td style="background-color: darkgray;">RANGO:</td>
								<td style="width: 190px; text-align: center;"><input class="sinborde" type="text" style="text-align: center;" value="<?php echo $row->deRango; ?>"></td>
								<td style="background-color: darkgray;">MODO:</td>
								<td style="width: 190px; text-align: center;"><input class="sinborde" type="text" style="text-align: center;" value="N/A"></td>
								<td style="background-color: darkgray;">NIVEL DAC:</td>
								<td style="width: 190px; text-align: center;"><input class="sinborde" type="text" style="text-align: center;" value="<?php echo $row->deNivelDac; ?>"></td>
							</tr>
							<tr style="height: 27px;">
								<td style="width: 190px;background-color: darkgray;">RETRASO:</td>
								<td style="text-align: center;">N/A</td>
								<td style="width: 190px;background-color: darkgray;">RECHAZO:</td>
								<td style="text-align: center;" colspan="2"><input class="sinborde" type="text" style="text-align: center;" value="<?php echo $row->deRechazo; ?>"></td>
								<td style="width: 190px;background-color: darkgray;">HAZ RECTO:</td>
								<td style="text-align: center;">N/A</td>
								<td style="width: 190px;background-color: darkgray;">HAZ ANGULAR:</td>
								<td style="text-align: center;">N/A</td>
								<td style="width: 190px;background-color: darkgray;">VOLTAJE:</td>
								<td style="text-align: center;"><input class="sinborde" type="text" style="text-align: center;" value="<?php echo $row->voltaje; ?>"></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<br>
		</div>
		<!--center-->
		</div>
		<!--saltopagina-->
		<br>
		<!--*********************Segunda hojaaaa*********************************-->
		<div style='page-break-after:always' class="saltopaginas">
			<br>
			<div id="center" align="center">
				<table width="970" border="3">
					<tr>
						<td align="center">REGISTRO FOTOGRAFICO</td>
					</tr>
					<tr>
						<td>
							<table width="970" border="0">
					</tr>
					<td width="470" height="300">
						<div id="preview"> <img src="./img/bocaTubo/<?php echo  $row->deImagen1; ?>"> </div>
					</td>
					<td width="470" height="300">
						<div id="apreview"> <img src="./img/bocaTubo/<?php echo  $row->deImagen2; ?>"></div>
					</td>
					</tr>
					<tr>
						<td align="center"><input size="50" class="sinborde" value="<?php echo  $row->deDescripcion1; ?>"></td>
						<td align="center"><input size="50" class="sinborde" value="<?php echo  $row->deDescripcion2; ?>"></td>
					</tr>
					<tr>
						<td width="470" height="300">
							<div id="bpreview"> <img src="./img/bocaTubo/<?php echo  $row->deImagen3; ?>"></div>
						</td>
						<td width="470" height="300">
							<div id="cpreview"> <img src="./img/bocaTubo/<?php echo  $row->deImagen4; ?>"></div>
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
			</div>
			<!--DIV encabezado-->
		</div>
		<!--borde-->
		</div>
		<!--borde-->
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
						<input class="inputfinales" type="text" size="46" value="<?php echo  $row->deFirma2; ?>">
						<br>
						<textarea class="inputfinales2" id="textA2" rows="3" cols="300px" style="max-width:300px;" style="font-weight: bold;"><?php echo  $row->deEmpresa2; ?></textarea>
					<td>
						<input class="inputfinales" type="text" size="46" value="<?php echo  $row->deFirma3; ?>">
						<br>
						<textarea class="inputfinales2" id="textA2" rows="3" cols="300px" style="max-width:300px;" style="font-weight: bold;"><?php echo  $row->deEmpresa3; ?></textarea>
				</tr>
			</table>
		</div>
		</div>
		<!--center-->
		</div>
		<!--saltopag-->
	<?php
}
	?>
	<form class="float" action="" method="post">
		<div style="display:none;">
			<input type="text" name="fileContents" id="fileContents" value='' />
			<input type="text" name="fileName" id="fileName" value='ReporteBocaTubo.pdf' />
			<input type="text" name="css" value='./pdf.css' />
		</div>
		<input type="image" class="" onclick=this.form.action="descargarpdf.php" src="./img/pdf.png" id="createPdf" />
	</form>

	</body>

	</html>