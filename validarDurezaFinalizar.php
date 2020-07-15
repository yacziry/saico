<?php
ini_set("session.cookie_lifetime","14400");
ini_set("session.gc_maxlifetime","14400");
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
  include_once 'durezaDAO.php';
  unset($_SESSION['clNorma']);

if(isset($_SESSION['tecnico']) && isset($_POST)){

    $usuario = $_SESSION['tecnico'];
    $fecha = date("Y-m-d H-i-s");
    
    if(empty($_POST['clContrato'])){
        header("location:formDureza.php?msgC=El nombre del contrato no debe estar vacio");
	}elseif(empty($_POST['deProyecto'])){
        header("location:formDureza.php?msgC=El nombre del deProyecto no debe estar vacio");
	}elseif(empty($_POST['clOrdenTrabajo'])){
        header("location:formDureza.php?msgC=Orden de Trabajo no debe estar vacio");
	}elseif(empty($_POST['clFolio'])){
        header("location:formDureza.php?msgC=Folio no debe estar vacio");
	}elseif(empty($_POST['deIsometrico'])){
        header("location:formDureza.php?msgC=Isometrico no debe estar vacio");
	}elseif(empty($_POST['clNumReporte'])){
        header("location:formDureza.php?msgC=Num. Reporte no debe estar vacio");
	}elseif(empty($_POST['feTecnico'])){
        header("location:formDureza.php?msgC=Fecha no debe estar vacio");
	}elseif(empty($_POST['deLugar'])){
        header("location:formDureza.php?msgC=Lugar no debe estar vacio");
	}elseif(empty($_POST['clPartida'])){
        header("location:formDureza.php?msgC=Fecha no debe estar vacio");
	}elseif(empty($_POST['deTrazabilidad'])){
        header("location:formDureza.php?msgC=Trazabilidad no debe estar vacio");
	}elseif(empty($_POST['deTubEstruc'])){
        header("location:formDureza.php?msgC=seleccionar una opcion");
	}elseif(empty($_POST['deDescripcion'])){
        header("location:formDureza.php?msgC=Descripcion no debe estar vacio");
	}else{
        //creamos array con todos los datos procesados
        $arrayDureza=array('clContrato'=>$_POST['clContrato'],'deProyecto'=>$_POST['deProyecto'],'clOrdenTrabajo'=>$_POST['clOrdenTrabajo'],
            'clFolio'=>$_POST['clFolio'],'deIsometrico'=>$_POST['deIsometrico'],'clNumReporte'=>$_POST['clNumReporte'],'feTecnico'=>$_POST['feTecnico'],
            'deLugar'=>$_POST['deLugar'],'clPartida'=>$_POST['clPartida'],'deTrazabilidad'=>$_POST['deTrazabilidad'],
            'deTubEstruc'=>$_POST['deTubEstruc'],'deDescripcion'=>$_POST['deDescripcion'],'deMarca'=>$_POST['deMarca'],'deModelo'=>$_POST['deModelo'],
            'deSerie'=>$_POST['deSerie'],'numDureza1'=>$_POST['numDureza1'],'numDureza2'=>$_POST['numDureza2'],'numDureza3'=>$_POST['numDureza3'],'numDureza4'=>$_POST['numDureza4'],
            'numDureza5'=>$_POST['numDureza5'],'numDureza6'=>$_POST['numDureza6'],'numDureza7'=>$_POST['numDureza7'],'numDureza8'=>$_POST['numDureza8'],'numDureza9'=>$_POST['numDureza9'],
            'numDureza10'=>$_POST['numDureza10'],'clPromedio'=>$_POST['clPromedio'],'deNormaReferencia'=>$_POST['deNormaReferencia'],'clUsuario'=>$usuario,'feRegistro'=>$fecha, 'deElabora'=>$_POST['deElabora'],
			'deAprueba'=>$_POST['deAprueba'], 'cacliente_clCliente'=>$_POST['deCliente']); 
            
        $d = new Dureza();
        //obtener el lastid si se hizo el registro
        $d->insertar($arrayDureza);
        }//sino hubo errores 
        session_start();
        //variable de sesion reporte
        $reporteS = $_POST['clNumReporte'];
        $_SESSION["reporteS"] = $reporteS;
       
        header("location:formMostrarDureza.php");
		
}else{
    header("location:notFound.html");
    die();
}
    