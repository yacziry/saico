<?php
// Desactivar toda las notificaciónes del PHP xd
error_reporting(0);?>
<?php
require 'conexionsqli.php';
$query ="SELECT * FROM relevado_1 r1, relevado_2 r2 WHERE r1.idRelevado1 = r2.idRelevado1";
$execute = mysqli_query($conn, $query);
//Compruebo si hay algún resultado
while($row = mysqli_fetch_assoc($execute)){?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	 <!-- ICONO PESTAÑA -->
<link href="/AICO/img/IC.png" rel="icon">
<meta charset="utf8_general_ci">
<title>Informe de ensayo de dureza</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/AICO/css/for_a_quimico.css" type="text/css">
</head>
<div id="center" align="center">
<body>
<div class="encabezado"><table width="981" height="80" border="1">
  <tr>
    <td id="centrado" width="553">FORMATO</td>
    <td id="centrado" width="100">CODIGO</td>
    <td id="centrado" width="100">FOR-PIMP-04</td>
    <td id="centrado" width="200" rowspan="3" onclick="location.href='llena_d_relevado2.php'"><span><img src="/AICO/img/icon.png" alt="sample"></span></td>
  </tr>
  <tr>
    <td rowspan="2" id="negrita">INFORME DE ENSAYO DE DUREZA EN SOLDADURA</td>
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
<div class="inputs2">
<br><br>
<div class="borde">
<div class="cuerpo"><table width="981" border="0">
  <tr>
    <td width="134">CLIENTE:</td> 
    <td width="317"><input type="text" name="cliente" class="sinborde" value="<?php echo $row['cliente']; ?>" size="66" readonly="readonly"></td>
    <td width="120">CONTRATO:</td>
    <td width="340" colspan="2"><input type="text" name="contrato" value="<?php echo  $row['contrato']; ?>" class="sinborde" size="42" readonly="readonly"></td>
  </tr>
  </table>
  </div>
  <br>
  <div class="cuerpo"><table width="981" border="0">
  <tr>
    <td width="134">PROYECTO:</td>
    <td width="317"><textarea style="max-width:420px;" cols="70" id="textA" name="proyecto" readonly="readonly" class="sinborde"><?php echo  $row['proyecto']; ?></textarea>
    <td width="120">ORDEN DE TRABAJO:</td>
    <td width="340" colspan="2"><input type="text" name="ot" value="<?php echo  $row['ot']; ?>" class="sinborde" size="42" readonly="readonly"></td>
  </tr>
  </table>
  </div>
  <br>
  <div class="cuerpo"><table width="981" border="0">
  <tr>
    <td width="134">FOLIO:</td>
    <td width="155"><input type="text" size="35" name="folio" value="<?php echo  $row['folio']; ?>" class="sinborde" readonly="readonly"></td>
    <td width="140" >N&Uacute;MERO DE REPORTE:</td>
    <td width="221"><input type="text" name="n_reporte" size="30" value="<?php echo  $row['n_reporte']; ?>" class="sinborde" readonly="readonly"></td>
    <td id="centrado" width="110">FECHA:</td>
    <td width="157"><input type="text" name="fecha" size="19" value="<?php echo  $row['fecha']; ?>" class="sinborde" readonly="readonly"></td>
  </tr>
  </table>
  </div>
  <br>
  <div class="cuerpo"><table width="981" border="0">
  <tr>
    <td width="136">LUGAR:</td>
    <td width="315"><input type="text" name="lugar" value="<?php echo  $row['lugar']; ?>" class="sinborde" size="80" readonly="readonly"></td>
    <td width="169" id="centrado">NUMERO DE JUNTA:</td>
    <td width="333" colspan="2"><input type="text" name="soldadura" value="<?php echo  $row['soldadura']; ?>" class="sinborde" size="20" readonly="readonly"></td>
  </tr>
</table>
</div>
<br>
<div class="cuerpo"><table width="981" border="0">
  <tr>
    <td width="210">NOMBRE DE LA PIEZA/TRAZABILIDAD:</td>
    <td colspan="2"><textarea style="max-width:530px;" id="textA" name="trazabilidad" style="overflow-y:hidden" class="sinborde"  cols="85" readonly="readonly"><?php echo  $row['trazabilidad']; ?></textarea>
    <td width="79">PARTIDA:</td>
    <td width="350" colspan="2"><input type="text" name="partida" value="<?php echo  $row['partida']; ?>" class="sinborde" size="19" readonly="readonly"></td>
  </tr>
  </table>
  </div>
  <br>
  <div class="cuerpo"><table width="981" border="0">
  <tr>
    <td width="210">NO. DE ISOMETRICO Y/O PLANO:</td>
    <td width="300"><input type="text" name="isometrico" class="sinborde" value="<?php echo  $row['isometrico']; ?>" size="54" readonly="readonly"></td>
    <td width="150" align="CENTER">MATERIAL:</td>
    <td width="395" colspan="2"><input type="text" name="tuberia" value="<?php echo  $row['tuberia']; ?>" class="sinborde" size="37" readonly="readonly"></td>
  </tr>
  </table>
  </div>
  </form>
  <br>
  <div class="cuerpo"><table width="981" border="0">
  <tr>
    <td width="215">DESCRIPCI&Oacute;N DEL TRABAJO Y NOTAS:</td>
    <td colspan="5"><textarea id="textA" style="max-width:750px;" cols="121" style="overflow-y:hidden" readonly="readonly" class="sinborde" name="descripcion"><?php echo  $row['descripcion']; ?></textarea>
  </tr>
</table> 
</div>
</div>
<BR>
<div class="composicion_q"><table width="981" border="1" class="table table-bordered; fixed">
  <tr>
    <td width="341" rowspan="4" style="border-width: 1px;"><img src="/aico/img/relevado.png"></td>
    <td colspan="2" class="fields">DUREZA PROMEDIO ANTES DEL TRATAMIENTO TERMICO (HB)</td>
    <td colspan="2" class="fields">DATOS DEL EQUIPO</td>
  </tr>
  <tr>
    <td width="350" class="fields">METAL BASE (A,A1)</td>
    <td width="144"><input type="text" name="mba1" value="<?php   $row['mba1']; if (empty($row['mba1'])) { echo '---'; } else { echo $row['mba1']; } ?>" class="inputfinales2" readonly="readonly" placeholder="---"></td>
    <td width="70" class="fields">MARCA</td>
    <td width="174"><input type="text" name="marca" value="<?php echo  $row['marca']; ?>" class="inputfinales2" readonly="readonly" placeholder="--"></td>
  </tr>
  <tr>
    <td class="fields">ZONA AFECTADA POR EL CALOR ZAC (B,B1)</td>
    <td><input type="text" name="zab_b1" placeholder="---"  value="<?php $row['zab_b1']; if (empty($row['zab_b1'])) { echo '---'; } else { echo $row['zab_b1']; }  ?>" class="inputfinales2" readonly="readonly"></td>
    <td class="fields">MODELO</td>
    <td><input type="text" name="modelo" placeholder="--" value="<?php echo  $row['modelo']; ?>" class="inputfinales2" readonly="readonly"></td>
  </tr>
  <tr>
    <td class="fields">SOLDADURA ( C )</td>
    <td><input type="text" name="soldadura_c" value="<?php $row['soldadura_c']; if (empty($row['soldadura_c'])) { echo '---'; } else { echo $row['soldadura_c']; }?>" placeholder="---" class="inputfinales2" readonly="readonly"></td>
    <td class="fields">NO.SERIE</td>
    <td><input type="text" name="n_serie" placeholder="--" value="<?php echo  $row['n_serie']; ?>" class="inputfinales2" readonly="readonly"></td>
  </tr>
</table>
<p class="note">Valores antes del relevado de esfuerzos<p>
<p class="note">Valores despues del relevado de esfuerzos<p>
<div class="table-responsive">
<div class=""><table width="981" border="1" class="cuerpo2">
  <thead>
	<tr class="fields">
    <td colspan="3">DATOS DE LA UNI&Oacute;N DE LA TOMA DE DUREZA</td>
    <td colspan="5">VALORES DE DUREZA <input class="fields" size="8" placeholder="ESCALA XXX" value="<?php echo  $row['escala']; ?>" style="border:0px;" "background-color: #C0C0BF;"></td>
    <td rowspan="2">OBSERVACIONES</td>
  </tr>
  <tr class="fields">
    <th>JUNTA</th>
    <th>DESCRIPCION</th>
	<th>UBICACION DE LA TOMA DE DUREZAS<br>(USO HORARIO)</th>
    <th>METAL BASE (A)<br><input class="extra" size="9" value="<?php echo  $row['extremo1']; ?>" readonly="readonly"></th>
    <th>ZAC (B)</th>
    <th>SOLDADURA (C)</th>
    <th>ZAC (B1)</th>
    <th>METAL BASE (A1)<br><input class="extra" size="9" value="<?php echo  $row['extremo2']; ?>" readonly="readonly"></th>
  </tr>
  </thead>
	<tbody>
	<tr align="center">
	<td rowspan="5"><input class="inputfinales2" size="7" name="j1" value="<?php echo  $row['j1']; ?>"  readonly="readonly" ></td>
    <td rowspan="5"><textarea id="textA2" style="max-width:60px;" rows="1" cols="10" style="overflow-y:hidden" readonly="readonly" class="sinborde" name="descripcion"><?php echo  $row['desc1']; ?></textarea></td>  
    <td rowspan="5"><input class="inputfinales2"  size="9" name="horarios1"value="<?php echo  $row['horarios1']; ?>"  readonly="readonly"></td>
	<td><input class="inputfinales2" size="10" name="metala_1" value="<?php echo  $row['metala_1']; ?>" readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="zacb_1" value="<?php echo  $row['zacb_1']; ?>" readonly="readonly"></td>
    <td><input class="inputfinales2"  size="10" name="soldadurac_1" value="<?php echo  $row['soldadurac_1']; ?>" readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="zacb1_1" value="<?php echo  $row['zacb1_1']; ?>" readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="metalba1_1" value="<?php echo  $row['metalba1_1']; ?>" readonly="readonly"></td>
    <td width="3" rowspan="21"><textarea class="inputfinales2" style="text-align:left;" id="textA2" cols="11" name="observaciones1" rows="32" style="overflow-y:hidden" ></textarea>
	</tr>
    <tr>
	<td><input class="inputfinales2" size="10" name="metala_2" value="<?php echo  $row['metala_2']; ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="zacb_2" value="<?php echo  $row['zacb_2']; ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="soldadurac_2" value="<?php echo  $row['soldadurac_2']; ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="zacb1_2" value="<?php echo  $row['zacb1_2']; ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="metalba1_2" value="<?php echo  $row['metalba1_2']; ?>"  readonly="readonly"></td>
	</tr>
    <tr>
    <td><input class="inputfinales2" size="10" name="metala_3" value="<?php echo  $row['metala_3']; ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="zacb_3" value="<?php echo  $row['zacb_3']; ?>" readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="soldadurac_3" value="<?php echo  $row['soldadurac_3']; ?>" class="sinborde" readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="zacb1_3" value="<?php echo  $row['zacb1_3']; ?>" readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="metalba1_3" value="<?php echo  $row['metalba1_3']; ?>"  readonly="readonly"></td>
	</tr>
    <tr>
    <td><input class="inputfinales2" size="10" name="metala_4" value="<?php echo  $row['metala_4']; ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="zacb_4" value="<?php echo  $row['zacb_4']; ?>" readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="soldadurac_4" value="<?php echo  $row['soldadurac_4']; ?>" readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="zacb1_4" value="<?php echo  $row['zacb1_4']; ?>" readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="metalba1_4" value="<?php echo  $row['metalba1_4']; ?>" readonly="readonly"></td>
	</tr>
    <tr>
    <td><input class="inputfinales2" size="10" name="metala_5" value="<?php echo  $row['metala_5']; ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="zacb_5" value="<?php echo  $row['zacb_5']; ?>" readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="soldadurac_5" value="<?php echo  $row['soldadurac_5']; ?>" readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="zacb1_5" value="<?php echo  $row['zacb1_5']; ?>" readonly="readonly"></td>
    <td><input class="inputfinales2"size="10" name="metalba1_5" value="<?php echo  $row['metalba1_5']; ?>"  readonly="readonly"></td>
	</tr>
    <tr>
	<td rowspan="5"><input size="7" class="inputfinales2" name="j2" value="<?php echo  $row['j2']; ?>" readonly="readonly"></td>
    <td rowspan="5"><textarea id="textA2" style="max-width:60px;" cols="10" rows="1" style="overflow-y:hidden" readonly="readonly" class="sinborde" name="descripcion"><?php echo  $row['desc2']; ?></textarea></td>  
    <td rowspan="5"><input class="inputfinales2" size="9" name="horarios2" value="<?php echo  $row['horarios2']; ?>"  readonly="readonly"></td>
	<td><input class="inputfinales2" size="10" name="metala_6" value="<?php echo  $row['metala_6']; ?>" class="sinborde" readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="zacb_6" value="<?php echo  $row['zacb_6']; ?>" class="sinborde" readonly="readonly"></td>
    <td><input class="inputfinales2"size="10" name="soldadurac_6" value="<?php echo  $row['soldadurac_6']; ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="zacb1_6" value="<?php echo  $row['zacb1_6']; ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="metalba1_6" value="<?php echo  $row['metalba1_6']; ?>"  readonly="readonly"></td>    
	</tr>
    <tr>
    <td><input class="inputfinales2" size="10" name="metala_7" value="<?php echo  $row['metala_7']; ?>" class="sinborde" readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="zacb_7" value="<?php echo  $row['zacb_7']; ?>" class="sinborde" readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="soldadurac_7" value="<?php echo  $row['soldadurac_7']; ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="zacb1_7" value="<?php echo  $row['zacb1_7']; ?>" class="sinborde" readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="metalba1_7" value="<?php echo  $row['metalba1_7']; ?>"  readonly="readonly"></td>
	</tr>
    <tr>
    <td><input class="inputfinales2" size="10" name="metala_8" value="<?php echo  $row['metala_8']; ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="zacb_8" value="<?php echo  $row['zacb_8']; ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="soldadurac_8" value="<?php echo  $row['soldadurac_8']; ?>" readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="zacb1_8" value="<?php echo  $row['zacb1_8']; ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="metalba1_8" value="<?php echo  $row['metalba1_8']; ?>"  readonly="readonly"></td>
	</tr>
    <tr>
    <td><input class="inputfinales2" size="10" name="metala_9" value="<?php echo  $row['metala_9']; ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="zacb_9" value="<?php echo  $row['zacb_9']; ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="soldadurac_9" value="<?php echo  $row['soldadurac_9']; ?>" readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="zacb1_9" value="<?php echo  $row['zacb1_9']; ?>" readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="metalba1_9" value="<?php echo  $row['metalba1_9']; ?>" readonly="readonly"></td>
	</tr>
    <tr>
    <td><input class="inputfinales2" size="10" name="metala_10" value="<?php echo  $row['metala_10']; ?>" class="sinborde" readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="zacb_10" value="<?php echo  $row['zacb_10']; ?>" class="sinborde" readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="soldadurac_10" value="<?php echo  $row['soldadurac_10']; ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="zacb1_10" value="<?php echo  $row['zacb1_10']; ?>" class="sinborde" readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="metalba1_10" value="<?php echo  $row['metalba1_10']; ?>"  readonly="readonly"></td>
	</tr>	
    <tr>
	<td rowspan="5"><input class="inputfinales2" size="7" name="j3" value="<?php echo  $row['j3']; ?>"  readonly="readonly"></td>
    <td rowspan="5"><textarea id="textA2" style="max-width:60px;" cols="10" rows="1" style="overflow-y:hidden" readonly="readonly" class="sinborde" name="descripcion"><?php echo  $row['desc3']; ?></textarea></td>
    <td rowspan="5"><input class="inputfinales2" size="9" name="horarios3" value="<?php echo  $row['horarios3']; ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="metala_11" value="<?php echo  $row['metala_11']; ?>" readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="zacb_11" value="<?php echo  $row['zacb_11']; ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="soldadurac_11" value="<?php echo  $row['soldadurac_11']; ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="zacb1_11" value="<?php echo  $row['zacb1_11']; ?>" class="sinborde" readonly="readonly"></td>
    <td><input class="inputfinales2" size="10"name="metalba1_11" value="<?php echo  $row['metalba1_11']; ?>"  readonly="readonly"></td>    
	</tr>
    <tr>
    <td><input class="inputfinales2" size="10" name="metala_12" value="<?php echo  $row['metala_12']; ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="zacb_12" value="<?php echo  $row['zacb_12']; ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="soldadurac_12" value="<?php echo  $row['soldadurac_12']; ?>" class="sinborde" readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="zacb1_12" value="<?php echo  $row['zacb1_12']; ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="metalba1_12" value="<?php echo  $row['metalba1_12']; ?>"  readonly="readonly"></td>
	</tr>
    <tr>
    <td><input class="inputfinales2" size="10" name="metala_13" value="<?php echo  $row['metala_13']; ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="zacb_13" value="<?php echo  $row['zacb_13']; ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="soldadurac_13" value="<?php echo  $row['soldadurac_13']; ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="zacb1_13" value="<?php echo  $row['zacb1_13']; ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="metalba1_13" value="<?php echo  $row['metalba1_13']; ?>"  readonly="readonly"></td>
	</tr>
    <tr>
    <td><input class="inputfinales2" size="10" name="metala_14" value="<?php echo  $row['metala_14']; ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="zacb_14" value="<?php echo  $row['zacb_14']; ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="soldadurac_14" value="<?php echo  $row['soldadurac_14']; ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="zacb1_14" value="<?php echo  $row['zacb1_14']; ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="metalba1_14" value="<?php echo  $row['metalba1_14']; ?>"  readonly="readonly"></td>
	</tr>
    <tr>
    <td><input class="inputfinales2" size="10" name="metala_15" value="<?php echo  $row['metala_15']; ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="zacb_15" value="<?php echo  $row['metala_15']; ?>" readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="soldadurac_15" value="<?php echo  $row['soldadurac_15']; ?>" readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="zacb1_15" value="<?php echo  $row['zacb1_15']; ?>" readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="metalba1_15" value="<?php echo  $row['metalba1_15']; ?>"  readonly="readonly"></td>
	</tr>	
    <tr>
	<td rowspan="5"><input size="7" class="inputfinales2" name="j4" value="<?php $row['j4']; if (empty($row['j4'])) { echo '---'; } else { echo $row['j4']; } ?>"  readonly="readonly"></td>
    <td rowspan="5"><textarea id="textA2" style="max-width:60px;" cols="10" rows="1" style="overflow-y:hidden" readonly="readonly" class="sinborde" name="descripcion"><?php echo  $row['desc4']; ?></textarea></td>
    <td rowspan="5"><input size="9" class="inputfinales2"name="horarios4" value="<?php $row['horarios4']; if (empty($row['horarios4'])) { echo '---'; } else { echo $row['horarios4']; } ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="metala_16" value="<?php $row['metala_16']; if (empty($row['metala_16'])) { echo '---'; } else { echo $row['metala_16']; } ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="zacb_16" value="<?php $row['zacb_16']; if (empty($row['zacb_16'])) { echo '---'; } else { echo $row['zacb_16']; } ?>" readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="soldadurac_16" value="<?php $row['soldadurac_16']; if (empty($row['soldadurac_16'])) { echo '---'; } else { echo $row['soldadurac_16']; } ?>" readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="zacb1_16" value="<?php $row['zacb1_16']; if (empty($row['zacb1_16'])) { echo '---'; } else { echo $row['zacb1_16']; } ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="metalba1_16" value="<?php $row['metalba1_16']; if (empty($row['metalba1_16'])) { echo '---'; } else { echo $row['metalba1_16']; } ?>"  readonly="readonly"></td>    
	</tr>
    <tr>
    <td><input class="inputfinales2" size="10" name="metala_17" value="<?php $row['metala_17']; if (empty($row['metala_17'])) { echo '---'; } else { echo $row['metala_17']; }?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="zacb_17" value="<?php $row['zacb_17']; if (empty($row['zacb_17'])) { echo '---'; } else { echo $row['zacb_17']; } ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="soldadurac_17" value="<?php $row['soldadurac_17']; if (empty($row['soldadurac_17'])) { echo '---'; } else { echo $row['soldadurac_17']; } ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="zacb1_17" value="<?php $row['zacb1_17']; if (empty($row['zacb1_17'])) { echo '---'; } else { echo $row['zacb1_17']; } ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="metalba1_17" value="<?php $row['metalba1_17']; if (empty($row['metalba1_17'])) { echo '---'; } else { echo $row['metalba1_17']; } ?>"  readonly="readonly"></td>
	</tr>
    <tr>
    <td><input class="inputfinales2" size="10" name="metala_18" value="<?php $row['metala_18']; if (empty($row['metala_18'])) { echo '---'; } else { echo $row['metala_18']; } ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="zacb_18" value="<?php $row['zacb_18']; if (empty($row['zacb_18'])) { echo '---'; } else { echo $row['zacb_18']; } ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="soldadurac_18" value="<?php $row['soldadurac_18']; if (empty($row['soldadurac_18'])) { echo '---'; } else { echo $row['soldadurac_18']; }?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="zacb1_18" value="<?php $row['zacb1_18']; if (empty($row['zacb1_18'])) { echo '---'; } else { echo $row['zacb1_18']; } ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2"size="10"  name="metalba1_18" value="<?php $row['metalba1_18']; if (empty($row['metalba1_18'])) { echo '---'; } else { echo $row['metalba1_18']; } ?>"  readonly="readonly"></td>
	</tr>
    <tr>
    <td><input class="inputfinales2" size="10" name="metala_19" value="<?php $row['metala_19']; if (empty($row['metala_19'])) { echo '---'; } else { echo $row['metala_19']; } ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="zacb_19" value="<?php $row['zacb_19']; if (empty($row['zacb_19'])) { echo '---'; } else { echo $row['zacb_19']; } ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="soldadurac_19" value="<?php $row['soldadurac_19']; if (empty($row['soldadurac_19'])) { echo '---'; } else { echo $row['soldadurac_19']; }?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="zacb1_19" value="<?php $row['zacb1_19']; if (empty($row['zacb1_19'])) { echo '---'; } else { echo $row['zacb1_19']; } ?>"  readonly="readonly"></td>
    <td><input class="inputfinales2" size="10" name="metalba1_19" value="<?php $row['metalba1_19']; if (empty($row['metalba1_19'])) { echo '---'; } else { echo $row['metalba1_19']; } ?>"  readonly="readonly"></td>
	</tr>
    <tr>
    <td><input class="inputfinales2" size="10" name="metala_20" value="<?php $row['metala_20']; if (empty($row['metala_20'])) { echo '---'; } else { echo $row['metala_20']; } ?>"></td>
    <td><input class="inputfinales2" size="10" name="zacb_20" value="<?php $row['zacb_20']; if (empty($row['zacb_20'])) { echo '---'; } else { echo $row['zacb_20']; } ?>"></td>
    <td><input class="inputfinales2" size="10" name="soldadurac_20" value="<?php $row['soldadurac_20']; if (empty($row['soldadurac_20'])) { echo '---'; } else { echo $row['soldadurac_20']; } ?>"></td>
    <td><input class="inputfinales2" size="10" name="zacb1_20" value="<?php $row['zacb1_20']; if (empty($row['zacb1_20'])) { echo '---'; } else { echo $row['zacb1_20']; } ?>"></td>
    <td><input class="inputfinales2" size="10" name="metalba1_20" value="<?php $row['metalba1_20']; if (empty($row['metalba1_20'])) { echo '---'; } else { echo $row['metalba1_20']; } ?>"  readonly="readonly"></td>
	</tr>
	<tr>
	<td colspan="3" class="fields">PROMEDIO DE DUREZA (HB)</td>
	<td ><input class="inputfinales3" size="10"  name="p_mba1" value="<?php echo round($row['p_mba1'] * 100)/100 ?>" class="sinborde"></td>
    <td ><input class="inputfinales3" size="10"  name="p_zacb1" value="<?php echo round($row['p_zacb1'] * 100)/100 ?>"class="sinborde"></td>
    <td ><input class="inputfinales3" size="20"  name="p_soldadurac1" value="<?php echo round($row['p_soldadurac1'] * 100)/100 ?>" class="sinborde"></td>
    <td ><input class="inputfinales3" size="10"  name="p_zacb1_1" value="<?php echo round($row['p_zacb1_1'] * 100)/100 ?>"class="sinborde" ></td>
    <td ><input class="inputfinales3" size="10"  name="p_metalba1" value="<?php echo round($row['p_metalba1'] * 100)/100 ?>"class="sinborde" ></td>
	</tr>	
	<!--tr>
	<td colspan="3" rowspan="2" class="comen"><p class="note">Comentario:<br>Valores antes del relevado de esfuerzos<p></td>
    <td colspan="5" class="fields">PROMEDIO DE DUREZA (HB)</td>	
	</tr-->  
	
	<!--tr>
    <td><input size="10"  name="p_mba1" value="<--?php echo (round($p_mba1)) ?>" class="sinborde"></td>
    <td><input size="10"  name="p_zacb1" value="<--?php echo (round($p_zacb1)) ?>"class="sinborde" ></td>
    <td><input size="10"  name="p_soldadurac1" value="<--?php echo (round($p_soldadurac1)) ?>" class="sinborde"></td>
    <td><input size="10"  name="p_zacb1" value="<--?php echo(round($p_zacb1)) ?>"class="sinborde" ></td>
    <td><input size="10"  name="p_metalba1" value="<--?php echo(round($p_metalba1)) ?>"class="sinborde" ></td>
	</tr-->   
	</tbody>
</table>
<!--/div>
</div-->
<br><br><br><br>
<table width="981" border="0">
  <tr>
    <td width="134">Comentarios:</td>
    <td class="borde" width="316"><input class="inputfinales2" name="ob2"  size="120" class="sinborde"></td>
	</tr>
	</table>
<!--label class="inputfinales">Comentarios:</label>
<table width="981" border="1">
  <tr>
    <td><input class="inputfinales2" name="ob2" placeholder="Comentarios" size="132" class="sinborde"></td>
  </tr>
</table-->
<br><br>
<div class="footer"><table width="981" border="0" align="center">
  <tr>
    <td class="borde"><input type="text"></td>
    <td class="borde"><input type="text"></td>
    <td class="borde"><input type="text"></td>
  </tr>
  <tr>
    <td>
	<input class="inputfinales" type="text" size="40" value="<?php echo  $row['firma1']; ?>">
	<br>
	<textarea class="inputfinales2" id="textA2" cols="300px" rows="3" style="max-width:300px;" style="font-weight: bold;"><?php echo  $row['firma1_2']; ?></textarea>
    <td>
	<input class="inputfinales" type="text" value="<?php echo  $row['firma2']; ?>" size="40">
	<br>
	<textarea class="inputfinales2" id="textA2" rows="3" cols="300px" style="max-width:300px;"  style="font-weight: bold;"><?php echo  $row['firma2_2']; ?></textarea>
    <td>
	<input class="inputfinales" type="text"  size="40" value="<?php echo  $row['firma3']; ?>">
	<br>
	<textarea class="inputfinales2" id="textA2" rows="3" cols="300px" style="max-width:300px;"  style="font-weight: bold;"><?php echo  $row['firma3_3']; ?></textarea>
  </tr>
</table>
<?php }?>
<br><br><br><br><br>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script src="/AICO/js/clicOff.js"></script>

</body>
</html>