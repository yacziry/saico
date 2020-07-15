<?php
//enviar parametros para buscar NR
require 'normasDAO.php';
$norma = $_POST["norma"];
$x  = new  Normas();
$arreglo = $x->buscarNormaSelected2($norma);
echo json_encode($arreglo);
//header("location: formBuscarNr.php");
?>