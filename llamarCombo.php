<?php
include 'normasDAO.php';

$x = new  Normas();
$a = $x->buscarNormas2();
echo json_encode($a);