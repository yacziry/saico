<?php
session_start();
$clave = $_SESSION["clave"];//pasarla clave una variable where clave=busqueda
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="" />
    <title>INFORME DE LIQUIDOS</title>
    <!-- ICONO PESTAÑA -->
    <link href="/AICO/img/IC.png" rel="icon">
    <link rel="stylesheet" href="/AICO/css/llena_formatos.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style type="text/css">
        .opciones {
            display: none;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
</head>
<body>
    <header>
        <div class="profileLogo">
            <!-- Profile logo. Add a img tag in place of <span>. -->
            <p class="logoPlaceholder">
                <span><img src="/AICO/img/logop.jpg" alt="sample"></span>
                <h3 align="center">INFORME DE LIQUIDOS</h3>
                <hr>
        </div>
    </header>
    <form action="guarda_liquidos_actualizado.php" method="POST">
	<?php
		require 'conexionsqli.php';
		$query ="SELECT * FROM liquidos_p1 p1, liquidos_p2 p2 WHERE p1.idLiquidos = p2.idLiquidos AND p1.idLiquidos = '$clave' ORDER BY id DESC LIMIT 1";
		$execute = mysqli_query($conn, $query);
		//Compruebo si hay algún resultado
		if($row =  mysqli_fetch_array($execute)){
            $pro = $row["proyecto"];
        }
		?>
            <div class="form-group row">
            <div class="col-xs-6">
				<label for="ex3">Cliente</label>
				<input class="form-control"  type="text" name="cliente" value="<?php echo  $row['cliente']; ?>">
			</div>
            <div class="col-xs-6">
                <label for="ex3">Contrato</label>
                <input class="form-control" type="text" name="contrato"  value="<?php echo  $row['contrato']; ?>">
            </div>
            <div class="col-xs-12">
                <label for="ex3">Proyecto</label>
                <input class="form-control" type="text" name="proyecto" value="<?php echo  $pro; ?>">
            </div>
            <div class="col-xs-4">
                <label for="ex3">Folio</label>
                <input class="form-control" id="ex3" type="text" name="folio" value="<?php echo  $row['folio']; ?>">
            </div>
            <div class="col-xs-4">
                <label for="ex3">Numero de reporte</label>
                <input class="form-control" id="ex3" type="text" name="n_reporte" required value="<?php echo  $row['n_reporte']; ?>">
            </div>
            <div class="col-xs-4">
                <label for="ex3">Fecha</label>
                <input class="form-control" id="ex3" type="date" name="fecha" value="<?php echo  $row['fecha']; ?>" required>
            </div>
            <div class="col-xs-6">
                <label for="ex3">Lugar</label>
                <input class="form-control" id="ex3" type="text" name="lugar" value="<?php echo  $row['lugar']; ?>">
            </div>
            <div class="col-xs-6">
                <label for="ex3">Plano</label>
                <input class="form-control" id="ex3" type="text" name="plano" value="<?php echo  $row['plano']; ?>">
            </div>
            <div class="col-xs-12">
			   <label for="comment">Descripcion del trabajo y notas:</label>
			   <textarea class="form-control" rows="5" name="descripcion" style="resize:none;"><?php echo  $row['descripcion']; ?></textarea>
			</div>
            <div class="col-xs-6">
                <label for="ex3">Codigo de inspeccion</label>
                <input class="form-control" id="ex3" type="text" name="codigo_i" value="<?php echo  $row['codigo_insp']; ?>">
            </div>
            <div class="col-xs-6">
                <label for="ex3">Procedimiento</label>
                <input class="form-control" id="ex3" type="text" value="PRO-PINS-06" name="procedimiento" disabled>
            </div>
        </div>
        <br>
        <div class="table-responsive">
            <table border="1" id="tabla" align="center">
                <tr>
                    <td colspan="7" class="fields">MATERIALES USADOS</td>
                </tr>
                <tr>
                    <td class="fieldd">CONSUMIBLE</td>
                    <td class="fields">MARCA</td>
                    <td class="fields">MODELO</td>
                    <td class="fields">LOTE</td>
                    <td class="fields">TIEMPO</td>
                    <td class="fields">APLICACION</td>
                    <td class="fields">TIPO</td>
                </tr>
                <tr>
                    <td class="fieldd">PENETRANTE</td>
                    <td><input type="text" name="marca_p" class="borde" size="10" maxlength="13" value="<?php echo  $row['marca_p']; ?>"></td>
                    <td><input type="text" name="modelo_p" class="borde" size="10" maxlength="13" value="<?php echo  $row['modelo_p']; ?>"></td>
                    <td><input type="text" name="lote_p" class="borde" size="10" maxlength="13" value="<?php echo  $row['lote_p']; ?>"></td>
                    <td><input type="text" name="tiempo_p" class="borde" size="10" maxlength="13" value="<?php echo  $row['tiempo_p']; ?>"></td>
                    <td><input type="text" name="aplicacion_p" class="borde" size="10" maxlength="13" value="<?php echo  $row['aplicacion_p']; ?>"></td>
                    <td><input type="text" name="tipo_p" class="borde" size="10" maxlength="13" value="<?php echo  $row['tipo_p']; ?>"></td>
                </tr>
                <tr>
                    <td class="fieldd">REMOVEDOR</td>
                    <td><input type="text" name="marca_rem" class="borde" size="10" maxlength="13" value="<?php echo  $row['marca_rem']; ?>"></td>
                    <td><input type="text" name="modelo_rem" class="borde" size="10" maxlength="13" value="<?php echo  $row['modelo_rem']; ?>"></td>
                    <td><input type="text" name="lote_rem" class="borde" size="10" maxlength="13" value="<?php echo  $row['lote_rem']; ?>"></td>
                    <td align="center">NA</td>
                    <td><input type="text" name="aplicacion_rem" class="borde" size="10" maxlength="13" value="<?php echo  $row['aplicacion_rem']; ?>"></td>
                    <td><input type="text" name="tipo_rem" class="borde" size="10" maxlength="13" value="<?php echo  $row['tipo_rem']; ?>"></td>
                </tr>
                <tr>
                    <td class="fieldd">REVELADOR</td>
                    <td><input type="text" name="marca_rev" class="borde" size="10" maxlength="13" value="<?php echo  $row['marca_rev']; ?>"></td>
                    <td><input type="text" name="modelo_rev" class="borde" size="10" maxlength="13" value="<?php echo  $row['modelo_rev']; ?>"></td>
                    <td><input type="text" name="lote_rev" class="borde" size="10" maxlength="13" value="<?php echo  $row['lote_rev']; ?>"></td>
                    <td><input type="text" name="tiempo_rev" class="borde" size="10" maxlength="13" value="<?php echo  $row['tiempo_rev']; ?>"></td>
                    <td><input type="text" name="aplicacion_rev" class="borde" size="10" maxlength="13" value="<?php echo  $row['aplicacion_rev']; ?>"></td>
                    <td><input type="text" name="tipo_rev" class="borde" size="10" maxlength="13" value="<?php echo  $row['tipo_rev']; ?>"></td>
                </tr>
            </table>
        </div>
        <br>
        <div class="form-group row">
            <div class="col-xs-6">
                <label for="ex3">Tipo de material:</label>
                <input class="form-control" type="text" name="tipo_material" value="<?php echo  $row['tipo_material']; ?>">
            </div>
            <div class="col-xs-6">
                <label for="ex3">Componente:</label>
                <input class="form-control" type="text" name="componente" value="<?php echo  $row['componente']; ?>">
            </div>
            <div class="col-xs-6">
                <label for="ex3">Condicion superficial:</label>
                <input class="form-control" type="text" name="condicion_s" value="<?php echo  $row['condicion_s']; ?>">
            </div>
            <div class="col-xs-6">
                <label for="ex3">Temperatura:</label>
                <input class="form-control" type="text" name="temperatura" value="<?php echo  $row['temperatura']; ?>">
            </div>
            <div class="col-xs-6">
                <label for="ex3">Tipo de luz:</label>
                <input class="form-control" id="ex3" type="text" name="tipo_de_luz" value="<?php echo  $row['tipo_d_luz']; ?>">
            </div>
            <div class="col-xs-6">
                <label for="ex3">Intensidad</label>
                <input class="form-control" id="ex3" type="text" name="intensidad" value="<?php echo  $row['intensidad']; ?>">
            </div>
        </div>
        <br /><br />
        
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
                                    <textarea id="byetext" class="form-control" name="empresa1" style="max-width:250px; resize:none;" rows="3" cols="300px"><?php echo  $row['empresa1']; ?></textarea>
                                <td>
                                    <input class="form-control" type="text" size="8" name="firma2" value="<?php echo  $row['firma2']; ?>">
                                    <br>
                                    <textarea id="byetext" class="form-control" name="empresa2" cols="300px" rows="3" style="max-width:250px;"><?php echo  $row['empresa2']; ?></textarea>
                                <td>
                                    <input class="form-control" type="text" size="8" name="firma3" value="<?php echo  $row['firma3']; ?>">
                                    <br>
                                    <textarea id="byetext" class="form-control" name="empresa3" cols="300px" rows="3" style="max-width:250px;"><?php echo  $row['empresa3']; ?></textarea>
                            </tr>
                            <!----------------------------------------------------------------------------------------!-->
                            <!----------------------------------------------------------------------------------------!-->
                        </table>
                    </div>
                </div>
            </fieldset>
        </div>
        <br />
        <div align="center">
            <input type="submit" value="Registrar Juntas" class="btn btn-primary btn-lg">
        </div>
    </form>
    </body>
    </html>
    <script type="text/javascript" src="/AICO/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="/AICO/js/enter.js"></script>

