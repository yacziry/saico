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
    <form action="guarda_juntasPart.php" method="POST">
        <div align="center">
            <label align="center">NOTA: SOLO AGREGAR 12 JUNTAS COMO MAXIMO</label>
        </div>
        <br />
        <div class="table-responsive">
            <table id="lista_productos" border="1" align="center">
                <thead>
                    <tr class="fields">
                        <td colspan="5" align="center">RESULTADOS</td>
                    </tr>
                    <tr class="fields">
                        <td colspan="5">PIEZA: <input type="text" name="pieza" class="borde" size="110" required></td>
                    </tr>
                    <tr class="fields">
                        <th>JUNTA</th>
                        <th>LONGITUD EN m</th>
                        <th>DISCONTINUIDAD</th>
                        <th>EVALUACION</th>
                        <th>OBSERVACIONES</th>
                     
                    </tr>
                </thead>
                <?php
                    for ($i = 0; $i <12; $i++) {
                    ?>
                <tbody>
                    <tr>
                        <td>
                            <input name="junta[]" class="borde" value="---">
                        </td>
                       <td>
                            <input name="longitud[]" class="borde" value="---">
                        </td>
                        <td>
                            <input name="discontinuidad[]" class="borde" value="---">
                        </td>
                        <td>
                            <input name="evaluacion[]" class="borde" value="---">
                        </td>
                        <td>
                            <input name="observaciones[]" class="borde" value="---">
                        </td>
                         <!--******************ELIMINAR// button_eliminar_producto*****************************!-->
                        <!--td>
                            <button type="button" id="combine" class="btn btn-success"> Combinar </button>
                        </td-->
                    </tr>
                            <?php
                            }
                            ?>
                </tbody>
                <tfoot>
                    <tr class="fields">
                        <td colspan="5"></td>                      
                        <!--td>
                            <button type="button" class="btn btn-success button_agregar_producto"> Agregar </button>
                        </td-->
                    </tr>
                </tfoot>               
            </table>
        </div>
        <br>
        <div align="center">
            <input type="submit" value="Registrar Juntas" class="btn btn-primary btn-lg">
        </div>
    </form>

</body>
</html>
<script type="text/javascript" src="/AICO/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="/AICO/js/productos.js"></script>
<script type="text/javascript" src="/AICO/js/enter.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        productos();
    });
</script>




