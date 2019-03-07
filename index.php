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
            echo "Hola Mundo2"
        ?>
        <br>
        variables de entorno $_server
        <br>
        <!--pre ordena la informacion(?)-->
        <pre>
            <?php
                //comentario
                /*comentario indefinido
                * 
                */
                var_dump($_SERVER);
            ?>
        </pre>
        <br>
        Variables
        <br>
        <!--Lasvariables se declaran como iniciando con $-->
        <?php
            $saludo="Mundo Variable";
            echo "Hola ".$saludo;
        ?>        
    </body>
</html>
