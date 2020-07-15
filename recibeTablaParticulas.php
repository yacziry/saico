<?php
require 'particulasDAO.php';
//require 'resultadoParticulasDAO.php';
require 'particulasPRUEBA.php';

$dePieza = $_POST['pieza'];
$deJunta = $_POST['junta'];
$deLongitud = $_POST['longitud'];
$deDiscontinuidad = $_POST['discontinuidad'];
$deEvaluacion = $_POST['evaluacion'];
$deObservaciones = $_POST['observaciones'];


//obtenemos el ultimo id y clNumReporte
$part = new Particulas();
$ultimoRegistro = $part->ultimoID();
foreach ($ultimoRegistro as $row){
	$id = $row->id;
	$clNumReporte = $row->clNumReporte;
}

$resultadoParticulas=array('dePieza'=>$dePieza,'clNumReporte'=>$clNumReporte,'deJunta'=>$deJunta, 'deLongitud'=>$deLongitud,
'deDiscontinuidad'=>$deDiscontinuidad, 'deEvaluacion'=>$deEvaluacion, 'deObservaciones'=>$deObservaciones, 'tsReporteParticulas_id'=>$id);
//var_dump($resultadoParticulas);

$resultado = new ResultadoParticulas();
$enviado = $resultado->insertar($resultadoParticulas);
if($enviado){
	echo $enviado;
}else{
	echo "no se envio D:";
}
