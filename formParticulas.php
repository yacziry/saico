<?php
//Desactivar toda las notificaciones del PHP xd
error_reporting(0);
ini_set("session.cookie_lifetime","14400");
ini_set("session.gc_maxlifetime","14400");
// Comienzo de la sesion
session_start();

if(isset($_SESSION['tecnico'])){
    $tec = $_SESSION['tecnico'];
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
	<script src="js/juntasParticulas.js"></script>
    <script src="js/ultimoReportePa.js"></script>
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
                    </nav>                   
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/4.jpg);">
            <h2>REPORTE DE PART&Iacute;CULAS MAGN&Eacute;TICAS</h2>
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
                    <form action="validarParticulas.php" method="POST">
                        <div class="form-row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Cliente</label>
                                    <select class="form-control" name="deCliente" id="cliente" required>
	                                    <option value="">Selecciona una opcion</option>
                                            <?php
                                                require 'clientesDAO.php';
                                                $c = new Cliente();
                                                $registros = $c->buscarClientes();
		                                        foreach ($registros as $row){
                                                    echo '<option value="'.$row->clCliente.'">'.$row->deCliente.'</option>';
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
                            <div class="col-12 col-sm-4">
                                <div class="form-group">
                                    <label>Folio</label>
                                    <input class="form-control" type="text" name="clFolio" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group">
                                    <label>Numero de reporte</label>
                                    <input class="form-control" type="text" name="clNumReporte" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group">
                                    <label>Fecha</label>
                                    <input class="form-control" type="date" name="feTecnico" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-8">
                                <div class="form-group">
                                    <label>Lugar</label>
                                    <input class="form-control" type="text" name="deLugar" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group">
                                    <label>Plano</label>
                                    <input class="form-control" type="text" name="clPlano" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12">
                                <div class="form-group">
                                    <label>Descripcion</label>
                                    <input class="form-control" type="text" name="deDescripcion" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Codigo</label>
                                    <input class="form-control" type="text" name="clCod_Inspeccion" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Procedimiento</label>
                                    <input class="form-control" type="text" value="PRO-PINS-05" disabled>
                                </div>
                            </div>
                        </div><!--form-row-->
                        <div class="table-responsive" align="center">
                            <table border="1">
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
                                    <td><input type="text" name="deMarca1" class="borde" size="10" maxlength="13" required></td>
                                    <td><input type="text" name="deModelo1" class="borde" size="10" maxlength="13" required></td>
                                    <td><input type="text" name="deLote1" class="borde" size="10" maxlength="13" required></td>
                                    <td><input type="text" name="deTipo1" class="borde" size="10" maxlength="13" required></td>
                                    <td><input type="text" name="deColor1" class="borde" size="10" maxlength="13" required></td>
                                    <td><input type="text" name="deAplicacion1" class="borde" size="10" maxlength="13" required></td>
                                </tr>
                                <tr>
                                    <td class="fieldd">CONTRASTANTE</td>
                                    <td><input type="text" name="deMarca2" class="borde" size="10" maxlength="13" required></td>
                                    <td><input type="text" name="deModelo2" class="borde" size="10" maxlength="13" required></td>
                                    <td><input type="text" name="deLote2" class="borde" size="10" maxlength="13" required></td>
                                    <td><input type="text" name="deTipo2" class="borde" size="10" maxlength="13" value="NA" disabled></td>
                                    <td><input type="text" name="deColor2" class="borde" size="10" maxlength="13" required></td>
                                    <td><input type="text" name="deAplicacion2" class="borde" size="10" maxlength="13" required></td>
                                </tr>
                                <tr>
                                    <td class="fieldd">EQUIPO</td>
                                    <td class="fields">MARCA</td>
                                    <td class="fields">MODELO</td>
                                    <td class="fields">NS</td>
                                    <td class="fields">CORRIENTE <b>AC</b></td>
                                    <td class="fields">CORRIENTE <b>DC</b></td>
                                </tr>
                                <tr>
                                    <td class="fieldd">YUGO</td>
                                    <td><input type="text" name="deMarca3" class="borde" size="10" required></td>
                                    <td><input type="text" name="deModelo3" class="borde" size="10" required></td>
                                    <td><input type="text" name="deNs" class="borde" size="10" required></td>
                                    <td id="ac" align="center"><input type="radio" name="deCorriente" class="borde" size="10" value="ac" required></td>
                                    <td id="dc" align="center"><input type="radio" name="deCorriente" class="borde" size="10" value="dc" required></td>
                                 </tr>
                            </table>                               
                        </div><!--responsive-->
                        <br>
                        <div class="form-row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Tipo de material</label>
                                    <input class="form-control" type="text" name="deTipoMaterial" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Componente</label>
                                    <input class="form-control" type="text" name="deComponente" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Condicion superficial</label>
                                    <input class="form-control" type="text" name="deCondicion_Sup" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Temperatura</label>
                                    <input class="form-control" type="text" name="deTemperatura" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group">
                                    <label>Espesor</label>
                                    <input class="form-control" type="text" name="deEspesor" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group">
                                    <label>Tipo de luz</label>
                                    <input class="form-control" type="text" name="deTipo_Luz" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group">
                                    <label>Intensidad</label>
                                    <input class="form-control" type="text" name="deIntensidad" required>
                                </div>
                            </div>                        
                        </div><!--form-row-->
                        <!--div align="center">
                            <input type="button" class="btn btn-secondary" value="Agregar juntas">
                        </div>
                        <br-->
                        <!--div class="table-responsive" align="center">
                            <table border="1" align="center" id="resultado">
                                <thead>
                                    <tr class="fields">
                                        <td colspan="5" align="center">RESULTADOS</td>
<<<<<<< HEAD
                                    </tr>                                    
=======
                                    </tr>
                                    <tr class="fields">
                                        <td colspan="5">PIEZA: <input type="text" id="piezaManual" name="pieza" class="borde" size="110" required></td>
                                    </tr>
>>>>>>> f366292e7f394ed27fc1c67f44fc8f226b12f1d4
                                    <tr class="fields">
                                        <th>JUNTA</th>
                                        <th>LONGITUD EN m</th>
                                        <th>DISCONTINUIDAD</th>
                                        <th>EVALUACION</th>
                                        <th>OBSERVACIONES</th>                     
                                    </tr>
                                </thead>
                                <tbody id="tablaReportes">
                                    <td colspan="5"><input type="text" id="pieza" name="pieza" class="borde" placeholder="pieza" size="110" required></td>
                                </tbody>
                            </table>
                        </!--div>
                        <div class="form-row" align="center" id="botonesDim">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <input type="button" value="Insertar fila" id="insertar" class="btn alazea-btn mt-15">          
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
<<<<<<< HEAD
                                    <input type="button" value="Insertar pieza" id="insertarPieza" class="btn alazea-btn mt-15">
=======
                                    <input type="button" value="Insertar fila combinada" id="combinar" class="btn alazea-btn mt-15">
>>>>>>> f366292e7f394ed27fc1c67f44fc8f226b12f1d4
                                </div>
                            </div>
                        </div><!--form-row-->
                        <br><br><br><br>
                        <fieldset>
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
                                        <textarea class="form-control" type="text" name="deEmpresa2" style="resize:none;" rows="3">Coordinador de control de calidad Propetrol</textarea>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group">                                    
                                        <input class="form-control" type="text" name="deFirma3" placeholder="Nombre..." required>
                                        <br>
                                        <label>Nombre de la empresa</label>
                                        <textarea class="form-control" type="text" name="deEmpresa3" style="resize:none;" rows="3">Ingeniero de campo Propetrol</textarea>
                                    </div>
                                </div>
                            </div><!--form-row-->
                        </fieldset>
                        <div class="form-row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <input type="submit" value="Registrar juntas" class="btn alazea-btn mt-15" id="" onclick=this.form.action="validarPartFinalizar.php">          
                                </div>
                            </div>
                            <!--div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <input type="submit" value="Hacer otro registro" id="prueba" class="btn alazea-btn mt-15" onclick=this.form.action="validarParticulas.php">
                                </div>
                            </!--div>
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
</body>
</html>