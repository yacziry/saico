<?php
//Desactivar toda las notificaci�nes del PHP xd
//error_reporting(0);
ini_set("session.cookie_lifetime","14400");
ini_set("session.gc_maxlifetime","14400");
// Comienzo de la sesi�n
session_start();

if(isset($_SESSION['tecnico'])){
    $tec = $_SESSION['tecnico'];
    $clNumReporte = $_SESSION['clNumReporte'];
     
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
	<script src="js/normaReferencia.js"></script>
    <script src="js/ultimoReporteAq.js"></script>
    
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
                                            <li><a href="actualizarClave.php">Actualizar con clave</a></li> 
                                        </ul>
                                    </li>
                                </ul>                                  
                            </div>
                            <!-- Navbar End -->
                        </div><!--menu-->
                    </nav><!--nav-->
                </div><!--container-->
            </div><!--nav container-->
        </div><!--menu-->
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/4.jpg);">
            <h2>REPORTE DE AN&Aacute;LISIS QU&Iacute;MICO</h2>
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
						require 'analisisQuimicoDAO.php';
                        $c = new AnalisisQuimico();
                        $forReportes = $c->buscarReporte($clNumReporte);
                        foreach ($forReportes as $row){}
		                require 'clientesDAO.php';
                        $cl = new Cliente();
                        $cliente = $cl->buscar($row->cacliente_clCliente);
		                foreach ($forReportes as $row){
                    ?>
                    <label for="ex3" >Clave para modificar</label>
                    <input class="form-control" type="text" value="<?php echo $row->id; ?>" disabled>
                    <br>
                    <form action="" method="POST" enctype="multipart/form-data" name="f">                        
                        <div class="form-row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="ex3" >Cliente</label>
                                    <input class="form-control" type="text" name="deCliente" value="<?php echo $cliente ?>" required>                                    
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
                                    <input class="form-control" type="text" name="deIsometrico" value="<?php echo  $row->deIsometrico; ?>" required>
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
                            <div class="form-group col-md-12">
                                <label for="ex3">Lugar</label>
                                <input class="form-control" type="text" name="deLugar" value="<?php echo  $row->deLugar; ?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ex3">Partida</label>
                                <input class="form-control" type="text" name="clPartida" value="<?php echo  $row->clPartida; ?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ex3">Nombre de la pieza/trazabilidad</label>
                                <input class="form-control" type="text" name="deTrazabilidad" value="<?php echo  $row->deTrazabilidad; ?>" required>
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
                                <label for="comment">Descripcion de la pieza:</label>
                                <textarea class="form-control" rows="5" name="deDescripcion" style="resize:none;" required><?php echo  $row->deDescripcion; ?></textarea>
                            </div>                            
                            <table class="table table-bordered" borde="1" align="center">
                                <tr>
                                    <td colspan="6" class="fields" height="35">DATOS DEL EQUIPO</td>
                                </tr>
                                <tr>
                                    <td class="fields">MARCA</td>
                                    <td><input class="form-control" type="text" name="deMarca" value="<?php echo  $row->deMarca; ?>"></td>
                                    <td class="fields">MODELO</td>
                                    <td><input class="form-control" type="text" name="deModelo" value="<?php echo  $row->deModelo; ?>"></td>
                                    <td class="fields">NO.SERIE</td>
                                    <td><input class="form-control" type="text" name="deSerie" value="<?php echo  $row->deSerie; ?>"></td>
                                </tr>
                            </table>
                            <br>
                            <div class="form-group col-md-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" value="COMPOSICI&Oacute;N QU&Iacute;MICA  DE LA PIEZA" id="sombreado" disabled>
                                </div>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="7" class="sombreado">PROMEDIO POR ELEMENTO QU&Iacute;MICO DE LA COMPOSICI&Oacute;N QU&Iacute;MICA DE LA PIEZA</td>
                                     </tr>
                                </thead>
                                     <tr class="fields">
                                        <td>C</td>
                                        <td>Mn</td>
                                        <td>P</td>
                                        <td>S</td>
                                        <td>Si</td>
                                        <td>Cu</td>
                                        <td>Ni</td>
                                     </tr>
                                     <tr>
                                        <td><input class="form-control" type="text" name="c" value="<?php echo  $row->c; ?>"></td>
                                        <td><input class="form-control" type="text" name="mn" value="<?php echo  $row->mn; ?>"></td>
                                        <td><input class="form-control" type="text" name="p" value="<?php echo  $row->p; ?>"></td>
                                        <td><input class="form-control" type="text" name="s" value="<?php echo  $row->s; ?>"></td>
                                        <td><input class="form-control" type="text" name="si" value="<?php echo  $row->si; ?>"></td>
                                        <td><input class="form-control" type="text" name="cu" value="<?php echo  $row->cu; ?>"></td>
                                        <td><input class="form-control" type="text" name="ni" value="<?php echo  $row->ni; ?>"></td>
                                     </tr>
                                     <tr class="fields">
                                        <td>Cr</td>
                                        <td>Mo</td>
                                        <td>V</td>
                                        <td>Nb</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                     </tr>
                                     <tr>
                                        <td><input class="form-control" type="text" name="cr" value="<?php echo  $row->cr; ?>"></td>
                                        <td><input class="form-control" type="text" name="mo" value="<?php echo  $row->mo; ?>"></td>
                                        <td><input class="form-control" type="text" name="v" value="<?php echo  $row->v; ?>"></td>
                                        <td><input class="form-control" type="text" name="nb" value="<?php echo  $row->nb; ?>"></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                     </tr>
                            </table>
                            <div class="form-group col-md-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" value="VALORES DEL MUESTREO DE LA PIEZA INSPECCIONADA" id="sombreado" disabled>
                                </div>
                            </div>
                        </div>
                        <div align="center">
                            <br>
	                        <input id="file" type="file" name="deImagen1">
	                        <div id="imgAnalisis" align="center"><img src="img/analisisQuimico/<?php echo  $row->deImagen1; ?>"></div>                                 
                        </div>  
                        <br>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="comment">Observaciones:</label>
                                <textarea class="form-control" rows="5" name="deObservaciones" style="resize:none;" required><?php echo  $row->deObservaciones; ?></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" value="VALORES DE COMPOSICI&Oacute;N QU&Iacute;MICA" id="sombreado" disabled>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="ex3">Especificaci&oacute;n aproximada:</label>
                                <input class="form-control" type="text" value="<?php echo  $row->canorma_norma; ?>" name="clNorma" id="clNorma">
                            </div>
                            <br>
                        </div>
                        <div class="alert alert-danger" align="center">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>&iexclIMPORTANTE!</strong><div id="nota" align="center"></div>
                        </div>
                        <br>
                        <div class="form-row">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="7" class="sombreado">COMPOSICI&Oacute;N QU&Iacute;MICA DE ACUERDO A LA NORMA DE REFERENCIA</td>
                                     </tr>
                                </thead>
                                    <tr class="fields">
                                        <td>C</td>
                                        <td>Mn</td>
                                        <td>P</td>
                                        <td>S</td>
                                        <td>Si</td>
                                        <td>Cu</td>
                                        <td>Ni</td>
                                    </tr>
                                    <tr>
                                        <td id="vlPromedioC"></td>
                                        <td id="vlPromedioMn"></td>
                                        <td id="vlPromedioP"></td>
                                        <td id="vlPromedioS"></td>
                                        <td id="vlPromedioSi"></td>
                                        <td id="vlPromedioCu"></td>
                                        <td id="vlPromedioNi"></td>
                                    </tr>
                                    <tr class="fields">
                                        <td>Cr</td>
                                        <td>Mo</td>
                                        <td>V</td>
                                        <td>Nb</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td id="vlPromedioCr"></td>
                                        <td id="vlPromedioMo"></td>
                                        <td id="vlPromedioV"></td>
                                        <td id="vlPromedioNb"></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                            </table>
                            <div class="form-group col-md-12">
                                <div class="form-group">
                                <input class="form-control" type="text" value="VISTA GENERAL DEL ELEMENTO" id="sombreado" disabled>
                            </div>
                        </div></div>
                        <div align="center"> 
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                            </div>
                            <br>
	                        <input id="afile" type="file" name="deImagen2">
	                        <div id="imgAnalisis2" align="center"><img src="img/analisisQuimico/<?php echo  $row->deImagen2; ?>"></div></td>
                        </div>
                        <BR>
                        <div class="form-row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="ex3">Aprob&oacute;</label>
                                    <input class="form-control" type="text" name="deElabora" required value="<?php echo  $row->cr; ?>"><br>
                                    <input class="form-control" type="text" name="firma2" value="Asesor&iacute;a e Inspecci&oacute;n en Construcci&oacute;n Costa Fuera, S.C" disabled>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="ex3">Elabor&oacute;</label>
                                    <input class="form-control" type="text" name="deAprueba" value="<?php echo  $row->cr; ?>" required><br>
                                    <input class="form-control" type="text" name="firma2" value="Asesor&iacute;a e Inspecci&oacute;n en Construcci&oacute;n Costa Fuera, S.C" disabled>
                                </div>
                            </div>  
                            <br>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <input type="submit" value="Actualizar" class="btn alazea-btn mt-15" onclick=this.form.action="validarActualizarAnalisisQuimico.php">          
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
    <!-- ##### Modal Area Start ##### -->
    <div class="modal fade" id="agregarModal" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Agregar nueva norma</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form">
                        <div class="form-group">
                            <label>Norma</label>
                            <input type="text" class="form-control" id="norma" placeholder="Escribir aqui" required>
                        </div>
                        <div class="form-group">
                            <label>Dureza Brinell maxima</label>
                            <input type="text" class="form-control" id="deBrinell_Max_modal" placeholder="Escribir aqui" required>
                        </div>
                        <div class="form-group">
                            <label>Tension minima</label>
                            <input type="text" class="form-control" id="deKsi_Min_modal" placeholder="Escribir aqui"/>
                        </div>
                        <div class="form-group">
                            <label>Cedencia</label>
                            <input type="text" class="form-control" id="deCedencia" placeholder="Escribir aqui"/>
                        </div>
                        <div class="form-group">
                            <label>Tension maxima</label>
                            <input type="text" class="form-control" id="deKsi_Max" placeholder="Escribir aqui"/>
                        </div>
                        <div class="form-group">
                            <label>C</label>
                            <input type="text" class="form-control" id="c_modal" placeholder="Escribir aqui"/>
                        </div>
                        <div class="form-group">
                            <label>Mn</label>
                            <input type="text" class="form-control" id="mn" placeholder="Escribir aqui"/>
                        </div>
                        <div class="form-group">
                            <label>P</label>
                            <input type="text" class="form-control" id="p" placeholder="Escribir aqui"/>
                        </div>
                        <div class="form-group">
                            <label>S</label>
                            <input type="text" class="form-control" id="s" placeholder="Escribir aqui"/>
                        </div>
                        <div class="form-group">
                            <label>Si</label>
                            <input type="text" class="form-control" id="si" placeholder="Escribir aqui"/>
                        </div>
                        <div class="form-group">
                            <label>Cu</label>
                            <input type="text" class="form-control" id="cu" placeholder="Escribir aqui"/>
                        </div>
                        <div class="form-group">
                            <label>Ni</label>
                            <input type="text" class="form-control" id="ni" placeholder="Escribir aqui"/>
                        </div>
                        <div class="form-group">
                            <label>Cr</label>
                            <input type="text" class="form-control" id="cr" placeholder="Escribir aqui"/>
                        </div>
                        <div class="form-group">
                            <label>Mo</label>
                            <input type="text" class="form-control" id="mo" placeholder="Escribir aqui"/>
                        </div>
                        <div class="form-group">
                            <label>V</label>
                            <input type="text" class="form-control" id="v" placeholder="Escribir aqui"/>
                        </div>
                        <div class="form-group">
                            <label>Nb</label>
                            <input type="text" class="form-control" id="nb" placeholder="Escribir aqui"/>
                        </div>
                        <div class="form-group">
                            <label>N</label>
                            <input type="text" class="form-control" id="n" placeholder="Escribir aqui"/>
                        </div>
                        <div class="form-group">
                            <label>Notas</label>
                            <input type="text" class="form-control" id="deNotas" placeholder="Escribir aqui"/>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn alazea-btn mt-15" id="enviar" data-dismiss="modal" onclick="">Enviar</button>
                </div>
            </div>
        </div>
    </div>
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
                                <p><span>Direccion: </span>Calle 33-A por 60 No.75 Colonia Justo sierra, Cd. del Carmen Campeche CP. 24110</p>
                                <p><span>Telefono: </span> 938- 197- 8820</p>
                                <p><span>Email: </span> especialista@aicosc.com</p>
                                <p><span>Horario: </span> Lun - Dom: 24 hrs</p>
                            </div>
                        </div>
                    </div>
                </div><!--row-->
            </div><!--container-->
        </div><!--main footer-->
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

<script src="js/imagenAnalisisQuimico.js"></script>