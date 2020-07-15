<?php
session_start();
$clave = $_SESSION["clave"];//pasarla clave una variable where clave=busqueda
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="" />
    <title>Informe particulas</title>
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
                <h3 align="center">INFORME DE PARTICULAS</h3>
                <hr>
        </div>
    </header>
    <form action="guarda_particulas_actualizado.php" method="POST">
	<?php
		require 'conexionsqli.php';
		$query ="SELECT * FROM particulas_m m1, particulas_m2 m2 WHERE m1.idParticulas = m2.idParticulas AND m1.idParticulas = '$clave' OR m1.n_reporte = '$clave'";
		$execute = mysqli_query($conn, $query);
		//Compruebo si hay algún resultado
		if($row =  mysqli_fetch_array($execute)){}
        $proyecto = $row["proyecto"];
		?>
			<div class="form-group row">
            <div class="col-xs-6">
				<label for="ex3">Cliente</label>
				<input class="form-control"  type="text" name="cliente" value="<?php echo  $row['cliente']; ?>">
			</div>
            <div class="col-xs-6">
                <label for="ex3">Contrato</label>
                <input class="form-control" type="text" name="contrato" value="<?php echo  $row['contrato']; ?>">
            </div>
            <div class="col-xs-12">
                <label for="ex3">Proyecto</label>
                <input class="form-control" type="text" name="proyecto" value="<?php echo  $proyecto; ?>">
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
            <div class="col-xs-8">
                <label for="ex3">Lugar</label>
                <input class="form-control" id="ex3" type="text" name="lugar" value="<?php echo  $row['lugar']; ?>">
            </div>
            <div class="col-xs-4">
                <label for="ex3">Plano</label>
                <input class="form-control" id="ex3" type="text" name="plano" value="<?php echo  $row['plano']; ?>">
            </div>
            <div class="col-xs-12">
			   <label for="comment">Descripcion del trabajo y notas:</label>
			   <textarea class="form-control" rows="5" name="descripcion" style="resize:none;"><?php echo  $row['descripcion']; ?></textarea>
			</div>
            <div class="col-xs-6">
                <label for="ex3">Codigo de inspeccion</label>
                <input class="form-control" id="ex3" type="text" name="codigo_i" value="<?php echo  $row['codigo_i']; ?>">
            </div>
            <div class="col-xs-6">
                <label for="ex3">Procedimiento</label>
                <input class="form-control" id="ex3" type="text" name="procedimiento" value="PRO-PINS-05" disabled>
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
                    <td class="fields">TIPO</td>
                    <td class="fields">COLOR</td>
                    <td class="fields">APLICACION</td>
                </tr>
                <tr>
                    <td class="fieldd">PARTICULAS</td>
                    <td><input type="text" name="marca_1" class="borde" size="10" maxlength="13" value="<?php echo  $row['marca_1']; ?>"></td>
                    <td><input type="text" name="modelo_1" class="borde" size="10" maxlength="13" value="<?php echo  $row['modelo_1']; ?>"></td>
                    <td><input type="text" name="lote_1" class="borde" size="10" maxlength="13" value="<?php echo  $row['lote_1']; ?>"></td>
                    <td><input type="text" name="tipo_1" class="borde" size="10" maxlength="13" value="<?php echo  $row['tipo_1']; ?>"></td>
                    <td><input type="text" name="color_1" class="borde" size="10" maxlength="13" value="<?php echo  $row['color_1']; ?>"></td>
                    <td><input type="text" name="aplicacion_1" class="borde" size="10" maxlength="13" value="<?php echo  $row['aplicacion_1']; ?>"></td>
                </tr>
                <tr>
                    <td class="fieldd">CONTRASTANTE</td>
                    <td><input type="text" name="marca_2" class="borde" size="10" maxlength="13" value="<?php echo  $row['marca_2']; ?>"></td>
                    <td><input type="text" name="modelo_2" class="borde" size="10" maxlength="13" value="<?php echo  $row['modelo_2']; ?>"></td>
                    <td><input type="text" name="lote_2" class="borde" size="10" maxlength="13" value="<?php echo  $row['lote_2']; ?>"></td>
                    <td><input type="text" name="tipo_2" class="borde" size="10" maxlength="13" value="NA" disabled></td>
                    <td><input type="text" name="color_2" class="borde" size="10" maxlength="13" value="<?php echo  $row['color_2']; ?>"></td>
                    <td><input type="text" name="aplicacion_2" class="borde" size="10" maxlength="13" value="<?php echo  $row['aplicacion_2']; ?>"></td>
                </tr>
                <tr>
                    <td class="fieldd">EQUIPO</td>
                    <td class="fields">MARCA</td>
                    <td class="fields">MODELO</td>
                    <td class="fields">NS</td>
                    <td colspan="2" class="fields">CORRIENTE</td>
                </tr>
                <tr>
                    <td class="fieldd">YUGO</td>
                    <td><input type="text" name="marca_3" class="borde" size="10" value="<?php echo  $row['marca_3']; ?>"></td>
                    <td><input type="text" name="modelo_3" class="borde" size="10" value="<?php echo  $row['modelo_3']; ?>"></td>
                    <td><input type="text" name="ns" class="borde" size="10" value="<?php echo  $row['ns']; ?>"></td>
                    <td onclick="change(this);" align="center" name="color">AC</td>
                    <td onclick="change2(this);" align="center" name="color">DC</td>
                </tr>
            </table>
            <script>
                var formulario = document.getElementsByName("color");

            </script>
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
            <div class="col-xs-4">
                <label for="ex3">Espesor:</label>
                <input class="form-control" id="ex3" type="text" name="espesor" value="<?php echo  $row['espesor']; ?>">
            </div>
            <div class="col-xs-4">
                <label for="ex3">Tipo de luz:</label>
                <input class="form-control" id="ex3" type="text" name="tipo_de_luz" value="<?php echo  $row['tipo_de_luz']; ?>">
            </div>
            <div class="col-xs-4">
                <label for="ex3">Intensidad</label>
                <input class="form-control" id="ex3" type="text" name="intensidad" value="<?php echo  $row['intensidad']; ?>">
            </div>
        </div>
        <?php require 'conexionsqli.php';
		 $sql2 = "SELECT * FROM particulas_m m1, particulas_m2 m2 WHERE m1.idParticulas = m2.idParticulas AND m1.idParticulas = '$clave' OR m1.n_reporte = '$clave' AND m1.idParticulas = m2.idParticulas"; 
		 $query2 = mysqli_query($conn, $sql2); 
		if (!$query2) {
			die ('SQL Error: ' . mysqli_error($conn));
		}
		?>
		<div class="table-responsive">
            <table id="lista_productos" border="1" align="center">
                <thead>
                    <tr class="fields">
                        <td colspan="5" align="center">RESULTADOS</td>
                    </tr>
                    <tr class="fields">
                        <td colspan="5">PIEZA: <input type="text" name="pieza" class="borde" size="110" value="<?php echo  $row['pieza']; ?>"></td>
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
				{ ?>
                    <tr>
                        <td>
                            <input name="junta[]" class="borde" value="<?php echo  $row2['junta'];?>">
                        </td>
                        <td>
                            <input name="longitud[]" class="borde" value="<?php echo  $row2['longitud'];?>">
                        </td>
                        <td>
                            <input name="discontinuidad[]" class="borde" value="<?php echo  $row2['discontinuidad'];?>">
                        </td>
                        <td>
                            <input name="evaluacion[]" class="borde" value="<?php echo  $row2['evaluacion'];?>">
                        </td>
                        <td>
                            <input name="observaciones[]" class="borde" value="<?php echo  $row2['observaciones'];?>">
                        </td>
                        <!--td>
                            <button type="button" class="btn btn-danger button_eliminar_producto"> Eliminar </button>
                        </td-->
                    </tr>
                </tbody>
                <!--tfoot>
                    <tr>
                        <td colspan="3">  </td>
                        <td>
                        </td>
                        <td>
                            <button type="button" class="btn btn-success button_agregar_producto"> Agregar </button>
                        </td>
                    </tr>
                </tfoot-->
				<?php } ?>
            </table>
        </div>
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
        <br>
        <div align="center">
            <input type="submit" value="Actualizar registro" class="btn btn-primary btn-lg">
        </div>
    </form>
</body>
</html>
<script type="text/javascript" src="/AICO/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="/AICO/js/productos.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        productos();
    });
</script>
<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script src="/AICO/js/carga_imagen.js"></script>
	

