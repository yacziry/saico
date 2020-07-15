<?php
//enviar parametros para buscar NR
require 'buscarDAO.php';
require 'clientesDAO.php';

$tecnica = $_POST["tecnica"];
$cliente = $_POST["cliente"];

//obtenemos la Clave del cliente
$cl = new Cliente();
$claveCL = $cl->BuscarClave($cliente);
//buscar los formatos con mismos clientes
$x  = new  BuscarFormatos();
$arreglo = $x->buscarClreporte($tecnica, $claveCL);
if($arreglo){
	echo json_encode($arreglo);
}else{
	echo json_encode(false);
}
?>