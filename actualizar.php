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
            
        
        <table border="1">
            <thead>
                <tr>
                    <th>CODIGO HISTORIAL</th>
                    <th>DIAGNOSTICO</th>
                    <th>TRATAMIENTO</th>
                    <th>CODIGO PACIENTE</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" name="id_historial"></td>
                    <td><input type="text" name="diagnostico"></td>
                    <td><input type="text" name="tratamiento"></td>
                    <td><input type="text" name="id_paciente"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="enviar" value="enviar"</td>
                    
                </tr>
            </tbody>
        </table>
            
        </form>
        
        <?php
        if(isset($_POST['enviar'])){
            
        $id_historial = $_POST['id_historial'];
        $diagnostico = $_POST['diagnostico'];
        $tratamiento = $_POST['tratamiento'];
        $id_paciente = $_POST['id_paciente'];
        
        include './metodos.php';
        actualizar($id_historial, $diagnostico, $tratamiento, $id_paciente);
        }
        ?>
        <a href="index.php">regresar</a>
    </body>
</html>
