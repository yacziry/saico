<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- ICONO PESTAÑA -->
    <link href="/AICO/img/IC.png" rel="icon">
    <link rel="stylesheet" href="/AICO/css/llena_formatos.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INFORME DE SOLDADURAS CON ULTRASONIDO</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    <header>
        <div class="profileLogo">
            <!-- Profile logo. Add a img tag in place of <span>. -->
            <p class="logoPlaceholder">
                <span><img src="/AICO/img/logop.jpg" alt="sample"></span>
                <h3 align="center">INFORME DE SOLDADURAS CON ULTRASONIDO AWS</h3>          
        </div>
    </header>
    <form action="validarUtAws.php" method="POST">
        <div class="form-group row">
            <div class="col-xs-6">
                <label for="ex3">Cliente</label>
                    <select class="form-control" name="deCliente" required>
                        <option>Elige una opcion</option>
                        <option>Comercializadora Petrolera del Golfo, S.A de C.V.</option>
                        <option>PROPETROL S.A DE C.V.</option>
                        <option>Corporativo Industrial y Comercial, S.A DE C.V.</option>
                        <option>Komodato Offshore</option>
                        <option>PERMADUCTO S.A DE C.V.</option>
                        <option>IECESA</option>
                        <option>ICACSA</option>
                        <option>MICOPERI</option>
                        <option>WHITTAKER MEXICANA</option>
                        <option>DM INGENIEROS</option>
                        <option>LAVISA</option>
                    </select>
            </div><!--Div col-xs-6-->
            <div class="col-xs-6">
                <label for="ex3">Contrato</label>
                <input class="form-control" type="text" name="deContrato" required>
            </div>
            <div class="col-xs-12">
                <label for="ex3">Proyecto</label>
                <input class="form-control" type="text" name="deProyecto" required>
            </div>
            <div class="col-xs-4">
                <label for="ex3">Folio</label>
                <input class="form-control" type="text" name="deFolio" required>
            </div>
            <div class="col-xs-4">
                <label for="ex3">Numero de reporte</label>
                <input class="form-control" type="text" name="deReporte" required>
            </div>
            <div class="col-xs-4">
                <label for="ex3">Fecha</label>
                <input class="form-control" type="date" name="fecha" required>
            </div>
            <div class="col-xs-6">
                <label for="ex3">Lugar</label>
                <input class="form-control" type="text" name="lugar" required>
            </div>
            <div class="col-xs-6">
                <label for="ex3">Plano</label>
                <input class="form-control" type="text" name="plano" required>
            </div>        
            <div class="col-xs-12">
                <label for="ex3">Descripcion del trabajo y notas</label>
                <input class="form-control" type="text" name="descripcion" required>
            </div>
            <div class="col-xs-6">
                <label for="ex3">Codigo de inspeccion</label>
                <input class="form-control" type="text" name="codigo_i" required>
            </div>
            <div class="col-xs-6">
                <label for="ex3">Procedimiento</label>
                <input class="form-control" type="text" name="procedimiento" value="PRO-PINS-08" disabled>
            </div>
        </div><!--Div form-group-->
            <table class="table table-bordered" width="100%">
                <tr>
                    <td class="sombreadoGris">EQUIPO UTILIZADO</td>
                </tr>
            </table>
            <table class="table table-bordered" border="1">
              <tr>
                <td class="sombreado" style="vertical-align:middle;">INSTRUMENTO</td>
                <td>
                    <div class="form-group row">
                        <div class="col-xs-4">
                            <label for="ex3">Marca</label>
                            <input class="form-control" id="ex3" type="text" name="marca" required>
                        </div>
                        <div class="col-xs-4">
                            <label for="ex3">Modelo</label>
                            <input class="form-control" id="ex3" type="text" name="modelo" required>
                        </div>
                        <div class="col-xs-4">
                            <label for="ex3">NS</label>
                            <input class="form-control" id="ex3" type="text" name="ns" required>
                        </div>
                    </div><!--form-group-->
                </td>
              </tr>
              <tr>
                <td class="sombreado" style="vertical-align:middle;">TRANSDUTOR</td>
                <td>
                    <div class="form-group row">
                        <div class="col-xs-4">
                            <label for="ex3">Marca</label>
                            <input class="form-control" id="ex3" type="text" name="t_marca" required>
                        </div>
                        <div class="col-xs-4">
                            <label for="ex3">Tamaño</label>
                            <input class="form-control" id="ex3" type="text" name="t_tamano" required>
                        </div>
                        <div class="col-xs-4">
                            <label for="ex3">Frecuencia</label>
                            <input class="form-control" id="ex3" type="text" name="t_frecuencia" required>
                        </div>
                        <br><br>
                        <div class="col-xs-3">
                            <label>Haz recto</label>
                            <input class="" id="ex3" type="radio" name="haz" size="5" required>
                        </div>
                        <div class="col-xs-2">
                            <label for="ex3">Haz angular</label>
                            <input class="" id="ex3" type="radio" name="haz" required>
                        </div>
                        <div class="col-xs-2">
                            <label for="ex3">45°</label>
                            <input class="" id="ex3" type="radio" name="t_grados" required>
                        </div>
                        <div class="col-xs-2">
                            <label for="ex3">60°</label>
                            <input class="" id="ex3" type="radio" name="t_grados" required>
                        </div>
                        <div class="col-xs-2">
                            <label for="ex3">70°</label>
                            <input class="" id="ex3" type="radio" name="t_grados" required>
                        </div>
                        </div><!--div-form-group-->
                </td>
              </tr>
              <tr>
                <td class="sombreado" style="vertical-align:middle;">BLOCK</td>
                <td>
                    <div class="form-group row">
                        <div class="col-xs-4">
                            <label for="ex3">Marca</label>
                            <input class="form-control" type="text" name="b_marca" required>
                        </div>
                        <div class="col-xs-4">
                            <label for="ex3">Modelo</label>
                            <input class="form-control" type="text" name="b_modelo" required>
                        </div>
                        <div class="col-xs-4">
                            <label for="ex3">Ns</label>
                            <input class="form-control" type="text" name="b_ns" required>
                        </div>
                        </div><!--form-group-->
                </td>
              </tr>
              <tr>
                <td class="sombreado" style="vertical-align:middle;">ACOPLANTE</td>
                <td>
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="descripcion" required>
                    </div>
                </td>
              </tr>
            </table>         
           <table class="table table-bordered">
                <tr>
                    <td class="sombreadoGris">DATOS DE LA INSPECCION</td>
                </tr>
            </table>
            <br>
            <div class="form-group row">
                <div class="col-xs-6">
                    <label for="ex3">Junta AWS</label>
                    <input class="form-control" type="text" name="juntaAws" required>
                </div>
                <div class="col-xs-3">
                    <label>Tubular
                    <input class="form-control" type="radio" name="tubulares" required></label>
                </div>
                <div class="col-xs-3">
                    <label>No tubular
                    <input class="form-control" type="radio" name="tubulares" required></label>
                </div>
                <div class="col-xs-6">
                    <label for="ex3">Tecnica</label>
                    <input class="form-control" type="text" name="tecnica" required>
                </div>
                <div class="col-xs-6">
                    <label for="ex3">Espesor</label>
                    <input class="form-control" type="text" name="espesor" required>
                </div>
                <div class="col-xs-6">
                    <label for="ex3">Ganancia (GAIN)</label>
                    <input class="form-control" type="text" name="ganancia" required>
                </div>
                <div class="col-xs-6">
                    <label for="ex3">Rango (RANGE)</label>
                    <input class="form-control" type="text" name="rango" required>
                </div>
                <div class="col-xs-6">
                    <label for="ex3">Rechazo (REJECT)</label>
                    <input class="form-control" type="text" name="rechazo" required>
                </div>
                <div class="col-xs-6">
                    <label for="ex3">Filtro (FILTER)</label>
                    <input class="form-control" type="text" name="filtro" required>
                </div>
                <div class="col-xs-6">
                    <label for="ex3">Retardo ( DELAY)</label>
                    <input class="form-control" type="text" name="retardo" required>
                </div>
                <div class="col-xs-6">
                    <label for="ex3">Amortiguacion (DAMPING)</label>
                    <input class="form-control" type="text" name="amortiguacion" required>
                </div>
            </div><!--form-group-->
            <br>
            <div class="table-responsive">
                <table class="table table-bordered" border="1">
                    <thead>
                        <tr class="sombreado">
                            <td style="vertical-align:middle;"  rowspan="3">Junta</td>
                            <td class="textoVertical" style="vertical-align:middle;" rowspan="3">No.Indicación</td>
                            <td class="textoVertical" rowspan="3" style="vertical-align:middle;">Ángulo de inspección</td>
                            <td class="textoVertical" rowspan="3" style="vertical-align:middle;">Desde la cara</td>
                            <td class="textoVertical" rowspan="3" style="vertical-align:middle;">Pierna</td>
                            <td class="encabezadoUt" colspan="4">Decibeles</td>
                            <td class="encabezadoUt" colspan="5">Discontinuidad</td>
                            <td class="textoVertical" style="vertical-align:middle;" rowspan="3">Clase de la discontinuidad</td>
                            <td class="textoVertical" style="vertical-align:middle;" rowspan="3">Evaluación de la discontinuidad</td>
                            <td class="textoVertical" style="vertical-align:middle;" rowspan="3">No. de componente y observaciones</td>               
                        </tr>
                        <tr class="sombreado">   
                            <td class="textoVertical" style="vertical-align:middle;">Nivel de indicación</td>
                            <td class="textoVertical" style="vertical-align:middle;">Nivel de referencia</td>
                            <td class="textoVertical" style="vertical-align:middle;">Factor de atenuación</td>
                            <td class="textoVertical" style="vertical-align:middle;">Relación de indicación</td>
                            <td rowspan="2" class="textoVertical" style="vertical-align:middle;">Longitud</td>
                            <td rowspan="2" class="textoVertical" style="vertical-align:middle;">Distancia angular</td>
                            <td rowspan="2" class="textoVertical" style="vertical-align:middle;">Profundidad</td>
                            <td colspan="2" class="encabezadoUt" style="vertical-align:middle;">Posición</td>   
                        </tr>
                        <tr class="sombreado">  
                            <td class="encabezadoUt">A</td>
                            <td class="encabezadoUt">B</td>
                            <td class="encabezadoUt">C</td>
                            <td class="encabezadoUt">D</td>
                            <td class="encabezadoUt">X</td>
                            <td class="encabezadoUt">Y</td>   
                        </tr>
                    </thead>
                    <?php
                        for ($i = 0; $i <12; $i++) {
                        ?>
                        <tbody>
                            <tr>
                                <td>
                                    <input name="junta[]" class="" value="--" size="4">
                                </td>
                               <td>
                                    <input name="longitud[]" class="" value="--" size="2">
                                </td>
                                <td>
                                    <input name="discontinuidad[]" class="" value="--" size="2">
                                </td>
                                <td>
                                    <input name="evaluacion[]" class="" value="--" size="2">
                                </td>
                                <td>
                                    <input name="observaciones[]" class="" value="--" size="2">
                                </td>
                                <td>
                                    <input name="junta[]" class="" value="--" size="2">
                                </td>
                               <td>
                                    <input name="longitud[]" class="" value="--" size="2">
                                </td>
                                <td>
                                    <input name="discontinuidad[]" class="" value="--" size="2">
                                </td>
                                <td>
                                    <input name="evaluacion[]" class="" value="--" size="2">
                                </td>
                                <td>
                                    <input name="observaciones[]" class="" value="--" size="2">
                                </td>
                                <td>
                                    <input name="junta[]" class="" value="--" size="2">
                                </td>
                               <td>
                                    <input name="longitud[]" class="" value="--" size="2">
                                </td>
                                <td>
                                    <input name="discontinuidad[]" class="" value="--" size="2">
                                </td>
                                <td>
                                    <input name="evaluacion[]" class="" value="--" size="2">
                                </td>
                                <td>
                                    <input name="observaciones[]" class="" value="--" size="2">
                                </td>
                                <td>
                                    <input name="evaluacion[]" class="" value="--" size="2">
                                </td>
                                <td>
                                    <input name="observaciones[]" class="" value="--" size="2">
                                </td>
                            
                            </tr>
                                    <?php
                                    }
                                    ?>
                        </tbody>
                </table>
            </div>
            <!--***************************FIRMAS***************************************************-->
                <fieldset>
                    <legend align="center">FIRMAS</legend>
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
                                            <input class="form-control" type="text" size="8" placeholder="ING...." name="firma1">
                                            <br>
                                            <textarea id="byetext" class="form-control" name="empresa1" style="max-width:250px; resize:none;" rows="3" cols="300px">Técnico N I/II SNT-TC-1A Asesoría e Inspección en Construcción Costa Fuera, S.C</textarea>
                                        <td>
                                            <input class="form-control" type="text" placeholder="ING...." size="8" name="firma2">
                                            <br>
                                            <textarea id="byetext" class="form-control" name="empresa2" cols="300px" rows="3" style="max-width:250px;">Coordinador de control de calidad Propetrol</textarea>
                                        <td>
                                            <input class="form-control" type="text" size="8" placeholder="ING....." name="firma3">
                                            <br>
                                            <textarea id="byetext" class="form-control" name="empresa3" cols="300px" rows="3" style="max-width:250px;">Ingeniero de campo Propetrol</textarea>
                                    </tr>
                                    <!----------------------------------------------------------------------------------------!-->
                                    <!----------------------------------------------------------------------------------------!-->
                                </table>
                            </div><!--footer-->
                        </div><!--Div class-responsive-->
                </fieldset>
                <br>
                <div align="center">
                    <input type="submit" value="Registrar" class="btn btn-primary btn-lg">
                </div>
    </form>
</body>
</html>
<script type="text/javascript" src="/AICO/js/jquery-3.2.1.min.js"></script>
<!--script type="text/javascript" src="/AICO/js/enter.js"></script-->