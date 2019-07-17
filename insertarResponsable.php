<html>
    <head>
        <meta charset="UTF-8">
        <title>Persona Responsable insertado</title>
        <link rel="stylesheet" href="css/select.css">
    </head>
    <body>
        <div class="contenedor-form">
        
        <?php
        include './conexion.php';
        $conexion= conectar();
            $id_responsable = $_POST['id_responsable'];
            $nombre_responsable = $_POST['nombre_responsable'];
            $clave = $_POST['clave'];
                        
            $insertar = "insert into responsable_registro(id_responsable,nombre_responsable,clave) values ('$id_responsable','$nombre_responsable','$clave')";
            if ($conexion->query($insertar)) {
                echo "Ingresado correctamente";
                
            } else {
                echo"No se ingreso";
            }
        
         $select = "SELECT id_responsable,nombre_responsable FROM responsable_registro";
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
            <form action="responsableAdministracion.php">
            <input type="submit"  name="BOTONSALIR" class="btn btn-info btn-lg" value="REGRESAR">
            </form>
                 </div> 
    </body>
</html>
