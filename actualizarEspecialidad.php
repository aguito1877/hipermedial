<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Actualizar Especialidad</title>
         <link rel="stylesheet" href="css/select.css">
    </head>
    <body>
        <div class="contenedor-form">
        <?php
        include './conexion.php';
        $conexion= conectar();
        $id_especialidad=$_POST['id_especialidad'];
        
        $vec;
        $vec[0]="";
        $vec[1]="";
        $vec[2]="";
         $cont = 0;
        $select = "SELECT * FROM especialidad where id_especialidad='$id_especialidad' ";
        
        $datos = $conexion->query($select);
            foreach ($datos as $value) {
                foreach ($value as $v) {
                    $vec[$cont] = $v;
                    $cont++;
                }
            }
        ?>
            
            <form action="actualizarEspecialidad.php" method="POST">
            <input type="text" name="id_especialidad" value="<?php echo $vec[0]; ?>">
            <input type="text" name="nombre_especialidad" value="<?php echo $vec[1]; ?>">
            <input type="text" name="centro_saludid_centro_salud" value="<?php echo $vec[2]; ?>">
            <input type="submit" value="Actualizar"  name="actualizar">
        </form>
                
        <?php
        if (isset($_POST['actualizar'])) {
            $id_especialidad = $_POST['id_especialidad'];
            $nombre_especialidad = $_POST['nombre_especialidad'];
            $centro_saludid_centro_salud = $_POST['centro_saludid_centro_salud'];
            
            $actu = "UPDATE especialidad SET nombre_especialidad='$nombre_especialidad' , centro_saludid_centro_salud='$centro_saludid_centro_salud' WHERE id_especialidad='$id_especialidad'";
            if($conexion->query($actu)){
                echo "Actualizado";
            }else{
                echo"No actual";
            }
           
        }
        ?>
            <form action="especialidadAdministracion.php">
            <input type="submit"  name="BOTONSALIR" class="btn btn-info btn-lg" value="REGRESAR">
            </form>
            </div>
    </body>
</html>
