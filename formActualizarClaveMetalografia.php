<?php
//Desactivar toda las notificaciónes del PHP xd
//error_reporting(0);
ini_set("session.cookie_lifetime","14400");
ini_set("session.gc_maxlifetime","14400");
// Comienzo de la sesión
session_start();

if(isset($_SESSION['tecnico'])){
    $tec = $_SESSION['tecnico'];
    $clave = $_SESSION['clave'];
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
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Tecnicos</title>

    <!-- Favicon -->
    <link rel="icon" href="">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    

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
                                                    <li><a href="formdureza.php">Dureza</a></li>
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
            <h2>REPORTE DE AN&Aacute;LISIS METALOGR&Aacute;FICO</h2>
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
                    <?php
                    require 'metalografiaDAO.php';
                        $m = new Metalografia();
		                //$forReportes = $l->buscarReporte("tt");
                        $forReportes = $m->buscarClave($clave);
                        foreach ($forReportes as $row){}
		                require 'clientesDAO.php';
                        $cl = new Cliente();
                        $cliente = $cl->buscar($row->cacliente_clCliente);
		                foreach ($forReportes as $row){
                    ?>                    
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="ex3" >Cliente</label>                        
                                     <input class="form-control" type="text" name="deCliente" value="<?php echo  $cliente; ?>" required>  
                                     <input class="form-control" type="hidden" name="id" value="<?php echo $row->id; ?>">
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
                                    <input class="form-control" type="text" name="deProyecto" value='<?php echo $row->deProyecto; ?>' required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="ex3">Orden de trabajo</label>
                                    <input class="form-control" type="text" name="clOrdenTrabajo" value="<?php echo  $row->clOrdenTrabajo; ?>" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="ex3">Folio</label>
                                    <input class="form-control" type="text" name="clFolio" value="<?php echo  $row->clFolio; ?>" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group">
                                    <label>No. de isometrico y/o plano</label>
                                    <input class="form-control" type="text" name="deIsometrico" value='<?php echo  $row->deIsometrico; ?>' required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group">
                                    <label>Numero de reporte</label>
                                    <input class="form-control" type="text" name="clNumReporte" value="<?php echo  $row->clNumReporte; ?>" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group">
                                    <label>Fecha</label>
                                    <input class="form-control" type="date" name="feTecnico" value="<?php echo  $row->feTecnico; ?>" required>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ex3">Lugar</label>
                                <input class="form-control" type="text" name="deLugar" value='<?php echo  $row->deLugar; ?>' required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ex3">Partida</label>
                                <input class="form-control" type="text" name="clPartida" value="<?php echo  $row->clPartida; ?>" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="ex3">Nombre de la pieza/trazabilidad</label>
                                <input class="form-control" type="text" name="deTrazabilidad" value='<?php echo  $row->deTrazabilidad; ?>' required>
                            </div>
                            <?php
                                $x = $row->deTubEstruc;
                                if($x == "Accesorio"){                                              
                            ?>
                            <div class="form-group col-md-4">
                                <label for="ex3">Accesorio
                                <input class="form-control" type="radio" name="deTubEstruc" value="Accesorio" checked required></label>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="ex3">Tuberia
                                <input class="form-control" type="radio" name="deTubEstruc"  value="Tuberia" required></label>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="ex3">Estructural
                                <input class="form-control" type="radio" name="deTubEstruc" value="Estructural" required></label>
                            </div>
                            <?php
                                }elseif($x == "Tuberia"){
                            ?>
                            <div class="form-group col-md-4">
                                <label for="ex3">Accesorio
                                <input class="form-control" type="radio" name="deTubEstruc" value="Accesorio" required></label>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="ex3">Tuberia
                                <input class="form-control" type="radio" name="deTubEstruc"  value="Tuberia" checked required></label>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="ex3">Estructural
                                <input class="form-control" type="radio" name="deTubEstruc" value="Estructural" required></label>
                            </div>
                            <?php
				                }elseif($x == "Estructural"){
                            ?>
                            <div class="form-group col-md-4">
                                <label for="ex3">Accesorio
                                <input class="form-control" type="radio" name="deTubEstruc" value="Accesorio" required></label>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="ex3">Tuberia
                                <input class="form-control" type="radio" name="deTubEstruc"  value="Tuberia" required></label>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="ex3">Estructural
                                <input class="form-control" type="radio" name="deTubEstruc" value="Estructural" checked required></label>
                            </div>
                            <?php
				                }
                            ?>
                            <div class="form-group col-md-12">
                                <label for="comment">Descripcion del trabajo y notas:</label>
                                <textarea class="form-control" rows="5" name="deDescripcion" style="resize:none;" required><?php echo  $row->deDescripcion; ?></textarea>
                            </div>
                            <div class="table-responsive" align="center">
                                <table class="table table-bordered" border="1">
                                    <thead class="fields">
                                        <tr>
                                            <td colspan="3">Numero de lija para el  desbaste</td>
                                            <td colspan="2">Material para pulido</td>
                                            <td colspan="2">Datos de ataque quimico</td>
                                            <td>Fases presentes</td>
                                            <td>Especificacion aproximada del material</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input class="form-control" type="text" maxlength="4" name="numLija1" size="5" value="240" required></td>
                                            <td><input class="form-control" type="text" maxlength="4" name="numLija2" size="5" value="320" required></td>
                                            <td><input class="form-control" type="text" maxlength="4" name="numLija3" size="5" value="400" required></td>
                                            <td class="fields">Pa&ntilde;o</td>
                                            <td><input class="form-control" type="text" name="dePano" maxlength="12" value='<?php echo  $row->dePano; ?>' required></td>
                                            <td class="fields">Reactivo</td>
                                            <td><input class="form-control" type="text" name="deReactivo" maxlength="12" value='<?php echo  $row->deReactivo; ?>' required></td>
                                            <td rowspan="2"><textarea class="form-control" style="resize:none;" name="deFases" rows= "3" required><?php echo  $row->deFases; ?></textarea></td>
                                            <td rowspan="2"><textarea class="form-control" style="resize:none;" name="deEspecificacion" rows= "3" required><?php echo  $row->deEspecificacion; ?></textarea></td>
                                        <tr>
                                            <td><input class="form-control" type="text" maxlength="4" name="numLija4" size="5" value="600" required></td>
                                            <td><input class="form-control" type="text" maxlength="4" name="numLija5" size="5" value="1000" required></td>
                                            <td><input class="form-control" type="text" maxlength="4" name="numLija6" size="5" value="1500" required></td>
                                            <td class="fields">Abrasivo</td>
                                            <td><input class="form-control" type="text" name="deAbrasivo" maxlength="12" value="<?php echo  $row->deAbrasivo; ?>" required></td>
                                            <td class="fields">Tiempo</td>
                                            <td><input class="form-control" type="text" name="deTiempo" maxlength="12" value="<?php echo  $row->deTiempo; ?>" required></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                <p align="center">REGISTRO FOTOGRAFICO</p>
                                <br>
                                <div class="alert alert-warning alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong>&iexcl;Advertencia!</strong> El peso de la imagen afectar&aacute; en el rendimiento.
                                </div>
                                <table id="fotoMetalografia" align="center">               
                                    <tr>
                                        <td width="264" height="264" style="border-width: 0px;">
	                                    <input align="center" id="file" type="file" name="deImagen">
	                                    <div id="preview"><img src="img/metalografia/<?php echo  $row->deImagen; ?>"></div>
                                        <td width="21" ></td>
                                        <td width="264" style="border-width: 0px;">
	                                    <div id="">
	                                    <table>
	                                        <td>
                                            OBSERVACIONES:
	                                        <textarea cols="63" rows="13" class="form-control" style="resize:none;" name="deObservaciones"><?php echo  $row->deObservaciones; ?></textarea></div></td>
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
	                                    <div id="imag" height="264" align="center">
	                                    <img id="ver" ><img src="<?php echo  $row->deGrano; ?>"></di>
	                                    </td>
                                        <td></td>
                                        <td style="border-width: 0px;"><input id="afile" type="file" name="deImagen2">
	                                    <div id="apreview"><img src="img/metalografia/<?php echo  $row->deImagen2; ?>"></div></td>
                                    </tr>
                                    <tr>
                                        <td id="imag">TAMA&Ntilde;O DE GRANO
                                            <select onchange="document.getElementById('ver').src = this.value" name="deGrano">
	                                            <option>--</option>
                                                <option align="center" value="img/granos/65.jpg">6.5</option>
                                                <option value="img/granos/70.jpg">7</option>
                                                <option value="img/granos/75.jpg">7.5</option>
                                                <option value="img/granos/80.jpg">8</option>
                                                <option value="img/granos/85.jpg">8.5</option>
	                                            <option value="img/granos/90.jpg">9</option>
	                                            <option value="img/granos/95.jpg">9.5</option>
	                                            <option value="img/granos/100.jpg">10</option>
                                            </select>COMPARATIVA ASTM E-112
                                        </td>                 
                                        <td></td>
                                        <td id="imag">FOTOGRAF&Iacute;A ESPEC&Iacute;FICA DONDE SE MUESTRA LA ZONA A LA CUAL SE LE<br> REALIZ&Oacute; LA METALOGRAFIA</td>
                                    </tr>
                                </table>
                                <br>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                                </div>
                                <br>
                            </div><!--responsive-->
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="ex3">Nombre de quien elabor&oacute;</label>
                                    <input class="form-control" type="text" name="deElabora"  value="<?php echo  $row->deElabora; ?>" required><br>
                                    <input class="form-control" type="text" name="deAprobacion" value="Asesor&iacute;a e Inspecci&oacute;n en Construcci&oacute;n Costa Fuera, S.C" disabled>
                                    <!--textarea id="byetext" class="form-control" name="deAprobacion" style="max-width:500px; resize:none;" rows="3">Asesoría e Inspección en Construcción Costa Fuera, S.C</textarea disabled-->
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="ex3">Nombre de quien aprob&oacute;</label>
                                    <input class="form-control" type="text" name="deAprueba" value="<?php echo  $row->deAprueba; ?>" required><br>
                                    <input class="form-control" type="text" value="Asesor&iacute;a e Inspecci&oacute;n en Construcci&oacute;n Costa Fuera, S.C" disabled>
                                    <!--textarea id="byetext" class="form-control" name="empresa1" style="max-width:500px; resize:none;" rows="3">Asesoría e Inspección en Construcción Costa Fuera, S.C</textarea-->
                                </div>                                    
                            </div>
                            <?php
                            }
                            ?>
                            <br>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <input type="submit" value="Actualizar" class="btn alazea-btn mt-15" onclick=this.form.action="validarActualizarClaveMetalografia.php">
                                </div>
                            </div>
                            <br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### modal Area star ##### -->
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
                    <button type="button" class="btn btn-primary">Si</button>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### modal Area End ##### -->

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
                                <p><span>Email: </span> especialista@aicosc.com</p>
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

<script src="js/imgMetalografia.js"></script>