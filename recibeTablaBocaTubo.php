<?php
require 'bocaTuboDAO.php';
require 'resultadoBocaTuboDAO.php';
//require 'particulasPRUEBA.php';

$clID = $_POST['id'];
$deElemento = $_POST['elemento'];
$clAceptacion = $_POST['noDeAceptacion'];
$clSerie = $_POST['noDeSerie'];
$clColada = $_POST['noDeColada'];
$clIndicacion = $_POST['indicacion'];
$deProfundidad = $_POST['profundidad'];
$deEspesor = $_POST['espesor'];
$deLongitud = $_POST['longitud'];
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
	'clID' => $clID, 'clID' => $clID, 'clAceptacion' => $clAceptacion, 'clSerie' => $clSerie,
	'clColada' => $clColada, 'clIndicacion' => $clIndicacion, 'deProfundidad' => $deProfundidad,
	'deEspesor' => $deEspesor, 'deLongitud' => $deLongitud, 'deX' => $deX,
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
