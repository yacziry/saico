<?php


require_once 'conexion_mvc.php';
interface IEntidad2{
    public function insertar($x); 
    public function buscar($x); 
    public function modificar(); 
    public function eliminar($x);    
}//interface

class imgBocaDeTubo implements IEntidad2{
    private  $db;
    public function __construct() {
        $this->db=ConexionDB::getConexion();
        if($this->db === false){
            //echo 'No se conecto';
        }else {
            //echo "Se conecto a base de datos<br>";                      
        }
    }//__construct

    public function insertar($arrayImagen) {
		foreach($arrayImagen as $key => $value){
		    $k[]=$key;
		    $v[]="'".$value."'";
		}
		$k=implode(",",$k);
	    $v=implode(",",$v);
		$sql="INSERT INTO tsimgbocadetubo ($k) values ($v)";
        try{
            $stmt= $this->db->prepare($sql);
            $stmt->execute();
            if($stmt->rowCount()==1){
                return TRUE;
            }else{
                return FALSE;     
			}

        }catch (PDOException $e){
            echo $e->getMessage();  
        }
    }

    //funcion que busca todos los registros insertados por noReporte y id
    public function buscarImagen($id) { 
        $sentencia = "SELECT * FROM tsimgbocadetubo WHERE id = :id";
        try{
            $stm = $this->db->prepare ($sentencia);
            $stm->bindValue(':id', $id);

            $stm->execute();
            $registros = $stm->fetchAll(PDO::FETCH_OBJ);

            return $registros;

        }catch(Exception $e){
            echo $e->getMessage();
        }
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