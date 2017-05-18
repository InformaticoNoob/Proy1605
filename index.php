<?php

session_start();
$_SESSION["saludo"]="Hola Mundo";



?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="revision.php"> Revisi&oacute;n sesi&oacute;n</a>
        <?php if (isset($_SESSION['USR'])){?>
        <form action="revision.php" method="post">
            <div><label>Usuario</label><input type="text" name="nombre"></div>
            <div><label>Clave</label><input type="password" name="clave"></div>
            <input type="submit" value="Acceder">
            
        </form>
        <?php } ?>
        
        <h1>Ejemplos de encriptación con el HASH MD5</h1>
        
        <?php
        echo md5('#holamundo&');
        echo '<br>';
        echo md5('holamundo');
        echo '<br>';
        echo md5('HoLaMundo&');
        echo '<br>';
        echo md5('HOLAmundo');
        echo '<br>';
        
        ?>
        
        
        
    </body>
</html>
