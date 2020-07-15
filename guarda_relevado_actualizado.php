<?php
// Desactivar toda las notificaciónes del PHP xd
	error_reporting(0);
	session_start();
	$clave = $_SESSION["clave"];//pasarla a una variable


      require 'conexion.php';
	  //datos
      $cliente=utf8_encode($_POST['cliente']);
	  $contrato=utf8_encode($_POST['contrato']);
	  $proyecto=$_POST['proyecto'];
	  $ot=utf8_encode($_POST['ot']);
	  $folio=utf8_encode($_POST['folio']);
	  $n_reporte=utf8_encode($_POST['n_reporte']);
	  $fecha=utf8_encode($_POST['fecha']);
	  $lugar=$_POST['lugar'];
	  $soldadura=$_POST['soldadura'];
	  $formato='FOR-PIMP-04';

	  $sentencia = "UPDATE relevado_1 SET cliente = '$cliente', contrato = '$contrato', proyecto = '$proyecto', ot = '$ot', folio ='$folio',
	  n_reporte = '$n_reporte', fecha = '$fecha', lugar = '$lugar', soldadura = '$soldadura' WHERE idRelevado1 = $clave";
		   
	  //enlaza los dataos a los parametros
      $sql = $conexion->prepare ($sentencia);

	  //ejecuta la sentencia
	  $sql->execute();
	  $error = $sql->errorInfo();
	  echo $error[2];
	  //cierra la conexion
	  unset($conexion);
	  //fin
		?>
	<?php
	require 'conexion.php';
	//promedios
	$promediar=($_POST['promediar']);
	?>	
	<?php $p_mba1= ($metala_1=utf8_encode($_POST['metala_1'])+$metala_2=utf8_encode($_POST['metala_2'])+$metala_3=utf8_encode($_POST['metala_3'])+$metala_4=utf8_encode($_POST['metala_4'])+$metala_5=utf8_encode($_POST['metala_5'])+$metala_6=utf8_encode($_POST['metala_6'])+$metala_7=utf8_encode($_POST['metala_7'])+$metala_8=utf8_encode($_POST['metala_8'])+$metala_9=utf8_encode($_POST['metala_9'])+$metala_10=utf8_encode($_POST['metala_10'])+
	$metala_11=utf8_encode($_POST['metala_11'])+$metala_12=utf8_encode($_POST['metala_12'])+$metala_13=utf8_encode($_POST['metala_13'])+$metala_14=utf8_encode($_POST['metala_14'])+$metala_15=utf8_encode($_POST['metala_15'])+$metala_16=utf8_encode($_POST['metala_16'])+$metala_17=utf8_encode($_POST['metala_17'])+$metala_18=utf8_encode($_POST['metala_18'])+$metala_19=utf8_encode($_POST['metala_19'])+$metala_20=utf8_encode($_POST['metala_20']))/$promediar;
	?>
	<?php $p_zacb1= ($zacb_1=utf8_encode($_POST['zacb_1'])+$zacb_2=utf8_encode($_POST['zacb_2'])+$zacb_3=utf8_encode($_POST['zacb_3'])+$zacb_4=utf8_encode($_POST['zacb_4'])+$zacb_5=utf8_encode($_POST['zacb_5'])+$zacb_6=utf8_encode($_POST['zacb_6'])+$zacb_7=utf8_encode($_POST['zacb_7'])+$zacb_8=utf8_encode($_POST['zacb_8'])+$zacb_9=utf8_encode($_POST['zacb_9'])+$zacb_10=utf8_encode($_POST['zacb_10'])+$zacb_11=utf8_encode($_POST['zacb_11'])+$zacb_12=utf8_encode($_POST['zacb_12'])+$zacb_13=utf8_encode($_POST['zacb_13'])+$zacb_14=utf8_encode($_POST['zacb_14'])+$zacb_15=utf8_encode($_POST['zacb_15'])+
	+$zacb_16=utf8_encode($_POST['zacb_16'])+$zacb_17=utf8_encode($_POST['zacb_17'])+$zacb_18=utf8_encode($_POST['zacb_18'])+$zacb_19=utf8_encode($_POST['zacb_19'])+$zacb_20=utf8_encode($_POST['zacb_20']))/$promediar;;
	?>
	<?php $p_soldadurac1= ($soldadurac_1=utf8_encode($_POST['soldadurac_1'])+$soldadurac_2=utf8_encode($_POST['soldadurac_2'])+$soldadurac_3=utf8_encode($_POST['soldadurac_3'])+$soldadurac_4=utf8_encode($_POST['soldadurac_4'])+$soldadurac_5=utf8_encode($_POST['soldadurac_5'])+$soldadurac_6=utf8_encode($_POST['soldadurac_6'])+$soldadurac_7=utf8_encode($_POST['soldadurac_7'])+$soldadurac_8=utf8_encode($_POST['soldadurac_8'])+$soldadurac_9=utf8_encode($_POST['soldadurac_9'])+$soldadurac_10=utf8_encode($_POST['soldadurac_10'])+
	$soldadurac_11=utf8_encode($_POST['soldadurac_11'])+$soldadurac_12=utf8_encode($_POST['soldadurac_12'])+$soldadurac_13=utf8_encode($_POST['soldadurac_13'])+$soldadurac_14=utf8_encode($_POST['soldadurac_14'])+$soldadurac_15=utf8_encode($_POST['soldadurac_15'])+$soldadurac_16=utf8_encode($_POST['soldadurac_16'])+$soldadurac_17=utf8_encode($_POST['soldadurac_17'])+$soldadurac_18=utf8_encode($_POST['soldadurac_18'])+$soldadurac_19=utf8_encode($_POST['soldadurac_19'])+$soldadurac_20=utf8_encode($_POST['soldadurac_20']))/$promediar;
	?>
	<?php $p_zacb1_1= ($zacb1_1=utf8_encode($_POST['zacb1_1'])+$zacb1_2=utf8_encode($_POST['zacb1_2'])+$zacb1_3=utf8_encode($_POST['zacb1_3'])+$zacb1_4=utf8_encode($_POST['zacb1_4'])+$zacb1_5=utf8_encode($_POST['zacb1_5'])+$zacb1_6=utf8_encode($_POST['zacb1_6'])+$zacb1_7=utf8_encode($_POST['zacb1_7'])+$zacb1_8=utf8_encode($_POST['zacb1_8'])+$zacb1_9=utf8_encode($_POST['zacb1_9'])+$zacb1_10=utf8_encode($_POST['zacb1_10'])+$zacb1_11=utf8_encode($_POST['zacb1_11'])+$zacb1_12=utf8_encode($_POST['zacb1_12'])+$zacb1_13=utf8_encode($_POST['zacb1_13'])+$zacb1_14=utf8_encode($_POST['zacb1_14'])+$zacb1_15=utf8_encode($_POST['zacb1_15'])+
	$zacb1_16=utf8_encode($_POST['zacb1_16'])+$zacb1_17=utf8_encode($_POST['zacb1_17'])+$zacb1_18=utf8_encode($_POST['zacb1_18'])+$zacb1_19=utf8_encode($_POST['zacb1_19'])+$zacb1_20=utf8_encode($_POST['zacb1_20']))/$promediar;?>
	<?php $p_metalba1= ($metalba1_1=utf8_encode($_POST['metalba1_1'])+$metalba1_2=utf8_encode($_POST['metalba1_2'])+$metalba1_3=utf8_encode($_POST['metalba1_3'])+$metalba1_4=utf8_encode($_POST['metalba1_4'])+$metalba1_5=utf8_encode($_POST['metalba1_5'])+$metalba1_6=utf8_encode($_POST['metalba1_6'])+$metalba1_7=utf8_encode($_POST['metalba1_7'])+$metalba1_8=utf8_encode($_POST['metalba1_8'])+$metalba1_9=utf8_encode($_POST['metalba1_9'])+$metalba1_10=utf8_encode($_POST['metalba1_10'])+
	$metalba1_11=utf8_encode($_POST['metalba1_11'])+$metalba1_12=utf8_encode($_POST['metalba1_12'])+$metalba1_13=utf8_encode($_POST['metalba1_13'])+$metalba1_14=utf8_encode($_POST['metalba1_14'])+$metalba1_15=utf8_encode($_POST['metalba1_15'])+$metalba1_16=utf8_encode($_POST['metalba1_16'])+$metalba1_17=utf8_encode($_POST['metalba1_17'])+$metalba1_18=utf8_encode($_POST['metalba1_18'])+$metalba1_19=utf8_encode($_POST['metalba1_19'])+$metalba1_20=utf8_encode($_POST['metalba1_20']))/$promediar;?>
	<?php
      require 'conexionsqli.php';
		//consulta ID
	  $query ="SELECT idRelevado1 FROM relevado_1 ORDER BY idRelevado1 DESC LIMIT 1";
		$execute = mysqli_query($conn, $query);
		//Compruebo si hay algún resultado
		if($row =  mysqli_fetch_array($execute)){
			//Guardo los datos de la BD en las variables de php
			$foranea =  $row["idRelevado1"];
			}
	  //'nombrea'=>$_POST['']----name entidad bd => name variable php
	  //DUREZAS PROMEDIO
	  $array_dureza=array(
	  'mba1'=>$_POST['mba1'],
	  'zab_b1'=>$_POST['zab_b1'],
	  'soldadura_c'=>$_POST['soldadura_c'],
	  'marca'=>$_POST['marca'],
	  'modelo'=>$_POST['modelo'],
	  'n_serie'=>$_POST['n_serie'],
	  //valores dureza1
	  'j1'=>$_POST['j1'],
	  'desc1'=>$_POST['desc1'],
	  'horarios1'=>$_POST['horarios1'],
	  'metala_1'=>$_POST['metala_1'],
	  'zacb_1'=>$_POST['zacb_1'],
	  'soldadurac_1'=>$_POST['soldadurac_1'],
	  'zacb1_1'=>$_POST['zacb1_1'],
	  'metalba1_1'=>$_POST['metalba1_1'],
	  //valores dureza2
	  'metala_2'=>$_POST['metala_2'],
	  'zacb_2'=>$_POST['zacb_2'],
	  'soldadurac_2'=>$_POST['soldadurac_2'],
	  'zacb1_2'=>$_POST['zacb1_2'],
	  'metalba1_2'=>$_POST['metalba1_2'],
	  //valores dureza3
	  'metala_3'=>$_POST['metala_3'],
	  'zacb_3'=>$_POST['zacb_3'],
	  'soldadurac_3'=>$_POST['soldadurac_3'],
	  'zacb1_3'=>$_POST['zacb1_3'],
	  'metalba1_3'=>$_POST['metalba1_3'],
	  //valores dureza4
	  'metala_4'=>$_POST['metala_4'],
	  'zacb_4'=>$_POST['zacb_4'],
	  'soldadurac_4'=>$_POST['soldadurac_4'],
	  'zacb1_4'=>$_POST['zacb1_4'],
	  'metalba1_4'=>$_POST['metalba1_4'],
	  //valores dureza5
	  'metala_5'=>$_POST['metala_5'],
	  'zacb_5'=>$_POST['zacb_5'],
	  'soldadurac_5'=>$_POST['soldadurac_5'],
	  'zacb1_5'=>$_POST['zacb1_5'],
	  'metalba1_5'=>$_POST['metalba1_5'],
	   //valores dureza6
	  'j2'=>$_POST['j2'],
	  'desc2'=>$_POST['desc2'],
	  'horarios2'=>$_POST['horarios2'],
	  'metala_6'=>$_POST['metala_6'],
	  'zacb_6'=>$_POST['zacb_6'],
	  'soldadurac_6'=>$_POST['soldadurac_6'],
	  'zacb1_6'=>$_POST['zacb1_6'],
	  'metalba1_6'=>$_POST['metalba1_6'],
	  //valores dureza7
	  'metala_7'=>$_POST['metala_7'],
	  'zacb_7'=>$_POST['zacb_7'],
	  'soldadurac_7'=>$_POST['soldadurac_7'],
	  'zacb1_7'=>$_POST['zacb1_7'],
	  'metalba1_7'=>$_POST['metalba1_7'],
	  //valores dureza8
	  'metala_8'=>$_POST['metala_8'],
	  'zacb_8'=>$_POST['zacb_8'],
	  'soldadurac_8'=>$_POST['soldadurac_8'],
	  'zacb1_8'=>$_POST['zacb1_8'],
	  'metalba1_8'=>$_POST['metalba1_8'],
	  //valores dureza9
	  'metala_9'=>$_POST['metala_9'],
	  'zacb_9'=>$_POST['zacb_9'],
	  'soldadurac_9'=>$_POST['soldadurac_9'],
	  'zacb1_9'=>$_POST['zacb1_9'],
	  'metalba1_9'=>$_POST['metalba1_9'],
	  //valores dureza10
	  'metala_10'=>$_POST['metala_10'],
	  'zacb_10'=>$_POST['zacb_10'],
	  'soldadurac_10'=>$_POST['soldadurac_10'],
	  'zacb1_10'=>$_POST['zacb1_10'],
	  'metalba1_10'=>$_POST['metalba1_10'],
	  //valores dureza11
	  'j3'=>$_POST['j3'],
	  'desc3'=>$_POST['desc3'],
	  'horarios3'=>$_POST['horarios3'],
	  'metala_11'=>$_POST['metala_11'],
	  'zacb_11'=>$_POST['zacb_11'],
	  'soldadurac_11'=>$_POST['soldadurac_11'],
	  'zacb1_11'=>$_POST['zacb1_11'],
	  'metalba1_11'=>$_POST['metalba1_11'],
	  //valores dureza12
	  'metala_12'=>$_POST['metala_12'],
	  'zacb_12'=>$_POST['zacb_12'],
	  'soldadurac_12'=>$_POST['soldadurac_12'],
	  'zacb1_12'=>$_POST['zacb1_12'],
	  'metalba1_12'=>$_POST['metalba1_12'],
	  //valores dureza13
	  'metala_13'=>$_POST['metala_13'],
	  'zacb_13'=>$_POST['zacb_13'],
	  'soldadurac_13'=>$_POST['soldadurac_13'],
	  'zacb1_13'=>$_POST['zacb1_13'],
	  'metalba1_13'=>$_POST['metalba1_13'],
	  //valores dureza14
	  'metala_14'=>$_POST['metala_14'],
	  'zacb_14'=>$_POST['zacb_14'],
	  'soldadurac_14'=>$_POST['soldadurac_14'],
	  'zacb1_14'=>$_POST['zacb1_14'],
	  'metalba1_14'=>$_POST['metalba1_14'],
	  //valores dureza15
	  'metala_15'=>$_POST['metala_15'],
	  'zacb_15'=>$_POST['zacb_15'],
	  'soldadurac_15'=>$_POST['soldadurac_15'],
	  'zacb1_15'=>$_POST['zacb1_15'],
	  'metalba1_15'=>$_POST['metalba1_15'],
	   //valores dureza16
	  'j4'=>$_POST['j4'],
	  'desc4'=>$_POST['desc4'],
	  'horarios4'=>$_POST['horarios4'],
	  'metala_16'=>$_POST['metala_16'],
	  'zacb_16'=>$_POST['zacb_16'],
	  'soldadurac_16'=>$_POST['soldadurac_16'],
	  'zacb1_16'=>$_POST['zacb1_16'],
	  'metalba1_16'=>$_POST['metalba1_16'],
	  //valores dureza17
	  'metala_17'=>$_POST['metala_17'],
	  'zacb_17'=>$_POST['zacb_17'],
	  'soldadurac_17'=>$_POST['soldadurac_17'],
	  'zacb1_17'=>$_POST['zacb1_17'],
	  'metalba1_17'=>$_POST['metalba1_17'],
	  //valores dureza18
	  'metala_18'=>$_POST['metala_18'],
	  'zacb_18'=>$_POST['zacb_18'],
	  'soldadurac_18'=>$_POST['soldadurac_18'],
	  'zacb1_18'=>$_POST['zacb1_18'],
	  'metalba1_18'=>$_POST['metalba1_18'],
	  //valores dureza19
	  'metala_19'=>$_POST['metala_19'],
	  'zacb_19'=>$_POST['zacb_19'],
	  'soldadurac_19'=>$_POST['soldadurac_19'],
	  'zacb1_19'=>$_POST['zacb1_19'],
	  'metalba1_19'=>$_POST['metalba1_19'],
	  //valores dureza20
	  'metala_20'=>$_POST['metala_20'],
	  'zacb_20'=>$_POST['zacb_20'],
	  'soldadurac_20'=>$_POST['soldadurac_20'],
	  'zacb1_20'=>$_POST['zacb1_20'],
	  'metalba1_20'=>$_POST['metalba1_20'],
			//extras
	  'trazabilidad'=>$_POST['trazabilidad'],
	  'partida'=>$_POST['partida'],
	  'isometrico'=>$_POST['isometrico'],
	  'tuberia'=>$_POST['tuberia'],
	  'descripcion'=>$_POST['descripcion'],
	  'idRelevado1'=>$foranea,
	  'extremo1'=>$_POST['extremo1'],
	  'extremo2'=>$_POST['extremo2'],
	  'firma1'=>$_POST['firma1'],
	  'firma2'=>$_POST['firma2'],
	  'firma3'=>$_POST['firma3'],
	  'firma1_2'=>$_POST['firma1_2'],
	  'firma2_2'=>$_POST['firma2_2'],
	  'firma3_3'=>$_POST['firma3_3'],
	  'formato'=>'FOR-PIMP-04',
	  'p_mba1'=>$p_mba1,
	  'p_zacb1'=>$p_zacb1,
	  'p_soldadurac1'=>$p_soldadurac1,
	  'p_zacb1_1'=>$p_zacb1_1,
	  'p_metalba1'=>$p_metalba1,
	  'escala'=>$_POST['escala'],
	  'comboRelevado'=>$_POST['comboRelevado'],
	  'comentario'=>$_POST['comentario']
	  );
	  
	  foreach($array_dureza as $key => $value){
	   $k[]=$key;
	   $v[]="'".$value."'";
	   }
	  $k=implode(",",$k);
	  $v=implode(",",$v);
	  $sql="UPDATE relevado_2 SET ($k) values ($v) WHERE id = $clave";
	  $exe=mysqli_query($conn, $sql);
	  header("location:muestra_relevado_actualizado.php")	  
	  ?>
