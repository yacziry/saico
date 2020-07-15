<?php

require_once 'conexion_mvc.php';
interface IEntidadbuscar{
    public function insertar($x); 
    public function buscar($x); 
    public function modificar(); 
    public function eliminar($x);    
}//interface
class BuscarFormatos implements IEntidadbuscar{
    private  $db;
    public function __construct() {
        $this->db=ConexionDB::getConexion();
        if($this->db === false){
            //echo 'No se conecto';
        }else {
            //echo "Se conecto a base de datos<br>";                      
        }
    }//__construct
    //buscar por palabra clave
    public function buscarPclReporte($tecnica, $palabraCl) {
		if($tecnica == "Caracterizacion"){
			$sentencia = "SELECT DISTINCT clContrato, clNumReporte,feTecnico, cacliente_clCliente FROM tsreportecaracterizacion
            where clContrato = :palabraCl OR clOrdenTrabajo = :palabraCl OR clFolio = :palabraCl OR deIsometrico = :palabraCl
            OR deLugar";
            try{
                $stm = $this->db->prepare ($sentencia);
                $stm->bindValue(':palabraCl', $palabraCl);
                $registros = $stm->fetchAll(PDO::FETCH_ASSOC);

            return $registros;

            }catch(Exception $e){
                echo $e->getMessage();
            }//catch
		}//else{
            //return false;  
		//}
        if($tecnica == "Metalografia"){
		    $sentencia = "SELECT DISTINCT clContrato, clNumReporte,feTecnico, cacliente_clCliente from tsreportemetalografia WHERE feTecnico BETWEEN  :feInicio  AND  :feFin";
            try{
                $stm = $this->db->prepare ($sentencia);
                $stm->bindValue(':feInicio', $feInicio);
			    $stm->bindValue(':feFin', $feFin);
                $stm->execute();
                $registros = $stm->fetchAll(PDO::FETCH_ASSOC);

                return $registros;

            }catch(Exception $e){
                echo $e->getMessage();
            }//catch
		}else{//if
            return false;
        }		        
	}
    //buscar por fecha de reporte
    public function buscarFeReporte($tecnica, $feInicio, $feFin) {
		if($tecnica == "Caracterizacion"){
			$sentencia = "SELECT DISTINCT clContrato, clNumReporte,feTecnico, cacliente_clCliente FROM tsreportecaracterizacion WHERE feTecnico BETWEEN  :feInicio  AND  :feFin";
            try{
                $stm = $this->db->prepare ($sentencia);
                $stm->bindValue(':feInicio', $feInicio);
			    $stm->bindValue(':feFin', $feFin);
                $stm->execute();
                $registros = $stm->fetchAll(PDO::FETCH_ASSOC);

            return $registros;

            }catch(Exception $e){
                echo $e->getMessage();
            }//catch
		}//else{
            //return false;  
		//}
        if($tecnica == "Metalografia"){
		    $sentencia = "SELECT DISTINCT clContrato, clNumReporte,feTecnico, cacliente_clCliente from tsreportemetalografia WHERE feTecnico BETWEEN  :feInicio  AND  :feFin";
            try{
                $stm = $this->db->prepare ($sentencia);
                $stm->bindValue(':feInicio', $feInicio);
			    $stm->bindValue(':feFin', $feFin);
                $stm->execute();
                $registros = $stm->fetchAll(PDO::FETCH_ASSOC);

                return $registros;

            }catch(Exception $e){
                echo $e->getMessage();
            }//catch
		}//if

        if($tecnica == "Particulas"){
		    $sentencia = "SELECT DISTINCT clContrato, clNumReporte,feTecnico, cacliente_clCliente from tsreporteparticulas WHERE feTecnico BETWEEN  :feInicio  AND  :feFin";
            try{
                $stm = $this->db->prepare ($sentencia);
                $stm->bindValue(':feInicio', $feInicio);
			    $stm->bindValue(':feFin', $feFin);
                $stm->execute();
                $registros = $stm->fetchAll(PDO::FETCH_ASSOC);

                return $registros;

            }catch(Exception $e){
                echo $e->getMessage();
            }//catch
		}//if

        if($tecnica == "Liquidos"){
		    $sentencia = "SELECT DISTINCT clContrato, clNumReporte,feTecnico, cacliente_clCliente from tsreporteliquidos WHERE feTecnico BETWEEN  :feInicio  AND  :feFin";
            try{
                $stm = $this->db->prepare ($sentencia);
                $stm->bindValue(':feInicio', $feInicio);
			    $stm->bindValue(':feFin', $feFin);
                $stm->execute();
                $registros = $stm->fetchAll(PDO::FETCH_ASSOC);

                return $registros;

            }catch(Exception $e){
                echo $e->getMessage();
            }//catch
		}//if

        if($tecnica == "Dureza"){
		    $sentencia = "SELECT DISTINCT clContrato, clNumReporte,feTecnico, cacliente_clCliente from tsreportedureza WHERE feTecnico BETWEEN  :feInicio  AND  :feFin";
            try{
                $stm = $this->db->prepare ($sentencia);
                $stm->bindValue(':feInicio', $feInicio);
			    $stm->bindValue(':feFin', $feFin);
                $stm->execute();
                $registros = $stm->fetchAll(PDO::FETCH_ASSOC);

                return $registros;

            }catch(Exception $e){
                echo $e->getMessage();
            }//catch
		}//if

        if($tecnica == "Analisis Quimico"){
		    $sentencia = "SELECT DISTINCT clContrato, clNumReporte,feTecnico, cacliente_clCliente from tsreporteanalisis WHERE feTecnico BETWEEN  :feInicio  AND  :feFin";
            try{
                $stm = $this->db->prepare ($sentencia);
                $stm->bindValue(':feInicio', $feInicio);
			    $stm->bindValue(':feFin', $feFin);
                $stm->execute();
                $registros = $stm->fetchAll(PDO::FETCH_ASSOC);

                return $registros;

            }catch(Exception $e){
                echo $e->getMessage();
            }//catch
		}//if

    }//buscarFeReporte

    //buscar por cliente de reporte
    public function buscarClreporte($tecnica, $claveCL) {
		if($tecnica == "Caracterizacion"){
			$sentencia = "SELECT DISTINCT clContrato, clNumReporte,feTecnico, cacliente_clCliente FROM tsreportecaracterizacion WHERE cacliente_clCliente = :claveCL";
            try{
                $stm = $this->db->prepare ($sentencia);
                $stm->bindValue(':claveCL', $claveCL);
                $stm->execute();
                $registros = $stm->fetchAll(PDO::FETCH_ASSOC);

            return $registros;

            }catch(Exception $e){
                echo $e->getMessage();
            }//catch
        }//if
        if($tecnica == "Metalografia"){
		    $sentencia = "SELECT DISTINCT clContrato, clNumReporte,feTecnico, cacliente_clCliente from tsreportemetalografia WHERE cacliente_clCliente = :claveCL";
            try{
                $stm = $this->db->prepare ($sentencia);
			    $stm->bindValue(':claveCL', $claveCL);
                $stm->execute();
                $registros = $stm->fetchAll(PDO::FETCH_ASSOC);

                return $registros;

            }catch(Exception $e){
                echo $e->getMessage();
            }//catch		
        }//if
        if($tecnica == "Dureza"){
		    $sentencia = "SELECT DISTINCT clContrato, clNumReporte,feTecnico, cacliente_clCliente from tsreportemetalografia WHERE cacliente_clCliente = :claveCL";
            try{
                $stm = $this->db->prepare ($sentencia);
			    $stm->bindValue(':claveCL', $claveCL);
                $stm->execute();
                $registros = $stm->fetchAll(PDO::FETCH_ASSOC);

                return $registros;

            }catch(Exception $e){
                echo $e->getMessage();
            }//catch
        }//if
        if($tecnica == "Particulas"){
		    $sentencia = "SELECT DISTINCT clContrato, clNumReporte,feTecnico, cacliente_clCliente from tsreporteparticulas WHERE cacliente_clCliente = :claveCL";
            try{
                $stm = $this->db->prepare ($sentencia);
			    $stm->bindValue(':claveCL', $claveCL);
                $stm->execute();
                $registros = $stm->fetchAll(PDO::FETCH_ASSOC);

                return $registros;

            }catch(Exception $e){
                echo $e->getMessage();
            }//catch
        }//if
        if($tecnica == "Liquidos"){
		    $sentencia = "SELECT DISTINCT clContrato, clNumReporte,feTecnico, cacliente_clCliente from tsreporteliquidos WHERE cacliente_clCliente = :claveCL";
            try{
                $stm = $this->db->prepare ($sentencia);
			    $stm->bindValue(':claveCL', $claveCL);
                $stm->execute();
                $registros = $stm->fetchAll(PDO::FETCH_ASSOC);

                return $registros;

            }catch(Exception $e){
                echo $e->getMessage();
            }//catch
        }//if
        if($tecnica == "Analisis Quimico"){
		    $sentencia = "SELECT DISTINCT clContrato, clNumReporte,feTecnico, cacliente_clCliente from tsreporteanalisis WHERE cacliente_clCliente = :claveCL";
            try{
                $stm = $this->db->prepare ($sentencia);
			    $stm->bindValue(':claveCL', $claveCL);
                $stm->execute();
                $registros = $stm->fetchAll(PDO::FETCH_ASSOC);

                return $registros;

            }catch(Exception $e){
                echo $e->getMessage();
            }//catch
        }//if
	}
    //Buscar reportes por numero de reporte
    public function buscarNumReporte($tecnica, $clNumReporte) {
		if ($tecnica == "Caracterizacion"){
			$sentencia = "SELECT * from tsreportecaracterizacion rc join tsimgcaracterizacion using(id) WHERE rc.clNumReporte = :clNumReporte ORDER by id ASC LIMIT 1";
            try{
                $stm = $this->db->prepare ($sentencia);
                //$stm->bindValue(':tecnica', $tecnica);
			    $stm->bindValue(':clNumReporte', $clNumReporte);
                $stm->execute();
                $registros = $stm->fetchAll(PDO::FETCH_ASSOC);

                return $registros;

            }catch(Exception $e){
                echo "$e->getMessage()";
            }//catch
		}//if
        if ($tecnica == "Metalografia"){
		    $sentencia = "SELECT * from tsreportemetalografia rm join tsimagenes using(id) WHERE rm.clNumReporte = :clNumReporte ORDER by id ASC LIMIT 1";
            try{
                $stm = $this->db->prepare ($sentencia);
                //$stm->bindValue(':tecnica', $tecnica);
			    $stm->bindValue(':clNumReporte', $clNumReporte);
                $stm->execute();
                $registros = $stm->fetchAll(PDO::FETCH_ASSOC);

                return $registros;

            }catch(Exception $e){
                echo $e->getMessage();
            }//catch
		}//if
        if ($tecnica == "Particulas"){
		    $sentencia = "SELECT * from tsreporteparticulas rp join tsimgparticulas using(id) WHERE rp.clNumReporte = :clNumReporte ORDER by id ASC LIMIT 1";
            try{
                $stm = $this->db->prepare ($sentencia);
                //$stm->bindValue(':tecnica', $tecnica);
			    $stm->bindValue(':clNumReporte', $clNumReporte);
                $stm->execute();
                $registros = $stm->fetchAll(PDO::FETCH_ASSOC);

                return $registros;

            }catch(Exception $e){
                echo $e->getMessage();
            }//catch
		}//if
        if ($tecnica == "Liquidos"){
		    $sentencia = "SELECT * from tsreporteliquidos rl join tsimgliquidos using(id) WHERE rl.clNumReporte = :clNumReporte ORDER by id ASC LIMIT 1";
            try{
                $stm = $this->db->prepare ($sentencia);
                //$stm->bindValue(':tecnica', $tecnica);
			    $stm->bindValue(':clNumReporte', $clNumReporte);
                $stm->execute();
                $registros = $stm->fetchAll(PDO::FETCH_ASSOC);

                return $registros;

            }catch(Exception $e){
                echo $e->getMessage();
            }//catch
		}//if
        if ($tecnica == "Dureza"){
		    $sentencia = "SELECT * from tsreportedureza WHERE clNumReporte = :clNumReporte ORDER by id ASC LIMIT 1";
            try{
                $stm = $this->db->prepare ($sentencia);
                //$stm->bindValue(':tecnica', $tecnica);
			    $stm->bindValue(':clNumReporte', $clNumReporte);
                $stm->execute();
                $registros = $stm->fetchAll(PDO::FETCH_ASSOC);

                return $registros;

            }catch(Exception $e){
                echo $e->getMessage();
            }//catch
		}//if

        if ($tecnica == "Analisis Quimico"){
		    $sentencia = "SELECT * from tsreporteanalisis WHERE clNumReporte = :clNumReporte ORDER by id ASC LIMIT 1";
            try{
                $stm = $this->db->prepare ($sentencia);
                //$stm->bindValue(':tecnica', $tecnica);
			    $stm->bindValue(':clNumReporte', $clNumReporte);
                $stm->execute();
                $registros = $stm->fetchAll(PDO::FETCH_ASSOC);
                
                return $registros;

            }catch(Exception $e){
                echo $e->getMessage();
            }//catch
		}//if
		       
	}
    //Buscar reportes id para modificar
    public function buscarClave($tecnica, $clave) {
		if ($tecnica == "Caracterizacion"){
			$sentencia = "SELECT * from tsreportecaracterizacion rc join tsimgcaracterizacion using(id) WHERE rc.id = :clave";
            try{
                $stm = $this->db->prepare ($sentencia);
                //$stm->bindValue(':tecnica', $tecnica);
			    $stm->bindValue(':clave', $clave);
                $stm->execute();
                $registros = $stm->fetchAll(PDO::FETCH_ASSOC);

                return $registros;

            }catch(Exception $e){
                echo "$e->getMessage()";
            }//catch
		}//if
        if ($tecnica == "Metalografia"){
		    $sentencia = "SELECT * from tsreportemetalografia rm join tsimagenes using(id) WHERE rm.id = :clave";
            try{
                $stm = $this->db->prepare ($sentencia);
                //$stm->bindValue(':tecnica', $tecnica);
			    $stm->bindValue(':clave', $clave);
                $stm->execute();
                $registros = $stm->fetchAll(PDO::FETCH_ASSOC);

                return $registros;

            }catch(Exception $e){
                echo $e->getMessage();
            }//catch
		}//if
        if ($tecnica == "Particulas"){
		    $sentencia = "SELECT * from tsreporteparticulas rp join tsimgparticulas using(id) WHERE rp.id = :clave";
            try{
                $stm = $this->db->prepare ($sentencia);
                //$stm->bindValue(':tecnica', $tecnica);
			    $stm->bindValue(':clave', $clave);
                $stm->execute();
                $registros = $stm->fetchAll(PDO::FETCH_ASSOC);

                return $registros;

            }catch(Exception $e){
                echo $e->getMessage();
            }//catch
		}//if
        if ($tecnica == "Liquidos"){
		    $sentencia = "SELECT * from tsreporteliquidos rl join tsimgliquidos using(id) WHERE rl.id = :clave";
            try{
                $stm = $this->db->prepare ($sentencia);
                //$stm->bindValue(':tecnica', $tecnica);
			    $stm->bindValue(':clave', $clave);
                $stm->execute();
                $registros = $stm->fetchAll(PDO::FETCH_ASSOC);

                return $registros;

            }catch(Exception $e){
                echo $e->getMessage();
            }//catch
		}//if
        if ($tecnica == "Dureza"){
		    $sentencia = "SELECT * from tsreportedureza WHERE id = :clave";
            try{
                $stm = $this->db->prepare ($sentencia);
                //$stm->bindValue(':tecnica', $tecnica);
			    $stm->bindValue(':clave', $clave);
                $stm->execute();
                $registros = $stm->fetchAll(PDO::FETCH_ASSOC);

                return $registros;

            }catch(Exception $e){
                echo $e->getMessage();
            }//catch
		}//if

        if ($tecnica == "Analisis Quimico"){
		    $sentencia = "SELECT * from tsreporteanalisis WHERE id = :clave";
            try{
                $stm = $this->db->prepare ($sentencia);
                //$stm->bindValue(':tecnica', $tecnica);
			    $stm->bindValue(':clave', $clave);
                $stm->execute();
                $registros = $stm->fetchAll(PDO::FETCH_ASSOC);
                
                return $registros;

            }catch(Exception $e){
                echo $e->getMessage();
            }//catch
		}//if
		       
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
/*$a = new  BuscarFormatos();
$c = $a->buscarNumReporte("Particulas", "10/04");
echo json_encode($c);*/
