<?php
	session_start();
	$tec = $_SESSION["tecnico"];//pasarla a una variable
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
	  

     $sentencia = "insert into dureza values (NULL, :cliente, :contrato, :proyecto, :ot, :folio, :n_reporte, :fecha, :lugar, :soldadura, :trazabilidad, :partida, :isometrico, :tuberia, :estructural, :descripcion, :marca, :mdelo, :n_serie, :v_1, :v_2, :v_3, :v_4, :v_5, :v_6, :v_7, :v_8, :v_9, :v_10, :promedio, :d_norma, :observaciones, :formato, :firma1, :firma2, :escala, :tec)";
      //enlaza los dataos a los parametros
      $sql = $conexion->prepare ($sentencia);
	  
      $sql->bindParam(':cliente', $cliente);
	  $sql->bindParam(':contrato', $contrato);
	  $sql->bindParam(':proyecto', $proyecto);
	  $sql->bindParam(':ot', $ot);
	  $sql->bindParam(':folio', $folio);
	  $sql->bindParam(':n_reporte', $n_reporte);
	  $sql->bindParam(':fecha', $fecha);
	  $sql->bindParam(':lugar', $lugar);
	  $sql->bindParam(':soldadura', $soldadura);
	  $sql->bindParam(':trazabilidad', $trazabilidad);
	  $sql->bindParam(':partida', $partida);
	  $sql->bindParam(':isometrico', $isometrico);
	  $sql->bindParam(':tuberia', $tuberia);
	  $sql->bindParam(':estructural', $estructural);
	  $sql->bindParam(':descripcion', $descripcion);
	  $sql->bindParam(':marca', $marca);
	  $sql->bindParam(':mdelo', $mdelo);
	  $sql->bindParam(':n_serie', $n_serie);
	  $sql->bindParam(':v_1', $v_1);
	  $sql->bindParam(':v_2', $v_2);
	  $sql->bindParam(':v_3', $v_3);
	  $sql->bindParam(':v_4', $v_4);
	  $sql->bindParam(':v_5', $v_5);
	  $sql->bindParam(':v_6', $v_6);
	  $sql->bindParam(':v_7', $v_7);
	  $sql->bindParam(':v_8', $v_8);
	  $sql->bindParam(':v_9', $v_9);
	  $sql->bindParam(':v_10', $v_10);
	  $sql->bindParam(':promedio', $promedio);
	  $sql->bindParam(':d_norma', $d_norma);
	  $sql->bindParam(':observaciones', $observaciones);	  
	  $sql->bindParam(':formato', $formato);
	  $sql->bindParam(':firma1', $firma1);
	  $sql->bindParam(':firma2', $firma2);
	  //$sql->bindParam(':firma3', $firma3);
	  $sql->bindParam(':escala', $escala);
	  $sql->bindParam(':tec', $tec);
	  
	  
    //ejecuta la sentencia
    $sql->execute();
    $error = $sql->errorInfo();
    echo $error[2];
    //cierra la conexion
    unset($conexion);
    //fin
header("location:muestra_dureza.php")
?>