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
        
        <form method="post">
        Ingrese el codigo a eliminar<input type="text" name="id_historial">
        <input type="submit" name="enviar" value="enviar">
        
        </form>
        
        <?php
        if(isset($_POST['enviar'])){
            $id_historial = $_POST['id_historial'];
            include './metodos.php';
            eliminar($id_historial);
        }
                
        
        ?>
        <a href="index.php">regresar</a>
    </body>
</html>
