<?php
session_start();

if(isset($_SESSION['tecnico'])){
    $usuario = $_SESSION['tecnico'];
}else{
    header("location:notFound.html");
    die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- ICONO PESTAÑA -->
    <link href="/AICO/img/IC.png" rel="icon">
    <link rel="stylesheet" href="/AICO/css/llena_formatos.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Metalografia</title>
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
                <h3 align="center">REPORTE DE ANÁLISIS METALOGRÁFICO</h3>            
        </div>
    </header>
    <form action="validarMetalografia.php" method="POST">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="ex3" >Cliente</label>
                <select class="form-control" name="deCliente">
	                <option value="0">Seleccione una opcion</option>
                        <?php
                            require 'usuario_mvc.php';
                            $m = new Metalografia();
                            $registros = $m->buscarClientes();
		                    foreach ($registros as $row){
                                echo '<option value="'.$row->clCliente.'">'.$row->deCliente.'</option>';
                            } 
                        ?>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="ex3">Contrato</label>
                <input class="form-control" type="text" name="clContrato" required>
            </div>
            <div class="form-group col-md-12">
                <label for="ex3">Proyecto</label>
                <input class="form-control" type="text" name="deProyecto" required>
            </div>
            <div class="form-group col-md-6">
                <label for="ex3">Orden de trabajo</label>
                <input class="form-control" type="text" name="clOrdenTrabajo" required>
            </div>
            <div class="form-group col-md-6">
                <label for="ex3">Folio</label>
                <input class="form-control" type="text" name="clFolio" required>
            </div>
            <div class="form-group col-md-4">
                <label for="ex3">No. de isometrico y/o plano</label>
                <input class="form-control" type="text" name="deIsometrico" required>
            </div>
            <div class="form-group col-md-4">
                <label for="ex3">Numero de reporte</label>
                <input class="form-control" type="text" name="clNumReporte" required>
            </div>
            <div class="form-group col-md-4">
                <label for="ex3">Fecha</label>
                <input class="form-control" type="date" name="feTecnico" required>
            </div>
            <div class="form-group col-md-6">
                <label for="ex3">Lugar</label>
                <input class="form-control" type="text" name="deLugar" required>
            </div>
            <div class="form-group col-md-6">
                <label for="ex3">Partida</label>
                <input class="form-control" type="text" name="clPartida" required>
            </div>
            <div class="form-group col-md-12">
                <label for="ex3">Nombre de la pieza/trazabilidad</label>
                <input class="form-control" type="text" name="deTrazabilidad" required>
            </div>
            <div class="form-group col-md-4">
                <label for="ex3">Accesorio</label>
                <input class="form-control" type="text" name="deAccesorio" required>
            </div>
            <div class="form-group col-md-4">
                <label for="ex3">Tuberia
                <input class="form-control" type="radio" name="deTubEstruc"  value="Tuberia" required></label>
            </div>
            <div class="form-group col-md-4">
                <label for="ex3">Estructural
                <input class="form-control" type="radio" name="deTubEstruc" value="Estructural" required></label>
            </div>
            <div class="form-group col-md-12">
                <label for="comment">Descripcion del trabajo y notas:</label>
                <textarea class="form-control" rows="5" name="deDescripcion" style="resize:none;" required></textarea>
            </div>
        </div>
            <br>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <table border="1">
                        <thead class="fields">
                            <tr>
                                <td colspan="3">NUMERO DE LIJA PARA EL DESBASTE</td>
                                <td colspan="2">MATERIAL PARA EL PULIDO</td>
                                <td colspan="2">DATOS DE ATAQUE QUIMICO</td>
                                <td>FASES PRESENTES</td>
                                <td>ESPECIFICACION APROXIMADA DEL MATERIAL</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="number" maxlenght="4" name="numLija1" class="borde" required></td>
                                <td><input type="number" maxlenght="4" name="numLija2" class="borde" required></td>
                                <td><input type="number" maxlenght="4" name="numLija3" class="borde" required></td>
                                <td class="fields">PAÑO</td>
                                <td><input type="text" name="dePano" class="borde" required></td>
                                <td class="fields">REACTIVO</td>
                                <td><input type="text" name="deReactivo" class="borde" required></td>
                                <td rowspan="2"><textarea name="deFases" class="borde" rows= "3" required></textarea></td>
                                <td rowspan="2"><textarea name="deEspecificacion" class="borde" rows= "3" required></textarea></td>
                            <tr>
                                <td><input type="number" maxlenght="4" name="numLija4" class="borde" required></td>
                                <td><input type="number" maxlenght="4" name="numLija5" class="borde" required></td>
                                <td><input type="number" maxlenght="4" name="numLija6" class="borde" required></td>
                                <td class="fields">ABRASIVO</td>
                                <td><input type="text" name="deAbrasivo" class="borde" required></td>
                                <td class="fields">TIEMPO</td>
                                <td><input type="text" name="deTiempo" class="borde" required></td>
                            </tr>
                        </tbody>
                    </table>
                <br>
                <br>
                <p align="center">REGISTRO FOTOGRAFICO</p>
                <br>
                <table border="0" id="fotoMetalografia" class="img" align="center">               
                    <tr>
                        <td width="264" height="264" style="border-width: 0px;">
	                    <input align="center" id="file" type="file" name="imagenMetalografia1">
	                    <div id="preview">
	                    </div>
                        <td width="21" ></td>
                        <td width="264" style="border-width: 0px;">
	                    <div id="">
	                    <table>
	                    <td>
                        OBSERVACIONES:
	                    <textarea cols="63" rows="13" class="obser" style="resize:none;"></textarea></div></td>
	                    </td>
	                    </table>
                    </tr>
                    <tr>
                        <td id="imag" height="33">FOTOMICROGRAFIA A 100X</td>
                        <td></td>
                        <td id="imag"></td>
                    </tr>
                    <tr>
                        <td height="264" style="border-width: 0px;">
	                    <div id="imag" height="264">
	                    <img id="ver"></di>
	                    </td>
                        <td></td>
                        <td style="border-width: 0px;"><input id="afile" type="file" name="im4">
	                    <div id="apreview"></div></td>
                    </tr>
                    <tr>
                        <td id="imag">TAMA&Ntilde;O DE GRANO
                        <select onchange="document.getElementById('ver').src = this.value" name="grano">
	                        <option>--</option>
                            <option align="center" value="/aico/img/granos/65.jpg">6.5</option>
                            <option value="/aico/img/granos/70.jpg">7</option>
                            <option value="/aico/img/granos/75.jpg">7.5</option>
                            <option value="/aico/img/granos/80.jpg">8</option>
                            <option value="/aico/img/granos/85.jpg">8.5</option>
	                        <option value="/aico/img/granos/90.jpg">9</option>
	                        <option value="/aico/img/granos/95.jpg">9.5</option>
	                        <option value="/aico/img/granos/100.jpg">10</option>
                        </select>COMPARATIVA ASTM E-112</td>                 
                        <td></td>
                        <td id="imag">FOTOGRAF&Iacute;A ESPEC&Iacute;FICA DONDE SE MUESTRA LA ZONA A LA CUAL SE LE<br> REALIZ&Oacute; LA METALOGRAFIA</td>
                    </tr>
                </table>
            
                <br><br>
                    <fieldset>
                        <legend align="center"></legend>
                            <div class="col-xs-6" align="center">
                                <label for="ex3">Firma de quien elaboró</label>
                                <input class="form-control" type="text" name="firma1" placeholder="ING..." required><br>
                                <textarea id="byetext" class="form-control" name="deAprobacion" style="max-width:500px; resize:none;" rows="3">Asesoría e Inspección en Construcción Costa Fuera, S.C</textarea>
                            </div>
                            <div class="col-xs-6" align="center">
                                <label for="ex3">Firma de quien aprobó</label>
                                <input class="form-control" type="text" name="firma2" placeholder="ING..." required><br>
                                <textarea id="byetext" class="form-control" name="empresa1" style="max-width:500px; resize:none;" rows="3">Asesoría e Inspección en Construcción Costa Fuera, S.C</textarea>
                            </div>
                    </fieldset>
                    <br>
                    <br>
            <div align="center">
                <input type="submit" value="Registrar y continuar" class="btn btn-primary btn-lg">
                <input type="submit" value="Registrar y terminar" class="btn btn-primary btn-lg">
            </div>
            </div>
        </div>
    </form>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script src="/AICO/js/carga_imagen.js"></script>
