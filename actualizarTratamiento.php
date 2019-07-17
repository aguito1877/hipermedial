<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Actualizar Tratamiento</title>
         <link rel="stylesheet" href="css/select.css">
    </head>
    <body>
        <div class="contenedor-form">
        <?php
        include './conexion.php';
        $conexion= conectar();
        $id_tratamiento=$_POST['id_tratamiento'];
        
        $vec;
        $vec[0]="";
        $vec[1]="";
        $vec[2]="";
        $vec[3]="";
         $cont = 0;
        $select = "SELECT * FROM tratamiento where id_tratamiento='$id_tratamiento' ";
        
        $datos = $conexion->query($select);
            foreach ($datos as $value) {
                foreach ($value as $v) {
                    $vec[$cont] = $v;
                    $cont++;
                }
            }
        ?>
            
            <form action="actualizarTratamiento.php" method="POST">
            <input type="text" name="id_tratamiento" value="<?php echo $vec[0]; ?>">
            <input type="text" name="nombre_tratamiento" value="<?php echo $vec[1]; ?>">
            <input type="text" name="costo_tratamiento" value="<?php echo $vec[2]; ?>">
            <input type="text" name="especialidadid_especialidad" value="<?php echo $vec[3]; ?>">
            <input type="submit" value="Actualizar"  name="actualizar">
        </form>
                
        <?php
        if (isset($_POST['actualizar'])) {
            $id_tratamiento = $_POST['id_tratamiento'];
            $nombre_tratamiento = $_POST['nombre_tratamiento'];
            $costo_tratamiento = $_POST['costo_tratamiento'];
            $especialidadid_especialidad = $_POST['especialidadid_especialidad'];
            
            $actu = "UPDATE tratamiento SET nombre_tratamiento='$nombre_tratamiento' , costo_tratamiento=$costo_tratamiento ,especialidadid_especialidad='$especialidadid_especialidad'WHERE id_tratamiento='$id_tratamiento'";
            if($conexion->query($actu)){
                echo "Actualizado";
            }else{
                echo"No actual";
            }
           
        }
        ?>
            <form action="tratamientoAdministracion.php">
            <input type="submit"  name="BOTONSALIR" class="btn btn-info btn-lg" value="REGRESAR">
            </form>
            </div>
    </body>
</html>
