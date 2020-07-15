<?php
// Desactivar toda las notificaciónes del PHP xd
	error_reporting(0);
	session_start();
	$clave = $_SESSION["clave"];//pasarla a una variable
      require 'conexion.php';
	  //datos
      $cliente=utf8_encode($_POST['cliente']);
	  $contrato=$_POST['contrato'];
	  $proyecto=$_POST['proyecto'];
	  $folio=$_POST['folio'];
	  $n_reporte=utf8_encode($_POST['n_reporte']);
	  $fecha=$_POST['fecha'];
	  $lugar=$_POST['lugar'];
	  $plano=$_POST['plano'];
	  $descripcion=$_POST['descripcion'];	  
	  $codigo_i=$_POST['codigo_i'];
	  $procedimiento='PRO-PINS-06';
	  //penetrante
	  $marca_p=$_POST['marca_p'];
	  $modelo_p=$_POST['modelo_p'];
	  $lote_p=$_POST['lote_p'];
	  $tiempo_p=$_POST['tiempo_p'];
	  $aplicacion_p=$_POST['aplicacion_p'];
	  $tipo_p=$_POST['tipo_p'];
	  //removedor
	  $marca_rem=$_POST['marca_rem'];
	  $modelo_rem=$_POST['modelo_rem'];
	  $lote_rem=$_POST['lote_rem'];
	  $aplicacion_rem=$_POST['aplicacion_rem'];
	  $tipo_rem=$_POST['tipo_rem'];
	  //revelador
	  $marca_rev=$_POST['marca_rev'];
	  $modelo_rev=$_POST['modelo_rev'];
	  $lote_rev=$_POST['lote_rev'];
	  $tiempo_rev=$_POST['tiempo_rev'];
	  $aplicacion_rev=$_POST['aplicacion_rev'];
	  $tipo_rev=$_POST['tipo_rev'];
	  
	  $tipo_material=$_POST['tipo_material'];
	  $componente=$_POST['componente'];
	  $condicion_s=$_POST['condicion_s'];
	  $temperatura=$_POST['temperatura'];
	  $tipo_de_luz=$_POST['tipo_de_luz'];
	  $intensidad=$_POST['intensidad'];
	  //firmas
	  $firma1=$_POST['firma1'];
	  $firma2=$_POST['firma2'];
	  $firma3=$_POST['firma3'];
	  $empresa1=$_POST['empresa1'];
	  $empresa2=$_POST['empresa2'];
	  $empresa3=$_POST['empresa3'];

	  $sentencia = "UPDATE liquidos_p1 SET cliente = '$cliente', contrato = '$contrato', proyecto = '$proyecto', folio = '$folio', n_reporte = '$n_reporte',
	  fecha = '$fecha', lugar = '$lugar', plano = '$plano', descripcion = '$descripcion', codigo_insp = '$codigo_i', procedimiento = '$procedimiento', marca_p = '$marca_p', modelo_p = '$modelo_p', lote_p = '$lote_p', tiempo_p = '$tiempo_p', aplicacion_p = '$aplicacion_p',
	  tipo_p = '$tipo_p', marca_rem = '$marca_rem', modelo_rem = '$modelo_rem', lote_rem = '$lote_rem', aplicacion_rem = '$aplicacion_rem', tipo_rem = '$tipo_rem', marca_rev = '$marca_rev', modelo_rev = '$modelo_rev', lote_rev = '$lote_rev',
	  tiempo_rev = '$tiempo_rev', aplicacion_rev = '$aplicacion_rev', tipo_rev = '$tipo_rev', tipo_material = '$tipo_material', componente = '$componente', condicion_s = '$condicion_s', temperatura = '$temperatura', tipo_d_luz = '$tipo_de_luz',
	  intensidad = '$intensidad', firma1 = '$firma1', firma2 = '$firma2', firma3 = '$firma3', empresa1 = '$empresa1', empresa2 = '$empresa2', empresa3 = '$empresa3' WHERE idLiquidos = $clave";
		   
	  //enlaza los dataos a los parametros
      $sql = $conexion->prepare ($sentencia);
	  

	  //ejecuta la sentencia
	  $sql->execute();
	  $error = $sql->errorInfo();
	  echo $error[2];
	  //cierra la conexion
	  unset($conexion);
	  //fin
	  //header("location:llena_juntasLiq.html")
	  ?>

	
	<?php
      require 'conexionsqli.php';
	//INSERT ARRAY WITH MYSQLI
	$junta = $_POST['junta'];
	$longitud = $_POST['longitud'];
	$discontinuidad = $_POST['discontinuidad'];
	$evaluacion = $_POST['evaluacion'];
	$observaciones = $_POST['observaciones'];
	$total = count($observaciones);

	$query .= "UPDATE particulas_m2 SET (junta, longitud, discontinuidad, evaluacion, observaciones) VALUES ";
	for($i=0;$i<$total;$i++){
	$query .= "('".$junta[$i]."','".$longitud[$i]."','".$discontinuidad[$i]."','".$evaluacion[$i]."','".$observaciones[$i]."')";
	$query .= ($i<$total-1) ? "," : "";
	}
	//SOLO IMPRIME LA CONSULTA**********echo $query;
	$exe = mysqli_query($conn, $query);
	if ( $row =  mysqli_fetch_array($exe)){}

	header("location:muestra_liquidos_actualizado.php")	  
	?>
