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
            $id_tratamiento = $_POST['id_tratamiento'];
            $nombre_tratamiento = $_POST['nombre_tratamiento'];
            $costo_tratamiento = $_POST['costo_tratamiento'];
            $especialidadid_especialidad = $_POST['especialidadid_especialidad'];
                        
            $insertar = "insert into tratamiento(id_tratamiento,nombre_tratamiento,costo_tratamiento,especialidadid_especialidad) values ('$id_tratamiento','$nombre_tratamiento',$costo_tratamiento,'$especialidadid_especialidad')";
            if ($conexion->query($insertar)) {
                echo "Ingresado correctamente";
                
            } else {
                echo"No se ingreso";
            }
        
         $select = "SELECT * FROM tratamiento";
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
            <form action="tratamientoAdministracion.php">
            <input type="submit"  name="BOTONSALIR" class="btn btn-info btn-lg" value="REGRESAR">
            </form>
                 </div> 
    </body>
</html>

