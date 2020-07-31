<?php


require_once 'conexion_mvc.php';
interface IEntidadN{
    public function insertar($x); 
    public function buscar($x); 
    public function modificar(); 
    public function eliminar($x);    
}//interface
class Normas implements IEntidadN{
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
    public function buscarNormas() {   
        $sentencia = "SELECT * FROM canorma";
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
    //busca la norma exacta que se envia
    public function buscarNormaSelected2($norma) {   
        $sentencia = "SELECT * FROM canorma WHERE norma = :norma";
        try{
            $stm = $this->db->prepare ($sentencia);
            $stm->bindValue(':norma', $norma);
            $stm->execute();
            $registros = $stm->fetchAll(PDO::FETCH_ASSOC);

            return $registros;

        }catch(Exception $e){
            echo "$e->getMessage()";
        }
	}//busca conforme tecleamos
	//funcion que devuelve la norma seleccionada
    public function buscarNormaSelected($norma) {   
        $sentencia = "SELECT * FROM canorma where norma LIKE ?";
        try{
            $stm = $this->db->prepare ($sentencia);
            //$stm->bindValue(':norma', $norma);
			//paraametro por poscision
            $stm->execute(array("%$norma%"));
            $registros = $stm->fetchAll(PDO::FETCH_ASSOC);

            return $registros;

        }catch(Exception $e){
            echo "$e->getMessage()";
        }
	}
    //funcion que obtyiene clCliente y devuelve deCliente(prueba)
    public function buscar($x){
        
	}
    
    public function insertar($norma) {
        foreach($norma as $key => $value){
		    $k[]=$key;
		    $v[]="'".$value."'";
		}
		$k=implode(",",$k);
	    $v=implode(",",$v);
		$sql="INSERT INTO canorma ($k) values ($v)";
        try{
            $stmt= $this->db->prepare($sql);
            $stmt->execute();
            $foranea = $this->db->lastInsertId();
            $registros = $stmt->fetch(PDO::FETCH_ASSOC);
            if($stmt->rowCount()==1){
                return $registros;
            }else{
                return FALSE;     
			}

        }catch (PDOException $e){
            echo $e->getMessage();  
        }
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
 
$a = new Normas();
$norma = array('norma'=>"yac3323", 'c'=>"yyy", 'mn'=>"hola", 'p'=>"hi",'s'=>"si",'cu'=>"ni",'cr'=>"hi",'mo'=>"hi",
'v'=>"nb",'nb'=>"n",'n'=>"hi",'deKsi_Max'=>"hi",'deKsi_Min'=>"hi",'deCedencia'=>"hi",'deBrinell_Max'=>"hi",
'deNotas'=>"hi");
$e = $a->insertar($norma);
var_dump($e);
