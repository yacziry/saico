<?php
//enviar parametros para buscar NR
require 'buscarDAO.php';
$tecnica = $_POST["tecnica"];
$feInicio = $_POST["feInicio"];
$feFin = $_POST["feFin"];
$x  = new  BuscarFormatos();
$arreglo = $x->buscarFeReporte($tecnica, $feInicio, $feFin);

if($arreglo){
	echo json_encode($arreglo);
}else{
	echo json_encode(false);
}
?>