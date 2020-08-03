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

$forResultados = $bdt->buscarReporteResultado($clNumReporte);
foreach ($forResultados as $tabla) {
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
				<div class="borde">
					<div class="cuerpo">
						<table width="1312" border="0">
							<tr>
								<td>FECHA:</td>
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
								<td colspan="5"><textarea id="textA" style="max-width:1115px; min-width:322px;" cols="250" style="overflow-y:hidden" readonly="readonly" class="sinborde" name="descripcion"><?php echo  $row->deProyecto; ?></textarea>

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
								<td><input type="text" name="folio" class="sinborde" value="<?php echo  $row->clPlano; ?>" size="55" readonly="readonly"></td>

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

			<?php
		}
			?>

			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

	</body>

	</html>