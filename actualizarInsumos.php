<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Actualizar Insumos</title>
         <link rel="stylesheet" href="css/select.css">
    </head>
    <body>
        <div class="contenedor-form">
        <?php
        include './conexion.php';
        $conexion= conectar();
        $id_insumos=$_POST['id_insumos'];
        
        $vec;
        $vec[0]="";
        $vec[1]="";
        $vec[2]="";
        $vec[3]="";
        
         $cont = 0;
        $select = "SELECT * FROM insumos where id_insumos='$id_insumos' ";
        
        $datos = $conexion->query($select);
            foreach ($datos as $value) {
                foreach ($value as $v) {
                    $vec[$cont] = $v;
                    $cont++;
                }
            }
        ?>
            
            <form action="actualizarInsumos.php" method="POST">
            <input type="text" name="id_insumos" value="<?php echo $vec[0]; ?>">
            <input type="text" name="nombre_insumos" value="<?php echo $vec[1]; ?>">
            <input type="text" name="costo_insumo" value="<?php echo $vec[2]; ?>">
            <input type="text" name="tratamientoid_tratamiento" value="<?php echo $vec[3]; ?>">
            <input type="submit" value="Actualizar"  name="actualizar">
        </form>
                
        <?php
        if (isset($_POST['actualizar'])) {
            $id_insumos = $_POST['id_insumos'];
            $nombre_insumos = $_POST['nombre_insumos'];
            $costo_insumo = $_POST['costo_insumo'];
            $tra = $_POST['tratamientoid_tratamiento'];
            
            $actu = "UPDATE insumos SET nombre_insumos='$nombre_insumos' , costo_insumo=$costo_insumo,tratamientoid_tratamiento='$tra' WHERE id_insumos='$id_insumos'";
            if($conexion->query($actu)){
                echo "Actualizado";
            }else{
                echo"No actual";
            }
           
        }
        ?>
            <form action="insumosAdministracion.php">
            <input type="submit"  name="BOTONSALIR" class="btn btn-info btn-lg" value="REGRESAR">
            </form>
            </div>
    </body>
</html>
