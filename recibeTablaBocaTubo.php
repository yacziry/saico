<?php
require 'bocaTuboDAO.php';
require 'resultadoBocaTuboDAO.php';
//require 'particulasPRUEBA.php';

$clID = $_POST['id'];
$deElemento = $_POST['elemento'];
$clAceptacion = $_POST['noDeAceptacion'];
$deDiametro = $_POST['diametro'];
$clSerie = $_POST['noDeSerie'];
$clColada = $_POST['noDeColada'];
$clIndicacion = $_POST['indicacion'];
$deEspesorNominal = $_POST['espesorNominal'];
$deLargo = $_POST['largo'];
$deAncho = $_POST['ancho'];;
$deX = $_POST['desdeX'];
$deY = $_POST['desdeY'];
$deEspesorMaximo = $_POST['espesorMax'];
$deEspesorMinimo = $_POST['espesorMin'];
$deBarrido = $_POST['areaBarrido'];
$deResultado = $_POST['resultado'];

//obtenemos el ultimo id y clNumReporte
$part = new ResultadoBocaTubo();
$ultimoRegistro = $part->ultimoID();
foreach ($ultimoRegistro as $row) {
	$id = $row->id;
	$clNumReporte = $row->clNumReporte;
}

$resultadoBocaDeTubo = array(
	'clNumReporte' => $clNumReporte,'clID' => $clID, 'deElemento' => $deElemento, 'deDiametro' => $deDiametro, 
	'clAceptacion' => $clAceptacion, 'clSerie' => $clSerie,
	'clColada' => $clColada, 'deEspesorNominal' => $deEspesorNominal, 'clIndicacion' => $clIndicacion,
	'deLargo' => $deLargo, 'deAncho' => $deAncho, 'deX' => $deX,
	'deY' => $deY, 'deEspesorMaximo' => $deEspesorMaximo, 'deEspesorMinimo' => $deEspesorMinimo,
	'deBarrido' => $deBarrido, 'deResultado' => $deResultado, 'tsreportebocadetubo_id' => $id
);
//var_dump($resultadoBocaDeTubo);
$resultado = new ResultadoBocaTubo();
$enviado = $resultado->insertar($resultadoBocaDeTubo);
if ($enviado) {
	echo $enviado;
} else {
	echo "no se envio D:";
}
