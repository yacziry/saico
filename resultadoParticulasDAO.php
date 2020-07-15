<?php

require_once 'conexion_mvc.php';
interface IEntidadR{
    public function insertar($x); 
    public function buscar($x); 
    public function modificar(); 
    public function eliminar($x);    
}//interface

class ResultadoParticulas implements IEntidadR{
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
    public function insertar($resultadoParticulas) {  
		$sql="INSERT INTO tsresultadosparticulas(dePieza, clNumReporte, deJunta, deLongitud, deDiscontinuidad, deEvaluacion, deObservaciones, tsReporteParticulas_id) values (?,?,?,?,?,?,?,?)";
        try{
            //$stmt= $this->db->prepare($sql);

            foreach($resultadoParticulas as $row){
                $x = "(".$row.")".", ";
                //$sql2 = rtrim($x, ',');
                echo $x;
                //$stmt->bindParam($x);            
                //$stmt->execute();
            }
            /*$foranea = $this->db->lastInsertId();
            if($stmt->rowCount()==1){
                return $foranea;
            }else{
                return FALSE;     
			}*/

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
        $sentencia = "SELECT id, cl FROM tsreporteparticulas ORDER BY id DESC LIMIT 1";
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

    //funcion que devuelve el ultimo id y clave para tabla resultados
    public function ultimoID() { 
        $sentencia = "SELECT id, clNumReporte FROM tsreporteparticulas ORDER BY id DESC LIMIT 1";
        try{
            $stm = $this->db->prepare ($sentencia);
            $stm->execute();
            $registros = $stm->fetchAll(PDO::FETCH_OBJ);
            
            return $registros;

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
/*$a = new ResultadoParticulas();
$resultadoParticulas=array('dePieza'=>"pieza",'clNumReporte'=>"rep1",'deJunta'=>"j-01", 'deLongitud'=>"long 1",
'deDiscontinuidad'=>"disc1", 'deEvaluacion'=>"eva 1", 'deObservaciones'=>"ob1", 'tsReporteParticulas_id'=>"18");

$x = $a->insertar($resultadoParticulas);
var_dump($x);*/