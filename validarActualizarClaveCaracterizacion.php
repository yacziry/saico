<?php
ini_set("session.cookie_lifetime","14400");
ini_set("session.gc_maxlifetime","14400");
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
  include_once 'imgCaracterizacionDAO.php';
  include_once 'caracterizacionDAO.php';

if(isset($_SESSION['tecnico']) && isset($_POST)){

    $usuario = $_SESSION['tecnico'];
    $fecha = date("Y-m-d H-i-s");
    
    if(empty($_POST['clContrato'])){
        header("location:formCaracterizacion.php?msgC=El nombre del contrato no debe estar vacio");
	}elseif(empty($_POST['deProyecto'])){
        header("location:formCaracterizacion.php?msgC=El nombre del deProyecto no debe estar vacio");
	}elseif(empty($_POST['clOrdenTrabajo'])){
        header("location:formCaracterizacion.php?msgC=Orden de Trabajo no debe estar vacio");
	}elseif(empty($_POST['clFolio'])){
        header("location:formCaracterizacion.php?msgC=Folio no debe estar vacio");
	}elseif(empty($_POST['deIsometrico'])){
        header("location:formCaracterizacion.php?msgC=Isometrico no debe estar vacio");
	}elseif(empty($_POST['clNumReporte'])){
        header("location:formCaracterizacion.php?msgC=Num. Reporte no debe estar vacio");
	}elseif(empty($_POST['feTecnico'])){
        header("location:formCaracterizacion.php?msgC=Fecha no debe estar vacio");
	}elseif(empty($_POST['deLugar'])){
        header("location:formCaracterizacion.php?msgC=Lugar no debe estar vacio");
	}elseif(empty($_POST['clPartida'])){
        header("location:formCaracterizacion.php?msgC=Fecha no debe estar vacio");
	}elseif(empty($_POST['deTrazabilidad'])){
        header("location:formCaracterizacion.php?msgC=Trazabilidad no debe estar vacio");
	}elseif(empty($_POST['deTubEstruc'])){
        header("location:formCaracterizacion.php?msgC=seleccionar una opcion");
	}elseif(empty($_POST['deDescripcion'])){
        header("location:formCaracterizacion.php?msgC=Descripcion no debe estar vacio");
	}elseif(empty($_POST['numDureza4'])){
        header("location:formCaracterizacion.php?msgC=Paño no puedo estar vacio");
	}elseif(empty($_POST['numDureza5'])){
        header("location:formCaracterizacion.php?msgC=Reactivo no puedo estar vacio");
	}elseif(empty($_POST['numDureza6'])){
        header("location:formCaracterizacion.php?msgC=Fases presentes no puedo estar vacio");
	}elseif(empty($_POST['numDureza7'])){
        header("location:formCaracterizacion.php?msgC=ESPECIFICACION APROXIMADA DEL MATERIAl no puedo estar vacio");
	}elseif(empty($_POST['numDureza8'])){
        header("location:formCaracterizacion.php?msgC=Abrasivo no puedo estar vacio");
	}else{
        //creamos array con todos los datos procesados
        $arrayCaracterizacion=array('clContrato'=>$_POST['clContrato'],'deProyecto'=>$_POST['deProyecto'],'clOrdenTrabajo'=>$_POST['clOrdenTrabajo'],
            'clFolio'=>$_POST['clFolio'],'deIsometrico'=>$_POST['deIsometrico'],'clNumReporte'=>$_POST['clNumReporte'],'feTecnico'=>$_POST['feTecnico'],
            'deLugar'=>$_POST['deLugar'],'clPartida'=>$_POST['clPartida'],'deTrazabilidad'=>$_POST['deTrazabilidad'],
            'deTubEstruc'=>$_POST['deTubEstruc'],'deDescripcion'=>$_POST['deDescripcion'],'deMarca1'=>$_POST['deMarca1'],'deModelo1'=>$_POST['deModelo1'],
            'deSerie1'=>$_POST['deSerie1'],'numDureza1'=>$_POST['numDureza1'],'numDureza2'=>$_POST['numDureza2'],'numDureza3'=>$_POST['numDureza3'],'numDureza4'=>$_POST['numDureza4'],
            'numDureza5'=>$_POST['numDureza5'],'numDureza6'=>$_POST['numDureza6'],'numDureza7'=>$_POST['numDureza7'],'numDureza8'=>$_POST['numDureza8'],'numDureza9'=>$_POST['numDureza9'],
            'numDureza10'=>$_POST['numDureza10'],'clPromedio'=>$_POST['clPromedio'],'deMaterial'=>$_POST['deMaterial'],'numResTension'=>$_POST['numResTension'],'numResCedencia'=>$_POST['numResCedencia'],'clTamanoGrano'=>$_POST['clTamanoGrano'],
			'deMarca2'=>$_POST['deMarca2'],'deModelo2'=>$_POST['deModelo2'],'deSerie2'=>$_POST['deSerie2'],'vlPromedioC'=>$_POST['vlPromedioC'],
			'vlPromedioMn'=>$_POST['vlPromedioMn'],'vlPromedioP'=>$_POST['vlPromedioP'],'vlPromedioS'=>$_POST['vlPromedioS'],'vlPromedioSi'=>$_POST['vlPromedioSi'],
			'vlPromedioCu'=>$_POST['vlPromedioCu'],'vlPromedioNi'=>$_POST['vlPromedioNi'],'vlPromedioCr'=>$_POST['vlPromedioCr'],'vlPromedioMo'=>$_POST['vlPromedioMo'],
			'vlPromedioV'=>$_POST['vlPromedioV'],'vlPromedioNb'=>$_POST['vlPromedioNb'],'vlPromedioN'=>$_POST['vlPromedioN'],'dePano'=>$_POST['dePano'],'deAbrasivo'=>$_POST['deAbrasivo'],'deReactivo'=>$_POST['deReactivo'],'deTiempo'=>$_POST['deTiempo'],
			'deFases'=>$_POST['deFases'],'feRegistro'=>$fecha, 'deElabora'=>$_POST['deElabora'],'deAprueba'=>$_POST['deAprueba'],'canorma_norma'=>$_POST['clNorma']);
           
            //creamos ruta para guardar img
            $ruta = "img/caracterizacion/";
            $size= $_FILES['deImagen']['size'];
            $imagen = new Imagen();

            //variable de sesion reporte
            $reporteS = $_POST['clNumReporte'];
            $_SESSION["reporteS"] = $reporteS;
            $clNorma = $_POST['clNorma'];
            $_SESSION["clNorma"] = $clNorma;
            $id = $_POST['id'];
            //instancia para metodo update
                $clNumReporte = $_POST['clNumReporte'];       
                $c = new Caracterizacion();
                //enviar parametros
                $c->modificarClave($id, $arrayCaracterizacion);
                //obtener ultimo id
                //$lastId = $c->buscarID($clNumReporte);
                   
                    if(move_uploaded_file($_FILES['deImagen']['tmp_name'], $ruta.$_FILES['deImagen']['name'])){
		                $extension = ".".pathinfo($ruta.$_FILES['deImagen']['name'], PATHINFO_EXTENSION);
						rename($ruta.$_FILES['deImagen']['name'], $ruta.$fecha.$extension);                        
                        $arreglo = array('clNumReporte'=>$clNumReporte,'deImagen'=>$fecha.$extension, 'deObservaciones'=>$_POST['deObservaciones']);
		                $imagen->modificarClave($id, $arreglo);
                    }
                    if(move_uploaded_file($_FILES['deImagen2']['tmp_name'], $ruta.$_FILES['deImagen2']['name'])){
		                $extension2 = ".".pathinfo($ruta.$_FILES['deImagen2']['name'], PATHINFO_EXTENSION);
						rename($ruta.$_FILES['deImagen2']['name'], $ruta.$fecha."02".$extension2);
		                $arreglo = array('clNumReporte'=>$clNumReporte,'deImagen2'=>$fecha."02".$extension2, 'deObservaciones'=>$_POST['deObservaciones']);
		                $imagen->modificarClave($id, $arreglo);	                                                           
                    }
                    if(move_uploaded_file($_FILES['deImagen3']['tmp_name'], $ruta.$_FILES['deImagen3']['name'])){
		                $extension3 = ".".pathinfo($ruta.$_FILES['deImagen3']['name'], PATHINFO_EXTENSION);
						rename($ruta.$_FILES['deImagen3']['name'], $ruta.$fecha."03".$extension3);
		                $arreglo = array('clNumReporte'=>$clNumReporte,'deImagen3'=>$fecha."03".$extension3, 'deObservaciones'=>$_POST['deObservaciones']);
		                $imagen->modificarClave($id, $arreglo);	                                                           
                    }
                    else{
		                $arreglo = array('clNumReporte'=>$clNumReporte,'deObservaciones'=>$_POST['deObservaciones']);
		                $imagen->modificarClave($id, $arreglo);           
					}

        }//sino hubo errores 
       
        header("location:formCaracterizacionMostrar.php");
		
}else{
    header("location:notFound.html");
    die();
}
    