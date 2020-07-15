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
    
    if(empty($_POST['deCliente'])){
        header("location:formParticulas.php?msgC=El valor de cliente no debe estar vacio");
	}elseif(empty($_POST['clContrato'])){
        header("location:formParticulas.php?msgC=El nombre del contrato no debe estar vacio");
	}elseif(empty($_POST['deProyecto'])){
        header("location:formParticulas.php?msgC=El nombre del proyecto no debe estar vacio");
	}elseif(empty($_POST['deIsometrico'])){
        header("location:formParticulas.php?msgC=Num de plano no debe estar vacio");
	}elseif(empty($_POST['clNumReporte'])){
        header("location:formParticulas.php?msgC=Num de reporte no debe estar vacio");
	}elseif(empty($_POST['deLugar'])){
        header("location:formParticulas.php?msgC=Lugar no debe estar vacio");
	}elseif(empty($_POST['feTecnico'])){
        header("location:formParticulas.php?msgC=Fecha no debe estar vacio");
	}elseif(empty($_POST['deLugar'])){
        header("location:formParticulas.php?msgC=Lugar no debe estar vacio");
	}elseif(empty($_POST['deCodigoUtilizado'])){
        header("location:formParticulas.php?msgC=Código no debe estar vacio");
	}elseif(empty($_POST['deMaterial'])){
        header("location:formParticulas.php?msgC=Material no seleccionado");
	}elseif(empty($_POST['deDescripcion'])){
        header("location:formParticulas.php?msgC=Descripción no debe estar vacio");
	}elseif(empty($_POST['deMarcaEquipo'])){
        header("location:formParticulas.php?msgC=Marca del equipo no puedo estar vacio");
	}elseif(empty($_POST['deModeloEquipo'])){
        header("location:formParticulas.php?msgC=Modelo del equipo no puedo estar vacio");
	}elseif(empty($_POST['deNoSerieEquipo'])){
        header("location:formParticulas.php?msgC=Num de Serie no puedo estar vacio");
	}elseif(empty($_POST['deMarcaTrans'])){
        header("location:formParticulas.php?msgC=Marca Transductor no puedo estar vacio");
	}elseif(empty($_POST['deModeloTrans'])){
        header("location:formParticulas.php?msgC=Modelo Transductor no puedo estar vacio");
	}elseif(empty($_POST['clNoSerieTrans'])){
        header("location:formParticulas.php?msgC=Num de Serie Transductor no puedo estar vacio");
	}elseif(empty($_POST['deFRECTrans'])){
        header("location:formParticulas.php?msgC=Frecuencia Transductor no puedo estar vacio");
	}elseif(empty($_POST['deTipoAcoplante'])){
        header("location:formParticulas.php?msgC=Tipo Acoplante no puedo estar vacio");
	}elseif(empty($_POST['clNoSerieAcoplante'])){
        header("location:formParticulas.php?msgC=Num de serie Acoplante no puedo estar vacio");
	}elseif(empty($_POST['deGanancia'])){
        header("location:formParticulas.php?msgC=Ganancia no puedo estar vacio");
	}elseif(empty($_POST['deTipo'])){
        header("location:formParticulas.php?msgC=Tipo Equipo no puedo estar vacio");
	}elseif(empty($_POST['deRango'])){
        header("location:formParticulas.php?msgC=Rango Equipo no puedo estar vacio");
	}elseif(empty($_POST['deModo'])){
        header("location:formParticulas.php?msgC=Modo no puedo estar vacio");
	}elseif(empty($_POST['clNivelDac'])){
        header("location:formParticulas.php?msgC=Nivel DAC no puedo estar vacio");
	}elseif(empty($_POST['deRetraso'])){
        header("location:formParticulas.php?msgC=Retraso no puedo estar vacio");
	}elseif(empty($_POST['deRadioRechazo'])){
        header("location:formParticulas.php?msgC=Debes seleccionar una opción de Rechazo");
	}elseif(empty($_POST['deHazRecto'])){
        header("location:formParticulas.php?msgC=Haz Recto no puedo estar vacio");
	}elseif(empty($_POST['deHazAng'])){
        header("location:formParticulas.php?msgC=Haz Angular no puedo estar vacio");
	}elseif(empty($_POST['deVoltaje'])){
        header("location:formParticulas.php?msgC=Voltaje no puedo estar vacio");
	}else{
        $usuario = $_SESSION['tecnico'];
        $fecha = date("Y-m-d H-i-s");
        $arrayParticulas=array('clContrato'=>$_POST['clContrato'],'deProyecto'=>$_POST['deProyecto'],
            'deIsometrico'=>$_POST['deIsometrico'],'clNumReporte'=>$_POST['clNumReporte'],'deLugar'=>$_POST['deLugar'],
            'feTecnico'=>$_POST['feTecnico'],'deLugar'=>$_POST['deLugar'],'deCodigoUtilizado'=>$_POST['deCodigoUtilizado'],
            'deMaterial'=>$_POST['deMaterial'],'deDescripcion'=>$_POST['deDescripcion'],'deMarcaEquipo'=>$_POST['deMarcaEquipo'],
            'deModeloEquipo'=>$_POST['deModeloEquipo'],'deNoSerieEquipo'=>$_POST['deNoSerieEquipo'],'deMarcaTrans'=>$_POST['deMarcaTrans'],
            'deModeloTrans'=>$_POST['deModeloTrans'],'clNoSerieTrans'=>$_POST['clNoSerieTrans'],'deFRECTrans'=>$_POST['deFRECTrans'],'deTipoAcoplante'=>$_POST['deTipoAcoplante'],
            'clNoSerieAcoplante'=>$_POST['clNoSerieAcoplante'],'deGanancia'=>$_POST['deGanancia'],'deTipo'=>$_POST['deTipo'],'deRango'=>$_POST['deRango'],
            'deModo'=>$_POST['deModo'],'clNivelDac'=>$_POST['clNivelDac'],'deRetraso'=>$_POST['deRetraso'],'deRadioRechazo'=>$_POST['deRadioRechazo'],
            'deHazRecto'=>$_POST['deHazRecto'],'deHazAng'=>$_POST['deHazAng'],'deVoltaje'=>$_POST['deVoltaje']);
            //Insertar array en bd
            include_once 'UltrasonidoDAO.php';
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
        //header("location:formRegistroFotPart.php");
}else{
    header("location:notFound.html");
    die();
}
    