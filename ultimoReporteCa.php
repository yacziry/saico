<?php
//****************************************
//CARACTERIZACION
//*****************************************
//enviar parametros para buscar palabra clave
require 'clientesDAO.php';
require 'caracterizacionDAO.php';
//convertimos el cliente en clave
$c = new Cliente();
$deCliente = $_POST[('cliente')];
//$deCliente = "Corporativo Industrial y Comercial, S.A DE C.V.";
$cl = $c->buscarClave($deCliente);
//hacemos la consulta
$ca = new Caracterizacion();
$resultado = $ca->cliente($cl);

if($resultado != false){
	echo json_encode($resultado);
}else{
	echo json_encode(false);
}
?>