<?php
//enviar parametros para buscar palabra clave
require 'buscarDAO.php';
$tecnica = $_POST["tecnica"];
$palabraCl = $_POST["palabraCl"];
$x  = new  BuscarFormatos();
$arreglo = $x->buscarPclReporte($tecnica, $palabraCl);
if($arreglo != false){
	echo json_encode($arreglo);
}else{
	$arreglo == false;
	echo "erro";
}
?>