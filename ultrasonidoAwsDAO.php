<?php


require_once 'conexion_mvc.php';
interface IEntidad2{
    public function insertar($x); 
    public function buscar($x); 
    public function modificar(); 
    public function eliminar($x);    
}//interface

class UtAws implements IEntidad2{
    private  $db;
    public function __construct() {
        $this->db=ConexionDB::getConexion();
        if($this->db === false){
            //echo 'No se conecto';
        }else {
            //echo "Se conecto a base de datos<br>";                      
        }
    }//__construct

    public function insertar($x) {       
    }

    public function buscar($x) {       
    }

    public function modificar() {        
    }

    public function eliminar($x) {        
    }

    public function __destruct() {
        //echo "cerrando bd";
        $this->db = null;
    }//__destruct

}