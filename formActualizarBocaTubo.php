<?php
//Desactivar toda las notificaci�nes del PHP xd
//error_reporting(0);
ini_set("session.cookie_lifetime", "14400");
ini_set("session.gc_maxlifetime", "14400");
// Comienzo de la sesi�n
session_start();

if (isset($_SESSION['tecnico'])) {
    $tec = $_SESSION['tecnico'];
    $clNumReporte = $_SESSION['clNumReporte'];
} else {
    header("location:notFound.html");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/index.css">
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/llena_formatos.css" type="text/css">
    <script src="js/jquery/jquery-2.1.1.min.js"></script>

    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Tecnicos</title>

    <!-- Favicon -->
    <link rel="icon" href="">



</head>

<body>
    <!-- Preloader -->


    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- ***** Top Header Area ***** -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Top Header Content -->
                            <div class="top-header-meta">
                                <a href="#" data-toggle="tooltip" data-placement="bottom"><i class="fa fa-envelope-o"
                                        aria-hidden="true"></i> <span>Email: especialista@aicosc.com</span></a>
                                <a href="#" data-toggle="tooltip" data-placement="bottom"><i class="fa fa-phone"
                                        aria-hidden="true"></i> <span>Tel: 938- 197- 8820</span></a>
                            </div>

                            <!-- Top Header Content -->
                            <div class="top-header-meta d-flex">
                                <!-- Login -->
                                <div class="login">
                                    <a href="index.php"><i class="fa fa-user" aria-hidden="true"></i> <span>Cerrar
                                            sesion</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ***** Navbar Area ***** -->
        <div class="alazea-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="alazeaNav">

                        <!-- Nav Brand LOGO-->
                        <a href="http://www.aicosc.com" class="nav-brand"><img src="img/core-img/IC.png" alt=""></a>

                        <!-- Nav Brand -->
                        <a href="index.html" class="nav-brand"><img src="" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Navbar Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index2.php">Inicio</a></li>
                                    <li><a href="#">Caracterizacion</a>
                                        <ul class="dropdown">
                                            <li><a href="formMetalografia.php">Metalografia</a></li>
                                            <li><a href="formAnalisisQuimico.php">Analisis Quimico</a></li>
                                            <li><a href="">Ensayo de tension</a></li>
                                            <li><a href="formCaracterizacion.php">Caracterizacion</a></li>
                                            <li><a href="">Dureza</a>
                                                <ul class="dropdown">
                                                    <li><a href="formDureza.php">Dureza</a></li>
                                                    <li><a href="llena_d_relevado.html">Relevado de esfuerzos</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pruebas no destructivas</a>
                                        <ul class="dropdown">
                                            <li><a href="formParticulas.php">Particulas Magneticas</a></li>
                                            <li><a href="formLiquidos.php">Liquidos Penetrantes</a></li>
                                            <li><a href="">Ultrasonido</a>
                                                <ul class="dropdown">
                                                    <li><a href="formBocaTubo.php">Boca de tubo</a></li>
                                                    <li><a href="formHazAngular.php">Haz Angular</a></li>
                                                    <li><a href="">Clase X y R</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#" class="fa fa-search" aria-hidden="true"></a>
                                        <ul class="dropdown">
                                            <li><a href="formBuscarNr.php">Numero de reporte</a></li>
                                            <li><a href="formBuscarFr.php">Fecha</a></li>
                                            <li><a href="formBuscarPcl.php">Palabra clave</a></li>
                                            <li><a href="formBuscarCl.php">Cliente</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- Navbar End -->
                        </div>
                        <!--menu-->
                    </nav>
                    <!--nav-->
                </div>
                <!--container-->
            </div>
            <!--nav container-->
        </div>
        <!--menu-->
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center"
            style="background-image: url(img/bg-img/4.jpg);">
            <h2>REPORTE DE ULTRASONIDO</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href=""><i class="fa fa-home"></i> Inicio</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tecnicos</li>
                        </ol>
                    </nav>
                    <?php
                        require 'bocaTuboDAO.php';
                        $bt = new BocaDeTubo();
                        //$forReportes = $l->buscarReporte("tt");
                        $forReportes = $bt->buscarReporte($clNumReporte);
                        foreach ($forReportes as $row){}
                        require 'clientesDAO.php';
                        $cl = new Cliente();
                        $cliente = $cl->buscar($row->cacliente_clCliente);
                        foreach ($forReportes as $row){
                    ?>
                    <form action="" id="tablaResultado" method="POST">
                        <div class="form-row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Fecha</label>
                                    <input class="form-control" type="date" name="feTecnico"
                                        value="<?php echo  $row->feTecnico; ?>" required>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ex3">Lugar</label>
                                <input class="form-control" type="text" name="deLugar"
                                    value="<?php echo  $row->deLugar; ?>" required>
                            </div>
                            <div class="col-12 col-sm-8">
                                <div class="form-group">
                                    <label for="ex3">Cliente</label>
                                    <input class="form-control" type="text" name="deCliente"
                                        value="<?php echo $cliente ?>" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group">
                                    <label for="ex3">Contrato</label>
                                    <input class="form-control" type="text" name="clContrato"
                                        value="<?php echo  $row->clContrato; ?>" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12">
                                <div class="form-group">
                                    <label for="ex3">Proyecto</label>
                                    <input class="form-control" type="text" name="deProyecto"
                                        value="<?php echo  $row->deProyecto; ?>" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-8">
                                <div class="form-group">
                                    <label>Numero de reporte</label>
                                    <input class="form-control" type="text" name="clNumReporte"
                                        value="<?php echo  $row->clNumReporte; ?>" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group">
                                    <label>No. de plano</label>
                                    <input class="form-control" type="text" name="clPlano"
                                        value="<?php echo  $row->clPlano; ?>" required>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="comment">Descripcion del trabajo y notas:</label>
                                <textarea class="form-control" rows="5" name="deDescripcion" style="resize:none;"
                                    required> <?php echo  $row->deDescripcion; ?></textarea>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="ex3">Código utilizado</label>
                                <input class="form-control" type="text" name="clCodigo"
                                    value="<?php echo  $row->clCodigo; ?>" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="ex3">Material</label>
                                <input class="form-control" type="text" name="deMaterial"
                                    value="<?php echo  $row->deMaterial; ?>" required>
                            </div>
                            <hr width="9999">
                            <h2 class="cabeceraForm">Equipo</h2>
                            <br>
                            <div class="form-group col-md-4">
                                <label for="deMarca">Marca</label>
                                <input class="form-control" type="text" name="deMarca"
                                    value="<?php echo  $row->deMarca; ?>" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="deModelo">Modelo</label>
                                <input class="form-control" type="text" name="deModelo"
                                    value="<?php echo  $row->deModelo; ?>" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="deNs">N° de Serie</label>
                                <input class="form-control" type="text" name="deNs" value="<?php echo  $row->deNs; ?>"
                                    required>
                            </div>
                            <hr width="1280">
                            <h2 class="cabeceraForm">Transductor</h2>

                            <div class="form-group col-md-4">
                                <label for="deMarca2">Marca</label>
                                <input class="form-control" type="text" name="deMarca2"
                                    value="<?php echo  $row->deMarca2; ?>" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="deModelo2">Modelo</label>
                                <input class="form-control" type="text" name="deModelo2"
                                    value="<?php echo  $row->deModelo2; ?>" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="deNs2">N° de Serie</label>
                                <input class="form-control" type="text" name="deNs2" value="<?php echo  $row->deNs2; ?>"
                                    required>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="deFrec">FREC</label>
                                <input class="form-control" type="text" name="deFrec"
                                    value="<?php echo  $row->deFrec; ?>" required>
                            </div>
                            <hr width="1280">
                            <div class="form-group col-md-4">
                                <label style="color: darkgoldenrod; font-size: 20px; margin-bottom: 2px;"
                                    for="deAcoplante">Acoplante<span
                                        class="ml-2 badge badge-secondary">BLOQUE</span></label>

                                <input class="form-control" type="text" name="deAcoplante"
                                    value="<?php echo  $row->deAcoplante; ?>" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="deTipoAcoplante">Tipo</label>
                                <input class="form-control" type="text" name="deTipoAcoplante"
                                    value="<?php echo  $row->deTipoAcoplante; ?>" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="deNs3">N° de Serie</label>
                                <input class="form-control" type="text" name="deNs3" value="<?php echo  $row->deNs3; ?>"
                                    required>
                            </div>

                        </div>
                        <!-- Comienza Ajuste del Equipo -->
                        <div style="text-align: center" class="mt-5 alert alert-primary" role="alert">
                            Ajuste del Equipo
                        </div>
                        <div class="form-row ">
                            <br>
                            <div class="form-group col-md-3">
                                <label for="deGanancia">Ganancia</label>
                                <input class="form-control" type="text" name="deGanancia"
                                    value="<?php echo  $row->deGanancia; ?>" required>
                            </div>
                            <div class="form-group col-md-5">
                                <label for="deTipo">Tipo</label>
                                <input class="form-control" type="text" name="deTipo"
                                    value="<?php echo  $row->deTipo; ?>" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="deRango">Rango</label>
                                <input class="form-control" type="text" name="deRango"
                                    value="<?php echo  $row->deRango; ?>" required>
                            </div>
                            <div class="form-group col-md-5">
                                <label for="deNivelDac">Nivel DAC</label>
                                <input class="form-control" type="text" name="deNivelDac"
                                    value="<?php echo  $row->deNivelDac; ?>" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="deRetraso">Retraso</label>
                                <input class="form-control" type="text" name="deRetraso"
                                    value="<?php echo  $row->deRetraso; ?>" disabled>
                            </div>
                            <?php
                            $x = $row->deRechazo;
                            if ($x == "ON") {
                            ?>
                            <div class="form-group col-md-12">
                                <label>Rechazo:</label>
                                <div class="ml-4 form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="deRechazo" value="ON" checked
                                            disabled> ON
                                    </label>
                                </div>
                                <div class="ml-4 form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="deRechazo" value="OFF"
                                            disabled> OFF
                                    </label>
                                    <?php
                                }
                                if ($x == "OFF") {
                                    ?>
                                    <div class="form-group col-md-12">
                                        <label>Rechazo:</label>
                                        <div class="ml-4 form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="deRechazo" value="ON"
                                                    disabled> ON
                                            </label>
                                        </div>
                                        <div class="ml-4 form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="deRechazo"
                                                    value="OFF" disabled checked> OFF
                                            </label>
                                        </div>
                                    </div>
                                    <?php
                                }
                                    ?>
                                </div>


                                <div class="table-responsive" align="center">
                                    <!-- <table border="1" align="center" id="resultado">
                                            <thead>
                                                <tr class="fields" style="font-size: small; height: 37px;">
                                                    <th style="height: 37px; width: 50px; text-align: center;" colspan="7">DATOS DEL MATERIAL</th>
                                                    <th style="height: 37px; width: 72px; text-align: center;" colspan="5">DATOS DE LA DISCONTINUIDAD&nbsp;</th>
                                                    <th style="height: 37px; width: 110px; text-align: center;" colspan="4">RESULTADOS DE LA INSPECCI&Oacute;N&nbsp;</th>
                                                </tr>
                                                <tr class="fields" style="font-size: small; height: 26px;">
                                                    <th style="height: 26px; width: 50px; text-align: center;">ID</th>
                                                    <th style="height: 26px; width: 50px; text-align: center;">Elemento / Trazabilidad</th>
                                                    <th style="height: 26px; width: 50px; text-align: center;">Di&aacute;metro IN</th>
                                                    <th style="height: 26px; width: 50px; text-align: center;">N&deg; de Aceptaci&oacute;n</th>
                                                    <th style="height: 26px; width: 50px; text-align: center;">N&deg; de Serie</th>
                                                    <th style="height: 26px; width: 50px; text-align: center;">N&deg; Colada</th>
                                                    <th style="height: 26px; width: 50px; text-align: center;">Espesor Nominal</th>
                                                    <th style="height: 26px; width: 50px; text-align: center;">N&deg; de Indicaci&oacute;n</th>
                                                    <th style="height: 26px; width: 50px; text-align: center;">Largo</th>
                                                    <th style="height: 26px; width: 50px; text-align: center;">Ancho</th>
                                                    <th style="height: 26px; width: 50px; text-align: center;">Desde "X"</th>
                                                    <th style="height: 26px; width: 50px; text-align: center;">Desde "Y"</th>
                                                    <th style="height: 26px; width: 50px; text-align: center;">Espesor M&aacute;ximo Detectado</th>
                                                    <th style="height: 26px; width: 50px; text-align: center;">Espesor M&iacute;nimo Detectado</th>
                                                    <th style="height: 26px; width: 50px; text-align: center;">&Aacute;rea de Barrido</th>
                                                    <th style="height: 26px; width: 50px; text-align: center;">Resultado</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tablaReportes">
                                            </tbody>
                                        </table> -->


                                    <table class="dataTable" border="2">
                                        <thead class="colspanHead" align="center">
                                            <tr>
                                                <th colspan="7">DATOS DEL MATERIAL</th>
                                                <th colspan="5">DATOS DE LA DISCONTINUIDAD</th>
                                                <th colspan="4">RESULTADOS DE LA INSPECCI&Oacute;N</th>
                                            </tr>
                                        </thead>
                                        <thead class="dataHead">
                                            <tr>
                                                <th>ID</th>
                                                <th>Elemento / Trazabilidad</th>
                                                <th>Di&aacute;metro IN</th>
                                                <th>No. Aceptaci&oacute;n</th>
                                                <th>No. Serie</th>
                                                <th>No. Colada</th>
                                                <th>Espesor nominal</th>
                                                <th>No. De indicaci&oacute;n</th>
                                                <th>Largo</th>
                                                <th>Ancho</th>
                                                <th>Desde "X"</th>
                                                <th>Desde "Y"</th>
                                                <th>Espesor Maximo Detectado</th>
                                                <th>Espesor Minimo Detectado</th>
                                                <th>Area de Barrido</th>
                                                <th>Resultado</th>
                                            </tr>
                                        </thead>

                                        <tbody id="tablaReportes">
                                        </tbody>
                                    </table>

                                </div>
                                <div class="mt-5">
                                    <div style="width: 391px;" class="alert alert-warning" role="alert">
                                        <span class="alert-heading">NOMENCLARURA DE INDICACIONES O HALLAZGOS</span>
                                        <hr>
                                        <ul>
                                            <li>
                                                <strong>CI:</strong> Corrosión Interna
                                            </li>
                                            <li class="mt-1">
                                                <strong>I:</strong> Inclusión no Metálica
                                            </li>
                                            <li class="mt-1">
                                                <strong>L:</strong> Laminación
                                            </li>
                                            <li class="mt-1">
                                                <strong>ZI:</strong> Zona de Inclusiones no Metálicas
                                            </li>
                                            <li class="mt-1">
                                                <strong>NPIR:</strong> No Presenta Indicaciones Relevantes
                                            </li>
                                            <li class="mt-1">
                                                <strong>LE:</strong> Laminación Escalonada
                                            </li>

                                        </ul>
                                    </div>

                                </div>
                                <div class="form-row mt-5" align="center" id="botonesDim">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <input type="button" value="Insertar fila" id="insertar"
                                                class="btn alazea-btn mt-15">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn alazea-btn mt-15" id="finalizar"
                                        onclick=this.form.action="formRegistroFotBT.php">Enviar</button>
                                </div>
                            </div>
                            <br>
                        </div>
                        <fieldset class="mt-5 mb-5">
                            <legend align="center">FIRMAS</legend>
                            <div class="form-row">
                                <div class="col-12 col-sm-4">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="deFirma1"
                                            value="<?php echo  $row->deFirma1; ?>" required>
                                        <br>
                                        <label>Nombre de la empresa</label>
                                        <textarea class="form-control" type="text" name="deEmpresa1"
                                            style="resize:none;" rows="3"
                                            required><?php echo  $row->deEmpresa1; ?></textarea>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="deFirma2"
                                            value="<?php echo  $row->deFirma2; ?>" required>
                                        <br>
                                        <label>Nombre de la empresa</label>
                                        <textarea class="form-control" type="text" name="deEmpresa2"
                                            style="resize:none;" rows="3"
                                            required><?php echo  $row->deEmpresa2; ?></textarea>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="deFirma3"
                                            value="<?php echo  $row->deFirma3; ?> " required>
                                        <br>
                                        <label>Nombre de la empresa</label>
                                        <textarea class="form-control" type="text" name="deEmpresa3"
                                            style="resize:none;" rows="3"
                                            required><?php echo  $row->deEmpresa3; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <!--form-row-->
                        </fieldset>
                        <div class="form-row mt-5" align="center" id="botonesDim">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <input type="button" value="ACTUALIZAR" id="insertar"
                                        class="btn alazea-btn mt-15">
                                </div>
                            </div>                                  
                        </div>
                        <?php
                            }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area bg-img" style="background-image: url(img/bg-img/3.jpg);">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="footer-logo mb-30">
                                <a href="http://www.aicosc.com"><img src="img/core-img/AICO.bmp" alt=""></a>
                            </div>
                            <p>Buscanos en redes sociales</p>
                            <div class="social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>Otros servicios</h5>
                            </div>
                            <nav class="widget-nav">
                                <ul>
                                    <li><a href="#">Capacitacion</a></li>
                                    <li><a href="#">Inspeccion</a></li>
                                    <li><a href="#">Calificacion</a></li>
                                    <li><a href="#">Inspectores CWI</a></li>
                                    <li><a href="#">Auditorias tecnicas a proveedores</a></li>
                                    <li><a href="#">Verificacion de maquinas de soldar</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>Pagina web</h5>
                            </div>

                            <!-- Single Best Seller Products -->
                            <div class="single-best-seller-product d-flex align-items-center">
                                <p>www.aicosc.com</p>
                            </div>
                            <!-- Single Best Seller Products -->
                            <div class="single-best-seller-product d-flex align-items-center"></div>
                        </div>
                    </div>
                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>CONTACTO</h5>
                            </div>

                            <div class="contact-information">
                                <p><span>Direccion: </span>Calle 33-A por 60 No.75 Colonia Justo sierra, Cd. del Carmen
                                    Campeche CP. 24110</p>
                                <p><span>Telefono: </span> 938- 197- 8820</p>
                                <p><span>Email: </span> especialista@aicosc.com</p>
                                <p><span>Horario: </span> Lun - Dom: 24 hrs</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--row-->
            </div>
            <!--container-->
        </div>
        <!--main footer-->
        <!-- Footer Bottom Area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="border-line"></div>
                    </div>
                    <!-- Copywrite Text -->
                    <div class="col-12 col-md-6">
                        <div class="copywrite-text">
                            <p>&copy;
                                Copyright AICO - <script>
                                document.write(new Date().getFullYear());
                                </script> Todos los derechos reservados</a>
                            </p>
                        </div>
                    </div>
                    <!-- Footer Nav -->
                    <div class="col-12 col-md-6">
                        <div class="footer-nav">
                            <nav>
                                <ul>
                                    <li><a href="#">Inicio</a></li>
                                    <li><a href="#">Clientes</a></li>
                                    <li><a href="#">Tecnicos</a></li>
                                    <li><a href="#">Administrador</a></li>
                                    <li><a href="#">Servicios</a></li>
                                    <li><a href="#">Contacto</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <!--script src="js/jquery/jquery-2.2.4.min.js"></script-->
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>