<?php
	// Desactivar toda las notificaciónes del PHP xd
	error_reporting(0);
	session_start();
	$tec = $_SESSION["tecnico"];//pasarla a una variable
      require 'conexionsqli.php';
		//consulta ID
	  $queryp ="SELECT idParticulas FROM particulas_m WHERE claveTecnico = '$tec' ORDER BY idParticulas DESC LIMIT 1";
		$execute = mysqli_query($conn, $queryp);
		//Compruebo si hay algún resultado
		if($row =  mysqli_fetch_array($execute)){
			//Guardo los datos de la BD en las variables de php
			$foranea =  $row["idParticulas"];
			}
	
	//INSERT ARRAY WITH MYSQLI
	$pieza = $_POST['pieza'];
	$junta = $_POST['junta'];
	$longitud = $_POST['longitud'];
	$discontinuidad = $_POST['discontinuidad'];
	$evaluacion = $_POST['evaluacion'];
	$observaciones = $_POST['observaciones'];
	$total = count($observaciones);
	$formato = "FOR-PINS-05";

	$query .= "INSERT INTO particulas_m2 (pieza, junta, longitud, discontinuidad, evaluacion, observaciones, idParticulas, formato) VALUES ";
	for($i=0;$i<$total;$i++){
	$query .= "('".$pieza."','".$junta[$i]."','".$longitud[$i]."','".$discontinuidad[$i]."','".$evaluacion[$i]."','".$observaciones[$i]."','".$foranea."','".$formato."')";
	$query .= ($i<$total-1) ? "," : "";
	}
	//SOLO IMPRIME LA CONSULTA**********echo $query;
	$exe = mysqli_query($conn, $query);
	if ( $row =  mysqli_fetch_array($exe)){}	  
	
	header("location:muestra_particulas.php")
	?>