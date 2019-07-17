<html>
    <head>
        <meta charset="UTF-8">
        <title>Naturopara insertado</title>
        <link rel="stylesheet" href="css/select.css">
    </head>
    <body>
        <div class="contenedor-form">
        
        <?php
        include './conexion.php';
        $conexion= conectar();
            $id_insumos = $_POST['id_insumos'];
            $nombre_insumos = $_POST['nombre_insumos'];
            $costo_insumo = $_POST['costo_insumo'];
            
            $tratamientoid_tratamiento = $_POST['tratamientoid_tratamiento'];
                        
            $insertar = "insert into insumos(id_insumos,nombre_insumos,costo_insumo,tratamientoid_tratamiento) values ('$id_insumos','$nombre_insumos',$costo_insumo,'$tratamientoid_tratamiento')";
            if ($conexion->query($insertar)) {
                echo "Ingresado correctamente";
                
            } else {
                echo"No se ingreso";
            }
        
         $select = "SELECT * FROM insumos";
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
            <form action="insumosAdministracion.php">
            <input type="submit"  name="BOTONSALIR" class="btn btn-info btn-lg" value="REGRESAR">
            </form>
                 </div> 
    </body>
</html>
