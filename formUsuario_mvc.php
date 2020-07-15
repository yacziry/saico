<?php
@$msgUser = $_REQUEST['msgUser'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset ="UTF-8">
    <!-- ICONO PESTAÑA -->
    <link href="/AICO/img/IC.png" rel="icon">
    <title>login</title>
    <link rel="stylesheet" href="/AICO/css/main.css">
</head>
<body>
    <div class="error">
        <span><?php echo @$msgUser; ?></span>
    </div>
    <div class="main">
        <form action="validaUsuario_mcv.php" id="formlg" method="POST">
            <input type="text" name="deUsuario" placeholder="Usuario" required>
            <input type="password" name="dePassword" placeholder="Contrase&ntilde;a" required>
            <a class="vinculos">A&uacute;n no tienes contrase&ntilde;a?</a> <a class="vinculos" href="formCrearPass.php">Crear</a><br>
            <a class="vinculos">Has olvidado tu contrase&ntilde;a?</a> <a class="vinculos" href="formRecuperarPass.php">Recuperar</a>
            <input type="submit" class="botonlg" value="Iniciar Sesion">
        </form>        
    </div>
    <!--script src="<--https://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="/AICO/js/main.js"></script-->
</body>
</html>