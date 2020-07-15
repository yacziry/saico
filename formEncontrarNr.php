<?php
require 'buscarDAO.php';
session_start();
            //variable de sesion reporte
            $clNumReporte = $_POST['clNumReporte'];
            $_SESSION["clNumReporte"] = $clNumReporte;

//$clNumReporte = $_POST["clNumReporte"];
$cTecnica = $_POST["tecnica"];


switch ($cTecnica){

    case "Metalografia": //Si la variable $cTecnica vale "Metalografia" realizamos una consulta
        $m  = new  BuscarNR();
        $m->BuscarMetalografia($cTecnica, $clNumReporte);
    break;

    case "Caracterizacion": //Si la variable consulta vale...
        $m  = new  BuscarNR();
        $m->BuscarCaracterizacion($cTecnica, $clNumReporte);
    break;
    case "Particulas": //Si la variable consulta vale ...
        $m  = new  BuscarNR();
        $m->BuscarParticulas($cTecnica, $clNumReporte);
    break;
    case "Liquidos": //Si la variable consulta vale ...
        $m  = new  BuscarNR();
        $m->BuscarLiquidos($cTecnica, $clNumReporte);
    break;
    case "Dureza": //Si la variable consulta vale ...
        $m  = new  BuscarNR();
        $m->BuscarDureza($cTecnica, $clNumReporte);
    break;
    case "Analisis Quimico": //Si la variable consulta vale ...
        $m  = new  BuscarNR();
        $m->BuscarAnalisisQuimico($cTecnica, $clNumReporte);
    break;
}
class BuscarNR{
    function BuscarMetalografia($cTecnica, $clNumReporte){
        $x  = new  BuscarFormatos();
        $arreglo = $x->buscarNumReporte($cTecnica, $clNumReporte);
        if($arreglo){
            echo json_encode($arreglo);
            //header("location:formMetalografia.php");
	    }else{
            echo json_encode(false);
	    }
    }

    function BuscarCaracterizacion($cTecnica, $clNumReporte){
        $x  = new  BuscarFormatos();
        $arreglo = $x->buscarNumReporte($cTecnica, $clNumReporte);
        if($arreglo){
            echo json_encode($arreglo);
	    }else{
            echo json_encode(false);
	    }
    }

    function BuscarParticulas($cTecnica, $clNumReporte){
        $x  = new  BuscarFormatos();
        $arreglo = $x->buscarNumReporte($cTecnica, $clNumReporte);
        if($arreglo){
            echo json_encode($arreglo);
	    }else{
            echo json_encode(false);
	    }
    }
    function BuscarLiquidos($cTecnica, $clNumReporte){
        $x  = new  BuscarFormatos();
        $arreglo = $x->buscarNumReporte($cTecnica, $clNumReporte);
        if($arreglo){
            echo json_encode($arreglo);
	    }else{
            echo json_encode(false);
	    }
    }
    function BuscarDureza($cTecnica, $clNumReporte){
        $x  = new  BuscarFormatos();
        $arreglo = $x->buscarNumReporte($cTecnica, $clNumReporte);
        if($arreglo){
            echo json_encode($arreglo);
	    }else{
            echo json_encode(false);
	    }
    }
    function BuscarAnalisisQuimico($cTecnica, $clNumReporte){
        $x  = new  BuscarFormatos();
        $arreglo = $x->buscarNumReporte($cTecnica, $clNumReporte);
        if($arreglo){
            echo json_encode($arreglo);
	    }else{
            echo json_encode(false);
	    }
    }
}
/*$a = new  BuscarNR();
$c = $a->BuscarAnalisisQuimico("Analisis Quimico", "123123");
echo json_encode($c);*/