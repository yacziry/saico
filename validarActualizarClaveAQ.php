<?php
ini_set("session.cookie_lifetime","14400");
ini_set("session.gc_maxlifetime","14400");
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
  include_once 'analisisQuimicoDAO.php';
  include_once 'imgAnalisisQuimicoDAO.php';

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
        $arrayAnalisisQuimico = array('clContrato'=>$_POST['clContrato'],'deProyecto'=>$_POST['deProyecto'],'clOrdenTrabajo'=>$_POST['clOrdenTrabajo'],
            'clFolio'=>$_POST['clFolio'],'deIsometrico'=>$_POST['deIsometrico'],'clNumReporte'=>$_POST['clNumReporte'],'feTecnico'=>$_POST['feTecnico'],
            'deLugar'=>$_POST['deLugar'],'deMarca'=>$_POST['deMarca'],'deModelo'=>$_POST['deModelo'],'deSerie'=>$_POST['deSerie'],'clUsuario'=>$usuario,'feRegistro'=>$fecha,
            'deElabora'=>$_POST['deElabora'],'deAprueba'=>$_POST['deAprueba']);
            //var_dump($arrayAnalisisQuimico);

            //creamos ruta para guardar img
            $ruta = "img/analisisQuimico/";
            $imagen = new Imagen();

            //variable de sesion reporte
            $reporteS = $_POST['clNumReporte'];
            $_SESSION["reporteS"] = $reporteS;
            $clNorma = $_POST['clNorma'];
            $_SESSION["clNorma"] = $clNorma;
            //instancia para metodo update
                $id = $_POST['id'];       
                $clNumReporte = $_POST['clNumReporte']; 
                $a = new AnalisisQuimico();
                //enviar parametros
                $a->modificarClave($id, $arrayAnalisisQuimico);
                //obtener ultimo id
                //$lastId = $a->buscarID($id);
                   
                    if(move_uploaded_file($_FILES['deImagen1']['tmp_name'], $ruta.$_FILES['deImagen1']['name'])){
		                $extension = ".".pathinfo($ruta.$_FILES['deImagen1']['name'], PATHINFO_EXTENSION);
						rename($ruta.$_FILES['deImagen1']['name'], $ruta.$fecha.$extension);                        
                        $arreglo = array('clNumReporte'=>$clNumReporte,'deImagen1'=>$fecha.$extension);
		                $imagen->modificarClave($id, $arreglo);
                    }
                    if(move_uploaded_file($_FILES['deImagen2']['tmp_name'], $ruta.$_FILES['deImagen2']['name'])){
		                $extension2 = ".".pathinfo($ruta.$_FILES['deImagen2']['name'], PATHINFO_EXTENSION);
						rename($ruta.$_FILES['deImagen2']['name'], $ruta.$fecha."02".$extension2);
		                $arreglo = array('clNumReporte'=>$clNumReporte,'deImagen2'=>$fecha."02".$extension2);
		                $imagen->modificarClave($id, $arreglo);	                                                           
                    }                   
        }//sino hubo errores 
       
        header("location:formMostrarClaveAQ.php");
		
}else{
    header("location:notFound.html");
    die();
}
    