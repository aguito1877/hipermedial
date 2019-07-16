<?php   
 //parametros de la conexion a la BBDD
 require("parametros_conexion.php");

 //crear la conexio por procedimientos
 $conexion=mysqli_connect($bd_host,$db_usuario,$db_contra); 
 
 //validamos si la conexion tiene o no exito
 if(mysqli_connect_errno()){
    include ('Mensaje_Acceso_Negado.html');
    
     exit();
 }
 
 
 //especificar con la base de datos con la que se va a conectar es mejor hacerlo de esta manera 
 mysqli_select_db($conexion, $db_nombre) or die ("no se encuentra la base de datos");
echo "exito en la conexion";

//mysqli_close($conexion);
?>