<?php 


$destinatario = "yacziry.lara@outlook.com"; 
$asunto = "Recuperar password"; 
$cuerpo = ' 
<html> 
<head> 
   <title>Recuperacion</title> 
</head> 
<body> 
<h1>Recuperamos tu contraseña!</h1> 
<p> 
<b>Bienvenidos a recuperacion de contraseñas</b>.
Esta es tu contraseña:
 
</p> 
</body> 
</html> 
'; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From: Yacziry Gomez <yacziry.gomez@aicosc.com>\r\n"; 

//dirección de respuesta, si queremos que sea distinta que la del remitente 
//$headers .= "Reply-To: yacziry.lara@outlook.com\r\n"; 

//ruta del mensaje desde origen a destino 
//$headers .= "Return-path: holahola@desarrolloweb.com\r\n"; 

//direcciones que recibián copia 
//$headers .= "Cc: maria@desarrolloweb.com\r\n"; 

//direcciones que recibirán copia oculta 
//$headers .= "Bcc: pepe@pepe.com,juan@juan.com\r\n"; 

mail($destinatario,$asunto,$cuerpo,$headers) 
?>