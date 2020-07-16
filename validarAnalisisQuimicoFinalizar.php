<?php
ini_set("session.cookie_lifetime","14400");
ini_set("session.gc_maxlifetime","14400");
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
  include_once 'imgAnalisisQuimicoDAO.php';
  include_once 'analisisQuimicoDAO.php';

if(isset($_SESSION['tecnico']) && isset($_POST)){

    $usuario = $_SESSION['tecnico'];
    $fecha = date("Y-m-d H-i-s");
    
    if(empty($_POST['clContrato'])){
        header("location:formAnalisisQuimico.php?msgC=El nombre del contrato no debe estar vacio");
	}elseif(empty($_POST['deProyecto'])){
        header("location:formAnalisisQuimico.php?msgC=El nombre del deProyecto no debe estar vacio");
	}elseif(empty($_POST['clOrdenTrabajo'])){
        header("location:formAnalisisQuimico.php?msgC=Orden de Trabajo no debe estar vacio");
	}elseif(empty($_POST['clFolio'])){
        header("location:formAnalisisQuimico.php?msgC=Folio no debe estar vacio");
	}elseif(empty($_POST['deIsometrico'])){
        header("location:formAnalisisQuimico.php?msgC=Isometrico no debe estar vacio");
	}elseif(empty($_POST['clNumReporte'])){
        header("location:formAnalisisQuimico.php?msgC=Num. Reporte no debe estar vacio");
	}elseif(empty($_POST['feTecnico'])){
        header("location:formAnalisisQuimico.php?msgC=Fecha no debe estar vacio");
	}elseif(empty($_POST['deLugar'])){
        header("location:formAnalisisQuimico.php?msgC=Lugar no debe estar vacio");
	}elseif(empty($_POST['clPartida'])){
        header("location:formAnalisisQuimico.php?msgC=partida no debe estar vacio");
	}elseif(empty($_POST['deTrazabilidad'])){
        header("location:formAnalisisQuimico.php?msgC=Trazabilidad no debe estar vacio");
	}elseif(empty($_POST['deTubEstruc'])){
        header("location:formAnalisisQuimico.php?msgC=seleccionar una opcion");
	}elseif(empty($_POST['deDescripcion'])){
        header("location:formAnalisisQuimico.php?msgC=Descripcion no debe estar vacio");
	}else{
        //creamos array con todos los datos procesados
        $arrayAnalisisQuimico=array('clContrato'=>$_POST['clContrato'], 'deProyecto'=>$_POST['deProyecto'], 'clOrdenTrabajo'=>$_POST['clOrdenTrabajo'],
            'clFolio'=>$_POST['clFolio'], 'deIsometrico'=>$_POST['deIsometrico'], 'clNumReporte'=>$_POST['clNumReporte'],'feTecnico'=>$_POST['feTecnico'],
            'deLugar'=>$_POST['deLugar'], 'clPartida'=>$_POST['clPartida'], 'deTrazabilidad'=>$_POST['deTrazabilidad'],
            'deTubEstruc'=>$_POST['deTubEstruc'], 'deDescripcion'=>$_POST['deDescripcion'], 'deMarca'=>$_POST['deMarca'], 'deModelo'=>$_POST['deModelo'],
            'deSerie'=>$_POST['deSerie'], 'deC'=>$_POST['deC'], 'deMn'=>$_POST['deMn'], 'deP'=>$_POST['deP'], 'deS'=>$_POST['deS'],'deSi'=>$_POST['deSi'],
			'deCu'=>$_POST['deCu'],'deNi'=>$_POST['deNi'],'deCr'=>$_POST['deCr'],'deMo'=>$_POST['deMo'],'deV'=>$_POST['deV'],'deNb'=>$_POST['deNb'],
            'deObservaciones'=>$_POST['deObservaciones'],'clUsuario'=>$usuario,'feRegistro'=>$fecha, 'deElabora'=>$_POST['deElabora'],
			'deAprueba'=>$_POST['deAprueba'], 'cacliente_clCliente'=>$_POST['deCliente'], 'canorma_norma'=>$_POST['clNorma']);
           
            //creamos ruta para guardar img
            $ruta = "img/analisisQuimico/";
            $size= $_FILES['deImagen1']['size'];
                        
            $aq = new AnalisisQuimico();
            //obtener el lastid si se hizo el registro
            $lastId = $aq->insertar($arrayAnalisisQuimico);
            //echo $lastId;
            if($lastId){
	            if(move_uploaded_file($_FILES['deImagen1']['tmp_name'], $ruta.$_FILES['deImagen1']['name']) && move_uploaded_file($_FILES['deImagen2']['tmp_name'], $ruta.$_FILES['deImagen2']['name'])){
                    $extension = ".".pathinfo($ruta.$_FILES['deImagen1']['name'], PATHINFO_EXTENSION);
                    $extension2 = ".".pathinfo($ruta.$_FILES['deImagen2']['name'], PATHINFO_EXTENSION);
		            if(rename($ruta.$_FILES['deImagen1']['name'], $ruta.$fecha.$extension)){
                        rename($ruta.$_FILES['deImagen2']['name'], $ruta.$fecha."-(02)".$extension2);
		            }else{
		                exit("No se cambiaron los nombres de los archivos");
		            }
                    $imagen = new Imagen();
		            $arreglo = array('id'=>$lastId,'clNumReporte'=>$_POST['clNumReporte'],'deImagen1'=>$fecha.$extension,'deImagen2'=>$fecha."-(02)".$extension2,'feRegistro'=>$fecha);
		            $imagen->insertar($arreglo);
	            }else{
		            echo "error, no se movio";
                }	                                           
		    }else{
                    //header("location:formCaracterizacion.php?msgUser=No se guardaron los datos");
					echo "error, no se guardaron los datos";
            }

        }//sino hubo errores 
        session_start();
        //variable de sesion reporte
        $reporteS = $_POST['clNumReporte'];
        $_SESSION["reporteS"] = $reporteS;
        //variable sesion norma
        $clNorma = $_POST['clNorma'];
        $_SESSION["clNorma"] = $clNorma;
        //header("location:formCaracterizacionContinuar.php");
		
}else{
    header("location:notFound.html");
    die();
}
    