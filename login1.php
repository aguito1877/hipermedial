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
            Administrador
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
                $base=new PDO("mysql:host=localhost; dbname=veris","root","");
                
                $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                
                $sql="select *from paciente where PAC_USUARIO=:usu and PAC_PASSWORD	=:con";
                
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
                    header("location:administrador.php");
                }else{
                    header("location:login1.php"); //se reedirige al usuario a la pagina de loggin nuevamente
                }
                
            }catch(Exception $e){
                echo "El error es: " . $e->getMessage();
            }
        
        }
        ?>
                
        </div>
        
        
       
    </div>
    

    <script src="js/jquery-3.1.1.min.js"></script>    
    <script src="js/main.js"></script>
</body>
</html>