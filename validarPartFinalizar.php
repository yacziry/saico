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
        header("location:formParticulas.php?msgC=El nombre del contrato no debe estar vacio");
	}elseif(empty($_POST['deProyecto'])){
        header("location:formParticulas.php?msgC=El nombre del deProyecto no debe estar vacio");
	}elseif(empty($_POST['clFolio'])){
        header("location:formParticulas.php?msgC=Folio no debe estar vacio");
	}elseif(empty($_POST['clNumReporte'])){
        header("location:formParticulas.php?msgC=Num. Reporte no debe estar vacio");
	}elseif(empty($_POST['feTecnico'])){
        header("location:formParticulas.php?msgC=Fecha no debe estar vacio");
	}elseif(empty($_POST['deLugar'])){
        header("location:formParticulas.php?msgC=Lugar no debe estar vacio");
	}elseif(empty($_POST['clPlano'])){
        header("location:formParticulas.php?msgC=Plano no debe estar vacio");
	}elseif(empty($_POST['deDescripcion'])){
        header("location:formParticulas.php?msgC=Descripcion no debe estar vacio");
	}elseif(empty($_POST['clCod_Inspeccion'])){
        header("location:formParticulas.php?msgC=codigo no debe estar vacio");
	}elseif(empty($_POST['deTipoMaterial'])){
        header("location:formParticulas.php?msgC=Material incorrecto");
	}elseif(empty($_POST['deComponente'])){
        header("location:formParticulas.php?msgC=Componente no debe estar vacio");
	}elseif(empty($_POST['deCondicion_Sup'])){
        header("location:formParticulas.php?msgC=Condicion supeficial no puedo estar vacio");
	}elseif(empty($_POST['deTemperatura'])){
        header("location:formParticulas.php?msgC=Temperatura no puedo estar vacio");
	}elseif(empty($_POST['deEspesor'])){
        header("location:formParticulas.php?msgC=Espesor no puedo estar vacio");
	}elseif(empty($_POST['deTipo_Luz'])){
        header("location:formParticulas.php?msgC=Luz no puedo estar vacio");
	}elseif(empty($_POST['deIntensidad'])){
        header("location:formParticulas.php?msgC=Intensidad no puedo estar vacio");
	}else{
        $usuario = $_SESSION['tecnico'];
        $fecha = date("Y-m-d H-i-s");
        $arrayParticulas=array('clContrato'=>$_POST['clContrato'],'deProyecto'=>$_POST['deProyecto'],
            'clFolio'=>$_POST['clFolio'],'clNumReporte'=>$_POST['clNumReporte'],'feTecnico'=>$_POST['feTecnico'],
            'deLugar'=>$_POST['deLugar'],'clPlano'=>$_POST['clPlano'],'deDescripcion'=>$_POST['deDescripcion'],
            'clCod_Inspeccion'=>$_POST['clCod_Inspeccion'],'deTipoMaterial'=>$_POST['deTipoMaterial'],'deComponente'=>$_POST['deComponente'],
            'deCondicion_Sup'=>$_POST['deCondicion_Sup'],'deTemperatura'=>$_POST['deTemperatura'],'deEspesor'=>$_POST['deEspesor'],
            'deTipo_Luz'=>$_POST['deTipo_Luz'],'deIntensidad'=>$_POST['deIntensidad'],'deMarca1'=>$_POST['deMarca1'],'deModelo1'=>$_POST['deModelo1'],
            'deLote1'=>$_POST['deLote1'],'deTipo1'=>$_POST['deTipo1'],'deColor1'=>$_POST['deColor1'],'deAplicacion1'=>$_POST['deAplicacion1'],
            'deMarca2'=>$_POST['deMarca2'],'deModelo2'=>$_POST['deModelo2'],'deLote2'=>$_POST['deLote2'],'deColor2'=>$_POST['deColor2'],
            'deAplicacion2'=>$_POST['deAplicacion2'],'deMarca3'=>$_POST['deMarca3'],'deModelo3'=>$_POST['deModelo3'],'deNs'=>$_POST['deNs'],'deCorriente'=>$_POST['deCorriente'],
            'deFirma1'=>$_POST['deFirma1'],'deFirma2'=>$_POST['deFirma2'],'deFirma3'=>$_POST['deFirma3'],'deEmpresa1'=>$_POST['deEmpresa1'],
            'deEmpresa2'=>$_POST['deEmpresa2'],'deEmpresa3'=>$_POST['deEmpresa3'],'clFormato'=>'FOR-PINS-05','clUsuario'=>$usuario,
            'feRegistro'=>$fecha,'caCliente_clCliente'=>$_POST['deCliente']);
            //Insertar array en bd
            include_once 'ParticulasDAO.php';
            $p = new Particulas();
            $particulas = $p->insertar($arrayParticulas);  
            if($particulas){
                $arrayPartResultado=array();
			}
            session_start();
            //variable de sesion reporte
            $reporteS = $_POST['clNumReporte'];
            $_SESSION["reporteS"] = $reporteS;
    }//sino hubo errores 
    //registro que muestra registro fotografico
        header("location:formRegistroFotPart.php");
}else{
    header("location:notFound.html");
    die();
}
    