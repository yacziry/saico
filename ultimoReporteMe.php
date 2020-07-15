<?php
//****************************************
//METALOGRAfIA
//*****************************************
//enviar parametros para buscar palabra clave
require 'clientesDAO.php';
require 'metalografiaDAO.php';
//convertimos el cliente en clave
$c = new Cliente();
$deCliente = $_POST[('cliente')];
//$deCliente = "Corporativo Industrial y Comercial, S.A DE C.V.";
$cl = $c->buscarClave($deCliente);
//hacemos la consulta
$me = new Metalografia();
$resultado = $me->cliente($cl);

if($resultado != false){
	echo json_encode($resultado);
}else{
	echo json_encode(false);
}
?>