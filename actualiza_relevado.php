<?php
session_start();
$clave = $_SESSION["clave"];//pasarla a una variable
?>
<!DOCTYPE html> 
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
	 <!-- ICONO PESTAÑA -->
	<link href="/AICO/img/IC.png" rel="icon">
    <title>Ensayo de dureza</title>
	<link rel="stylesheet" href="/AICO/css/llena_formatos.css" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
</head>
<body>
<header>
        <div class="profileLogo"> 
            <!-- Profile logo. Add a img tag in place of <span>. -->
             <p class="logoPlaceholder"><span><img src="/AICO/img/logop.jpg" alt="sample"></span>       
		<h3 align="center">INFORME DE ENSAYO DE DUREZA</h3> 
    <hr>
		</div>
    </header>
	<form action="guarda_relevado_actualizado.php" method="POST" id="formulario">
<?php
require 'conexionsqli.php';
$query ="SELECT * FROM relevado_1 r1, relevado_2 r2 WHERE r1.idRelevado1 = r2.idRelevado1 AND r1.idRelevado1 = $clave";
$execute = mysqli_query($conn, $query);
//Compruebo si hay algún resultado
if($row =  mysqli_fetch_array($execute)){}
?>
  <div class="form-group row"> 
	<div class="col-xs-6">
    <label for="ex3">Cliente</label>
    <input class="form-control"  type="text" name="cliente" value="<?php echo  $row['cliente']; ?>">
  </div>
  <div class="col-xs-6">
    <label for="ex3">Contrato</label>
    <input class="form-control"  type="text" name="contrato" value="<?php echo  $row['contrato']; ?>">
  </div>
  <div class="col-xs-6">
    <label for="ex3">Proyecto</label>
    <input class="form-control"  type="text" name="proyecto" value="<?php echo  $row['proyecto']; ?>">
  </div>
  <div class="col-xs-6">
    <label for="ex3">Orden de trabajo</label>
    <input class="form-control" id="ex3" type="text" name="ot" value="<?php echo  $row['ot']; ?>">
  </div>
  <div class="col-xs-4">
    <label for="ex3">Folio</label>
    <input class="form-control" id="ex3" type="text" name="folio" value="<?php echo  $row['folio']; ?>">
  </div>
  <div class="col-xs-4">
    <label for="ex3">Numero de reporte</label>
    <input class="form-control" id="ex3" type="text" name="n_reporte" value="<?php echo  $row['n_reporte']; ?>">
  </div>
  <div class="col-xs-4">
    <label for="ex3">Fecha</label>
    <input class="form-control" id="ex3" type="date" name="fecha" value="<?php echo  $row['fecha']; ?>">
  </div>
  <div class="col-xs-6">
    <label for="ex3">Lugar</label>
    <input class="form-control"  type="text" name="lugar" value="<?php echo  $row['lugar']; ?>">
  </div>
  <div class="col-xs-6">
    <label for="ex3">Numero de junta</label>
    <input class="form-control"  type="text" name="soldadura" value="<?php echo  $row['soldadura']; ?>">
  </div>
  <div class="col-xs-6">
    <label for="ex3">Nombre de la pieza/trazabilidad</label>
    <input class="form-control"  type="text" name="trazabilidad" value="<?php echo  $row['trazabilidad']; ?>">
  </div>
  <div class="col-xs-6">
    <label for="ex3">Partida</label>
    <input class="form-control"  type="text" name="partida" value="<?php echo  $row['partida']; ?>">
  </div>
   <div class="col-xs-6">
    <label for="ex3">No. de isometrico y/o plano</label>
    <input class="form-control"  type="text" name="isometrico" value="<?php echo  $row['isometrico']; ?>">
  </div>
  <div class="col-xs-6">
    <label for="ex3">Material</label>
    <input class="form-control" id="ex3" type="text" name="tuberia" value="<?php echo  $row['tuberia']; ?>">
  </div>
  </div>
  <div class="form-group">
  <label for="comment">Descripcion del trabajo y notas:</label>
  <textarea class="form-control" rows="5" name="descripcion" style="resize:none;"><?php echo  $row['descripcion']; ?></textarea>
  </div>
 <br>
 <div class="table-responsive">
<table width="981" border="1" align="center">
  <tr>
    <!--td rowspan="4" style="border-width: 1px;" width="164">	
	<input id="file" type="file">
	<div id="preview"></div></td>
</div>
</div-->
    <td colspan="2" class="fields">DUREZA PROMEDIO ANTES DEL TRATAMIENTO TERMICO (HB)</td>
    <td colspan="2" class="fields">DATOS DEL EQUIPO</td>
  </tr>
  <tr>
    <td class="fieldd">METAL BASE (A,A1)</td>
    <td align="center"><input placeholder="---" class="borde" name="mba1" value="<?php   $row['mba1']; if (empty($row['mba1'])) { echo round($row['p_mba1']).",".round($row['p_metalba1']); } else { echo $row['mba1']; } ?>" class="inputfinales2" placeholder="---"></td>
    <td class="fields">MARCA</td>
    <td align="center"><input placeholder="--" class="borde" name="marca" value="<?php echo  $row['marca']; ?>"></td>
  </tr>
  <tr>
    <td class="fieldd">ZONA AFECTADA POR EL CALOR ZAC (B,B1)</td>
    <td align="center"><input placeholder="---" class="borde" name="zab_b1" value="<?php $row['zab_b1']; if (empty($row['zab_b1'])) { echo round($row['p_zacb1']).",".round($row['p_zacb1_1']); } else { echo $row['zab_b1']; }  ?>" class="inputfinales2"></td>
    <td class="fields">MODELO</td>
    <td align="center"><input placeholder="--" class="borde" name="modelo" value="<?php echo  $row['modelo']; ?>"></td>
  </tr>
  <tr>
    <td class="fieldd">SOLDADURA ( C )</td>
    <td align="center"><input placeholder="---" class="borde" name="soldadura_c" value="<?php $row['soldadura_c']; if (empty($row['soldadura_c'])) { echo round($row['p_soldadurac1']); } else { echo $row['soldadura_c']; }?>" placeholder="---" class="inputfinales2"></td>
    <td class="fields">NO.SERIE</td>
    <td align="center"><input placeholder="--" class="borde" name="n_serie" value="<?php echo  $row['n_serie']; ?>"></td>
  </tr>
</table>
</div>
<br>
<div class="table-responsive">
<table border="1" align="center">
  <thead>
	<tr class="fields">
    <td colspan="3">DATOS DE LA UNION DE LA TOMA DE DUREZA</td>
    <td colspan="5">VALORES DE DUREZA<input class="fields" size="10" maxlength="9" name="escala" style="border:0px; background-color: #C0C0BF;" value="<?php echo  $row['escala']; ?>"></td>
  </tr>
  <tr class="fields">
    <th>JUNTA</th>
    <th>DESCRIPCION</th>
    <th>HORARIOS</th>
    <th>METAL BASE (A)<br><input class="fields" size="8"  name="extremo1" style="border:0px; background-color: #C0C0BF;" value="<?php echo  $row['extremo1']; ?>"></th>
    <th>ZAC (B)</th>
    <th>SOLDADURA (C)</th>
    <th>ZAC (B1)</th>
    <th>METAL BASE (A1)<br><input class="fields" size="8"  name="extremo2" style="border:0px; background-color: #C0C0BF;" value="<?php echo  $row['extremo2']; ?>"></th>
  </tr>
  </thead>
	<tbody>
	<tr>
	<td style="border-bottom:2px solid #000000" align="center" rowspan="5" ><textarea rows="6" name="j1" class="borde"><?php echo  $row['j1']; ?></textarea>
    <td style="border-bottom:2px solid #000000" align="center" rowspan="5" ><textarea rows="6" name="desc1" class="borde"><?php echo  $row['desc1']; ?></textarea>
    <td style="border-bottom:2px solid #000000" align="center" rowspan="5" ><textarea rows="6" name="horarios1" class="borde"><?php echo  $row['horarios1']; ?></textarea>
    <td><input type="number" name="metala_1" step="any" value="<?php echo  $row['metala_1']; ?>"></td>
    <td><input type="number" name="zacb_1" step="any" value="<?php echo  $row['zacb_1']; ?>"></td>
    <td><input type="number" name="soldadurac_1" step="any" value="<?php echo  $row['soldadurac_1']; ?>"></td>
    <td><input type="number" name="zacb1_1" step="any" value="<?php echo  $row['zacb1_1']; ?>"></td>
    <td><input type="number" name="metalba1_1" step="any" value="<?php echo  $row['metalba1_1']; ?>"></td>

	</tr>
    <tr>
    <td><input type="number" name="metala_2" step="any" value="<?php echo  $row['metala_2']; ?>"></td>
    <td><input type="number" name="zacb_2" step="any" value="<?php echo  $row['zacb_2']; ?>"></td>
    <td><input type="number" name="soldadurac_2" step="any" value="<?php echo  $row['soldadurac_2']; ?>"></td>
    <td><input type="number" name="zacb1_2" step="any" value="<?php echo  $row['zacb1_2']; ?>"></td>
    <td><input type="number" name="metalba1_2" step="any" value="<?php echo  $row['metalba1_2']; ?>"></td>
	</tr>
    <tr>
    <td><input type="number" name="metala_3" step="any" value="<?php echo  $row['metala_3']; ?>"></td>
    <td><input type="number" name="zacb_3" step="any" value="<?php echo  $row['zacb_3']; ?>"></td>
    <td><input type="number" name="soldadurac_3" step="any" value="<?php echo  $row['soldadurac_3']; ?>"></td>
    <td><input type="number" name="zacb1_3" step="any" value="<?php echo  $row['zacb1_3']; ?>"></td>
    <td><input type="number" name="metalba1_3" step="any" value="<?php echo  $row['metalba1_3']; ?>"></td>
	</tr>
    <tr>
    <td><input type="number" name="metala_4" step="any" value="<?php echo  $row['metala_4']; ?>"></td>
    <td><input type="number" name="zacb_4" step="any" value="<?php echo  $row['zacb_4']; ?>"></td>
    <td><input type="number" name="soldadurac_4" step="any" value="<?php echo  $row['soldadurac_4']; ?>"></td>
    <td><input type="number" name="zacb1_4" step="any" value="<?php echo  $row['zacb1_4']; ?>"></td>
    <td><input type="number" name="metalba1_4" step="any" value="<?php echo  $row['metalba1_4']; ?>"></td>
	</tr>
    <tr>
    <td style="border-bottom:2px solid #000000"><input type="number" name="metala_5" step="any" value="<?php echo  $row['metala_5']; ?>"></td>
    <td style="border-bottom:2px solid #000000"><input type="number" name="zacb_5" step="any" value="<?php echo  $row['zacb_5']; ?>"></td>
    <td style="border-bottom:2px solid #000000"><input type="number" name="soldadurac_5" step="any" value="<?php echo  $row['soldadurac_5']; ?>"></td>
    <td style="border-bottom:2px solid #000000"><input type="number" name="zacb1_5" step="any" value="<?php echo  $row['zacb1_5']; ?>"></td>
    <td style="border-bottom:2px solid #000000"><input type="number" name="metalba1_5" step="any" value="<?php echo  $row['metalba1_5']; ?>"></td>
	</tr>
    <tr>
	<td style="border-bottom:2px solid #000000" align="center" rowspan="5"><textarea rows="6" name="j2" class="borde"><?php echo  $row['j2']; ?></textarea>
    <td style="border-bottom:2px solid #000000" align="center" rowspan="5"><textarea rows="6" name="desc2" class="borde"><?php echo  $row['desc2']; ?></textarea>
    <td style="border-bottom:2px solid #000000" align="center" rowspan="5"><textarea rows="6" name="horarios2" class="borde"><?php echo  $row['horarios2']; ?></textarea>
    <td><input type="number" name="metala_6" step="any" value="<?php echo  $row['metala_6']; ?>"></td>
    <td><input type="number" name="zacb_6" step="any" value="<?php echo  $row['zacb_6']; ?>"></td>
    <td><input type="number" name="soldadurac_6" step="any" value="<?php echo  $row['soldadurac_6']; ?>"></td>
    <td><input type="number" name="zacb1_6" step="any" value="<?php echo  $row['zacb1_6']; ?>"></td>
    <td><input type="number" name="metalba1_6" step="any" value="<?php echo  $row['metalba1_6']; ?>"></td>

	</tr>
    <tr>
    <td><input type="number" name="metala_7" step="any" value="<?php echo  $row['metala_7']; ?>"></td>
    <td><input type="number" name="zacb_7" step="any" value="<?php echo  $row['zacb_7']; ?>"></td>
    <td><input type="number" name="soldadurac_7" step="any" value="<?php echo  $row['soldadurac_7']; ?>"></td>
    <td><input type="number" name="zacb1_7" step="any" value="<?php echo  $row['zacb1_7']; ?>"></td>
    <td><input type="number" name="metalba1_7" step="any" value="<?php echo  $row['metalba1_7']; ?>"></td>
	</tr>
    <tr>
    <td><input type="number" name="metala_8" step="any" value="<?php echo  $row['metala_5']; ?>"></td>
    <td><input type="number" name="zacb_8" step="any" value="<?php echo  $row['zacb_8']; ?>"></td>
    <td><input type="number" name="soldadurac_8" step="any" value="<?php echo  $row['soldadurac_8']; ?>"></td>
    <td><input type="number" name="zacb1_8" step="any" value="<?php echo  $row['zacb1_8']; ?>"></td>
    <td><input type="number" name="metalba1_8" step="any" value="<?php echo  $row['metalba1_8']; ?>"></td>
	</tr>
    <tr>
    <td><input type="number" name="metala_9" step="any" value="<?php echo  $row['metala_9']; ?>"></td>
    <td><input type="number" name="zacb_9" step="any" value="<?php echo  $row['zacb_9']; ?>"></td>
    <td><input type="number" name="soldadurac_9" step="any" value="<?php echo  $row['soldadurac_9']; ?>"></td>
    <td><input type="number" name="zacb1_9" step="any" value="<?php echo  $row['zacb1_9']; ?>"></td>
    <td><input type="number" name="metalba1_9" step="any" value="<?php echo  $row['metalba1_9']; ?>"></td>
	</tr>
    <tr>
    <td style="border-bottom:2px solid #000000"><input type="number" name="metala_10" step="any" value="<?php echo  $row['metala_10']; ?>"></td>
    <td style="border-bottom:2px solid #000000"><input type="number" name="zacb_10" step="any" value="<?php echo  $row['zacb_10']; ?>"></td>
    <td style="border-bottom:2px solid #000000"><input type="number" name="soldadurac_10" step="any" value="<?php echo  $row['soldadurac_10']; ?>"></td>
    <td style="border-bottom:2px solid #000000"><input type="number" name="zacb1_10" step="any" value="<?php echo  $row['zacb1_10']; ?>"></td>
    <td style="border-bottom:2px solid #000000"><input type="number" name="metalba1_10" step="any" value="<?php echo  $row['metalba1_10']; ?>"></td>
	</tr>
    <tr>
	<td style="border-bottom:2px solid #000000" align="center" rowspan="5"><textarea rows="6" name="j3" class="borde"><?php echo  $row['j3']; ?></textarea>
    <td style="border-bottom:2px solid #000000" align="center" rowspan="5"><textarea rows="6" name="desc3" class="borde"><?php echo  $row['desc3']; ?></textarea>
    <td style="border-bottom:2px solid #000000" align="center" rowspan="5"><textarea rows="6" name="horarios3" class="borde"><?php echo  $row['horarios3']; ?></textarea>
    <td><input type="number" name="metala_11" step="any" value="<?php echo  $row['metala_11']; ?>"></td>
    <td><input type="number" name="zacb_11" step="any" value="<?php echo  $row['zacb_11']; ?>"></td>
    <td><input type="number" name="soldadurac_11" step="any" value="<?php echo  $row['soldadurac_11']; ?>"></td>
    <td><input type="number" name="zacb1_11" step="any" value="<?php echo  $row['zacb1_11']; ?>"></td>
    <td><input type="number" name="metalba1_11" step="any" value="<?php echo  $row['metalba1_11']; ?>"></td>

	</tr>
    <tr>
    <td><input type="number" name="metala_12" step="any" value="<?php echo  $row['metala_12']; ?>"></td>
    <td><input type="number" name="zacb_12" step="any" value="<?php echo  $row['zacb_12']; ?>"></td>
    <td><input type="number" name="soldadurac_12" step="any" value="<?php echo  $row['soldadurac_12']; ?>"></td>
    <td><input type="number" name="zacb1_12" step="any" value="<?php echo  $row['zacb1_12']; ?>"></td>
    <td><input type="number" name="metalba1_12" step="any" value="<?php echo  $row['metalba1_12']; ?>"></td>
	</tr>
    <tr>
    <td><input type="number" name="metala_13" step="any" value="<?php echo  $row['metala_13']; ?>"></td>
    <td><input type="number" name="zacb_13" step="any" value="<?php echo  $row['zacb_13']; ?>"></td>
    <td><input type="number" name="soldadurac_13" step="any" value="<?php echo  $row['soldadurac_13']; ?>"></td>
    <td><input type="number" name="zacb1_13" step="any" value="<?php echo  $row['zacb1_13']; ?>"></td>
    <td><input type="number" name="metalba1_13" step="any" value="<?php echo  $row['metalba1_13']; ?>"></td>
	</tr>
    <tr>
    <td><input type="number" name="metala_14" step="any" value="<?php echo  $row['metala_14']; ?>"></td>
    <td><input type="number" name="zacb_14" step="any" value="<?php echo  $row['zacb_14']; ?>"></td>
    <td><input type="number" name="soldadurac_14" step="any" value="<?php echo  $row['soldadurac_14']; ?>"></td>
    <td><input type="number" name="zacb1_14" step="any" value="<?php echo  $row['zacb1_14']; ?>"></td>
    <td><input type="number" name="metalba1_14" step="any" value="<?php echo  $row['metalba1_14']; ?>"></td>
	</tr>
    <tr>
    <td style="border-bottom:2px solid #000000"><input type="number" name="metala_15" step="any" value="<?php echo  $row['metala_15']; ?>"></td>
    <td style="border-bottom:2px solid #000000"><input type="number" name="zacb_15" step="any" value="<?php echo  $row['zacb_15']; ?>"></td>
    <td style="border-bottom:2px solid #000000"><input type="number" name="soldadurac_15" step="any" value="<?php echo  $row['soldadurac_15']; ?>"></td>
    <td style="border-bottom:2px solid #000000"><input type="number" name="zacb1_15" step="any" value="<?php echo  $row['zacb1_15']; ?>"></td>
    <td style="border-bottom:2px solid #000000"><input type="number" name="metalba1_15" step="any" value="<?php echo  $row['metalba1_15']; ?>"></td>
	</tr>
    <tr>
	<td align="center" rowspan="5"><textarea rows="6" name="j4" class="borde"><?php echo  $row['j4']; ?></textarea>
    <td align="center" rowspan="5"><textarea rows="6" name="desc4" class="borde"><?php echo  $row['desc4']; ?></textarea>
    <td align="center" rowspan="5"><textarea rows="6" name="horarios4" class="borde"><?php echo  $row['horarios4']; ?></textarea>
    <td><input type="number" name="metala_16" step="any" value="<?php echo  $row['metala_16']; ?>"></td>
    <td><input type="number" name="zacb_16" step="any" value="<?php echo  $row['zacb_16']; ?>"></td>
    <td><input type="number" name="soldadurac_16" step="any" value="<?php echo  $row['soldadurac_16']; ?>"></td>
    <td><input type="number" name="zacb1_16" step="any" value="<?php echo  $row['zacb1_16']; ?>"></td>
    <td><input type="number" name="metalba1_16" step="any" value="<?php echo  $row['metalba1_16']; ?>"></td>

	</tr>
    <tr>
    <td><input type="number" name="metala_17" step="any" value="<?php echo  $row['metala_17']; ?>"></td>
    <td><input type="number" name="zacb_17" step="any" value="<?php echo  $row['zacb_17']; ?>"></td>
    <td><input type="number" name="soldadurac_17" step="any" value="<?php echo  $row['soldadurac_17']; ?>"></td>
    <td><input type="number" name="zacb1_17" step="any" value="<?php echo  $row['zacb1_17']; ?>"></td>
    <td><input type="number" name="metalba1_17" step="any" value="<?php echo  $row['metalba1_17']; ?>"></td>
	</tr>
    <tr>
    <td><input type="number" name="metala_18" step="any" value="<?php echo  $row['metala_18']; ?>"></td>
    <td><input type="number" name="zacb_18" step="any" value="<?php echo  $row['zacb_18']; ?>"></td>
    <td><input type="number" name="soldadurac_18" step="any" value="<?php echo  $row['soldadurac_18']; ?>"></td>
    <td><input type="number" name="zacb1_18" step="any" value="<?php echo  $row['zacb1_18']; ?>"></td>
    <td><input type="number" name="metalba1_18" step="any" value="<?php echo  $row['metalba1_18']; ?>"></td>
	</tr>
    <tr>
    <td><input type="number" name="metala_19" step="any" value="<?php echo  $row['metala_19']; ?>"></td>
    <td><input type="number" name="zacb_19" step="any" value="<?php echo  $row['zacb_19']; ?>"></td>
    <td><input type="number" name="soldadurac_19" step="any" value="<?php echo  $row['soldadurac_19']; ?>"></td>
    <td><input type="number" name="zacb1_19" step="any" value="<?php echo  $row['zacb1_19']; ?>"></td>
    <td><input type="number" name="metalba1_19" step="any" value="<?php echo  $row['metalba1_19']; ?>"></td>
	</tr>
    <tr>
    <td><input type="number" name="metala_20" step="any" value="<?php echo  $row['metala_20']; ?>"></td>
    <td><input type="number" name="zacb_20" step="any" value="<?php echo  $row['zacb_20']; ?>"></td>
    <td><input type="number" name="soldadurac_20" step="any" value="<?php echo  $row['soldadurac_20']; ?>"></td>
    <td><input type="number" name="zacb1_20" step="any" value="<?php echo  $row['zacb1_20']; ?>"></td>
    <td><input type="number" name="metalba1_20" step="any" value="<?php echo  $row['metalba1_20']; ?>"></td>
	</tr>        
	</tbody>
</table>
</div>
<br>
<div align="center">
<p class="note">Cantidad total de durezas a promediar<br></p>
<input type="number" name="promediar" value="<?php echo  $row['promedio']; ?>">
<br><br>
<div class="form-group">
            <label for="comment">Comentarios:</label>
            <textarea class="form-control" rows="5" name="comentario" style="resize:none;"><?php echo  $row['comentario']; ?></textarea>
        </div>
        <br />
        <br />
        <br />
        <br />
        <div align="center">
            <fieldset>
                <legend>FIRMAS</legend>
                <div class="table-responsive">
                    <div class="footer">
                        <table width="981" border="0" align="center">
                            <!--tr>
                          <td><input type="text" placeholder="Nombre y firma" class="sinborde" size="30"></td>
                          <td><input type="text" placeholder="Nombre y firma" class="sinborde" size="30"></td>
                          <td><input type="text" placeholder="Nombre y firma" class="sinborde" size="30"></td>
                        </tr-->
                            <tr>
                                <td>
                                    <input class="form-control" type="text" size="8" name="firma1" value="<?php echo  $row['firma1']; ?>">
                                    <br>
                                    <textarea id="byetext" class="form-control" name="firma1_2" style="max-width:250px; resize:none;" rows="3" cols="300px"><?php echo  $row['firma1_2']; ?></textarea>
                                <td>
                                    <input class="form-control" type="text" size="8" name="firma2" value="<?php echo  $row['firma2']; ?>">
                                    <br>
                                    <textarea id="byetext" class="form-control" name="firma2_2" cols="300px" rows="3" style="max-width:250px;"><?php echo  $row['firma2_2']; ?></textarea>
                                <td>
                                    <input class="form-control" type="text" size="8"  name="firma3" value="<?php echo  $row['firma3']; ?>">
                                    <br>
                                    <textarea id="byetext" class="form-control" name="firma3_3" cols="300px" rows="3" style="max-width:250px;"><?php echo  $row['firma3_3']; ?></textarea>
                            </tr>
                            <!----------------------------------------------------------------------------------------!-->
                            <!----------------------------------------------------------------------------------------!-->
                        </table>
                    </div>
                </div>
            </fieldset>
            <br>
            <input type="submit" value="Actualizar registro" class="btn btn-primary btn-lg">
            <!----input type="submit" value="Registrar varias juntas" class="btn btn-primary btn-lg" onclick=this.form.action ="guarda_relevado2.php"-->
        </div>
	<script src="/AICO/js/tabla.js"></script>
	</form>
</body>
</html>