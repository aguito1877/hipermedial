<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Eliminar Naturopata</title>
        <link rel="stylesheet" href="css/select.css">
    </head>
    <body>
        <div class="contenedor-form">
        
        <?php
        include './conexion.php';
        $conexion= conectar();
            $id_naturopata = $_POST['id_naturopata'];
                                    
            $eliminar = "delete from naturopata where id_naturopata= '$id_naturopata'";
            if ($conexion->query($eliminar)) {
                echo "Borrado correctamente";
                
            } else {
                echo"No se Borro";
            }
        
         $select = "SELECT * FROM naturopata";
        $datos = $conexion->query($select);
        echo "<table border =1>";
        foreach ($datos as $value) {
            echo "<tr>";
            foreach ($value as $v) {

                echo"<td> $v</td>";
            }
            echo"</tr>";
        }
        echo "</table >";
        ?>
            <form action="naturopataAdministracion.php">
            <input type="submit"  name="BOTONSALIR" class="btn btn-info btn-lg" value="REGRESAR">
            </form>
                 </div> 
    </body>
</html>
