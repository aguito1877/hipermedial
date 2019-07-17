<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Actualizar Responsable</title>
         <link rel="stylesheet" href="css/select.css">
    </head>
    <body>
        <div class="contenedor-form">
        <?php
        include './conexion.php';
        $conexion= conectar();
        $id_responsable=$_POST['id_responsable'];
        
        $vec;
        $vec[0]="";
        $vec[1]="";
        $vec[2]="";
         $cont = 0;
        $select = "SELECT * FROM responsable_registro where id_responsable='$id_responsable' ";
        
        $datos = $conexion->query($select);
            foreach ($datos as $value) {
                foreach ($value as $v) {
                    $vec[$cont] = $v;
                    $cont++;
                }
            }
        ?>
            
            <form action="actualizarResponsable.php" method="POST">
            <input type="text" name="id_responsable" value="<?php echo $vec[0]; ?>">
            <input type="text" name="nombre_responsable" value="<?php echo $vec[1]; ?>">
            <input type="text" name="clave" value="<?php echo $vec[2]; ?>">
            <input type="submit" value="Actualizar"  name="actualizar">
        </form>
                
        <?php
        if (isset($_POST['actualizar'])) {
            $id_responsable = $_POST['id_responsable'];
            $nombre_responsable = $_POST['nombre_responsable'];
            $clave = $_POST['clave'];
            
            $actu = "UPDATE responsable_registro SET nombre_responsable='$nombre_responsable' , clave='$clave' WHERE id_responsable='$id_responsable'";
            if($conexion->query($actu)){
                echo "Actualizado";
            }else{
                echo"No actual";
            }
           
        }
        ?>
            <form action="responsableAdministracion.php">
            <input type="submit"  name="BOTONSALIR" class="btn btn-info btn-lg" value="REGRESAR">
            </form>
            </div>
    </body>
</html>

