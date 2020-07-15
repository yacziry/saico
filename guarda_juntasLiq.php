<?php
	// Desactivar toda las notificaciónes del PHP xd
	error_reporting(0);
	session_start();
	$tec = $_SESSION["tecnico"];//pasarla a una variable
      require 'conexionsqli.php';
		//consulta ID
	  $queryL ="SELECT idLiquidos FROM liquidos_p1 WHERE claveTecnico = '$tec' ORDER BY idLiquidos DESC LIMIT 1";
		$execute = mysqli_query($conn, $queryL);
		//Compruebo si hay algún resultado
		if($row =  mysqli_fetch_array($execute)){
			//Guardo los datos de la BD en las variables de php
			$foranea =  $row["idLiquidos"];
			}
	
	//INSERT ARRAY WITH MYSQLI
	$pieza = $_POST['pieza'];
	$junta = $_POST['junta'];
	$longitud = $_POST['longitud'];
	$discontinuidad = $_POST['discontinuidad'];
	$evaluacion = $_POST['evaluacion'];
	$observaciones = $_POST['observaciones'];
	$total = count($observaciones);
	$formato = "FOR-PINS-06";

	$query .= "INSERT INTO liquidos_p2 (pieza, junta, longitud, discontinuidad, evaluacion, observaciones, idLiquidos, formato) VALUES ";
	for($i=0;$i<$total;$i++){
	$query .= "('".$pieza."','".$junta[$i]."','".$longitud[$i]."','".$discontinuidad[$i]."','".$evaluacion[$i]."','".$observaciones[$i]."','".$foranea."','".$formato."')";
	$query .= ($i<$total-1) ? "," : "";
	}
	/*******************************SOLO IMPRIME LA CONSULTA****************
	*************                                               ************
	*************               sirve para ver errores xd       ************
	************************************************************************/
	//echo $query;
	$exe = mysqli_query($conn, $query);
	if ( $row =  mysqli_fetch_array($exe)){}	  
	
	header("location:muestra_liquidos.php")
	?>