<html>  
<head>     
    <title>Conexion a MYSQL</title>  
    <link rel="stylesheet" href="css/select.css">
    <meta charset="UTF-8">
</head>  
<body>


    <?php
   // session_start();
    ?>
    <h2>Connected to MYSQL: Bienvenido Usuario:<?php print $_SESSION['user']?>;</h2>    

    <div class="contenedor-form">              
        
            
               <?php 
               // include('conexion_procedimientos.php');
                ?>

        <form action="confirmacion_historial.php" method="post">
            <center>
            <h3>HISTORIA MEDICA PACIENTE</h3>            
            <hr>
            <h2>DATOS PERSONALES</h2>            
            <table border="1">
                <thead>
                    <tr>
                        <th>NOMBRE PACIENTE</th>
                        <th>APELLIDO PACIENTE</th>
                        <th>CEDULA PACIENTE</th>
                        <th>CORREO PACIENTE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="nombre_paciente"></td>
                        <td><input type="text" name="apellido_paciente"></td>
                        <td><input type="text" name="cedula_paciente"></td>
                        <td><input type="text" name="correo_paciente"></td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <h2>DATOS DE INGRESO</h2> 
            <table border="1">
                <thead>
                    <tr>
                        <th>PRESION ARTERIAL</th>
                        <th>TEMPERATURA</th>
                        <th>PESO</th>
                        <th>ALTURA</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="presion_arterial"></td>
                        <td><input type="text" name="temperatura"></td>
                        <td><input type="text" name="peso"></td>
                        <td><input type="text" name="altura"></td>
                    </tr>                    
                </tbody>
            </table>

            </center>
            <div class="textarea">
            <hr>
            <h2>DIAGNOSTICO</h2>
            <textarea name="diagnostico" rows="4" cols="20">
                
            </textarea>
            </div>
            <div class="select">
            <hr>
            <h2>TERAPIA</h2>
            <select name="terapia">
                <option value="ACUPUNTURA">ACUPUNTURA</option>
                <option value="IMANES">IMANES</option> 
                <option value="AROMATERAPIA">AROMATERAPIA</option> 
            </select>
            <select name="numero_terapia">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>                
            </select>
            
            
            
            <hr>
            <h2>NATUROPATA</h2>
            <select name="naturopata">
                <option value="XAVIER">XAVIER</option>
                <option value="SANTIAGO">SANTIAGO</option>            
            </select>
            </div>
            <center>
                       
            <hr>
            <h2>DATOS DE RESPONSABLE DE INGRESO</h2>            
            <table border="1">
                <thead>
                    <tr>
                        <th>NOMBRE RESPONSABLE</th>
                        <th>APELLIDO RESPONSABLE</th>
                        <th>CEDULA RESPONSABLE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="nombre_responsable"></td>
                        <td><input type="text" name="apellido_responsable"></td>
                        <td><input type="text" name="cedula_responsable"></td>
                    </tr>
                </tbody>
            </table>
            </center>
            
            <input type="submit" name="confirmar" value="confirmar">
            <input type="reset" name="resetear" value="resetear">
        </form>
    </div>
        
        <?php
        // put your code here
        ?>
 

</body>  
</html> 