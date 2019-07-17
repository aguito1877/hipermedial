<html>
    <head>
        <meta charset="UTF-8">
        <title>Especialidad insertado</title>
        <link rel="stylesheet" href="css/select.css">
    </head>
    <body>
        <div class="contenedor-form">
        
        <?php
        include './conexion.php';
        $conexion= conectar();
            $id_especialidad = $_POST['id_especialidad'];
            $nombre_especialidad = $_POST['nombre_especialidad'];
            $centro_saludid_centro_salud = $_POST['centro_saludid_centro_salud'];
                        
            $insertar = "insert into especialidad(id_especialidad,nombre_especialidad,centro_saludid_centro_salud) values ('$id_especialidad','$nombre_especialidad','$centro_saludid_centro_salud')";
            if ($conexion->query($insertar)) {
                echo "Ingresado correctamente";
                
            } else {
                echo"No se ingreso";
            }
        
         $select = "SELECT * FROM especialidad";
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
            <form action="especialidadAdministracion.php">
            <input type="submit"  name="BOTONSALIR" class="btn btn-info btn-lg" value="REGRESAR">
            </form>
                 </div> 
    </body>
</html>

