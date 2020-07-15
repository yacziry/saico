<?php
ini_set("session.cookie_lifetime","14400");
ini_set("session.gc_maxlifetime","14400");
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($_SESSION['tecnico']) && isset($_POST)){
    
    if(empty($_POST['clContrato'])){
        header("location:formLiquidos.php?msgC=El nombre del contrato no debe estar vacio");
	}elseif(empty($_POST['deProyecto'])){
        header("location:formLiquidos.php?msgC=El nombre del deProyecto no debe estar vacio");
	}elseif(empty($_POST['clFolio'])){
        header("location:formLiquidos.php?msgC=Folio no debe estar vacio");
	}elseif(empty($_POST['clNumReporte'])){
        header("location:formLiquidos.php?msgC=Num. Reporte no debe estar vacio");
	}elseif(empty($_POST['feTecnico'])){
        header("location:formLiquidos.php?msgC=Fecha no debe estar vacio");
	}elseif(empty($_POST['deLugar'])){
        header("location:formLiquidos.php?msgC=Lugar no debe estar vacio");
	}elseif(empty($_POST['clPlano'])){
        header("location:formLiquidos.php?msgC=Plano no debe estar vacio");
	}elseif(empty($_POST['deDescripcion'])){
        header("location:formLiquidos.php?msgC=Descripcion no debe estar vacio");
	}elseif(empty($_POST['clCod_Inspeccion'])){
        header("location:formLiquidos.php?msgC=codigo no debe estar vacio");
	}elseif(empty($_POST['deTipoMaterial'])){
        header("location:formLiquidos.php?msgC=Material incorrecto");
	}elseif(empty($_POST['deComponente'])){
        header("location:formLiquidos.php?msgC=Componente no debe estar vacio");
	}elseif(empty($_POST['deCondicion_Sup'])){
        header("location:formLiquidos.php?msgC=Condicion supeficial no puedo estar vacio");
	}elseif(empty($_POST['deTemperatura'])){
        header("location:formLiquidos.php?msgC=Temperatura no puedo estar vacio");
	}elseif(empty($_POST['deTipo_Luz'])){
        header("location:formLiquidos.php?msgC=Luz no puedo estar vacio");
	}elseif(empty($_POST['deIntensidad'])){
        header("location:formLiquidos.php?msgC=Intensidad no puedo estar vacio");
	}else{
        $usuario = $_SESSION['tecnico'];
        $fecha = date("Y-m-d H-i-s");
        $arrayLiquidos=array('clContrato'=>$_POST['clContrato'],'deProyecto'=>$_POST['deProyecto'],
            'clFolio'=>$_POST['clFolio'],'clNumReporte'=>$_POST['clNumReporte'],'feTecnico'=>$_POST['feTecnico'],
            'deLugar'=>$_POST['deLugar'],'clPlano'=>$_POST['clPlano'],'deDescripcion'=>$_POST['deDescripcion'],
            'clCod_Inspeccion'=>$_POST['clCod_Inspeccion'],'deTipoMaterial'=>$_POST['deTipoMaterial'],'deComponente'=>$_POST['deComponente'],
            'deCondicion_Sup'=>$_POST['deCondicion_Sup'],'deTemperatura'=>$_POST['deTemperatura'],'deTipo_Luz'=>$_POST['deTipo_Luz'],
            'deIntensidad'=>$_POST['deIntensidad'],'deMarca1'=>$_POST['deMarca1'],'deModelo1'=>$_POST['deModelo1'],
            'deLote1'=>$_POST['deLote1'],'deTiempo1'=>$_POST['deTiempo1'],'deAplicacion1'=>$_POST['deAplicacion1'],'deTipo1'=>$_POST['deTipo1'],
            'deMarca2'=>$_POST['deMarca2'],'deModelo2'=>$_POST['deModelo2'],'deLote2'=>$_POST['deLote2'],'deAplicacion2'=>$_POST['deAplicacion2'],
            'deTipo2'=>$_POST['deTipo2'],'deMarca3'=>$_POST['deMarca3'],'deModelo3'=>$_POST['deModelo3'],'deLote3'=>$_POST['deLote3'],'deTiempo3'=>$_POST['deTiempo3'],
            'deAplicacion3'=>$_POST['deAplicacion3'],'deTipo3'=>$_POST['deTipo3'],'deFirma1'=>$_POST['deFirma1'],'deFirma2'=>$_POST['deFirma2'],'deFirma3'=>$_POST['deFirma3'],'deEmpresa1'=>$_POST['deEmpresa1'],
            'deEmpresa2'=>$_POST['deEmpresa2'],'deEmpresa3'=>$_POST['deEmpresa3'],'clFormato'=>'FOR-PINS-06','clUsuario'=>$usuario,
            'feRegistro'=>$fecha,'caCliente_clCliente'=>$_POST['deCliente']);
            //Insertar array en bd
            include_once 'LiquidosDAO.php';
            $l = new Liquidos();
            $liquidos = $l->insertar($arrayLiquidos);  
            if($liquidos){
                $arrayLiqResultado=array();
			}
            //session_start();
            //variable de sesion reporte
            $reporteS = $_POST['clNumReporte'];
            $_SESSION["reporteS"] = $reporteS;
    }//sino hubo errores 
    //form que muestra registro fotografico
        header("location:formRegistroFotLiq.php");
}else{
    header("location:notFound.html");
    die();
}
    