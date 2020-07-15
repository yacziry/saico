<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of conexion
 *
 *
 */
require_once 'configuracion_mvc.php';
class ConexionDB {
    //conexion con PDO
    private static $conexion;
    public static function getConexion(){
       try{
           $conexion = new PDO("mysql:host=".HOST.";dbname=".DB.";charset=utf8", USER, PASS);
           $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          }
        catch (PDOException $e) {
                //atrapa el error
                echo "Falla al obtener un manejador de BD: ".$e->getMessage() . "\n";
                return FALSE;
        }
        return $conexion;
    }//getConexion
    
    //conexion con MySQLI 
    public static function getConexionMySqli(){
        $conexion = new mysqli(HOST, USER, PASS, DB);
        if (mysqli_connect_errno()){
            return FALSE;
        }else{
            return $conexion;
        }
    }
    
}
