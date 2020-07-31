<?php


require_once 'conexion_mvc.php';
interface IEntidadUl{ //Nombre de entidad sin cofirmar
    public function insertar($x); 
    public function buscar($x); 
    public function modificar($x, $y); 
    public function eliminar($x);    
}//interface

class BocaDeTubo implements IEntidadUl{ //Nombre de entidad sin cofirmar
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
    public function insertar($arrayBocaDeTubo) {
        foreach($arrayBocaDeTubo as $key => $value){
		    $k[]=$key;
		    $v[]="'".$value."'";
		}
		$k=implode(",",$k);
	    $v=implode(",",$v);
		$sql="INSERT INTO tsreportebocadetubo ($k) values ($v)";
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
        $sentencia = "SELECT * FROM tsreportebocadetubo WHERE clNumReporte = :clNumReporte ORDER BY id DESC LIMIT 1";
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
    //funcion que busca el ultimo id por nr
    public function buscarID() { 
        $sentencia = "SELECT id FROM tsreportebocadetubo ORDER BY id DESC LIMIT 1";
        try{
            $stm = $this->db->prepare ($sentencia);
            $stm->execute();
            $registros = $stm->fetchAll(PDO::FETCH_OBJ);
            foreach ($registros as $r){
                $id = $r->id;
            } 
            return $id;

        }catch(Exception $e){
            echo $e->getMessage();
        }
    }

    //funcion que busca todos los registros insertados por noReporte
    public function buscarReporte($clNumReporte) { 
        $sentencia = "SELECT * from tsreportebocadetubo rc join tsimgbocadetubo using(id) WHERE rc.clNumReporte = :clNumReporte";
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
    //metodo para buscar en tabla resultado 
    public function buscarReporteResultado($clNumReporte) { 
        $sentencia = "SELECT * from tsresultadosbocadetubo rp WHERE rp.clNumReporte = :clNumReporte";
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
    //funcion que busca el ultimo clNumReporte por cliente
    public function cliente($cliente) { 
        $sentencia = "SELECT clNumReporte from tsreportebocadetubo WHERE cacliente_clCliente = :cliente ORDER BY id DESC LIMIT 1";
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

    public function modificar($clNumReporte, $arrayCaracterizacion) {
        $sql= "UPDATE tsreportebocadetubo SET ";
        //coonstruccion de la cadena sql como UPDATE
        foreach($arrayCaracterizacion as $key => $value){
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

    public function eliminar($x) {        
    }

    public function __destruct() {
        //echo "cerrando bd";
        $this->db = null;
    }//__destruct

}// classMetalografia

/*$a = new BocaDeTubo();
$clNumReporte = "1";
$x = $a->buscar($clNumReporte);
var_dump($x);*/