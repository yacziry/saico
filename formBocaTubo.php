<?php
//Desactivar toda las notificaci�nes del PHP xd
error_reporting(0);
ini_set("session.cookie_lifetime", "14400");
ini_set("session.gc_maxlifetime", "14400");
// Comienzo de la sesi�n
date_default_timezone_set('America/Mexico_City');
session_start();

if (isset($_SESSION['tecnico'])) {
    $tec = $_SESSION['tecnico'];
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
    <link rel="stylesheet" href="css/llena_formatos.css" type="text/css">
    <script src="js/jquery/jquery-2.1.1.min.js"></script>
    <script src="js/normaReferencia.js"></script>
    <script src="js/ultimoReporteUl.js"></script>

    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Tecnicos</title>

    <!-- Favicon -->
    <link rel="icon" href="">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

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
                                <a href="#" data-toggle="tooltip" data-placement="bottom"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: especialista@aicosc.com</span></a>
                                <a href="#" data-toggle="tooltip" data-placement="bottom"><i class="fa fa-phone" aria-hidden="true"></i> <span>Tel: 938- 197- 8820</span></a>
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
                                            <li><a href="">Ultrasonido AWS D1.1</a>
                                                <ul class="dropdown">
                                                    <li><a href="">Toma de espesores</a></li>
                                                    <li><a href="">Haz Angular</a></li>
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
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/4.jpg);">
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
                    <div class="form-row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="ex3">Ultimo reporte</label>
                                <input class="form-control" type="text" id="mostrarReporte" disabled>
                            </div>
                        </div>
                    </div>
                    <form action="" method="POST" enctype="multipart/form-data" name="f">
                        <div class="form-row">
                            <div class="col-12 col-sm-4">
                                <div class="form-group">
                                    <label>Fecha</label>
                                    <input class="form-control" type="date" name="feTecnico" value="<?php echo date("Y-m-d"); ?>" required>
                                </div>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="ex3">Lugar</label>
                                <input class="form-control" type="text" name="deLugar" required>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="ex3">Cliente</label>
                                    <select class="form-control" name="deCliente" id="cliente" required>
                                        <option value="">Seleccione una opcion</option>
                                        <?php
                                        require 'clientesDAO.php';
                                        $c = new Cliente();
                                        $registros = $c->buscarClientes();
                                        foreach ($registros as $row) {
                                            echo '<option value="' . $row->clCliente . '">' . $row->deCliente . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="ex3">Contrato</label>
                                    <input class="form-control" type="text" name="clContrato" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12">
                                <div class="form-group">
                                    <label for="ex3">Proyecto</label>
                                    <input class="form-control" type="text" name="deProyecto" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Numero de reporte</label>
                                    <input class="form-control" type="text" name="clNumReporte" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>No. de plano</label>
                                    <input class="form-control" type="text" name="clPlano" required>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="comment">Descripcion del trabajo y notas:</label>
                                <textarea class="form-control" rows="5" name="deDescripcion" style="resize:none;" required> &Oslash;</textarea>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="ex3">Código utilizado</label>
                                <input class="form-control" type="text" name="clCodigo" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="ex3">Material</label>
                                <input class="form-control" type="text" name="deMaterial" required>
                            </div>
                            <h2 class="cabeceraForm">Equipo</h2>
                            <br>
                            <div class="form-group col-md-4">
                                <label for="deMarca">Marca</label>
                                <input class="form-control" type="text" name="deMarca" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="deModelo">Modelo</label>
                                <input class="form-control" type="text" name="deModelo" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="deNs">N° de Serie</label>
                                <input class="form-control" type="text" name="deNs" required>
                            </div>
                            <hr width="1280">
                            <h2 class="cabeceraForm">Transductor</h2>
                            <br>
                            <div class="form-group col-md-4">
                                <label for="deMarca2">Marca</label>
                                <input class="form-control" type="text" name="deMarca2" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="deModelo2">Modelo</label>
                                <input class="form-control" type="text" name="deModelo2" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="deNs2">N° de Serie</label>
                                <input class="form-control" type="text" name="deNs2" required>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="deFrec">FREC</label>
                                <input class="form-control" type="text" name="deFrec" required>
                            </div>
                            <hr width="1280">
                            <div class="form-group col-md-4">
                                <label style="color: darkgoldenrod; font-size: 20px; margin-bottom: 2px;" for="deAcoplante">Acoplante<span class="ml-2 badge badge-secondary">BLOQUE</span></label>
                               
                                <input class="form-control" type="text" name="deAcoplante" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="deTipoAcoplante">Tipo</label>
                                <input class="form-control" type="text" name="deTipoAcoplante" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="deNs3">N° de Serie</label>
                                <input class="form-control" type="text" name="deNs3" required>
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
                                <input class="form-control" type="text" name="deGanancia" required>
                            </div>
                            <div class="form-group col-md-5">
                                <label for="deTipo">Tipo</label>
                                <input class="form-control" type="text" name="deTipo" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="deRango">Rango</label>
                                <input class="form-control" type="text" name="deRango" required>
                            </div>
                            <div class="form-group col-md-5">
                                <label for="deNivelDac">Nivel DAC</label>
                                <input class="form-control" type="text" name="deNivelDac" value="%" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="deRetraso">Retraso</label>
                                <input class="form-control" type="text" name="deRetraso">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Rechazo:</label>
                                <div class="ml-4 form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="deRechazo" value="ON"> ON
                                    </label>
                                </div>
                                <div class="ml-4 form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="deRechazo" value="OFF" checked> OFF
                                    </label>
                                </div>

                            </div>
                        </div>
                        <fieldset class="mt-5 mb-5">
                            <legend align="center">FIRMAS</legend>
                            <div class="form-row">
                                <div class="col-12 col-sm-4">
                                    <div class="form-group">                                   
                                        <input class="form-control" type="text" name="deFirma1" placeholder="Nombre..." required>
                                        <br>
                                        <label>Nombre de la empresa</label>
                                        <textarea class="form-control" type="text" name="deEmpresa1" style="resize:none;" rows="3">T&eacute;cnico N I/II SNT-TC-1A Asesor&iacute;a e Inspecci&oacute;n en Construcci&oacute;n Costa Fuera, S.C</textarea>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group">                                   
                                        <input class="form-control" type="text" name="deFirma2" placeholder="Nombre..." required>
                                        <br>
                                        <label>Nombre de la empresa</label>
                                        <textarea class="form-control" type="text" name="deEmpresa2" style="resize:none;" rows="3">Superintendente Patio de Fabricación </textarea>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group">                                    
                                        <input class="form-control" type="text" name="deFirma3" placeholder="Nombre..." required>
                                        <br>
                                        <label>Nombre de la empresa</label>
                                        <textarea class="form-control" type="text" name="deEmpresa3" style="resize:none;" rows="3">Coordinador de Control de Calidad</textarea>
                                    </div>
                                </div>
                            </div><!--form-row-->
                        </fieldset>
                        <div class="form-row" align="center">

                            <button type="submit" class="btn alazea-btn mt-15" id="prueba" data-dismiss="modal" onclick=this.form.action="validarBocaTuboContinuar.php">Registrar juntas</button>

                        </div>


                        <!-- Comienza Tabla Dinámica -->

                        <!-- <div class="form-group"> Posible necesidad de uso
                                <label for="sel1">Select list:</label>
                                <select class="form-control" id="sel1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div> -->
                </div>





            </div>
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
    <script src="js/juntasBocaTubo.js"></script>
</body>

</html>