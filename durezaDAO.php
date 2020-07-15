<?php

require_once 'conexion_mvc.php';
interface IEntidadD{
    public function insertar($x); 
    public function buscar($x); 
    public function modificar($x, $y); 
    public function eliminar($x);    
}//interface

class Dureza implements IEntidadD{
    private  $db;
    public function __construct() {
        $this->db=ConexionDB::getConexion();
        if($this->db === false){
            //echo 'No se conecto';
        }else {
            //echo "Se conecto a base de datos<br>";                      
        }
    }//__construct

    //funcion que inserta un array y devuelve un lastid
    public function insertar($arrayDureza) {
        foreach($arrayDureza as $key => $value){
		    $k[]=$key;
		    $v[]="'".$value."'";
		}
		$k=implode(",",$k);
	    $v=implode(",",$v);
		$sql="INSERT INTO tsreportedureza ($k) values ($v)";
        try{
            $stmt= $this->db->prepare($sql);
            $stmt->execute();
            $foranea = $this->db->lastInsertId();
            if($stmt->rowCount()==1){
                return $foranea;
            }else{
                return FALSE;     
			}

        }catch (PDOException $e){
            echo $e->getMessage();  
        }
    }

    //funcion que busca todos los ultimos registros insertados por nr
    public function buscar($clNumReporte) { 
        $sentencia = "SELECT * FROM tsreportedureza WHERE clNumReporte = :clNumReporte ORDER BY id DESC LIMIT 1";
        try{
            $stm = $this->db->prepare ($sentencia);
            $stm->bindValue(':clNumReporte', $clNumReporte);
            $stm->execute();
            $registros = $stm->fetchAll(PDO::FETCH_OBJ);

            return $registros;

        }catch(Exception $e){
            echo $e->getMessage();
        }
    }

    //funcion que busca todos los registros insertados por noReporte
    public function buscarReporte($clNumReporte) { 
        $sentencia = "SELECT * from tsreportedureza WHERE clNumReporte = :clNumReporte";
        try{
            $stm = $this->db->prepare ($sentencia);
            $stm->bindValue(':clNumReporte', $clNumReporte);
            $stm->execute();
            $registros = $stm->fetchAll(PDO::FETCH_OBJ);

            return $registros;

        }catch(Exception $e){
            echo "$e->getMessage()";
        }
    }

    public function modificar($clNumReporte, $arrayDureza) {
        $sql= "UPDATE tsreportedureza SET ";
        //coonstruccion de la cadena sql como UPDATE
        foreach($arrayDureza as $key => $value){
            $sql .= $key . "='" .$value."'".",";     
		}
        //rtrim quita la ultima coma
        $sql2 = rtrim($sql,',');
        $sql2 .= "WHERE clNumReporte = '";
        $sql2 .= $clNumReporte."'";
		//ECHO $sql2;
        try{
            $stmt = $this->db->prepare($sql2);
            //$stmt->bindValue(':clNumReporte', $clNumReporte);
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
    //funcion que busca el ultimo clNumReporte por cliente
    public function cliente($cliente) { 
        $sentencia = "SELECT clNumReporte from tsreportedureza WHERE cacliente_clCliente = :cliente ORDER BY id DESC LIMIT 1";
        try{
            $stm = $this->db->prepare ($sentencia);
            $stm->bindValue(':cliente', $cliente);
            $stm->execute();
            $registros = $stm->fetchAll(PDO::FETCH_OBJ);

            return $registros;

        }catch(Exception $e){
            echo "$e->getMessage()";
        }
    }

    public function eliminar($x) {        
    }

    public function __destruct() {
        //echo "cerrando bd";
        $this->db = null;
    }//__destruct

}// classMetalografia

/*$a = new  Metalografia();
$arrayMetalografia = array('clContrato'=>"abc",'deProyecto'=>"def");
$c = $a->modificar("01-prueba/2020", $arrayMetalografia);
echo json_encode($c);*/