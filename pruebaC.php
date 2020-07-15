<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="" />
    <title>Ensayo de Caracterizacion</title>
	 <!-- ICONO PESTAÑA -->
    <link href="/AICO/img/IC.png" rel="icon">
	<link rel="stylesheet" href="/AICO/css/llena_formatos.css" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<style type="text/css">
		.opciones { display:none; }		
	</style>
	<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
</head>
<body>
<header>
        <div class="profileLogo"> 
            <!-- Profile logo. Add a img tag in place of <span>. -->
             <p class="logoPlaceholder"><span><img src="/AICO/img/logop.jpg" alt="sample"></span>       
		<h3 align="center">INFORME DE CARACTERIZACIÓN</h3> 
    <hr>
		</div>
    </header>
        <form action=".php" method="POST" name="f">
		<?php
        	 $fecha = date("Y-m-d-H:i:s");
			 echo $fecha;
		?>
		</form>
</body>
</html>

