<?php

require_once 'conexion_mvc.php';
interface IEntidadR
{
    public function insertar($x);
    public function buscar($x);
    public function modificar();
    public function eliminar($x);
} //interface

class ResultadoBocaTubo implements IEntidadR
{
    private  $db;
    public function __construct()
    {
        $this->db = ConexionDB::getConexion();
        if ($this->db === false) {
            //echo 'No se conecto';
        } else {
            //echo "Se conecto a base de datos<br>";                      
        }
    } //__construct

    //funcion que inserta un array y devuelve un lastid
    public function insertar($arreglo)
    {
        try {

            $sql = "INSERT INTO tsresultadosbocadetubo (clID, deElemento, clAceptacion, "
                . " clSerie, clColada, clIndicacion, deProfundidad, "
                . " deEspesor, deLongitud, deX, deY,  "
                . " deEspesorMaximo, deEspesorMinimo, "
                . " deBarrido, deResultado, tsreportebocadetubo_id)"
                . " VALUES (:clID, :deElemento, :clAceptacion,"
                . " :clSerie, :clColada, :clIndicacion, :deProfundidad, "
                . " :deEspesor, :deLongitud, :deX, :deY,  "
                . " :deEspesorMaximo, :deEspesorMinimo, "
                . " :deBarrido, :deResultado, :tsreportebocadetubo_id)";

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(':deElemento', $deElemento);
            $stmt->bindParam(':clID', $clID);
            $stmt->bindParam(':clAceptacion', $clAceptacion);
            $stmt->bindParam(':clSerie', $clSerie);
            $stmt->bindParam(':clColada', $clColada);
            $stmt->bindParam(':clIndicacion', $clIndicacion);
            $stmt->bindParam(':deProfundidad', $deProfundidad);
            $stmt->bindParam(':deEspesor', $deEspesor);
            $stmt->bindParam(':deLongitud', $deLongitud);
            $stmt->bindParam(':deX', $deX);
            $stmt->bindParam(':deY', $deY);
            $stmt->bindParam(':deEspesorMaximo', $deEspesorMaximo);
            $stmt->bindParam(':deEspesorMinimo', $deEspesorMinimo);
            $stmt->bindParam(':deBarrido', $deBarrido);
            $stmt->bindParam(':deResultado', $deResultado);
            $stmt->bindParam(':tsreportebocadetubo_id', $tsreportebocadetubo_id);

            for ($index = 0; $index < count($arreglo['deElemento']); $index++) {
                $deElemento = $arreglo['deElemento'][$index];
                $clID = $arreglo['clID'][$index];
                $clAceptacion = $arreglo['clAceptacion'][$index];
                $clSerie = $arreglo['clSerie'][$index];
                $clColada = $arreglo['clColada'][$index];
                $clIndicacion = $arreglo['clIndicacion'][$index];
                $deProfundidad = $arreglo['deProfundidad'][$index];
                $deEspesor = $arreglo['deEspesor'][$index];
                $deLongitud = $arreglo['deLongitud'][$index];
                $deX = $arreglo['deX'][$index];
                $deY = $arreglo['deY'][$index];
                $deEspesorMaximo = $arreglo['deEspesorMaximo'][$index];
                $deEspesorMinimo = $arreglo['deEspesorMinimo'][$index];
                $deBarrido = $arreglo['deBarrido'][$index];
                $deResultado = $arreglo['deResultado'][$index];
                $tsreportebocadetubo_id = $arreglo['tsreportebocadetubo_id'][$index];
                $stmt->execute();
            }
            echo "A todo dar... <br>";

            return TRUE;
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
            $this->db = null;
            return FALSE;
        }
    }

    //funcion que busca todos los ultimos registros insertados por nr
    public function buscar($clNumReporte)
    {
        $sentencia = "SELECT * FROM tsreportebocadetubo WHERE clNumReporte = :clNumReporte ORDER BY id DESC LIMIT 1";
        try {
            $stm = $this->db->prepare($sentencia);
            $stm->bindValue(':clNumReporte', $clNumReporte);
            $stm->execute();
            $registros = $stm->fetchAll(PDO::FETCH_OBJ);

            return $registros;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    //funcion que devuelve el ultimo id de tsreportebocadetubo iinsertado
    public function buscarID()
    {
        $sentencia = "SELECT id, cl FROM tsreportebocadetubo ORDER BY id DESC LIMIT 1";
        try {
            $stm = $this->db->prepare($sentencia);
            $stm->execute();
            $registros = $stm->fetchAll(PDO::FETCH_OBJ);
            foreach ($registros as $r) {
                $id = $r->id;
            }
            return $id;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    //funcion que devuelve el ultimo id y clave para tabla resultados
    public function ultimoID()
    {
        $sentencia = "SELECT id, clNumReporte FROM tsreportebocadetubo ORDER BY id DESC LIMIT 1";
        try {
            $stm = $this->db->prepare($sentencia);
            $stm->execute();
            $registros = $stm->fetchAll(PDO::FETCH_OBJ);

            return $registros;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    //funcion que busca todos los registros insertados por noReporte
    //IMPORTANTE, ESTA PENDIENTE UN JOIN PARA TABLA RESULTADOS
    public function buscarReporte($clNumReporte)
    {
        $sentencia = "SELECT * from tsreportebocadetubo rp join tsimgbocadetubo using(id) WHERE rp.clNumReporte = :clNumReporte";
        try {
            $stm = $this->db->prepare($sentencia);
            $stm->bindValue(':clNumReporte', $clNumReporte);
            $stm->execute();
            $registros = $stm->fetchAll(PDO::FETCH_OBJ);

            return $registros;
        } catch (Exception $e) {
            echo "$e->getMessage()";
        }
    }
    //funcion que busca el ultimo clNumReporte por cliente
    public function cliente($cliente)
    {
        $sentencia = "SELECT clNumReporte from tsreportebocadetubo WHERE cacliente_clCliente = :cliente ORDER BY id DESC LIMIT 1";
        try {
            $stm = $this->db->prepare($sentencia);
            $stm->bindValue(':cliente', $cliente);
            $stm->execute();
            $registros = $stm->fetchAll(PDO::FETCH_OBJ);

            return $registros;
        } catch (Exception $e) {
            echo "$e->getMessage()";
        }
    }
    public function modificar()
    {
    }

    public function eliminar($x)
    {
    }

    public function __destruct()
    {
        //echo "cerrando bd";
        $this->db = null;
    } //__destruct

}// classMetalografia

//**************************************************
//PRUEBAS DE METODOS, INSTNCIAS LISTAS
/*$a = new Resultadobocadetubo();
$resultadobocadetubo=array('dePieza'=>"pieza",'clNumReporte'=>"rep1",'deJunta'=>"j-01", 'deLongitud'=>"long 1",
'deDiscontinuidad'=>"disc1", 'deEvaluacion'=>"eva 1", 'deObservaciones'=>"ob1", 'tsReportebocadetubo_id'=>"18");

$x = $a->insertar($resultadobocadetubo);
var_dump($x);*/