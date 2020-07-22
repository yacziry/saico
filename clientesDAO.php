<?php


require_once 'conexion_mvc.php';
interface IEntidadC{
    public function insertar($x); 
    public function buscar($x); 
    public function modificar(); 
    public function eliminar($x);    
}//interface
class Cliente implements IEntidadC{
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
    public function buscarClientes() {   
        $sentencia = "SELECT * FROM cacliente";
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
    //funcion que obtyiene clCliente y devuelve deCliente(prueba)
    public function buscar($clCliente){
        $sentencia = "SELECT deCliente FROM cacliente WHERE clCliente = :clCliente";
        try{
            $stm = $this->db->prepare ($sentencia);
            $stm->bindValue(':clCliente', $clCliente);
            $stm->execute();
            $registros = $stm->fetchAll(PDO::FETCH_OBJ);
            foreach ($registros as $r){
                $cliente = $r->deCliente;
            }
            return $cliente;

        }catch(Exception $e){
            echo "$e->getMessage()";
        }
	}
    //metodo que recibe nombreCliente y devuelve la clave del mismo
    public function buscarClave($deCliente){
        $sentencia = "SELECT clCliente FROM cacliente WHERE deCliente = :deCliente";
        try{
            $stm = $this->db->prepare ($sentencia);
            $stm->bindValue(':deCliente', $deCliente);
            $stm->execute();
            $registros = $stm->fetchAll(PDO::FETCH_OBJ);
            foreach ($registros as $r){
                $cliente = $r->clCliente;
            }
            return $cliente;

        }catch(Exception $e){
            echo "$e->getMessage()";
        }
	}
    //funcioon para metalografiaContinuar, mostrar select seleccionado
    public function seleccionado($clCliente){
        $sentencia = "SELECT * FROM cacliente WHERE clCliente = :clCliente";
        try{
            $stm = $this->db->prepare ($sentencia);
            $stm->bindValue(':clCliente', $clCliente);
            $stm->execute();
            $registros = $stm->fetchAll(PDO::FETCH_OBJ);
            
            return $registros;

        }catch(Exception $e){
            echo "$e->getMessage()";
        }
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
/*$x = new Cliente();
$clCliente = "CL03";
$z = $x->buscar($clCliente);
var_dump($z);*/
