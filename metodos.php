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
        
        function mostar() {
            ?>
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
                <?php
            
            $conexion = mysqli_connect('localhost', 'root', '', 'msp');
            $query = 'select * from historial';
            $obj = mysqli_query($conexion, $query);
            while ($resultado = mysqli_fetch_assoc($obj)) {
                ?>
                <tr>
                    <td><?php echo $resultado['id_historial']?></td>
                    <td><?php echo $resultado['diagnostico']?></td>
                    <td><?php echo $resultado['tratamiento']?></td>
                    <td><?php echo $resultado['id_paciente']?></td>
                </tr>
            
              <?php  
            }
            ?>
            </tbody>
        </table>
               <?php 
}

function insertar($id_historial,$diagnostico,$tratamiento,$id_paciente) {
    
    $conexion = mysqli_connect('localhost', 'root', '', 'msp');
    $query = 'insert into historial(id_historial,diagnostico,tratamiento,id_paciente) values (?,?,?,?)';
    $obj = mysqli_prepare($conexion, $query);
    $resultado = mysqli_stmt_bind_param($obj, 'ssss', $id_historial,$diagnostico,$tratamiento,$id_paciente);
    $resultado = mysqli_execute($obj);
    
}


function eliminar($id_historial) {
    $conexion = mysqli_connect('localhost', 'root', '', 'msp');
    $query = 'delete from historial where(id_historial)=?';
    $obj = mysqli_prepare($conexion, $query);
    $resultado = mysqli_stmt_bind_param($obj, 's', $id_historial);
    $resultado = mysqli_execute($obj);
    
}


function actualizar($id_historial,$diagnostico,$tratamiento,$id_paciente) {
    $conexion = mysqli_connect('localhost', 'root', '', 'msp');
    $query = 'update historial SET diagnostico=?, tratamiento=?, id_paciente=?  where(id_historial)=?';
    $obj = mysqli_prepare($conexion, $query);
    $resultado = mysqli_stmt_bind_param($obj, 'ssss', $id_historial,$diagnostico,$tratamiento,$id_paciente);
    $resultado = mysqli_execute($obj);
    
}

function buscar($id_paciente) {
    $conexion = mysqli_connect('localhost', 'root', '', 'msp');
    $query = 'select nombre_paciente from paciente where(id_paciente)=?';
         $obj = mysqli_query($conexion, $query);
         while ($resultado = mysqli_fetch_assoc($obj)) {
                    echo $resultado['nombre_paciente'];
            }
}
        ?>
    </body>
</html>
