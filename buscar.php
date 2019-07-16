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
        <?php
        // put your code here
             
        
        ?>
        <form method="post">
        Ingrese el codigo<input type="text" name="id_paciente">
        <input type="submit" name="enviar" value="enviar">
        
        </form>
        
        <?php
        
        if(isset($_POST['enviar'])){
        $id_paciente = $_POST['id_paciente'];
        include './metodos.php';
        buscar($id_paciente);
        }
        ?>
        <a href="index.php">regresar</a>
    </body>
</html>
