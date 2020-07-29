<?php
ini_set("session.cookie_lifetime", "14400");
ini_set("session.gc_maxlifetime", "14400");
session_start();
/* 
 valida registro fotografico 
 */
include_once 'imgBocaTuboDAO.php';
include_once 'bocaTuboDAO.php';
if (isset($_SESSION['tecnico']) && isset($_POST)) {

    $reporteS = $_SESSION['reporteS'];
    $usuario = $_SESSION['tecnico'];
    $fecha = date("Y-m-d H-i-s");


    $ruta = "img/bocaTubo/";
    $size = $_FILES['deImagen1']['size'];
    if ($size > 350000) {
        exit("El archivo es muy grande");
    } else {
        //mueve las imagenes a la carpeta asignada
        if (move_uploaded_file($_FILES['deImagen1']['tmp_name'], $ruta . $_FILES['deImagen1']['name']) && move_uploaded_file($_FILES['deImagen2']['tmp_name'], $ruta . $_FILES['deImagen2']['name']) && move_uploaded_file($_FILES['deImagen3']['tmp_name'], $ruta . $_FILES['deImagen3']['name']) && move_uploaded_file($_FILES['deImagen4']['tmp_name'], $ruta . $_FILES['deImagen4']['name'])) {
            $extension = "." . pathinfo($ruta . $_FILES['deImagen1']['name'], PATHINFO_EXTENSION);
            $extension2 = "." . pathinfo($ruta . $_FILES['deImagen2']['name'], PATHINFO_EXTENSION);
            $extension3 = "." . pathinfo($ruta . $_FILES['deImagen3']['name'], PATHINFO_EXTENSION);
            $extension4 = "." . pathinfo($ruta . $_FILES['deImagen4']['name'], PATHINFO_EXTENSION);
            if (rename($ruta . $_FILES['deImagen1']['name'], $ruta . $fecha . $extension)) {
                rename($ruta . $_FILES['deImagen2']['name'], $ruta . $fecha . "-(02)" . $extension2);
                rename($ruta . $_FILES['deImagen3']['name'], $ruta . $fecha . "-(03)" . $extension3);
                rename($ruta . $_FILES['deImagen4']['name'], $ruta . $fecha . "-(04)" . $extension4);
            } else {
                exit("No se cambiaron los nombres de los archivos");
            }
            $imagen = new imgBocaDeTubo();
            $bdt = new bocaDeTubo();
            $id = $bdt->buscarID();
            $arreglo = array(
                'id' => $id, 
                'clNumReporte' => $reporteS, 
                'deImagen1' => $fecha . $extension, 
                'deImagen2' => $fecha . "-(02)" . $extension2, 
                'deImagen3' => $fecha . "-(03)" . $extension3, 
                'deImagen4' => $fecha . "-(04)" . $extension4,
                'deDescripcion1' => $_POST['deDescripcion1'], 
                'deDescripcion2' => $_POST['deDescripcion2'], 
                'deDescripcion3' => $_POST['deDescripcion3'], 
                'deDescripcion4' => $_POST['deDescripcion4'], 
                'feRegistro' => $fecha
            );
            $imagen->insertar($arreglo);
            header("Location: formBocaTuboMostrar.php");
        } else {
            echo "error, no se movio";
        }
        //SINO HUBU NINGUN ERROR
    }
    //header("formMostrarUltrasonidoNR.php");
}//ultimoIF