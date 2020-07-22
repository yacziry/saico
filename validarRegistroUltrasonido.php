<?php
ini_set("session.cookie_lifetime", "14400");
ini_set("session.gc_maxlifetime", "14400");
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (isset($_SESSION['tecnico']) && isset($_POST)) {

        if (empty($_POST['deCliente'])) {
                header("location:formParticulas.php?msgC=El valor de cliente no debe estar vacio");
        } elseif (empty($_POST['clContrato'])) {
                header("location:formParticulas.php?msgC=El nombre del contrato no debe estar vacio");
        } elseif (empty($_POST['deProyecto'])) {
                header("location:formParticulas.php?msgC=El nombre del proyecto no debe estar vacio");
        } elseif (empty($_POST['deIsometrico'])) {
                header("location:formParticulas.php?msgC=Num de plano no debe estar vacio");
        } elseif (empty($_POST['clNumReporte'])) {
                header("location:formParticulas.php?msgC=Num de reporte no debe estar vacio");
        } elseif (empty($_POST['deLugar'])) {
                header("location:formParticulas.php?msgC=Lugar no debe estar vacio");
        } elseif (empty($_POST['feTecnico'])) {
                header("location:formParticulas.php?msgC=Fecha no debe estar vacio");
        } elseif (empty($_POST['deLugar'])) {
                header("location:formParticulas.php?msgC=Lugar no debe estar vacio");
        } elseif (empty($_POST['deCodigoUtilizado'])) {
                header("location:formParticulas.php?msgC=Código no debe estar vacio");
        } elseif (empty($_POST['deMaterial'])) {
                header("location:formParticulas.php?msgC=Material no seleccionado");
        } elseif (empty($_POST['deDescripcion'])) {
                header("location:formParticulas.php?msgC=Descripción no debe estar vacio");
        } elseif (empty($_POST['deMarcaEquipo'])) {
                header("location:formParticulas.php?msgC=Marca del equipo no puedo estar vacio");
        } elseif (empty($_POST['deModeloEquipo'])) {
                header("location:formParticulas.php?msgC=Modelo del equipo no puedo estar vacio");
        } elseif (empty($_POST['deNoSerieEquipo'])) {
                header("location:formParticulas.php?msgC=Num de Serie no puedo estar vacio");
        } elseif (empty($_POST['deMarcaTrans'])) {
                header("location:formParticulas.php?msgC=Marca Transductor no puedo estar vacio");
        } elseif (empty($_POST['deModeloTrans'])) {
                header("location:formParticulas.php?msgC=Modelo Transductor no puedo estar vacio");
        } elseif (empty($_POST['clNoSerieTrans'])) {
                header("location:formParticulas.php?msgC=Num de Serie Transductor no puedo estar vacio");
        } elseif (empty($_POST['deFRECTrans'])) {
                header("location:formParticulas.php?msgC=Frecuencia Transductor no puedo estar vacio");
        } elseif (empty($_POST['deTipoAcoplante'])) {
                header("location:formParticulas.php?msgC=Tipo Acoplante no puedo estar vacio");
        } elseif (empty($_POST['clNoSerieAcoplante'])) {
                header("location:formParticulas.php?msgC=Num de serie Acoplante no puedo estar vacio");
        } elseif (empty($_POST['deGanancia'])) {
                header("location:formParticulas.php?msgC=Ganancia no puedo estar vacio");
        } elseif (empty($_POST['deTipo'])) {
                header("location:formParticulas.php?msgC=Tipo Equipo no puedo estar vacio");
        } elseif (empty($_POST['deRango'])) {
                header("location:formParticulas.php?msgC=Rango Equipo no puedo estar vacio");
        } elseif (empty($_POST['deModo'])) {
                header("location:formParticulas.php?msgC=Modo no puedo estar vacio");
        } elseif (empty($_POST['clNivelDac'])) {
                header("location:formParticulas.php?msgC=Nivel DAC no puedo estar vacio");
        } elseif (empty($_POST['deRetraso'])) {
                header("location:formParticulas.php?msgC=Retraso no puedo estar vacio");
        } elseif (empty($_POST['deRadioRechazo'])) {
                header("location:formParticulas.php?msgC=Debes seleccionar una opción de Rechazo");
        } elseif (empty($_POST['deHazRecto'])) {
                header("location:formParticulas.php?msgC=Haz Recto no puedo estar vacio");
        } elseif (empty($_POST['deHazAng'])) {
                header("location:formParticulas.php?msgC=Haz Angular no puedo estar vacio");
        } elseif (empty($_POST['deVoltaje'])) {
                header("location:formParticulas.php?msgC=Voltaje no puedo estar vacio");
        } else {
                $usuario = $_SESSION['tecnico'];
                $fecha = date("Y-m-d H-i-s");
                $arrayParticulas = array(
                        'feTecnico' => $_POST['feTecnico'],
                        'deLugar' => $_POST['deLugar'],
                        'clContrato' => $_POST['clContrato'],
                        'deProyecto' => $_POST['deProyecto'],
                        'clNumReporte' => $_POST['clNumReporte'],
                        'clPlano' => $_POST['clPlano'],
                        'deDescripcion' => $_POST['deDescripcion'],
                        'clCodigo' => $_POST['clCodigo'],
                        'deMaterial' => $_POST['deMaterial'],
                        'deMarca' => $_POST['deMarca'],
                        'deModelo' => $_POST['deModelo'],
                        'deNs' => $_POST['deNs'],
                        'deMarca2' => $_POST['deMarca2'],
                        'deModelo2' => $_POST['deModelo2'],
                        'deNs2' => $_POST['deNs2'],
                        'deFrec' => $_POST['deFrec'],
                        'deTipoAcoplante' => $_POST['deTipoAcoplante'],
                        'deNs3' => $_POST['deNs3'],
                        'deGanancia' => $_POST['deGanancia'],
                        'deTipo' => $_POST['deTipo'],
                        'deRango' => $_POST['deRango'],
                        'deNivelDac' => $_POST['deNivelDac'],
                        'deRechazo' => $_POST['deRechazo'],
                        'voltaje' => $_POST['voltaje'],
                        'feRegistro' => $fecha,
                        'clUsuario' => $usuario,
                        'deFirma1' => $_POST['voltaje'],
                        'deFirma2' => $_POST['voltaje'],
                        'deEmpresa1' => $_POST['voltaje'],
                        'deEmpresa2' => $_POST['voltaje'], // CORREGIR LAS VARIABLES 
                        'deEmpresa3' => $_POST['voltaje'],
                        'cacliente_clCliente' => $_POST['deCliente']
                );
                //Insertar array en bd
                include_once 'UltrasonidoDAO.php';
                $p = new Particulas();
                $particulas = $p->insertar($arrayParticulas);
                if ($particulas) {
                        $arrayPartResultado = array();
                }
                session_start();
                //variable de sesion reporte
                $reporteS = $_POST['clNumReporte'];
                $_SESSION["reporteS"] = $reporteS;
        } //sino hubo errores 
        //registro que muestra registro fotografico
        //header("location:formRegistroFotPart.php");
} else {
        header("location:notFound.html");
        die();
}
