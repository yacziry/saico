<?php
require 'buscarDAO.php';
session_start();
    //variable de sesion reporte
    $clave = $_POST["clave"];
    $_SESSION["clave"] = $clave;
    $tecnica = $_POST["tecnica"];
    

    $x  = new  BuscarFormatos();
    $arreglo = $x->buscarClave($tecnica, $clave);
    if($arreglo){
        echo json_encode($arreglo);
	}else{
        echo json_encode(false);
	}
