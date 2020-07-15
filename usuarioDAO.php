<?php


require_once 'conexion_mvc.php';
interface IEntidad2{
    public function insertar($x); 
    public function buscar($x); 
    public function modificar(); 
    public function eliminar($x);    
}//interface

//conexion a DB
class Usuario implements IEntidad2{
    private  $db;
    public function __construct() {
        $this->db=ConexionDB::getConexion();
        if($this->db === false){
            //echo 'No se conecto';
        }else {
            //echo "Se conecto a base de datos<br>";                      
        }
    }
    
    public function insertar($x) {
        
    }
    //Metodo que comprueba si existe usuario y le otorga pass o no
    public function insertarPass($deUsuario, $dePassword){
        $sentencia = "SELECT * FROM usuarios WHERE deUsuario = :deUsuario";
        try{
            $stm = $this->db->prepare ($sentencia);
            $stm->bindValue(':deUsuario', $deUsuario);
            $stm->execute();
            $registros = $stm->fetchAll(PDO::FETCH_OBJ);
            //Si el usuario existe guarda en $pass su contraseña
            foreach ($registros as $r){
                $pass = $r->dePassword;
                $passEnc = openssl_encrypt($password, "AES-128-ECB", "permiso");
                $user = $r->deUsuario;
            }
            //si $pass es null then crea una $pass
            if($pass == null){
                $sentencia2 = "UPDATE usuarios SET dePassword = '$dePassword' WHERE deUsuario = '$user'";

                $stm2 = $this->db->prepare ($sentencia2);
                $stm2->execute();
                return TRUE;
			}else{
                return FALSE;  
			}

        }catch(Exception $e){
            echo "$e->getMessage()";
        }
	}
    //Metodo que devuelve el usario para sesion
    public function sesionUsuario($deUsuario){
        $sentencia = "SELECT * FROM usuarios WHERE deUsuario = :deUsuario && clEstatus = 'A' ";
        try{
            $stm = $this->db->prepare ($sentencia);
            $stm->bindValue(':deUsuario', $deUsuario);
            $stm->execute();
            $registros = $stm->fetchAll(PDO::FETCH_OBJ);
            //Si el usuario existe guarda en $user
            foreach ($registros as $r){
                $user = $r->deUsuario;
            } 
            return $user;

        }catch(Exception $e){
            echo "$e->getMessage()";
        }
	}
    //Metodo que verifica si el usario ($deUsuario) existe
    public function buscar($deUsuario) {
        $sentencia = "SELECT * FROM usuarios WHERE deUsuario = :deUsuario";
        try{
            $stm = $this->db->prepare ($sentencia);
            $stm->bindValue(':deUsuario', $deUsuario);
            $stm->execute();
            $registros = $stm->fetchAll(PDO::FETCH_OBJ);
            if($registros){
                return TRUE;
                //echo "si esta";
			}else{
                return FALSE;
                //echo "no esta";
			}
        }catch(Exception $e){
            echo "$e->getMessage()";
        }
        
    }
    //Metodo que verifica si el email ($deEmail) existe
    public function enviarEmail($deEmail) {
        $sentencia = "SELECT * FROM usuarios WHERE deEmail= :deEmail";
        try{
            $stm = $this->db->prepare ($sentencia);
            $stm->bindValue(':deEmail', $deEmail);
            $stm->execute();
            $registros = $stm->fetchAll(PDO::FETCH_OBJ);
            foreach ($registros as $r){
                    $email = $r->deEmail;
                }
                return $email;
        }catch(Exception $e){
            echo "$e->getMessage()";
        }
        
    }
    //enviar pass
    public function enviarPass($deEmail){
        $sentencia = "SELECT dePassword FROM usuarios WHERE deEmail = :deEmail";
        try{
            $stm = $this->db->prepare ($sentencia);
            $stm->bindValue(':deEmail', $deEmail);
            $stm->execute();
            $registros = $stm->fetchAll(PDO::FETCH_OBJ);
                foreach ($registros as $r){
                    $pass = $r->dePassword;
                }                                          
                return $pass;
                //echo "si esta";
        }catch(Exception $e){
            echo "$e->getMessage()";
        }
    
	}
	//metodo que devuelve nombre y apelldo
    public function nomAp($deUsuario){
        $sentencia = "SELECT deNombre, deApPat FROM usuarios WHERE deUsuario = :deUsuario";
        try{
            $stm = $this->db->prepare ($sentencia);
            $stm->bindValue(':deUsuario', $deUsuario);
            $stm->execute();
            $registros = $stm->fetchAll(PDO::FETCH_OBJ);
                foreach ($registros as $r){
                    $nombre = $r->deNombre;
					$apellido = $r->deApPat;
                }
				$user = $nombre." ".$apellido;
                return $user;
                //echo "si esta";
        }catch(Exception $e){
            echo "$e->getMessage()";
        }
    
	}
    //enviar user
    public function enviarUser($deEmail){
        $sentencia = "SELECT deUsuario FROM usuarios WHERE deEmail = :deEmail";
        try{
            $stm = $this->db->prepare ($sentencia);
            $stm->bindValue(':deEmail', $deEmail);
            $stm->execute();
            $registros = $stm->fetchAll(PDO::FETCH_OBJ);
                foreach ($registros as $r){
                    $user = $r->deUsuario;
                }                                          
                return $user;
                //echo "si esta";
        }catch(Exception $e){
            echo "$e->getMessage()";
        }
    
	}
    //Busca en DB si los parametros dados x el usuario "deUsuario" y "dePassword" existen
    //comprueba usuario y pass existentes
    public function buscarUsuario($deUsuario, $dePassword) {
        //$sentencia = "CALL buscarUsuario(:deUsuario, :dePassword)";
        $sentencia = "SELECT * FROM usuarios  WHERE deUsuario = :deUsuario AND dePassword = BINARY :dePassword";
        try{
            $stm = $this->db->prepare ($sentencia);
            $stm->bindValue(':deUsuario', $deUsuario);
            $stm->bindValue(':dePassword', $dePassword);
            $stm->execute();
            $registros = $stm->fetchAll(PDO::FETCH_OBJ);            
            if($registros){
                //echo "Existe";     
                return TRUE;
            }else{
                //echo "No existe";
                return FALSE;
            }
        }catch(Exception $e){
            echo "$e->getMessage()";
        }        
    }

    public function eliminar($id) {
        $sql="DELETE FROM transaccion WHERE id = :id";
        echo $sql;
        try{
            $this->db->beginTransaction();
            $stmt= $this->db->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();             
            if($stmt->rowCount()==1){
                echo "Borro un registro".$stmt->rowCount();
                //confirmacion
                $this->db->commit(); 
            }else{ 
                $this->db->rollBack();
                echo "no borro nada";
            }                
        }catch (PDOException $e){
            echo $e->getMessage();       
            $this->db->rollBack();              
        }                     
    }

    public function modificar() {
        
    }
    public function __destruct() {
        //echo "cerrando bd";
        $this->db = null;
    }//__destruct

}//class Usuario





