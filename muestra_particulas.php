<?php
//Desactivar toda las notificaciónes del PHP xd
error_reporting(0);
session_start();

if(isset($_SESSION['tecnico'])){
    $tec = $_SESSION['tecnico'];
}else{
    header("location:notFound.html");
    die();
}
?>
<!--div class="saltopagina"-->
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	 <!-- ICONO PESTAÑA -->
  <link href="/AICO/img/IC.png" rel="icon">
    <meta charset="utf8_general_ci">
    <title>Informe particulas</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/AICO/css/for_a_quimico.css" type="text/css">
	<?php
	require 'conexionsqli.php';
	$query ="SELECT idParticulas FROM particulas_m WHERE  claveTecnico = '$tec' ORDER BY idParticulas DESC LIMIT 1";
	$execute = mysqli_query($conn, $query);
	//Compruebo si hay algún resultado
	if($row =  mysqli_fetch_array($execute)){
		//Guardo los datos de la BD en las variables de php
		$id =  utf8_encode($row["idParticulas"]);
		}
	?>
 
	<script> 
		var variable='<?php echo "Clave de reporte: ".$id;?>'
		alert(variable);
	</script>
</head>
<script>
		var color1="";
		var color2="";

		function change (elemento) {
			if(color1=="#7dcf84")
			{
				elemento.style.backgroundColor=color1="#fff";
			}else{
				elemento.style.backgroundColor=color1="#7dcf84";
			}
		}

		function change2 (elemento) {
			if(color2=="#7dcf84")
			{
				elemento.style.backgroundColor=color2="#fff";
			}else{
				elemento.style.backgroundColor=color2="#7dcf84";
			}
		}
	</script>
<div id="center" align="center">
<body>
<div class="encabezado"><table width="981" height="80" border="1">
  <tr>
    <td id="centrado" width="553">FORMATO</td>
    <td id="centrado" width="100">CODIGO</td>
    <td id="centrado" width="100">FOR-PINS-05</td>
    <td id="centrado" width="200" rowspan="3"onclick="location.href='imagenes_particulas.php'"><span><img src="/AICO/img/icon.png" alt="sample"></span></td>
  </tr>
  <tr>
    <td rowspan="2" id="negrita">INFORME DE INSPECCION CON PARTICULAS MAGNETICAS</td>
    <td id="centrado">VERSION</td>
    <td id="centrado">1</td>
  </tr>
  <tr>
    <td id="centrado">PAGINA</td>
    <td id="centrado"><label contenteditable="true">X DE X</label></td>
  </tr>
</table>
</div>
<br>
<?php
//PONER CONSULTA DE PARTICULAAS
//require 'conexionsqli.php';
$query ="SELECT * FROM particulas_m m1, particulas_m2 m2 WHERE m1.idParticulas = m2.idParticulas AND claveTecnico = '$tec' ORDER BY id DESC LIMIT 1";
$execute = mysqli_query($conn, $query);
//Compruebo si hay algún resultado
if($row =  mysqli_fetch_array($execute)){
	//Guardo los datos de la BD en las variables de php
	$cl =  $row["cliente"];
	}
?>
<br>
<div class="borde">
<div class="cuerpo"><table width="981" border="0">
  <tr>
    <td width="134">CLIENTE:</td>
    <td width="317"><input type="text" name="cliente" class="sinborde" value="<?php echo $cl; ?>" size="66" readonly="readonly"></td>
    <td width="120">CONTRATO:</td>
    <td width="340" colspan="2"><input type="text" name="contrato" value="<?php echo  $row['contrato']; ?>" class="sinborde" size="42" readonly="readonly"></td>
  </tr>
</table>
</div>
  <br>
<div class="cuerpo"><table width="981" border="0">
  <tr>
    <td width="134">PROYECTO:</td>
    <td colspan="5"><textarea id="textA" style="max-width:820px;" cols="140" style="overflow-y:hidden" readonly="readonly" class="sinborde" name="proyecto"><?php echo  $row['proyecto']; ?></textarea>
  </tr>
</table> 
</div>
<br>
<div class="cuerpo"><table width="981" border="0">
  <tr>
    <td width="134">FOLIO:</td>
    <td width="250"><input type="text" name="folio" class="sinborde" value="<?php echo  $row['folio']; ?>" size="35" readonly="readonly"></td>
    <td width="140">NUMERO DE REPORTE:</td>
    <td width="300" colspan="2"><input type="text" name="reporte" value="<?php echo  $row['n_reporte']; ?>" class="sinborde" size="25" readonly="readonly"></td>
	<td id="centrado" width="110">FECHA:</td>
    <td width="157"><input type="text" name="fecha" size="18" value="<?php echo  $row['fecha']; ?>" class="sinborde" readonly="readonly"></td>
  </tr>
</table>
</div>
  <br>
<div class="cuerpo"><table width="981" border="0">
  <tr>
    <td width="134">LUGAR:</td>
    <td colspan="2"><textarea style="max-width:598px;" id="textA" name="trazabilidad" style="overflow-y:hidden" class="sinborde"  cols="100" readonly="readonly"><?php echo  $row['lugar']; ?></textarea>
    <td width="79">PLANO:</td>
    <td width="350" colspan="2"><input type="text" name="plano" value="<?php echo  $row['plano']; ?>" class="sinborde" size="19" readonly="readonly"></td>
  </tr>
  </table>
  </div>
<br>
<div class="cuerpo"><table width="981" border="0">
  <tr>
    <td width="215">DESCRIPCI&Oacute;N DEL TRABAJO Y NOTAS:</td>
    <td colspan="5"><textarea id="textA" style="max-width:750px;" cols="121" style="overflow-y:hidden" readonly="readonly" class="sinborde" name="descripcion"><?php echo  $row['descripcion']; ?></textarea>
  </tr>
</table> 
</div>
<br>
<div class="cuerpo"><table width="981" border="0">
  <tr>
    <td width="150">CODIGO DE INSPECCION:</td>
    <td width="317"><input type="text" name="cliente" class="sinborde" value="<?php echo  $row['codigo_i']; ?>" size="63" readonly="readonly"></td>
    <td width="120">PROCEDIMIENTO:</td>
    <td width="340" colspan="2"><input type="text" name="procedimiento" value="<?php echo  $row['procedimiento']; ?>" class="sinborde" size="43" readonly="readonly"></td>
  </tr>
</table>
</div>
</div>
<br>
<div class="cuerpo"><table width="981" border="1" height="70">
  <tr>
    <td colspan="7" class="fields">MATERIALES USADOS</td>
  </tr>
  <tr>
    <td class="fields">CONSUMIBLE</td>
    <td class="fields">MARCA</td>
    <td class="fields">MODELO</td>
    <td class="fields">LOTE</td>
    <td class="fields">TIPO</td>
    <td class="fields">COLOR</td>
    <td class="fields">APLICACION</td>
  </tr>
  <tr align="center">
    <td class="fields" align="left">PARTICULAS</td>
    <td><input type="text"  name="marca_1" class="sinborde" size="12" value="<?php echo  $row['marca_1']; ?>"></td>
    <td><input type="text"  name="modelo_1" class="sinborde" size="12" value="<?php echo  $row['modelo_1']; ?>"></td>
    <td><input type="text"  name="lote_1" class="sinborde" size="12" value="<?php echo  $row['lote_1']; ?>"></td>
    <td><input type="text"  name="tipo_1" class="sinborde" size="12" value="<?php echo  $row['tipo_1']; ?>"></td>
    <td><input type="text"  name="color_1" class="sinborde" size="12" value="<?php echo  $row['color_1']; ?>"></td>
    <td><input type="text"  name="aplicacion_1" class="sinborde" size="12" value="<?php echo  $row['aplicacion_1']; ?>"></td>	
  </tr>
  <tr align="center">
    <td class="fields" align="left">CONTRASTANTE</td>
    <td><input type="text" name="marca_2" class="sinborde" size="12" value="<?php echo  $row['marca_2']; ?>"></td>
    <td align="center"><input type="text"  name="modelo_2" class="sinborde" size="12" value="<?php echo  $row['modelo_2']; ?>"></td>
    <td align="center"><input type="text"  name="lote_2" class="sinborde" size="12" value="<?php echo  $row['lote_2']; ?>"></td>
    <td align="center">NA</td>
    <td align="center"><input type="text"  name="color_2" class="sinborde" size="12" value="<?php echo  $row['color_2']; ?>"></td>
    <td align="center"><input type="text"  name="aplicacion_2" class="sinborde" size="12" value="<?php echo  $row['aplicacion_2']; ?>"></td>
  </tr>
</table>
</div>
<br>
<div class="cuerpo"><table width="800" border="1" height="70">
  <tr>
    <td colspan="7" class="fields">EQUIPO</td>
  </tr>
  <tr>
    <td class="fields">EQUIPO</td>
    <td class="fields">MARCA</td>
    <td class="fields">MODELO</td>
    <td class="fields">NS</td>
    <td colspan="2" class="fields">CORRIENTE</td>

  </tr>
  <tr>
    <td class="fields">YUGO</td>
    <td align="center"><input type="text"  name="modelo_1" class="sinborde" size="12" value="<?php echo  $row['marca_3']; ?>"></td>
    <td align="center"><input type="text"  name="lote_1" class="sinborde" size="12" value="<?php echo  $row['modelo_3']; ?>"></td>
    <td align="center"><input type="text"  name="tipo_1" class="sinborde" size="12" value="<?php echo  $row['ns']; ?>"></td>
    <td onclick="change(this);" align="center" name="color">AC</td>
    <td onclick="change2(this);" align="center" name="color2">DC</td>	
  </tr>
  </table>
  </div>
<script>
     var formulario = document.getElementsByName("color");
	 
</script>
<br><br>
<div class="borde">
<div class="cuerpo_2"><table width="981" border="0">
  <tr>
    <td width="134">TIPO DE MATERIAL:</td>
    <td width="317"><input type="text" name="cliente" class="sinborde" value="<?php echo  $row['tipo_material']; ?>" size="66" readonly="readonly"></td>
    <td width="120">COMPONENTE:</td>
    <td width="340" colspan="2"><input type="text" name="contrato" value="<?php echo  $row['componente']; ?>" class="sinborde" size="43" readonly="readonly"></td>
  </tr>
</table>
</div>
<br>
<div class="cuerpo_2"><table width="981" border="0">
  <tr>
    <td width="170">CONDICION SUPERFICIAL:</td>
    <td width="317"><input type="text" name="cliente" class="sinborde" value="<?php echo  $row['condicion_s']; ?>" size="66" readonly="readonly"></td>
    <td width="120">TEMPERATURA:</td>
    <td width="340" colspan="2"><input type="text" name="contrato" value="<?php echo  $row['temperatura']; ?>" class="sinborde" size="37" readonly="readonly"></td>
  </tr>
</table>
</div>
<br>
<div class="cuerpo_2"><table width="981" border="0">
  <tr>
    <td width="80">ESPESOR:</td>
    <td width="210"><input type="text" value="<?php echo  $row['espesor']; ?>" class="sinborde" size="32"></td>
    <td width="95">TIPO DE LUZ:</td>
    <td width="144"><input type="text" value="<?php echo  $row['tipo_de_luz']; ?>" class="sinborde" size="32"></td>
    <td width="80">INTENSIDAD:</td>
    <td width="156"><input type="text" value="<?php echo  $row['intensidad']; ?>" class="sinborde" size="34"></td>
  </tr>
  </table>
  </div>
  </div>
  <br><br>
 <?php require 'conexionsqli.php';
 $sql2 = "SELECT * FROM particulas_m m1, particulas_m2 m2 WHERE m1.idParticulas = m2.idParticulas AND claveTecnico = '$tec'"; 
 $query2 = mysqli_query($conn, $sql2); 
if (!$query2) {
    die ('SQL Error: ' . mysqli_error($conn));
}
?>
    <div class="composicion_q">
        <table width="981" height="180" border="1" class="cuerpo_2">
            <caption class="title"></caption>   
            <thead>
                    <tr class="fields">
                        <td colspan="5" align="center">RESULTADOS</td>
                    </tr>
                    <tr class="fields">
                        <td colspan="5">PIEZA: <input class="extra2" type="text" name="pieza" size="110" value="<?php echo  $row['pieza']; ?>"></td>
                    </tr>
                    <tr class="fields">
                        <th>JUNTA</th>
                        <th>LONGITUD EN m</th>
                        <th>DISCONTINUIDAD</th>
                        <th>EVALUACION</th>
                        <th>OBSERVACIONES</th>
                    </tr>
                </thead>
                <tbody>                    
                <?php
                    while ($row2 = mysqli_fetch_array($query2))

                    {
                        echo '<tr>
                                <td height="25px">'.$row2['junta'].'</td>
                                <td>'.(round($row2['longitud']*100)/100).'</td>
                                <td>'.$row2['discontinuidad'].'</td>
					            <td>'.$row2['evaluacion'].'</td>
					            <td>'.$row2['observaciones'].'</td>
                     
                            </tr>';
                    }?>
	            </tbody>
	    </table>
	</div>
	<br><br>
<?php
//sumar longitud
$query2 ="SELECT SUM(m2.longitud) AS res
FROM particulas_m m1, particulas_m2 m2 
WHERE m1.idParticulas = m2.idParticulas
AND claveTecnico = '$tec'";
$execute2 = mysqli_query($conn, $query2);
//Compruebo si hay algún resultado
if($row2 =  mysqli_fetch_array($execute2)){
	//Guardo los datos de la BD en las variables de php
	$res =  utf8_encode($row2["res"]);
	}
?>
<div class="borde">		
<div class="cuerpo"><table width="981" border="0">
  <tr>
    <td width="200"></td>
    <td width="250"></td>
    <td width="290">LONGITUD TOTAL O PIEZAS INSPECCIONADAS:</td>
    <td width="300" colspan="2"><input type="text" name="contrato" value="<?php echo (round($res*100)/100)?>" class="sinborde" size="47" readonly="readonly"></td>
  </tr>		
</table>
</div>
</div>
<br><br><br><br><br><br>
<!--**************************FOOTER****************************************-->
<div class="footerParticulas"><table width="981" border="0" align="center">
  <tr>
    <td class="borde"><input type="text"></td>
    <td class="borde"><input type="text"></td>
    <td class="borde"><input type="text"></td>
  </tr>
  <!--tr>
    <td><input type="text" placeholder="Nombre y firma" class="sinborde" size="30"></td>
    <td><input type="text" placeholder="Nombre y firma" class="sinborde" size="30"></td>
    <td><input type="text" placeholder="Nombre y firma" class="sinborde" size="30"></td>
  </tr-->
  <tr>
    <td>
	<input class="inputfinales" type="text" size="46" value="<?php echo  $row['firma1']; ?>">
	<br>
	<textarea class="inputfinales2" id="textA2" cols="300px" rows="3" style="max-width:300px;" style="font-weight: bold;"><?php echo  $row['empresa1']; ?> </textarea>
    <td>
	<input class="inputfinales" type="text" value="<?php echo  $row['firma2']; ?>" size="46">
	<br>
	<textarea class="inputfinales2" id="textA2" rows="3" cols="300px" style="max-width:300px;"  style="font-weight: bold;"><?php echo  $row['empresa2']; ?></textarea>
    <td>
	<input class="inputfinales" type="text"  size="46" value="<?php echo  $row['firma3']; ?>">
	<br>
	<textarea class="inputfinales2" id="textA2" rows="3" cols="300px" style="max-width:300px;"  style="font-weight: bold;"><?php echo  $row['empresa3']; ?></textarea>
  </tr>
</table>
</div>
</div>
<!--/div-->
</body>
</html>