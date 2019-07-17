<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Mostrar</title>
    <link rel="stylesheet" href="css/select.css">
    <meta charset="UTF-8">
    </head>
    <body>
        
        <div class="contenedor-form">
            <form name="seleccion" method="post">
            <center>
            <h2>TABLA</h2>
            </center>
            <center>
            <input type="submit" name="BOTON" class="btn btn-info btn-lg" value="INSERTAR">
            <input type="submit" name="BOTON" class="btn btn-info btn-lg" value="ACTUALIZAR">
            <input type="submit" name="BOTON" class="btn btn-info btn-lg" value="ELIMINAR">
            </center>
            </form>
            <form action="administrador.php">
            <input type="submit"  name="BOTONSALIR" class="btn btn-info btn-lg" value="REGRESAR">
            </form>
        <?php
        $conexion = mysqli_connect('localhost', 'root', '', 'centro_naturopata');
        // put your code here
        include './metodos.php';
        mostar();
        if (isset($_POST['BOTON'])) {
         $variable = $_POST['BOTON'];
         
         switch ($variable) {
             case 'INSERTAR':
                 ?>
            
            <form name="ingreso" method="post">
        <table border="1">
            <thead>
                <tr>
                    <th>CODIGO NATUROPATA</th>
                    <th>NOMBRE</th>
                    <th>TRATAMIENTO QUE DA</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" name="id_naturopata"></td>
                    <td><input type="text" name="nombre_naturopata"></td>
                    <td><input type="text" name="tratamientoid_tratamiento"></td>
                    
                </tr>
                <tr>
                    <td><input type="submit" name="enviar" value="enviar"</td>
                    
                </tr>
            </tbody>
        </table>
            
        </form>
        
        <?php
        if(isset($_POST['enviar'])){
        $id_naturopata = $_POST['id_naturopata'];
        $nombre_naturopata = $_POST['nombre_naturopata'];
        $tratamientoid_tratamiento = $_POST['tratamientoid_tratamiento'];
                
        include './metodos.php';
        insertar($id_naturopata,$nombre_naturopata,$tratamientoid_tratamiento);
        }
        break;
        
        
        case 'ELIMINAR':
            ?>
            <form method="post">
        Ingrese el codigo a eliminar<input type="text" name="id_naturopata">
        <input type="submit" name="enviar" value="enviar">
        
        </form>
        
        <?php
        if(isset($_POST['enviar'])){
            $id_naturopata = $_POST['id_naturopata'];
            include './metodos.php';
            eliminar($id_naturopata);
        }
            break;
        
        
             case 'ACTUALIZAR' :
                 ?>
                 <form method="post">
            
        
        <table border="1">
            <thead>
                <tr>
                    <th>CODIGO HISTORIAL</th>
                    <th>DIAGNOSTICO</th>
                    <th>TRATAMIENTO</th>
                    <th>CODIGO PACIENTE</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" name="id_historial"></td>
                    <td><input type="text" name="diagnostico"></td>
                    <td><input type="text" name="tratamiento"></td>
                    <td><input type="text" name="id_paciente"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="enviar" value="enviar"</td>
                    
                </tr>
            </tbody>
        </table>
            
        </form>
        
        <?php
        if(isset($_POST['enviar'])){
            
        $id_historial = $_POST['id_historial'];
        $diagnostico = $_POST['diagnostico'];
        $tratamiento = $_POST['tratamiento'];
        $id_paciente = $_POST['id_paciente'];
        
        include './metodos.php';
        actualizar($id_historial, $diagnostico, $tratamiento, $id_paciente);
        }
                 
        break;
                }
        }
         
         ?>
               
                    
         </div>
        
    </body>
    </head>
</html>
