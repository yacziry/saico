<!DOCTYPE html> 
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="" />
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
	<form action="" method="POST" id="formulario">
<?php
require 'conexionsqli.php';
$query ="SELECT * FROM relevado_1 ORDER BY idRelevado1 DESC LIMIT 1";
$execute = mysqli_query($conn, $query);
//Compruebo si hay algún resultado
if($row =  mysqli_fetch_array($execute)){
	//Guardo los datos de la BD en las variables de php
	$cl =  $row["cliente"];
	}
?>
  <div class="form-group row"> 
	<div class="col-xs-6">
    <label for="ex3">Cliente</label>
    <input class="form-control"  type="text" name="cliente" value="<?php echo $cl; ?>" disabled>
  </div>
  <div class="col-xs-6">
    <label for="ex3">Contrato</label>
    <input class="form-control"  type="text" name="contrato" value="<?php echo  $row['contrato']; ?>" disabled>
  </div>
  <div class="col-xs-6">
    <label for="ex3">Proyecto</label>
    <input class="form-control"  type="text" name="proyecto" value="<?php echo  $row['proyecto']; ?>" disabled>
  </div>
  <div class="col-xs-6">
    <label for="ex3">Orden de trabajo</label>
    <input class="form-control" id="ex3" type="text" name="ot" value="<?php echo  $row['ot']; ?>" disabled>
  </div>
  <div class="col-xs-4">
    <label for="ex3">Folio</label>
    <input class="form-control" id="ex3" type="text" name="folio" value="<?php echo  $row['folio']; ?>" disabled>
  </div>
  <div class="col-xs-4">
    <label for="ex3">Numero de reporte</label>
    <input class="form-control" id="ex3" type="text" name="n_reporte" value="<?php echo  $row['n_reporte']; ?>" disabled>
  </div>
  <div class="col-xs-4">
    <label for="ex3">Fecha</label>
    <input class="form-control" id="ex3" type="date" name="fecha" value="<?php echo  $row['fecha']; ?>" disabled>
  </div>
  <div class="col-xs-6">
    <label for="ex3">Lugar</label>
    <input class="form-control"  type="text" name="lugar" value="<?php echo  $row['lugar']; ?>" disabled>
  </div>
  <div class="col-xs-6">
    <label for="ex3">Numero de junta</label>
    <input class="form-control"  type="text" name="soldadura" value="<?php echo  $row['soldadura']; ?>" disabled>
  </div>
  <div class="col-xs-6">
    <label for="ex3">Nombre de la pieza/trazabilidad</label>
    <input class="form-control"  type="text" name="trazabilidad" required>
  </div>
  <div class="col-xs-6">
    <label for="ex3">Partida</label>
    <input class="form-control"  type="text" name="partida" required>
  </div>
   <div class="col-xs-6">
    <label for="ex3">No. de isometrico y/o plano</label>
    <input class="form-control"  type="text" name="isometrico" required>
  </div>
  <div class="col-xs-6">
    <label for="ex3">Material</label>
    <input class="form-control" id="ex3" type="text" name="tuberia" required>
  </div>
  </div>
  <div class="form-group">
  <label for="comment">Descripcion del trabajo y notas:</label>
  <textarea class="form-control" rows="5" name="descripcion" style="resize:none;"></textarea>
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
    <td align="center"><input placeholder="---" class="borde" name="mba1"></td>
    <td class="fields">MARCA</td>
    <td align="center"><input placeholder="--" class="borde" name="marca"></td>
  </tr>
  <tr>
    <td class="fieldd">ZONA AFECTADA POR EL CALOR ZAC (B,B1)</td>
    <td align="center"><input placeholder="---" class="borde" name="zab_b1"></td>
    <td class="fields">MODELO</td>
    <td align="center"><input placeholder="--" class="borde" name="modelo"></td>
  </tr>
  <tr>
    <td class="fieldd">SOLDADURA ( C )</td>
    <td align="center"><input placeholder="---" class="borde" name="soldadura_c"></td>
    <td class="fields">NO.SERIE</td>
    <td align="center"><input placeholder="--" class="borde" name="n_serie"></td>
  </tr>
</table>
</div>
<br>
<div class="table-responsive">
<table border="1" align="center">
  <thead>
	<tr class="fields">
    <td colspan="3">DATOS DE LA UNIÓN DE LA TOMA DE DUREZA</td>
    <td colspan="5">VALORES DE DUREZA</td>
  </tr>
  <tr class="fields">
    <th>JUNTA</th>
    <th>DESCRIPCION</th>
    <th>HORARIOS</th>
    <th>METAL BASE (A)<br><input class="fields" size="8" placeholder="ESPECIFICAR" maxlength="9" name="escribir1" style="border:0px; background-color: #C0C0BF;"></th>
    <th>ZAC (B)</th>
    <th>SOLDADURA (C)</th>
    <th>ZAC (B1)</th>
    <th>METAL BASE (A1)<br><input class="fields" size="8" placeholder="ESPECIFICAR" maxlength="9" name="escribir2" style="border:0px; background-color: #C0C0BF;"></th>
  </tr>
  </thead>
	<tbody>
	<tr>
	<td style="border-bottom:2px solid #000000" align="center" rowspan="5" ><textarea rows="6" name="j1" class="borde"></textarea>
    <td style="border-bottom:2px solid #000000" align="center" rowspan="5" ><textarea rows="6" name="desc1" class="borde"> ø</textarea>
    <td style="border-bottom:2px solid #000000" align="center" rowspan="5" ><textarea rows="6" name="horarios1" class="borde"></textarea>
    <td><input type="number" name="metala_1" step="any"></td>
    <td><input type="number" name="zacb_1" step="any"></td>
    <td><input type="number" name="soldadurac_1" step="any"></td>
    <td><input type="number" name="zacb1_1" step="any"></td>
    <td><input type="number" name="metalba1_1" step="any"></td>

	</tr>
    <tr>
    <td><input type="number" name="metala_2" step="any"></td>
    <td><input type="number" name="zacb_2" step="any"></td>
    <td><input type="number" name="soldadurac_2" step="any"></td>
    <td><input type="number" name="zacb1_2" step="any"></td>
    <td><input type="number" name="metalba1_2" step="any"></td>
	</tr>
    <tr>
    <td><input type="number" name="metala_3" step="any"></td>
    <td><input type="number" name="zacb_3" step="any"></td>
    <td><input type="number" name="soldadurac_3" step="any"></td>
    <td><input type="number" name="zacb1_3" step="any"></td>
    <td><input type="number" name="metalba1_3" step="any"></td>
	</tr>
    <tr>
    <td><input type="number" name="metala_4" step="any"></td>
    <td><input type="number" name="zacb_4" step="any"></td>
    <td><input type="number" name="soldadurac_4" step="any"></td>
    <td><input type="number"name="zacb1_4" step="any"></td>
    <td><input type="number" name="metalba1_4" step="any"></td>
	</tr>
    <tr>
    <td style="border-bottom:2px solid #000000"><input type="number" name="metala_5" step="any"></td>
    <td style="border-bottom:2px solid #000000"><input type="number" name="zacb_5" step="any"></td>
    <td style="border-bottom:2px solid #000000"><input type="number" name="soldadurac_5" step="any"></td>
    <td style="border-bottom:2px solid #000000"><input type="number" name="zacb1_5" step="any"></td>
    <td style="border-bottom:2px solid #000000"><input type="number" name="metalba1_5" step="any"></td>
	</tr>
    <tr>
	<td style="border-bottom:2px solid #000000" align="center" rowspan="5"><textarea rows="6" name="j2" class="borde"></textarea>
    <td style="border-bottom:2px solid #000000" align="center" rowspan="5"><textarea rows="6" name="desc2" class="borde">ø</textarea>
    <td style="border-bottom:2px solid #000000" align="center" rowspan="5"><textarea rows="6" name="horarios2" class="borde"></textarea>
    <td><input type="number" name="metala_6" step="any"></td>
    <td><input type="number" name="zacb_6" step="any"></td>
    <td><input type="number" name="soldadurac_6" step="any"></td>
    <td><input type="number" name="zacb1_6" step="any"></td>
    <td><input type="number" name="metalba1_6" step="any"></td>

	</tr>
    <tr>
    <td><input type="number" name="metala_7" step="any"></td>
    <td><input type="number" name="zacb_7" step="any"></td>
    <td><input type="number" name="soldadurac_7" step="any"></td>
    <td><input type="number" name="zacb1_7" step="any"></td>
    <td><input type="number" name="metalba1_7" step="any"></td>
	</tr>
    <tr>
    <td><input type="number" name="metala_8" step="any"></td>
    <td><input type="number" name="zacb_8" step="any"></td>
    <td><input type="number" name="soldadurac_8" step="any"></td>
    <td><input type="number" name="zacb1_8" step="any"></td>
    <td><input type="number" name="metalba1_8" step="any"></td>
	</tr>
    <tr>
    <td><input type="number" name="metala_9" step="any"></td>
    <td><input type="number" name="zacb_9" step="any"></td>
    <td><input type="number" name="soldadurac_9" step="any"></td>
    <td><input type="number" name="zacb1_9" step="any"></td>
    <td><input type="number" name="metalba1_9" step="any"></td>
	</tr>
    <tr>
    <td style="border-bottom:2px solid #000000"><input type="number" name="metala_10" step="any"></td>
    <td style="border-bottom:2px solid #000000"><input type="number" name="zacb_10" step="any"></td>
    <td style="border-bottom:2px solid #000000"><input type="number" name="soldadurac_10" step="any"></td>
    <td style="border-bottom:2px solid #000000"><input type="number" name="zacb1_10" step="any"></td>
    <td style="border-bottom:2px solid #000000"><input type="number" name="metalba1_10" step="any"></td>
	</tr>
    <tr>
	<td style="border-bottom:2px solid #000000" align="center" rowspan="5"><textarea rows="6" name="j3" class="borde"></textarea>
    <td style="border-bottom:2px solid #000000" align="center" rowspan="5"><textarea rows="6" name="desc3" class="borde">ø</textarea>
    <td style="border-bottom:2px solid #000000" align="center" rowspan="5"><textarea rows="6" name="horarios3" class="borde"></textarea>
    <td><input type="number" name="metala_11" step="any"></td>
    <td><input type="number" name="zacb_11" step="any"></td>
    <td><input type="number" name="soldadurac_11" step="any"></td>
    <td><input type="number" name="zacb1_11" step="any"></td>
    <td><input type="number" name="metalba1_11" step="any"></td>

	</tr>
    <tr>
    <td><input type="number" name="metala_12" step="any"></td>
    <td><input type="number" name="zacb_12" step="any"></td>
    <td><input type="number" name="soldadurac_12" step="any"></td>
    <td><input type="number" name="zacb1_12" step="any"></td>
    <td><input type="number" name="metalba1_12" step="any"></td>
	</tr>
    <tr>
    <td><input type="number" name="metala_13" step="any"></td>
    <td><input type="number" name="zacb_13" step="any"></td>
    <td><input type="number" name="soldadurac_13" step="any"></td>
    <td><input type="number" name="zacb1_13" step="any"></td>
    <td><input type="number" name="metalba1_13" step="any"></td>
	</tr>
    <tr>
    <td><input type="number" name="metala_14" step="any"></td>
    <td><input type="number" name="zacb_14" step="any"></td>
    <td><input type="number" name="soldadurac_14" step="any"></td>
    <td><input type="number" name="zacb1_14" step="any"></td>
    <td><input type="number" name="metalba1_14" step="any"></td>
	</tr>
    <tr>
    <td style="border-bottom:2px solid #000000"><input type="number" name="metala_15" step="any"></td>
    <td style="border-bottom:2px solid #000000"><input type="number" name="zacb_15" step="any"></td>
    <td style="border-bottom:2px solid #000000"><input type="number" name="soldadurac_15" step="any"></td>
    <td style="border-bottom:2px solid #000000"><input type="number" name="zacb1_15" step="any"></td>
    <td style="border-bottom:2px solid #000000"><input type="number" name="metalba1_15" step="any"></td>
	</tr>
    <tr>
	<td align="center" rowspan="5"><textarea rows="6" name="j4" class="borde"></textarea>
    <td align="center" rowspan="5"><textarea rows="6" name="desc4" class="borde"></textarea>
    <td align="center" rowspan="5"><textarea rows="6" name="horarios4" class="borde"></textarea>
    <td><input type="number" name="metala_16" step="any"></td>
    <td><input type="number" name="zacb_16" step="any"></td>
    <td><input type="number" name="soldadurac_16" step="any"></td>
    <td><input type="number" name="zacb1_16" step="any"></td>
    <td><input type="number" name="metalba1_16" step="any"></td>

	</tr>
    <tr>
    <td><input type="number" name="metala_17" step="any"></td>
    <td><input type="number" name="zacb_17" step="any"></td>
    <td><input type="number" name="soldadurac_17" step="any"></td>
    <td><input type="number" name="zacb1_17" step="any"></td>
    <td><input type="number" name="metalba1_17" step="any"></td>
	</tr>
    <tr>
    <td><input type="number" name="metala_18" step="any"></td>
    <td><input type="number" name="zacb_18" step="any"></td>
    <td><input type="number" name="soldadurac_18" step="any"></td>
    <td><input type="number" name="zacb1_18" step="any"></td>
    <td><input type="number" name="metalba1_18" step="any"></td>
	</tr>
    <tr>
    <td><input type="number" name="metala_19" step="any"></td>
    <td><input type="number" name="zacb_19" step="any"></td>
    <td><input type="number" name="soldadurac_19" step="any"></td>
    <td><input type="number" name="zacb1_19" step="any"></td>
    <td><input type="number" name="metalba1_19" step="any"></td>
	</tr>
    <tr>
    <td><input type="number" name="metala_20" step="any"></td>
    <td><input type="number" name="zacb_20" step="any"></td>
    <td><input type="number" name="soldadurac_20" step="any"></td>
    <td><input type="number" name="zacb1_20" step="any"></td>
    <td><input type="number" name="metalba1_20" step="any"></td>
	</tr>        
	</tbody>
</table>
</div>
<br>
<div align="center">
<p class="note">Cantidad total de durezas a promediar<br></p>
<input type="number" name="promediar">
<br><br>
<br>
<input type="submit" value="Registrar" class="btn btn-primary btn-lg" onclick=this.form.action="guarda_relevado2_2.php">
</div>
<script src="/AICO/js/carga_imagen.js"></script>
	<script src="/AICO/js/tabla.js"></script>
	</form>
</body>
</html>