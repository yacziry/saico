<?php
ini_set("session.cookie_lifetime","14400");
ini_set("session.gc_maxlifetime","14400");
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'imagenesMetalografiaDAO.php';
include_once 'MetalografiaDAO.php';

if(isset($_SESSION['tecnico']) && isset($_POST)){
    //verificamos que no hayan datos vacios
    if(empty($_POST['clContrato'])){
        header("location:formMetalografia.php?msgC=El nombre del contrato no debe estar vacio");
	}elseif(empty($_POST['deProyecto'])){
        header("location:formMetalografia.php?msgC=El nombre del deProyecto no debe estar vacio");
	}elseif(empty($_POST['clOrdenTrabajo'])){
        header("location:formMetalografia.php?msgC=Orden de Trabajo no debe estar vacio");
	}elseif(empty($_POST['clFolio'])){
        header("location:formMetalografia.php?msgC=Folio no debe estar vacio");
	}elseif(empty($_POST['deIsometrico'])){
        header("location:formMetalografia.php?msgC=Isometrico no debe estar vacio");
	}elseif(empty($_POST['clNumReporte'])){
        header("location:formMetalografia.php?msgC=Num. Reporte no debe estar vacio");
	}elseif(empty($_POST['feTecnico'])){
        header("location:formMetalografia.php?msgC=Fecha no debe estar vacio");
	}elseif(empty($_POST['deLugar'])){
        header("location:formMetalografia.php?msgC=Lugar no debe estar vacio");
	}elseif(empty($_POST['clPartida'])){
        header("location:formMetalografia.php?msgC=Fecha no debe estar vacio");
	}elseif(empty($_POST['deTrazabilidad'])){
        header("location:formMetalografia.php?msgC=Trazabilidad no debe estar vacio");
	}elseif(empty($_POST['deTubEstruc'])){
        header("location:formMetalografia.php?msgC=seleccionar una opcion");
	}elseif(empty($_POST['deDescripcion'])){
        header("location:formMetalografia.php?msgC=Descripcion no debe estar vacio");
	}elseif(empty($_POST['dePano'])){
        header("location:formMetalografia.php?msgC=Paño no puedo estar vacio");
	}elseif(empty($_POST['deReactivo'])){
        header("location:formMetalografia.php?msgC=Reactivo no puedo estar vacio");
	}elseif(empty($_POST['deFases'])){
        header("location:formMetalografia.php?msgC=Fases presentes no puedo estar vacio");
	}elseif(empty($_POST['deEspecificacion'])){
        header("location:formMetalografia.php?msgC=ESPECIFICACION APROXIMADA DEL MATERIAl no puedo estar vacio");
	}elseif(empty($_POST['deAbrasivo'])){
        header("location:formMetalografia.php?msgC=Abrasivo no puedo estar vacio");
	}elseif(empty($_POST['deTiempo'])){
        header("location:formMetalografia.php?msgC=Tiempo no puedo estar vacio");
	}else{
        $usuario = $_SESSION['tecnico'];
        $fecha = date("Y-m-d H-i-s");
        //creamos array
        $arrayMetalografia=array('clContrato'=>$_POST['clContrato'],'deProyecto'=>$_POST['deProyecto'],'clOrdenTrabajo'=>$_POST['clOrdenTrabajo'],
            'clFolio'=>$_POST['clFolio'],'deIsometrico'=>$_POST['deIsometrico'],'clNumReporte'=>$_POST['clNumReporte'],'feTecnico'=>$_POST['feTecnico'],
            'deLugar'=>$_POST['deLugar'],'clPartida'=>$_POST['clPartida'],'deTrazabilidad'=>$_POST['deTrazabilidad'],
            'deTubEstruc'=>$_POST['deTubEstruc'],'deDescripcion'=>$_POST['deDescripcion'],'dePano'=>$_POST['dePano'],
            'deAbrasivo'=>$_POST['deAbrasivo'],'deReactivo'=>$_POST['deReactivo'],'deTiempo'=>$_POST['deTiempo'],'deFases'=>$_POST['deFases'],'deEspecificacion'=>$_POST['deEspecificacion'],
            'feRegistro'=>$fecha, 'deElabora'=>$_POST['deElabora'], 'deAprueba'=>$_POST['deAprueba']);

            $ruta = "img/metalografia/";
            $size= $_FILES['deImagen']['size'];
            
            //variable de sesion reporte
            $reporteS = $_POST['clNumReporte'];
            $_SESSION["reporteS"] = $reporteS;
            $id = $_POST['id'];  
                //instancia para metodo update
                $m = new Metalografia();
                //enviar los parametros
                $m->modificarClave($id, $arrayMetalografia);
                //obtener ultimo id
                $clNumReporte = $_POST['clNumReporte'];
                //$lastId = $m->buscarID($clNumReporte);
                //if($lastId){
                $imagen = new Imagen();

	                if(move_uploaded_file($_FILES['deImagen']['tmp_name'], $ruta.$_FILES['deImagen']['name'])){
		                $extension = ".".pathinfo($ruta.$_FILES['deImagen']['name'], PATHINFO_EXTENSION);
						rename($ruta.$_FILES['deImagen']['name'], $ruta.$fecha.$extension);
                        $arreglo = array('clNumReporte'=>$clNumReporte,'deImagen'=>$fecha.$extension, 'deObservaciones'=>$_POST['deObservaciones'],'deGrano'=>$_POST['deGrano']);
		                $imagen->modificar($id, $arreglo);
                    }
                    if(move_uploaded_file($_FILES['deImagen2']['tmp_name'], $ruta.$_FILES['deImagen2']['name'])){
		                $extension2 = ".".pathinfo($ruta.$_FILES['deImagen2']['name'], PATHINFO_EXTENSION);
						rename($ruta.$_FILES['deImagen2']['name'], $ruta.$fecha."02".$extension2);
		                $arreglo = array('clNumReporte'=>$clNumReporte,'deImagen2'=>$fecha."02".$extension2, 'deObservaciones'=>$_POST['deObservaciones'],'deGrano'=>$_POST['deGrano']);
		                $imagen->modificar($id, $arreglo);	                                                           
                    }
                    else{
		                $arreglo = array('clNumReporte'=>$clNumReporte,'deObservaciones'=>$_POST['deObservaciones']);
		                $imagen->modificar($id, $arreglo);           
					}

    }//sino hubo errores 

        header("location:formMetalografiaMostrar.php");
}else{
    header("location:notFound.html");
    die();
}
    