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
                    <th>CODIGO NATUROPATA</th>
                    <th>NOMBRE</th>
                    <th>TRATAMIENTO</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
            
            $conexion = mysqli_connect('localhost', 'root', '', 'centro_naturopata');
            $query = 'select * from naturopata';
            $obj = mysqli_query($conexion, $query);
            while ($resultado = mysqli_fetch_assoc($obj)) {
                ?>
                <tr>
                    <td><?php echo $resultado['id_naturopata']?></td>
                    <td><?php echo $resultado['nombre_naturopata']?></td>
                    <td><?php echo $resultado['tratamientoid_tratamiento']?></td>
                  
                </tr>
            
              <?php  
            }
            ?>
            </tbody>
        </table>
               <?php 
}

function insertar($id_naturopata,$nombre_naturopata,$tratamientoid_tratamiento) {
    
    $conexion = mysqli_connect('localhost', 'root', '', 'centro_naturopata');
    $query = 'insert into naturopata(id_naturopata,nombre_naturopata,tratamientoid_tratamiento) values (?,?,?)';
    $obj = mysqli_prepare($conexion, $query);
    $resultado = mysqli_stmt_bind_param($obj, 'sss', '$id_naturopata','$nombre_naturopata','$tratamientoid_tratamiento');
    $resultado = mysqli_execute($obj);
    
}


function eliminar($id_naturopata) {
    $conexion = mysqli_connect('localhost', 'root', '', 'centro_naturopata');
    $query = 'delete from historial where(id_historial)=?';
    $obj = mysqli_prepare($conexion, $query);
    $resultado = mysqli_stmt_bind_param($obj, 's', $id_historial);
    $resultado = mysqli_execute($obj);
    
}


function actualizar($id_historial,$diagnostico,$tratamiento,$id_paciente) {
    $conexion = mysqli_connect('localhost', 'root', '', 'centro_naturopata');
    $query = 'update historial SET diagnostico=?, tratamiento=?, id_paciente=?  where(id_historial)=?';
    $obj = mysqli_prepare($conexion, $query);
    $resultado = mysqli_stmt_bind_param($obj, 'ssss', $id_historial,$diagnostico,$tratamiento,$id_paciente);
    $resultado = mysqli_execute($obj);
    
}

function buscar($id_paciente) {
    $conexion = mysqli_connect('localhost', 'root', '', 'centro_naturopata');
    $query = 'select nombre_paciente from paciente where(id_paciente)=?';
         $obj = mysqli_query($conexion, $query);
         while ($resultado = mysqli_fetch_assoc($obj)) {
                    echo $resultado['nombre_paciente'];
            }
}
        ?>
    </body>
</html>
