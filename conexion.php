<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        function conectar() {


    $con = mysqli_connect("localhost", "root", "", "centro_naturopata")or die("No conectado");
    return$con;
}
        ?>
    </body>
</html>
