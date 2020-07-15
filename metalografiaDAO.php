<?php


require_once 'conexion_mvc.php';
interface IEntidadM{
    public function insertar($x); 
    public function buscar($x); 
    public function modificar($x, $y); 
    public function eliminar($x);    
}//interface

class Metalografia implements IEntidadM{
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
    public function insertar($arrayMetalografia) {
        foreach($arrayMetalografia as $key => $value){
		    $k[]=$key;
		    $v[]="'".$value."'";
		}
		$k=implode(",",$k);
	    $v=implode(",",$v);
		$sql="INSERT INTO tsreportemetalografia ($k) values ($v)";
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

    //funcion que busca todos los ultimos registros insertados del usuario
    public function buscar($clUsuario) { 
        $sentencia = "SELECT * FROM tsreportemetalografia WHERE clUsuario = :clUsuario ORDER BY id DESC LIMIT 1";
        try{
            $stm = $this->db->prepare ($sentencia);
            $stm->bindValue(':clUsuario', $clUsuario);
            $stm->execute();
            $registros = $stm->fetchAll(PDO::FETCH_OBJ);

            return $registros;

        }catch(Exception $e){
            echo "$e->getMessage()";
        }
    }
    //funcion que busca ID
    public function buscarClave($clave) { 
        $sentencia = "SELECT * from tsreportemetalografia m join tsimagenes using(id) WHERE m.id = :clave";
        try{
            $stm = $this->db->prepare ($sentencia);
            $stm->bindValue(':clave', $clave);
            $stm->execute();
            $registros = $stm->fetchAll(PDO::FETCH_OBJ);

            return $registros;

        }catch(Exception $e){
            echo "$e->getMessage()";
        }
    }
    //funcion que busca el ultimo id por nr
    public function buscarID($clNumReporte) { 
        $sentencia = "SELECT id FROM tsreportemetalografia WHERE clNumReporte = :clNumReporte ORDER BY id DESC LIMIT 1";
        try{
            $stm = $this->db->prepare ($sentencia);
            $stm->bindValue(':clNumReporte', $clNumReporte);
            $stm->execute();
            $registros = $stm->fetchAll(PDO::FETCH_OBJ);
            foreach ($registros as $r){
                $lastId = $r->id;
            }
            return $lastId;

        }catch(Exception $e){
            echo $e->getMessage();
        }
    }

    //funcion que busca todos los registros insertados por noReporte
    public function buscarReporte($clNumReporte) { 
        $sentencia = "SELECT * from tsreportemetalografia rm join tsimagenes using(id) WHERE rm.clNumReporte = :clNumReporte";
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
        $sentencia = "SELECT clNumReporte from tsreportemetalografia WHERE cacliente_clCliente = :cliente ORDER BY id DESC LIMIT 1";
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

    public function modificar($clNumReporte, $arrayMetalografia) {
        $sql= "UPDATE tsreportemetalografia SET ";
        //coonstruccion de la cadena sql como UPDATE
        foreach($arrayMetalografia as $key => $value){
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
    public function modificarClave($id, $arrayMetalografia) {
        $sql= "UPDATE tsreportemetalografia SET ";
        //coonstruccion de la cadena sql como UPDATE
        foreach($arrayMetalografia as $key => $value){
            $sql .= $key . "='" .$value."'".",";     
		}
        //rtrim quita la ultima coma
        $sql2 = rtrim($sql,',');
        $sql2 .= "WHERE id = '";
        $sql2 .= $id."'";
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

    public function eliminar($x) {        
    }

    public function __destruct() {
        //echo "cerrando bd";
        $this->db = null;
    }//__destruct

}// classMetalografia

/*$a = new  Metalografia();
$arrayMetalografia = array('clContrato'=>'jjj','deProyecto'=>'yyy');
$clNumReporte = "m";
$c = $a->modificar($clNumReporte, $arrayMetalografia);
//echo var_dump($arrayMetalografia);*/