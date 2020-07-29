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
                header("location:formBocaTubo.php?msgC=El valor de cliente no debe estar vacio");
        } elseif (empty($_POST['feTecnico'])) {
                header("location:formBocaTubo.php?msgC=El nombre del contrato no debe estar vacio");
        } elseif (empty($_POST['deLugar'])) {
                header("location:formBocaTubo.php?msgC=El nombre del proyecto no debe estar vacio");
        } elseif (empty($_POST['clContrato'])) {
                header("location:formBocaTubo.php?msgC=Num de plano no debe estar vacio");
        } elseif (empty($_POST['deProyecto'])) {
                header("location:formBocaTubo.php?msgC=Num de reporte no debe estar vacio");
        } elseif (empty($_POST['clNumReporte'])) {
                header("location:formBocaTubo.php?msgC=Lugar no debe estar vacio");
        } elseif (empty($_POST['clPlano'])) {
                header("location:formBocaTubo.php?msgC=Fecha no debe estar vacio");
        } elseif (empty($_POST['deDescripcion'])) {
                header("location:formBocaTubo.php?msgC=Lugar no debe estar vacio");
        } elseif (empty($_POST['clCodigo'])) {
                header("location:formBocaTubo.php?msgC=Código no debe estar vacio");
        } elseif (empty($_POST['deMaterial'])) {
                header("location:formBocaTubo.php?msgC=Material no seleccionado");
        } elseif (empty($_POST['deMarca'])) {
                header("location:formBocaTubo.php?msgC=Descripción no debe estar vacio");
        } elseif (empty($_POST['deModelo'])) {
                header("location:formBocaTubo.php?msgC=Marca del equipo no puedo estar vacio");
        } elseif (empty($_POST['deNs'])) {
                header("location:formBocaTubo.php?msgC=Modelo del equipo no puedo estar vacio");
        } elseif (empty($_POST['deMarca2'])) {
                header("location:formBocaTubo.php?msgC=Num de Serie no puedo estar vacio");
        } elseif (empty($_POST['deModelo2'])) {
                header("location:formBocaTubo.php?msgC=Marca Transductor no puedo estar vacio");
        } elseif (empty($_POST['deNs2'])) {
                header("location:formBocaTubo.php?msgC=Modelo Transductor no puedo estar vacio");
        } elseif (empty($_POST['deFrec'])) {
                header("location:formBocaTubo.php?msgC=Num de Serie Transductor no puedo estar vacio");
        } elseif (empty($_POST['deTipoAcoplante'])) {
                header("location:formBocaTubo.php?msgC=Frecuencia Transductor no puedo estar vacio");
        } elseif (empty($_POST['deNs3'])) {
                header("location:formBocaTubo.php?msgC=Tipo Acoplante no puedo estar vacio");
        } elseif (empty($_POST['deGanancia'])) {
                header("location:formBocaTubo.php?msgC=Num de serie Acoplante no puedo estar vacio");
        } elseif (empty($_POST['deTipo'])) {
                header("location:formBocaTubo.php?msgC=Ganancia no puedo estar vacio");
        } elseif (empty($_POST['deRango'])) {
                header("location:formBocaTubo.php?msgC=Tipo Equipo no puedo estar vacio");
        } elseif (empty($_POST['deNivelDac'])) {
                header("location:formBocaTubo.php?msgC=Rango Equipo no puedo estar vacio");
        } elseif (empty($_POST['voltaje'])) {
                header("location:formBocaTubo.php?msgC=Voltaje no puedo estar vacio");
                // FALTA AGREGAR CAMPOS DE FIRMAS Y EMPRESA
        } else {
                $usuario = $_SESSION['tecnico'];
                $fecha = date("Y-m-d H-i-s");
                $arraybocaDeTubo = array(
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
                        'feRegistro'=>$fecha,
                        'clUsuario'=>$usuario,
                        'deFirma1' => $_POST['voltaje'], 
                        'deFirma2' => $_POST['voltaje'], 
                        'deEmpresa1' => $_POST['voltaje'],
                        'deEmpresa2' => $_POST['voltaje'], // CORREGIR LAS VARIABLES 
                        'deEmpresa3' => $_POST['voltaje'],
                        'cacliente_clCliente' => $_POST['deCliente']
                        
                );
                //Insertar array en bd
                include_once 'bocaTuboDAO.php';
                $p = new bocaDeTubo();
                $bocaDeTubo = $p->insertar($arraybocaDeTubo);
                if ($bocaDeTubo) {
                        $arrayPartResultado = array();
                }
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
