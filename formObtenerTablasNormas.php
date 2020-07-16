<?php
//enviar parametros para insertar caNorma
require 'normasDAO.php';

$arrayNorma=array('norma'=>$_POST['norma'],'deBrinell_Max'=>$_POST['deBrinell_Max'],'deKsi_Min'=>$_POST['deKsi_Min'],
'deCedencia'=>$_POST['deCedencia'],'deKsi_Max'=>$_POST['deKsi_Max'],'c'=>$_POST['c'],'mn'=>$_POST['mn'],
'p'=>$_POST['p'],'s'=>$_POST['s'],'si'=>$_POST['si'],'cu'=>$_POST['cu'],
'ni'=>$_POST['ni'],'cr'=>$_POST['cr'],'mo'=>$_POST['mo'],'v'=>$_POST['v'],'nb'=>$_POST['nb'],
'n'=>$_POST['n'],'deNotas'=>$_POST['deNotas']);

$x  = new  Normas();
$arreglo = $x->insertar($arrayNorma);
if($arreglo){
	echo json_encode($arreglo);
}else{
	return false;
}

//header("location: formBuscarNr.php");
?>