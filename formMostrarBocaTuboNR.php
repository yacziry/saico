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
	$sessionID = !isset($_SESSION['tecnico']) ? $_COOKIE['tecnico'] : $_SESSION['tecnico'];
	$galletita = $_COOKIE['PHPSESSID'];
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
		<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" type="text/css">
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
		<script>
			$(function() {
				$('#fileContents').val(document.documentElement.innerHTML);

			});
		</script>
	</head>

	<body>
		<div class="mt-5">
			<div id="center" align="center">
				<div class="encabezado">
					<table width="1312" height="80" border="1">
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
						<table width="1312" border="0">
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
						<table width="1312" border="0">
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
						<table width="1312" border="0">
							<tr>
								<td>PROYECTO:</td>
								<td colspan="5"><textarea id="textA" style="max-width:915px; min-width:322px;" cols="220" style="overflow-y:hidden" readonly="readonly" class="sinborde" name="descripcion"><?php echo  $row->deProyecto; ?></textarea>

							</tr>
						</table>
					</div>
					<br>
					<div class="cuerpo">
						<table width="1312" border="0">
							<tr>
								<td>NUMERO DE REPORTE:</td>
								<td><input type="text" name="reporte" value="<?php echo  $row->clNumReporte; ?>" class="sinborde" size="50" readonly="readonly"></td>
								<td> N° DE PLANO:</td>
								<td> <input type="text" name="folio" class="sinborde" value="<?php echo  $row->clPlano; ?>" size="55" readonly="readonly"></td>

						</table>
					</div>
					<br>
					<div class="cuerpo">
						<table width="1312" border="0">
							<tr>
								<td>DESCRIPCI&Oacute;N DEL TRABAJO Y NOTAS:</td>
								<td colspan="5"><textarea id="textA" style="max-width:750px; min-width:750px;" cols="125" readonly="readonly" class="sinborde"><?php echo  $row->deDescripcion; ?></textarea></td>
							</tr>
						</table>
					</div>
					<br>
					<div class="cuerpo">
						<table width="1312" border="0">
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
					<table style="width: 1312px; min-width: 700px" border="1">
						<thead>
							<tr style="height: 33px;">
								<th style="width: 361px; height: 33px; text-align: center; background-color: antiquewhite;" colspan="2">EQUIPO</th>
								<th style="width: 538px; height: 33px; text-align: center; background-color: antiquewhite;" colspan="4">TRANSDUCTOR</th>
								<th style="width: 389px; height: 33px; text-align: right; background-color: antiquewhite;" colspan="1">ACOPLANTE:</th>
								<th style="width: 389px; height: 33px; text-align: center;" colspan="1"><?php echo $row->deAcoplante; ?></th>
							</tr>
						</thead>
						<tbody>
							<tr style="height: 27px;">
								<td style="background-color: darkgray;  height: 27px; ">MARCA:</td>
								<td style="width: 297px; height: 27px; text-align: center;"><input class="sinborde" type="text" style="text-align: center" value="<?php echo $row->deMarca; ?>"></td>
								<td style="background-color: darkgray; height: 27px;">MARCA:</td>
								<td style="width: 490px; height: 27px; text-align: center;" colspan="3"><input class="sinborde" style="text-align: center" type="text" value="<?php echo $row->deMarca2; ?>"></td>
								<th style="background-color: darkgray; height: 27px; text-align: center;" colspan="2">BLOQUE</th>
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
				<div style="overflow-x:auto;" class="cuerpo">
					<table border="1" style="height: 50px; min-width: 700px; width: 1312px;">
						<tbody>
							<tr style="height: 33px;">
								<th style=" text-align: center; height: 27px; background-color: antiquewhite;" colspan="11">Ajuste del Equipo</th>
							</tr>
							<tr style="height: 27px;">
								<td style="text-align: center; background-color: darkgray; width:8%;">GANANCIA:</td>
								<td style="text-align: center;"><span><?php echo $row->deGanancia; ?></span>
								<td style="text-align: center; background-color: darkgray; width:8%;">TIPO:</td>
								<td style="text-align: center;" colspan="2"><span><?php echo $row->deTipo; ?></span>
								<td style="text-align: center; background-color: darkgray;width:9%;">NIVEL DAC:</td>
								<td style="text-align: center;"><span><?php echo $row->deNivelDac; ?></span>
								<td style="text-align: center; background-color: darkgray;">RANGO:</td>
								<td style="text-align: center;"><span><?php echo $row->deRango; ?></span>
								<td style="text-align: center; background-color: darkgray;">RECHAZO:</td>
								<td style="text-align: center;"><span><?php echo $row->deGanancia; ?></span>
							</tr>
							<tr style="height: 27px;">

							</tr>
						</tbody>
					</table>
				</div>
				<div style="overflow-x: auto; width: 1312px; max-width: 1540px;" class="cuerpo" align="center">
					<table class="table table-condensed table-bordered">
						<thead>
							<tr style="text-align: center;">
								<th style="background-color: #f2f4f5;" colspan="7">DATOS DEL MATERIAL</th>
								<th style="background-color: #b85f1730;" colspan="5">DATOS DE LA DISCONTINUIDAD</th>
								<th style="background-color: #21abb630;" colspan="4">RESULTADOS DE LA INSPECCI&Oacute;N</th>
							</tr>
						</thead>
						<thead>
							<tr style="text-align: center;">
								<th style="background-color: #f2f4f5;">ID</th>
								<th style="background-color: #f2f4f5; width: 80px;">Elemento / Trazabilidad</th>
								<th style="background-color: #f2f4f5; width: 80px">Di&aacute;metro IN</th>
								<th style="background-color: #f2f4f5; width: 80px">No. Aceptaci&oacute;n</th>
								<th style="background-color: #f2f4f5; width: 80px">No. Serie</th>
								<th style="background-color: #f2f4f5; width: 80px">No. Colada</th>
								<th style="background-color: #f2f4f5; width: 80px">Espesor nominal</th>
								<th style="background-color: #b85f1730;">No. De indicaci&oacute;n</th>
								<th style="background-color: #b85f1730;">Largo</th>
								<th style="background-color: #b85f1730;">Ancho</th>
								<th style="background-color: #b85f1730;">Desde "X"</th>
								<th style="background-color: #b85f1730;">Desde "Y"</th>
								<th style="background-color: #21abb630;">Espesor Maximo Detectado</th>
								<th style="background-color: #21abb630;">Espesor Minimo Detectado</th>
								<th style="background-color: #21abb630;">Area de Barrido</th>
								<th style="background-color: #21abb630;">Resultado</th>
							</tr>
						</thead>

						<tbody id="tablaReportes">
							<tr>
								<td style='height: 26px;' class='id'><input name='id[]' style='width: 40px;' required></td>
								<td style='height: 26px;' class='elemento'><input name='elemento[]' style='width: 80px;' required></td> 
								<td style='height: 26px;' class='diametro'><input name='diametro[]' style='width: 80px;' required></td>
								<td style='height: 26px;' class='noDeAceptacion'><input name='noDeAceptacion[]' style='width: 105px;' required></td>
								<td style='height: 26px;' class='noDeSerie'><input name='noDeSerie[]' style='width: 80px;' required></td>
								<td style='height: 26px;' class='noDeColada'><input name='noDeColada[]' style='width: 80px;' required></td>
								<td style='height: 26px;' class='espesorNominal'><input name='espesorNominal[]' style='width: 110px;' required></td>
								<td style='height: 26px;' class='indicacion'><input name='indicacion[]' style='width: 80px;' required></td>
								<td style='height: 26px;' class='largo'><input name='largo[]' style='width: 60px;' required></td>
								<td style='height: 26px;' class='ancho'><input name='ancho[]' style='width: 60px;' required></td>
								<td style='height: 26px;' class='desdeX'><input name='desdeX[]' style='width: 60px;' required></td>
								<td style='height: 26px;' class='desdeY'><input name='desdeY[]' style='width: 60px;' required></td>
								<td style='height: 26px;' class='espesorMax'><input name='espesorMax[]' style='width: 80px;' required></td>
								<td style='height: 26px;' class='espesorMin'><input name='espesorMin[]' style='width: 80px;' required></td>
								<td style='height: 26px;' class='areaBarrido'><input name='areaBarrido[]' style='width: 80px;' required></td>
								<td style='height: 26px;' class='resultado'><input name='resultado[]' style='width: 80px;' required></td>
							</tr>
						</tbody>
					</table>
				</div>
				<!--*********************Segunda hojaaaa*********************************-->
				<div style='page-break-before:always; text-align: -webkit-center;' class="saltopaginas">
					<br>
					<table border="1" style="max-width: 981px; box-shadow: 0px 0px 5px grey; " class="table mb-5 table-condensed table-bordered">
						<tbody>
							<tr>
								<td style="text-align: center;" colspan="2">RESULTADO FOTOGR&Aacute;FICO&nbsp;&nbsp;</td>
							</tr>
							<tr>
								<td style="text-align: center;" class="imgTablaCentrada ">
									<figure class="figure">
										<img src="./img/bocaTubo/<?php echo  $row->deImagen1; ?>" width="250" height="250" class="figure-img img-fluid rounded text-center" alt="<?php echo  $row->deDescripcion1; ?>">
										<figcaption class="figure-caption text-center"><?php echo  $row->deDescripcion1; ?></figcaption>
									</figure>
								</td>
								<td style="text-align: center;" class="imgTablaCentrada">
									<figure class="figure">
										<img src="./img/bocaTubo/<?php echo  $row->deImagen2; ?>" width="250" height="250" class="figure-img img-fluid rounded" alt="<?php echo  $row->deDescripcion2; ?>">
										<figcaption class="figure-caption text-center"><?php echo  $row->deDescripcion2 ?></figcaption>
									</figure>
								</td>
							</tr>
							<tr>
								<td style="text-align: center;" class="imgTablaCentrada">
									<figure class="figure">
										<img src="./img/bocaTubo/<?php echo  $row->deImagen3; ?>" width="250" height="250" class="figure-img img-fluid rounded" alt="<?php echo  $row->deDescripcion3; ?>">
										<figcaption class="figure-caption text-center"><?php echo  $row->deDescripcion3; ?></figcaption>
									</figure>
								</td>
								<td style="text-align: center;" class="imgTablaCentrada ">
									<figure class="figure">
										<img src="./img/bocaTubo/<?php echo  $row->deImagen4; ?>" width="250" height="250" class="figure-img img-fluid rounded" alt="<?php echo  $row->deDescripcion4; ?>">
										<figcaption class="figure-caption text-center"><?php echo  $row->deDescripcion4; ?></figcaption>
									</figure>
								</td>
							</tr>
						</tbody>
					</table>
					<!--DIV encabezado-->
					<!--borde-->
					<div class="footerParticulas mt-5">
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
								<td align="center">
									<span class="inputfinales" size="46"><?php echo  $row->deFirma1; ?></span>
									<br>
									<span class="inputfinales2" size="46"><?php echo  $row->deEmpresa1; ?></span>
								<td align="center">
									<span class="inputfinales" size="46"><?php echo  $row->deFirma2; ?></span>
									<br>
									<span class="inputfinales2" size="46"><?php echo  $row->deEmpresa2; ?></span>
								<td align="center">
									<span class="inputfinales" size="46"><?php echo  $row->deFirma3; ?></span>
									<br>
									<span class="inputfinales2" size="46"><?php echo  $row->deEmpresa3; ?></span>
							</tr>
						</table>
					</div>

					<!--center-->
					<!--saltopag-->
				<?php
			}
				?>
				<form class="float" action="./sub.php" method="post" accept-charset="utf-8">
					<input type="text" name="fileName" id="fileName" value='formMostrarBocaTuboNR.php'>
					<input type="text" name="galletita" value="<?php echo $galletita ?>">
					<input type="submit" value="Decargar PDF">
				</form>

				<!-- jQuery first, then Popper.js, then Bootstrap JS -->
				<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
				<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
				<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
				<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

	</body>

	</html>