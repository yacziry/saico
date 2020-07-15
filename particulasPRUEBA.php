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
    var_dump($resultadoParticulas);
        /*$arreglo = array(
            "dePieza" => "pieza",
            "clNumReporte" => "s",
            "deJunta" => array(0 => "j1", 1 => "j2"),
            "deLongitud" => array(0 => "12", 1 => "34"),
            "deDiscontinuidad" => array(0 => "Ninguna0", 1 => "Ninguna1"),
            "deEvaluacion" => array(0 => "Aceptado", 1 => "Aceptado"),
            "deObservaciones" => array(0 => "---", 1 => "---"),
            "tsReporteParticulas_id" => "6");

        try {

            $sql = "INSERT INTO arreglo (dePieza, clNumReporte, deJunta, "
                    . " deLongitud, deDiscontinuidad, deEvaluacion, "
                    . " deObservaciones, tsReporteParticulas_id ) "
                    . " VALUES (:dePieza, :clNumReporte, :deJunta,"
                    . " :deLongitud, :deDiscontinuidad, :deEvaluacion, "
                    . " :deObservaciones,:tsReporteParticulas_id )";

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(':dePieza', $dePieza);
            $stmt->bindParam(':clNumReporte', $clNumReporte);
            $stmt->bindParam(':deJunta', $deJunta);
            $stmt->bindParam(':deLongitud', $deLongitud);
            $stmt->bindParam(':deDiscontinuidad', $deDiscontinuidad);
            $stmt->bindParam(':deEvaluacion', $deEvaluacion);
            $stmt->bindParam(':deObservaciones', $deObservaciones);
            $stmt->bindParam(':tsReporteParticulas_id', $tsReporteParticulas_id);

            for ($index = 0; $index < count($arreglo['deJunta']); $index++) {
                $dePieza = $arreglo['dePieza'];
                $clNumReporte = $arreglo['clNumReporte'];
                $deJunta = $arreglo['deJunta'][$index];
                $deLongitud = $arreglo['deLongitud'][$index];
                $deDiscontinuidad = $arreglo['deDiscontinuidad'][$index];
                echo $arreglo['deDiscontinuidad'][$index] . "<br>";
                $deEvaluacion = $arreglo['deEvaluacion'][$index];
                $deObservaciones = $arreglo['deObservaciones'][$index];
                $tsReporteParticulas_id = $arreglo['tsReporteParticulas_id'];
                $stmt->execute();
            }
            echo "A todo dar... <br>";

            return TRUE;
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
            $this->db = null;
            return FALSE;
        }*/
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