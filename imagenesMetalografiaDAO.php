<?php


require_once 'conexion_mvc.php';
interface IEntidad2{
    public function insertar($x); 
    public function buscar($x); 
    public function modificar($x, $y); 
    public function eliminar($x);    
}//interface

class Imagen implements IEntidad2{
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
		$sql="INSERT INTO tsimagenes ($k) values ($v)";
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
        $sentencia = "SELECT * FROM tsimagenes WHERE id = :id";
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
    public function modificar($clNumReporte, $arreglo) {
        $sql= "UPDATE tsimagenes SET ";
        //coonstruccion de la cadena sql como UPDATE
        foreach($arreglo as $key => $value){
            $sql .= $key . "='" .$value."'".",";     
		}
        //rtrim quita la ultima coma
        $sql2 = rtrim($sql,',');
        $sql2 .= "WHERE clNumReporte = '";
        $sql2 .= $clNumReporte."'";
		//ECHO $sql2;
        try{
            $stmt = $this->db->prepare($sql2);
            $stmt->execute();
            if($stmt->rowCount()==1){
               
            return true;
                return true;
            }else{
                return FALSE;     
			}

        }catch (PDOException $e){
            echo $e->getMessage();  
        }
    }

    public function modificarClave($id, $arreglo) {
        $sql= "UPDATE tsimagenes SET ";
        //coonstruccion de la cadena sql como UPDATE
        foreach($arreglo as $key => $value){
            $sql .= $key . "='" .$value."'".",";     
		}
        //rtrim quita la ultima coma
        $sql2 = rtrim($sql,',');
        $sql2 .= "WHERE id = '";
        $sql2 .= $id."'";
		//ECHO $sql2;
        try{
            $stmt = $this->db->prepare($sql2);
            $stmt->execute();
            if($stmt->rowCount()==1){
               
            return true;
                return true;
            }else{
                return FALSE;     
			}

        }catch (PDOException $e){
            echo $e->getMessage();  
        }
    }
    public function eliminar($x) {        
    }

    public function __destruct() {
        //echo "cerrando bd";
        $this->db = null;
    }//__destruct
}