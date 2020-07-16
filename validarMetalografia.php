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
        $fecha2 = date("Y-m-d H-i-s")."-(02)";
        $arrayMetalografia=array('clContrato'=>$_POST['clContrato'],'deProyecto'=>$_POST['deProyecto'],'clOrdenTrabajo'=>$_POST['clOrdenTrabajo'],
            'clFolio'=>$_POST['clFolio'],'deIsometrico'=>$_POST['deIsometrico'],'clNumReporte'=>$_POST['clNumReporte'],'feTecnico'=>$_POST['feTecnico'],
            'deLugar'=>$_POST['deLugar'],'clPartida'=>$_POST['clPartida'],'deTrazabilidad'=>$_POST['deTrazabilidad'],
            'deTubEstruc'=>$_POST['deTubEstruc'],'deDescripcion'=>$_POST['deDescripcion'],'dePano'=>$_POST['dePano'],
            'deAbrasivo'=>$_POST['deAbrasivo'],'deReactivo'=>$_POST['deReactivo'],'deTiempo'=>$_POST['deTiempo'],'deFases'=>$_POST['deFases'],'deEspecificacion'=>$_POST['deEspecificacion'],
            'clFormato'=>'FOR-PIMP-05','clUsuario'=>$usuario,'feRegistro'=>$fecha, 'deElabora'=>$_POST['deElabora'], 'deAprueba'=>$_POST['deAprueba'], 'caCliente_clCliente'=>$_POST['deCliente']);
               
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
		                 echo "error, no se movio";
                    }	                                           
		        }else{
                    header("location:formMetalografia.php?msgUser=No se guardaron los datos");
                }
		    }//si hubo registro
    }//sino hubo errores 

        header("location:formMetalografiaContinuar.php");
}else{
    header("location:notFound.html");
    die();
}
    