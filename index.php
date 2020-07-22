<?php
session_start();
//Desactivar toda las notificaciones del PHP xd
error_reporting(0);
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/index.css">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>SAICO</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/pruebasaico.png">

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
                                <a href="#" data-toggle="tooltip" data-placement="bottom" ><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: especialista@aicosc.com</span></a>
                                                               
                            </div>
                            <div class="top-header-meta">
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="+1 234 122 122"><i class="fa fa-phone" aria-hidden="true"></i> <span>Telefono: 938- 197- 8820</span></a>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="+1 234 122 122"><i class="fa fa-phone" aria-hidden="true"></i> <span>Telefono: 938- 197- 8820</span></a>                               
                            </div>
                            <!-- Top Header Content -->
                            <div class="top-header-meta d-flex">
                                <!--div class="login">
                                    <a href="#"><i class="fa fa-user" aria-hidden="true"></i> <span>Cerrar sesion</span></a>
                                </div-->                           
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
                                    <li><a href="index.php">Inicio</a></li>
                                    <li><a href="#servicios">Nuestros servicios</a></li>
                                    <li><a href="#contacto">Contacto</a></li>                                   
                            <!-- Navbar End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- #######    sesion star       ####-->

            <!-- Single Hero Post -->
            <div class="single-hero-post bg-overlay">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/17.jpg);"></div>
                <div class="container h-100">
                    <div class="row h-100 align-items-center">                   
                        <div class="col-12">
                            <!--h1 align="center">S. A. I. C. O.</h1-->  
                            <!-- Post Content -->
                            <div class="main">                            
                                <form action="validaUsuario_mcv.php" id="formlg" method="POST">
                                    <input class="textIndex" type="text" name="deUsuario" placeholder="Usuario" required>
                                    <input class="textIndex" type="password" name="dePassword" placeholder="Contrase&ntilde;a" required>
                                    <a>&iquest;A&uacute;n no tienes contrase&ntilde;a?</a> <a class="vinculos" href="formCrearPass.php">Crear</a><br>
                                    <a>&iquest;No sabes cual es tu usuario?</a> <a class="vinculos" href="formSolicitarUsuario.php">Solicitarlo</a><br>
                                    <a class="vinculos">&iquest;Has olvidado tu contrase&ntilde;a?</a> <a class="vinculos" href="formRecuperarPass.php">Recuperar</a><br>      
                                    <input type="submit" class="botonlg" value="Iniciar Sesion">
                                </form>  
                                <!--h2>S. A. I. C. O.</h2>
                                <p>Sistema...</p>
                                <div class="welcome-btn-group">
                                    <a href="#" class="btn alazea-btn mr-30">INICIAR SESION</a>
                                </div-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <!-- ##### Service Area Start ##### -->
    <section class="our-services-area bg-gray section-padding-100-0" id="servicios">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>NUESTROS SERVICIOS</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-12 col-lg-5">
                    <div class="alazea-service-area mb-100">

                        <!-- Single Service Area -->
                        <div class="single-service-area d-flex align-items-center wow fadeInUp" data-wow-delay="100ms">
                            <!-- Icon -->
                            <div class="service-icon mr-30">
                                <i class="fa fa-cog" aria-hidden="true"></i>
                            </div>
                            <!-- Content -->
                            <div class="service-content">
                                <h5>CARACTERIZACION</h5>
                                <p>* Metalografias<br>
                                   * Analisis Quimico<br>
                                   * Caracterizacion<br>
                                   * Dureza</p>
                            </div>
                        </div>                        
                        <div class="single-service-area d-flex align-items-center wow fadeInUp" data-wow-delay="500ms">
                            <!-- Icon -->
                            <div class="service-icon mr-30">
                                <i class="fa fa-cog" aria-hidden="true"></i>
                            </div>
                            <!-- Content -->
                            <div class="service-content">
                                <h5>PND'S</h5>
                                <p>* Particulas Magneticas<br>
                                   * Liquidos Penetrantes<br>
                                   * Ultrasonido</p>
                            </div>
                        </div>
                        <div class="single-service-area d-flex align-items-center wow fadeInUp" data-wow-delay="100ms">
                            <!-- Icon -->                                                        
                        </div>    
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="alazea-video-area bg-overlay mb-100">
                        <img src="img/bg-img/5.png" alt="">
                        <a href="http://www.youtube.com/watch?v=7HKoqNJtMTQ" class="video-icon">
                            <i class="fa fa-play" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100-0" id="contacto">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-lg-5">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h2>CONTACTANOS</h2>
                    </div>
                    <!-- Contact Form Area -->
                    <div class="contact-form-area mb-100">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="contact-name" placeholder="Nombre">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="contact-email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="contact-subject" placeholder="Asunto">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Mensaje"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn alazea-btn mt-15">Enviar Mensaje</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <!-- Google Maps -->
                    <div class="map-area mb-100">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1589.4189960552128!2d-91.82216530540776!3d18.650674678204766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85f1079ca875b413%3A0x49aa9aeb49f9782a!2sCalle%2033-A%20%26%20Calle%2060%2C%20Justo%20Sierra%2C%2024110%20Cd%20del%20Carmen%2C%20Camp.!5e0!3m2!1ses-419!2smx!4v1583516642814!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area bg-img bg-gray" style="background-image: url(img/bg-img/3.jpg);">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="footer-logo mb-30">
                            <!-- logo -->
                                <a href="http://www.aicosc.com"><img src="img/bg-img/7.png" alt=""></a>                       
                            </div>
                            <div class="widget-title">
                                <h5>Redes sociales</h5>
                            </div>
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
                                <!--a href="www.aicosc.com"></a-->
                                <!--div class="product-thumbnail">
                                    <a href="shop-details.html"><img src="img/bg-img/4.jpg" alt=""></a>
                                </div-->
                                <!--div class="product-info">
                                    <a href="shop-details.html">Cactus Flower</a>
                                    <p>$10.99</p>
                                </div-->
                            </div>

                            <!-- Single Best Seller Products -->
                            <div class="single-best-seller-product d-flex align-items-center">
                                <!--div class="product-thumbnail">
                                    <a href="shop-details.html"><img src="img/bg-img/5.jpg" alt=""></a>
                                </div>
                                <div class="product-info">
                                    <a href="shop-details.html">Tulip Flower</a>
                                    <p>$11.99</p>
                                </div-->
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
                                <p><span>Direccion: </span>Calle 33-A por 60 No.75 Colonia Justo sierra, Cd. del Carmen Campeche CP. 24110</p>
                                <p><span>Telefono: </span> 938- 197- 8820</p>
                                <p><span>Email: </span> info. xxx@aicosc.com</p>
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
                            Copyright AICO - <script>document.write(new Date().getFullYear());</script> Todos los derechos reservados</a>
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