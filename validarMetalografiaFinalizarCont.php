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
        header("location:formMetalografiaContinuar.php?msgC=El nombre del contrato no debe estar vacio");
	}elseif(empty($_POST['deProyecto'])){
        header("location:formMetalografiaContinuar.php?msgC=El nombre del deProyecto no debe estar vacio");
	}elseif(empty($_POST['clOrdenTrabajo'])){
        header("location:formMetalografiaContinuar.php?msgC=Orden de Trabajo no debe estar vacio");
	}elseif(empty($_POST['clFolio'])){
        header("location:formMetalografiaContinuar.php?msgC=Folio no debe estar vacio");
	}elseif(empty($_POST['deIsometrico'])){
        header("location:formMetalografiaContinuar.php?msgC=Isometrico no debe estar vacio");
	}elseif(empty($_POST['clNumReporte'])){
        header("location:formMetalografiaContinuar.php?msgC=Num. Reporte no debe estar vacio");
	}elseif(empty($_POST['feTecnico'])){
        header("location:formMetalografiaContinuar.php?msgC=Fecha no debe estar vacio");
	}elseif(empty($_POST['deLugar'])){
        header("location:formMetalografiaContinuar.php?msgC=Lugar no debe estar vacio");
	}elseif(empty($_POST['clPartida'])){
        header("location:formMetalografiaContinuar.php?msgC=Fecha no debe estar vacio");
	}elseif(empty($_POST['deTrazabilidad'])){
        header("location:formMetalografiaContinuar.php?msgC=Trazabilidad no debe estar vacio");
	}elseif(empty($_POST['deAccesorio'])){
        header("location:formMetalografiaContinuar.php?msgC=Accesorio no debe estar vacio");
	}elseif(empty($_POST['deTubEstruc'])){
        header("location:formMetalografiaContinuar.php?msgC=seleccionar una opcion");
	}elseif(empty($_POST['deDescripcion'])){
        header("location:formMetalografiaContinuar.php?msgC=Descripcion no debe estar vacio");
	}elseif(empty($_POST['numLija1'])){
        header("location:formMetalografiaContinuar.php?msgC=Numero de lija no puedo estar vacio");
	}elseif(empty($_POST['numLija2'])){
        header("location:formMetalografiaContinuar.php?msgC=Numero de lija no puedo estar vacio");
	}elseif(empty($_POST['numLija3'])){
        header("location:formMetalografiaContinuar.php?msgC=Numero de lija no puedo estar vacio");
	}elseif(empty($_POST['numLija4'])){
        header("location:formMetalografiaContinuar.php?msgC=Numero de lija no puedo estar vacio");
	}elseif(empty($_POST['numLija5'])){
        header("location:formMetalografiaContinuar.php?msgC=Numero de lija no puedo estar vacio");
	}elseif(empty($_POST['numLija6'])){
        header("location:formMetalografiaContinuar.php?msgC=Numero de lija no puedo estar vacio");
	}elseif(empty($_POST['dePano'])){
        header("location:formMetalografiaContinuar.php?msgC=Paño no puedo estar vacio");
	}elseif(empty($_POST['deReactivo'])){
        header("location:formMetalografiaContinuar.php?msgC=Reactivo no puedo estar vacio");
	}elseif(empty($_POST['deFases'])){
        header("location:formMetalografiaContinuar.php?msgC=Fases presentes no puedo estar vacio");
	}elseif(empty($_POST['deEspecificacion'])){
        header("location:formMetalografiaContinuar.php?msgC=ESPECIFICACION APROXIMADA DEL MATERIAl no puedo estar vacio");
	}elseif(empty($_POST['deAbrasivo'])){
        header("location:formMetalografiaContinuar.php?msgC=Abrasivo no puedo estar vacio");
	}elseif(empty($_POST['deTiempo'])){
        header("location:formMetalografiaContinuar.php?msgC=Tiempo no puedo estar vacio");
	}else{
        $usuario = $_SESSION['tecnico'];
        $fecha = date("Y-m-d-H-i-s");
        $fecha2 = date("Y-m-d H-i-s")."-(02)";
        $arrayMetalografia=array('clContrato'=>$_POST['clContrato'],'deProyecto'=>$_POST['deProyecto'],'clOrdenTrabajo'=>$_POST['clOrdenTrabajo'],
            'clFolio'=>$_POST['clFolio'],'deIsometrico'=>$_POST['deIsometrico'],'clNumReporte'=>$_POST['clNumReporte'],'feTecnico'=>$_POST['feTecnico'],
            'deLugar'=>$_POST['deLugar'],'clPartida'=>$_POST['clPartida'],'deTrazabilidad'=>$_POST['deTrazabilidad'],'deAccesorio'=>$_POST['deAccesorio'],
            'deTubEstruc'=>$_POST['deTubEstruc'],'deDescripcion'=>$_POST['deDescripcion'],'numLija1'=>$_POST['numLija1'],'numLija2'=>$_POST['numLija2'],
            'numLija3'=>$_POST['numLija3'],'numLija4'=>$_POST['numLija4'],'numLija5'=>$_POST['numLija5'],'numLija6'=>$_POST['numLija6'],'dePano'=>$_POST['dePano'],
            'deAbrasivo'=>$_POST['deAbrasivo'],'deReactivo'=>$_POST['deReactivo'],'deTiempo'=>$_POST['deTiempo'],'deFases'=>$_POST['deFases'],'deEspecificacion'=>$_POST['deEspecificacion'],
            'clFormato'=>'FOR-PIMP-05','clUsuario'=>$usuario,'feRegistro'=>$fecha, 'deElabora'=>$_POST['deElabora'], 'deAprueba'=>$_POST['deAprueba'], 'cacliente_clCliente'=>$_POST['deCliente']);
               
            //si el registro se inserto, entonces....
            include_once 'imagenesMetalografiaDAO.php';
            $ruta = "img/metalografia/";
            $size= $_FILES['deImagen']['size'];
            if($size > 350000){
	            exit("El archivo es muy grande");
                
                //header("location:formMetalografia.php?msgC=El archivo es muy grande");
            }else{
	            include_once 'MetalografiaDAO.php';
                $m = new Metalografia();
                //obtener el lastid si se hizo el registro
                $lastId = $m->insertar($arrayMetalografia);
                if($lastId){
	                if(move_uploaded_file($_FILES['deImagen']['tmp_name'], $ruta.$_FILES['deImagen']['name']) && move_uploaded_file($_FILES['deImagen2']['tmp_name'], $ruta.$_FILES['deImagen2']['name'])){
		                $extension = ".".pathinfo($ruta.$_FILES['deImagen']['name'], PATHINFO_EXTENSION);
                        $extension2 = ".".pathinfo($ruta.$_FILES['deImagen2']['name'], PATHINFO_EXTENSION);
						if(rename($ruta.$_FILES['deImagen']['name'], $ruta.$fecha.$extension)){
                            rename($ruta.$_FILES['deImagen2']['name'], $ruta.$fecha2.$extension2);
						}else{
							exit("No se cambiaron los nombres de los archivos");
						}
                        $imagen = new Imagen();
		                $arreglo = array('id'=>$lastId,'clNumReporte'=>$_POST['clNumReporte'],'deImagen'=>$fecha.$extension,'deImagen2'=>$fecha2.$extension2,'feRegistro'=>$fecha,'deGrano'=>$_POST['deGrano'],'deObservaciones'=>$_POST['deObservaciones']);
		                $imagen->insertar($arreglo);
	                }else{
		                echo "error";
                    }	                                           
		        }else{
                    header("location:formMetalografiaContinuar.php?msgUser=No se guardaron los datos");
                }
		    }//si hubo registro
    }//sino hubo errores 
        header("location:formMetalografiaMostrar2.php");
         session_start();
        //variable de sesion reporte
        $reporteS = $_POST['clNumReporte'];
        $_SESSION["reporteS"] = $reporteS;
}else{
    header("location:notFound.html");
    die();
}
    