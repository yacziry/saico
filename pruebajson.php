<?php


require_once 'conexion_mvc.php';
interface IEntidadN{
    public function insertar($x); 
    public function buscar($x); 
    public function modificar(); 
    public function eliminar($x);    
}//interface
class Normas implements IEntidadN{
    private  $db;
    public function __construct() {
        $this->db=ConexionDB::getConexion();
        if($this->db === false){
            //echo 'No se conecto';
        }else {
            //echo "Se conecto a base de datos<br>";                      
        }
    }//__construct

    //buscar catalogo clientes
    public function buscarNormas() {   
        $sentencia = "SELECT * FROM canorma";
        try{
            $stm = $this->db->prepare ($sentencia);
            //$stm->bindValue(':deUsuario', $deUsuario);
            $stm->execute();
            $registros = $stm->fetchAll(PDO::FETCH_OBJ);

            return $registros;

        }catch(Exception $e){
            echo "$e->getMessage()";
        }
	}
	//funcion que devuelve las normas
    public function buscarNormas($norma) {   
        $sentencia = "SELECT * FROM canorma where norma = :norma";
        try{
            $stm = $this->db->prepare ($sentencia);
            $stm->bindValue(':norma', $norma);
            $stm->execute();
            $registros = $stm->fetchAll(PDO::FETCH_OBJ);

            return $registros;

        }catch(Exception $e){
            echo "$e->getMessage()";
        }
	}
    //funcion que obtyiene clCliente y devuelve deCliente(prueba)
    public function buscar($x){
        
	}
    
    public function insertar($x){
    
	}
    public function modificar(){
    
	}
    public function eliminar($x){
    
	}

    public function __destruct() {
        //echo "cerrando bd";
        $this->db = null;
    }//__destruct
}
$x = new Normas();
$a = $x->buscarNormaSelected();
echo json_encode($a);
