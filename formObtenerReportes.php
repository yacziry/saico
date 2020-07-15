<?php
//enviar parametros para buscar NR
require 'buscarDAO.php';
$tecnica = $_POST["tecnica"];
$clNumReporte = $_POST["clNumReporte"];
$x  = new  BuscarFormatos();
$arreglo = $x->buscarNumReporte($tecnica, $clNumReporte);
echo json_encode($arreglo);
//header("location: formBuscarNr.php");
?>