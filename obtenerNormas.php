<?php
require 'normasDAO.php';
$param = $_POST["parametro"];
$x  = new  Normas();
$a = $x->buscarNormaSelected($param);
echo json_encode($a);

?>