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
        include './conexion.php';
        $conexion= conectar();
        $id_naturopata=$_POST['id_naturopata'];
        
        $vec;
        $vec[0]="";
        $vec[1]="";
        $vec[2]="";
         $cont = 0;
        $select = "SELECT * FROM naturopata where id_naturopata=$id_naturopata ";
        $datos = $conexion->query($select);
           
            foreach ($datos as $value) {
                foreach ($value as $v) {
                    $vec[$cont] = $v;
                    $cont++;
                }
            }
        
        
        ?>
            <form action="actualizarNaturopata.php" method="POST">
            <input type="text" name="id_naturopata" value="<?php echo $vec[0]; ?>">
            <input type="text" name="nombre_naturopata" value="<?php echo $vec[1]; ?>">
            <input type="text" name="tratamientoid_tratamiento" value="<?php echo $vec[2]; ?>">
            <input type="submit" value="Actualizar"  name="actualizar">
        </form>
        <?php
        if (isset($_POST['actualizar'])) {
            $ida = $_POST['id_naturopata'];
            $nombre = $_POST['nombre_naturopata'];
            $tra = $_POST['tratamientoid_tratamiento'];
            $actu = "UPDATE naturopata SET nombre_naturopata='$nombre' and tratamientoid_tratamiento='$tra' WHERE id_naturopata=$ida";
            if($conexion->query($actu)){
                echo "Actualizado";
            }else{
                echo"No actual";
            }
           
        }
        ?>
    </body>
</html>
