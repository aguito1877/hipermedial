<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aministracion Especialidad</title>
        <link rel="stylesheet" href="css/select.css">
    </head>
    <?php 
    include 'conexion.php';
    ?>
    <body>
        <div class="contenedor-form">
            <form name="seleccion" action="especialidadAdministracion.php" method="post">
            <center>
            <h2>ESPECIALIDAD</h2>
            </center>
            <center>
            <input type="submit" name="btninsertar" class="btn btn-info btn-lg" value="INSERTAR">
            <input type="submit" name="btnactualizar" class="btn btn-info btn-lg" value="ACTUALIZAR">
            <input type="submit" name="btneliminar" class="btn btn-info btn-lg" value="ELIMINAR">
           
            </center>
            </form>
            
            <form action="administrador.php">
            <input type="submit"  name="BOTONSALIR" class="btn btn-info btn-lg" value="REGRESAR">
            </form>
        
        <?php
        
        $conexion= conectar();
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
        
     
        
        
        if(isset($_POST['btninsertar'])){
            ?>
           <br>
              <br>   <br>
              <form   action="insertarEspecialidad.php" method="POST">
        <table border="1">
            <thead>
                <tr>
                    <th>CODIGO ESPECIALIDAD</th>
                    <th>NOMBRE</th>
                    <th>CENTRO DE SALUD</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" name="id_especialidad"></td>
                    <td><input type="text" name="nombre_especialidad"></td>
                    <td><input type="text" name="centro_saludid_centro_salud"></td>
                    
                </tr>
                <tr>
                    <td><input type="submit" name="insertar" value="insertar"</td>
                    
                </tr>
            </tbody>
        </table>
            
        </form>
        <?php
        }
        
        if(isset($_POST['btneliminar'])){
            ?>
            <br>
              <br>   <br>
              <form   action="eliminarEspecialidad.php" method="POST">
        <table border="1">
            <thead>
                <tr>
                    <th>CODIGO ESPECIALIDAD</th>
                                        
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" name="id_especialidad"></td>
                                        
                </tr>
                <tr>
                    <td><input type="submit" name="eliminar" value="eliminar"</td>
                    
                </tr>
            </tbody>
        </table>
            
        </form>
            
            
         <?php  
        }
    
         if(isset($_POST['btnactualizar'])){
            ?>
            <br>
              <br>   <br>
              <form   action="actualizarEspecialidad.php" method="POST">
        <table border="1">
            <thead>
                <tr>
                    <th>CODIGO ESPECIALIDAD</th>
                                        
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" name="id_especialidad"></td>
                                        
                </tr>
                <tr>
                    <td><input type="submit" name="buscar" value="buscar"</td>
                    
                </tr>
            </tbody>
        </table>
            
        </form>
            
            
         <?php  
        }
    ?>
        </div>
    </body>
</html>
