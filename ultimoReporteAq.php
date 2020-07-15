<?php
//****************************************
//CARACTERIZACION
//*****************************************
//enviar parametros para buscar palabra clave
require 'clientesDAO.php';
require 'analisisQuimicoDAO.php';
//convertimos el cliente en clave
$c = new Cliente();
$deCliente = $_POST[('cliente')];
$cl = $c->buscarClave($deCliente);
//hacemos la consulta
$aq = new AnalisisQuimico();
$resultado = $aq->cliente($cl);

if($resultado != false){
	echo json_encode($resultado);
}else{
	echo json_encode(false);
}
?>