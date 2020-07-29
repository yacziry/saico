<?php
ini_set("session.cookie_lifetime", "14400");
ini_set("session.gc_maxlifetime", "14400");
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//echo "validadUltrasonidoFinalizar.php";
if (isset($_SESSION['tecnico']) && isset($_POST)) {

        if (empty($_POST['deCliente'])) {

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
                        'feRegistro' => $fecha,
                        'clUsuario' => $usuario,
                        'deFirma1' => $_POST['voltaje'],
                        'deFirma2' => $_POST['voltaje'],
                        'deEmpresa1' => $_POST['voltaje'],
                        'deEmpresa2' => $_POST['voltaje'], // CORREGIR LAS VARIABLES 
                        'deEmpresa3' => $_POST['voltaje'],
                        'cacliente_clCliente' => $_POST['deCliente']

                );
                //variable de sesion reporte
                $reporteS = $_POST['clNumReporte'];
                $_SESSION["reporteS"] = $reporteS;
        } //sino hubo errores 
        //registro que muestra registro fotografico
        header("location:formRegistroFotUl.php");
} else {
        header("location:notFound.html");
        die();
}
