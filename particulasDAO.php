<?php

require_once 'conexion_mvc.php';
interface IEntidadP{
    public function insertar($x); 
    public function buscar($x); 
    public function modificar(); 
    public function eliminar($x);    
}//interface

class Particulas implements IEntidadP{
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
    public function insertar($arrayParticulas) {
        foreach($arrayParticulas as $key => $value){
		    $k[]=$key;
		    $v[]="'".$value."'";
		}
		$k=implode(",",$k);
	    $v=implode(",",$v);
		$sql="INSERT INTO tsreporteparticulas ($k) values ($v)";
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
        $sentencia = "SELECT * FROM tsreporteparticulas WHERE clNumReporte = :clNumReporte ORDER BY id DESC LIMIT 1";
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
    //funcion que devuelve el ultimo id de tsreporteparticulas iinsertado
    public function buscarID() { 
        $sentencia = "SELECT id FROM tsreporteparticulas ORDER BY id DESC LIMIT 1";
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
    //IMPORTANTE, ESTA PENDIENTE UN JOIN PARA TABLA RESULTADOS
    public function buscarReporte($clNumReporte) { 
        $sentencia = "SELECT * from tsreporteparticulas rp join tsimgparticulas using(id) WHERE rp.clNumReporte = :clNumReporte";
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
        $sentencia = "SELECT clNumReporte from tsreporteparticulas WHERE cacliente_clCliente = :cliente ORDER BY id DESC LIMIT 1";
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
    public function modificar() {        
    }

    public function eliminar($x) {        
    }

    public function __destruct() {
        //echo "cerrando bd";
        $this->db = null;
    }//__destruct

}// classMetalografia

//**************************************************
//PRUEBAS DE METODOS, INSTNCIAS LISTAS
/*$a = new Particulas();
$x = $a->buscarID();
var_dump($x);*/