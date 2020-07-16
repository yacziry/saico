<?php
//Desactivar toda las notificaci�nes del PHP xd
error_reporting(0);
ini_set("session.cookie_lifetime","14400");
ini_set("session.gc_maxlifetime","14400");
// Comienzo de la sesi�n
session_start();

if(isset($_SESSION['tecnico'])){
    $tec = $_SESSION['tecnico'];
    $reporteS = $_SESSION['reporteS'];
}else{
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
                                <a href="#" data-toggle="tooltip" data-placement="bottom"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: especialista@aicosc.com</span></a>
                                <a href="#" data-toggle="tooltip" data-placement="bottom"><i class="fa fa-phone" aria-hidden="true"></i> <span>Tel: 938- 197- 8820</span></a>
                            </div>

                            <!-- Top Header Content -->
                            <div class="top-header-meta d-flex">                               
                                <!-- Login -->
                                <div class="login">
                                    <a href="index.php"><i class="fa fa-user" aria-hidden="true"></i> <span>Cerrar sesion</span></a>
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
                        <a href="http://www.aicosc.com" class="nav-brand"><img src="img/core-img/AICOT.png" alt=""></a>

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
                                                    <li><a href="llena_dureza.html">Dureza</a></li>
                                                    <li><a href="llena_d_relevado.html">Relevado de esfuerzos</a></li>
                                                </ul>
                                            </li>                                            
                                        </ul>
                                    </li>  
                                    <li><a href="#">Pruebas no destructivas</a>
                                        <ul class="dropdown">
                                            <li><a href="formParticulas.php">Particulas Magneticas</a></li>
                                            <li><a href="llena_liquidos.html">Liquidos Penetrantes</a></li>
                                            <li><a href="">Ultrasonido AWS D1.1</a>
                                                <ul class="dropdown">
                                                    <li><a href="">Toma de espesores</a></li>
                                                    <li><a href="">Haz Angular</a></li>
                                                    <li><a href="">Clase X y R</a></li>
                                                </ul>
                                            </li>                                            
                                        </ul>
                                    </li>                                                                    
                                </ul>                                  

                                <!-- Search Icon -->
                                <div id="searchIcon">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>
                            </div>
                            <!-- Navbar End -->
                        </div>
                    </nav>
                    <!-- Search Form -->
                    <div class="search-form">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
                            <button type="submit" class="d-none"></button>
                        </form>
                        <!-- Close Icon -->
                        <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
        </div>
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
                    <?php
						require 'clientesDAO.php';
                        $clientes = new Cliente();
                        require 'ultrasonidoDAO.php';
                        $p = new bocaDeTubo();
                        $registros = $p->buscar($reporteS);
		                foreach ($registros as $row){                        
                        }
                    ?>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Cliente</label>
                                    <select class="form-control" name="deCliente" disabled>	                                    
                                        <?php                                       
                                            $c = $clientes->seleccionado($row->cacliente_clCliente);
                                            foreach ($c as $r){
                                                echo '<option value="'.$r->clCliente.'">'.$r->deCliente.'</option>';
                                            } 
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="ex3">Contrato</label>
                                    <input class="form-control" type="text" name="clContrato" value="<?php echo  $row->clContrato; ?>" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12">
                                <div class="form-group">
                                    <label for="ex3">Proyecto</label>
                                    <input class="form-control" type="text" name="deProyecto" value="<?php echo  $row->deProyecto; ?>" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group">
                                    <label>No. de plano</label>
                                    <input class="form-control" type="text" name="clPlano" value="<?php echo  $row->clPlano; ?>" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group">
                                    <label>Numero de reporte</label>
                                    <input class="form-control" type="text" name="clNumReporte" value="<?php echo  $row->clNumReporte; ?>" required>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="ex3">Lugar</label>
                                <input class="form-control" type="text" name="deLugar" value="<?php echo  $row->deLugar; ?>" required>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group">
                                    <label>Fecha</label>
                                    <input class="form-control" type="date" name="feTecnico" value="<?php echo  $row->feTecnico; ?>" required>
                                </div>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="ex3">Código utilizado</label>
                                <input class="form-control" type="text" name="clCodigo" value="<?php echo  $row->clCodigo; ?>" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="ex3">Material</label>
                                <input class="form-control" type="text" name="deMaterial" value="<?php echo  $row->deMaterial; ?>" required>
                            </div>
                        </div><!--form-row-->
                        <div class="encabezado" align="center">
                            <table width="970" border="3">
                                <tr>
                                    <td align="center">REGISTRO FOTOGRAFICO</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td><table width="970" border="0">                                   
                                            <tr>
                                                <td width="470" height="300"><input id="file" type="file" name="deImagen1">
	                                            <div id="preview"></div>
                                                </td>
                                                <td width="470" height="300"><input  id="afile" type="file" name="deImagen2">
	                                            <div id="apreview"></div>
                                                </td>
                                            </tr>
                                            <tr>
	                                            <td align="center"><input size="50" placeholder="Descripcion" name="deDescripcion1" class="sinborde"></td>
	                                            <td align="center"><input size="50" placeholder="Descripcion" name="deDescripcion2" class="sinborde"></td>
                                            </tr>
                                            <tr>
                                                <td width="470" height="300"><input id="bfile" type="file" name="deImagen3">
	                                            <div id="bpreview">
	                                            </div></td>
                                                <td width="470" height="300"><input id="cfile" type="file" name="deImagen4">
	                                            <div id="cpreview">
	                                            </div></td>
                                            </tr>
                                            <tr>
	                                            <td align="center"><input size="50" placeholder="Descripcion" name="deDescripcion3" class="sinborde"></td>
	                                            <td align="center"><input size="50" placeholder="Descripcion" name="deDescripcion4" class="sinborde"></td>
                                            </tr>
                                    </td></table>
                                </tr>
                            </table>
                        </div><!--DIV encabezado-->
                        <fieldset>
                            <legend align="center">FIRMAS</legend>
                            <div class="form-row">
                                <div class="col-12 col-sm-4">
                                    <div class="form-group">                                   
                                        <input class="form-control" type="text" name="deFirma1" value="<?php echo  $row->deFirma1; ?>" disabled>
                                        <br>
                                        <label>Nombre de la empresa</label>
                                        <textarea class="form-control" type="text" name="deEmpresa1" style="resize:none;" rows="3" disabled><?php echo  $row->deEmpresa1; ?></textarea>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group">                                   
                                        <input class="form-control" type="text" name="deFirma2" value="<?php echo  $row->deFirma2; ?>" disabled>
                                        <br>
                                        <label>Nombre de la empresa</label>
                                        <textarea class="form-control" type="text" name="deEmpresa2" style="resize:none;" rows="3" disabled><?php echo  $row->deEmpresa2;?></textarea>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group">                                    
                                        <input class="form-control" type="text" name="deFirma3"value="<?php echo  $row->deFirma3; ?>" disabled>
                                        <br>
                                        <label>Nombre de la empresa</label>
                                        <textarea class="form-control" type="text" name="deEmpresa3" style="resize:none;" rows="3" disabled><?php echo  $row->deEmpresa3; ?></textarea>
                                    </div>
                                </div>
                            </div><!--form-row-->
                        </fieldset>
                        <div class="form-row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <input type="submit" value="Finalizar" class="btn alazea-btn mt-15" onclick=this.form.action="validarRegistroFotUl.php">          
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <input type="submit" value="Agregar otro registro" class="btn alazea-btn mt-15" onclick=this.form.action="formUltrasonido.php">
                                </div>
                            </div>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Modal Area Start ##### -->
    <div class="modal fade" id="seguro" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Advertencia</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Estas seguro que has terminado?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" >Si</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- ##### Modal Area end ##### -->

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
                                <p><span>Direccion: </span>Calle 33-A por 60 No.75 Colonia Justo sierra, Cd. del Carmen Campeche CP. 24110</p>
                                <p><span>Telefono: </span> 938- 197- 8820</p>
                                <p><span>Email: </span> info. especialista@aicosc.com</p>
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
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <script src="js/imgParticulas.js"></script>
</body>
</html>