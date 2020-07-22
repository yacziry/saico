<?php
//Desactivar toda las notificaciónes del PHP xd
//error_reporting(0);
ini_set("session.cookie_lifetime","14400");
ini_set("session.gc_maxlifetime","14400");
// Comienzo de la sesión
session_start();

if(isset($_SESSION['tecnico'])){
    $tec = $_SESSION['tecnico'];
    unset($_SESSION['reporteS']);
    unset($_SESSION['clNumReporte']);
    unset($_SESSION['clNorma']);
}else{
    header("location:notFound.html");
    die();
}
require 'usuarioDAO.php';
$user = new Usuario();
$nombreTec = $user->nomAp($tec);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/index.css">
    <link href="css/styleIndex.css" type="text/css" rel="stylesheet">
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
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-circle"></div>
        <div class="preloader-img">
            <img src="img/core-img/pruebasaico.png" alt="">
        </div>
    </div>

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
                        <!--a href="http://www.aicosc.com" class="nav-brand"--><img src="img/core-img/IC.png" alt="">
                        <!--/a-->

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
                                    <li><a href="#">Consulta de reportes </a>
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
                    </nav>
                    <!-- Search Form -->
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center"
            style="background-image: url(img/bg-img/4.jpg);">
            <h2>Bienvenido (a): <?php echo $nombreTec; ?></h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index2.php"><i class="fa fa-home"></i> Inicio</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tecnicos</li>
                        </ol>
                    </nav>
                    <br>
                    <div align="center">
                        <h2>CARACTERIZACIÓN</h2>
                        <a href="formCaracterizacion.php"><img src="img/index/caracterizacion.jpg" id="caracterizacion"
                                width="300" height="300"></a>
                        <a href="#"><img src="img/index/relevado_de_esfuerzos.jpg" id="relevado_de_esfuerzos"
                                width="270" height="270"></a>
                        <a href="formDureza.php"><img src="img/index/dureza.jpg" id="dureza" width="300" height="300"
                                width="300" height="300"></a>
                        <a href="#"><img src="img/index/ensayo_de_tension.jpg" id="ensayo_de_tension"></a>
                        <a href="formMetalografia.php"><img src="img/index/metalografia.jpg" id="metalografia"></a>
                        <a href="formAnalisisQuimico.php"><img src="img/index/analisis_quimico.jpg"
                                id="analisis_quimico"></a><br>
                    </div>
                    <br>
                    <div align="center">
                        <h2>PRUEBAS NO DESTRUCTIVAS</h2>
                        <br>
<<<<<<< HEAD
                        <a href="formLiquidos.php"><img src="img/index/liquidos_penetrantes.jpg"
                                id="liquidos_penetrantes"></a>
                        <a href="formParticulas.php"><img src="img/index/particulas_magneticas.jpg"
                                id="particulas_magneticas"></a><br>
                        <a href="#"><img src="img/index/ultrasonido_aws.jpg" id="ultrasonido_aws"></a>
=======
                        <a href="formLiquidos.php"><img src="img/index/liquidos_penetrantes.jpg" id="liquidos_penetrantes"  ></a>
                        <a href="formParticulas.php"><img src="img/index/particulas_magneticas.jpg" id="particulas_magneticas"></a><br>
                        <a href="formUltrasonido.php"><img src="./img/index/ultrasonido_aws.jpg" id="ultrasonido_aws"></a>
>>>>>>> f366292e7f394ed27fc1c67f44fc8f226b12f1d4
                        <a href="#"><img src="img/index/ultrasonido_aws.jpg" id="ultrasonido_aws"></a>
                        <a href="#"><img src="img/index/ultrasonido_aws.jpg" id="ultrasonido_aws"></a>
                    </div>
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
                                <!--a href="http://www.aicosc.com"--><img src="img/core-img/AICO.bmp" alt="">
                                <!--/a-->
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
                            <div class="single-best-seller-product d-flex align-items-center">
                            </div>
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
                                <p><span>Email: </span>especialista@aicosc.com</p>
                                <p><span>Horario: </span> Lun - Dom: 24 hrs</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
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