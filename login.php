<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/estilos.css">
</head> 
<body>
    <div class="contenedor-form">
        <div class="toggle">
            <span> Crear Cuenta</span>
        </div>
        
        <div class="formulario">
            <h2>Iniciar Sesión</h2>
                          

<?php
       
        if (!$_POST) {
            ?>
        <form method="post"> 
                <input name="usuario" placeholder="Usuario" type="text" id="username1" required>
                <input name="contrasena" placeholder="Contraseña" type="password" id="password1" required>
                <input type="submit" name="Submit" value="Iniciar Sesión">
            </form>
            
            
            <?php
        } else {
            try{
                $base=new PDO("mysql:host=localhost; dbname=centro_naturopata","root","");
                
                $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                
                $sql="select *from responsable_registro where nombre_responsable=:usu and clave=:con";
                
                $resultado=$base->prepare($sql);
                
                //htmlentities convierte caracteres en html y addslashes no toma en cuenta carcteres extranios como . , " ' etc
                $loggin=htmlentities(addslashes($_POST["usuario"]));
                $pass=htmlentities(addslashes($_POST["contrasena"]));
                
                //usamos bindValue por usar marcadores
                $resultado->bindValue(":usu",$loggin);
                $resultado->bindValue(":con",$pass);
                
                $resultado->execute();
                
                $numeroReg=$resultado->rowCount();//devuelve el numero de regisros que encuentra 
                

                //valido si el usuario esta o no el la DB
                if($numeroReg!=0){
                    //se crea una sesion para el usuario que si existe
                    session_start();
                    //guardamos en la variable superglobal la sesion
                    $_SESSION["user"]=$_POST["usuario"];
                    
                    //dirigimos al usuario a la pagia de loggin
                    header("location:historial_medico.php");
                }else{
                    header("location:login.php"); //se reedirige al usuario a la pagina de loggin nuevamente
                }
                
            }catch(Exception $e){
                echo "El error es: " . $e->getMessage();
            }
        
        }
        ?>



                
        </div>
        
        <div class="formulario">
            <h2>Crea tu Cuenta</h2>
            <form action="Mensaje_Creado_Usuario.php" method="post">
                <input type="text" name="Nombre" placeholder="Nombre" required>
                <input type="text" name="Apellido" placeholder="Apellido" required>
                <input type="text" name="Cedula" placeholder="Cédula" required>
                <input type="text" name="Correo" placeholder="Nombre Usuario" required>
                <input type="password" name="Contrasena" placeholder="Contraseña" required>       
                <input type="text" name="Edad" placeholder="Edad" required>
                <input type="text" name="Direccion" placeholder="Dirección" required>
                <input type="text" name="Telefono" placeholder="Teléfono" required>
                <input type="text" name="Celular" placeholder="Celular" required>
                <input type="text" name="Sexo" placeholder="Sexo" required>
               
                <input type="submit" value="Registrarse">
            </form>
        </div>
       
    </div>
    

    <script src="js/jquery-3.1.1.min.js"></script>    
    <script src="js/main.js"></script>
</body>
</html>