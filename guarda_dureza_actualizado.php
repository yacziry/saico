<?php
// Desactivar toda las notificaciónes del PHP xd
	error_reporting(0);
	session_start();
	$clave = $_SESSION["clave"];//pasarla a una variable

      require 'conexion.php';
	  //datos
      $cliente=$_POST['cliente'];
	  $contrato=$_POST['contrato'];
	  $proyecto=$_POST['proyecto'];
	  $ot=$_POST['ot'];
	  $folio=$_POST['folio'];
	  $n_reporte=utf8_encode($_POST['n_reporte']);
	  $fecha=utf8_encode($_POST['fecha']);
	  $lugar=$_POST['lugar'];
	  $soldadura=$_POST['soldadura'];
	  $trazabilidad=$_POST['trazabilidad'];
	  $partida=$_POST['partida'];
	  $isometrico=$_POST['isometrico'];
	  $tuberia=$_POST['tuberia'];
	  $estructural=$_POST['estructural'];
	  $descripcion=$_POST['descripcion'];
	  $marca=$_POST['marca'];
	  $mdelo=$_POST['mdelo'];
	  $n_serie=$_POST['n_serie'];
	  $v_1=$_POST['v_1'];
	  $v_2=utf8_encode($_POST['v_2']);
	  $v_3=utf8_encode($_POST['v_3']);
	  $v_4=utf8_encode($_POST['v_4']);
	  $v_5=utf8_encode($_POST['v_5']);
	  $v_6=utf8_encode($_POST['v_6']);
	  $v_7=utf8_encode($_POST['v_7']);
	  $v_8=utf8_encode($_POST['v_8']);
	  $v_9=utf8_encode($_POST['v_9']);
	  $v_10=utf8_encode($_POST['v_10']);
	  $promedio=$_POST['promedio'];
	  $d_norma=$_POST['d_norma'];
	  $observaciones=$_POST['observaciones'];	  
	  $formato = 'FOR-PIMP-04';
	  $firma1=$_POST['firma1'];
	  $firma2=$_POST['firma2'];
	  //$firma3=utf8_encode($_POST['firma3']);
	  $escala=$_POST['escala'];
	  

     $sentencia = "UPDATE dureza SET cliente = '$cliente', contrato = '$contrato', proyecto = '$proyecto', ot = '$ot', folio = '$folio', n_reporte = '$n_reporte', fecha = '$fecha',
	 lugar = '$lugar', soldadura = '$soldadura', trazabilidad = '$trazabilidad', partida ='$partida', isometrico = '$isometrico', tuberia = '$tuberia', estructural = '$estructural',
	 descripcion = '$descripcion', marca = '$marca', mdelo = '$mdelo', n_serie = '$n_serie', v_1 = '$v_1', v_2 = '$v_2', v_3 = '$v_3', v_4 = '$v_4', v_5 = '$v_5', v_6 ='$v_6', v_7 = '$v_7',
	 v_8 = '$v_8', v_9 = '$v_9', v_10 ='$v_10', promedio = '$promedio', d_norma = '$d_norma', observaciones = '$observaciones', firma1 = '$firma1', firma2 = '$firma2', escala = '$escala' WHERE id = $clave";
      //enlaza los dataos a los parametros
      $sql = $conexion->prepare ($sentencia);
	  
	  //ejecuta la sentencia
	  $sql->execute();
	  $error = $sql->errorInfo();
	  echo $error[2];
 	  //cierra la conexion
	  unset($conexion);
	  //fin
	  header("location:muestra_dureza_actualizado.php")
	  ?>