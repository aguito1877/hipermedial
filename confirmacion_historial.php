<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Confirmacion Historial</title>  
    <link rel="stylesheet" href="css/select.css">
    <meta charset="UTF-8">
    </head>
    <body>
        <div class="contenedor-form">   
            <form action="factura_final.php" method="post">
    <center>
        <h3>CONFIRMACION DATOS HISTORIAL</h3>
        <hr>
        <h2>DATOS INGRESADOS</h2>
        <hr>
    </center>
            
        <?php
        // put your code here
        $nombre_paciente = $_POST['nombre_paciente'];
        $apellido_paciente = $_POST['apellido_paciente'];
        $cedula_paciente = $_POST['cedula_paciente'];
        $correo_paciente = $_POST['correo_paciente'];
        
        echo '<br>NOMBRE PACIENTE: '.$nombre_paciente;
        echo '<br>APELLIDO PACIENTE: '.$apellido_paciente;
        echo '<br>CEDULA PACIENTE: '.$cedula_paciente;
        echo '<br>CORREO PACIENTE: '.$correo_paciente;
        
        $presion_arterial = $_POST['presion_arterial'];
        $temperatura = $_POST['temperatura'];
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        
        echo '<br>PRESION ARTERIAL: '.$presion_arterial;
        echo '<br>TEMPERATURA: '.$temperatura;
        echo '<br>PESO: '.$peso;
        echo '<br>ALTURA: '.$altura;
        
        $diagnostico = $_POST['diagnostico'];
        
        echo '<br>DIAGNOSTICO: '.$diagnostico;
        
        $terapia = $_POST['terapia'];        
        
        switch ($terapia) {
            case 'ACUPUNTURA':
                echo '<br>TRATAMIENTO 1';
                break;
            
            case 'IMANES':
                echo '<br>TRATAMIENTO 2';
                break;
            
            case 'AROMATERAPIA':
                echo '<br>TRATAMIENTO 3';
                break;

            default:
                break;
        }
        $numero_terapia = $_POST['numero_terapia'];
        
        echo '<br>NUMERO DE TERAPIAS: '.$numero_terapia;
        
        $naturopata = $_POST['naturopata'];
        echo '<br>NATUROPATA A TRATAR: '.$naturopata;
        
        $nombre_responsable = $_POST['nombre_responsable'];
        $apellido_responsable = $_POST['apellido_responsable'];
        $cedula_responsable = $_POST['cedula_responsable'];
        
        echo '<br>NOMBRE RESPONSABLE: '.$nombre_responsable;
        echo '<br>APELLIDO RESPONSABLE: '.$apellido_responsable;
        echo '<br>CEDULA RESPONSABLE: '.$cedula_responsable;     
        
        ?>
            <br><input type="submit" name="confirmar" value="confirmar">
            <br><a href="historial_medico.php">CANCELAR INGRESO DE DATOS</a>
            </form>
    </div>
    </body>
</html>
