<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Archivos</title>
</head>
<body>
    
    <?php
        echo "<h2>PHP Archivos Parte 2</h2>";

        /* -----------------------------------------
            LECTURA CON FILE    
        -------------------------------------------*/


        // $archivoLocal = file('https://www.google.com.ar/?hl=es-419');
        // echo "<p>";
        // var_dump($archivoLocal);
        // echo "</p>";

        /* -----------------------------------------
            LECTURA CON FILE EXISTS
        -------------------------------------------*/

        $archivo = 'texto.txt';
        if(file_exists($archivo)) {
            echo "<p>El archivo $archivo existe</p>";
        } 
        else { 
            echo "<p>El archivo $archivo no existe</p>";
        }

        /* -----------------------------------------
            VERIFICAR SI UN ARCHIVO ES LEGIBLE  
        -------------------------------------------*/

        if(is_readable($archivo)) {
            echo "<p>El archivo $archivo esta habilitado para lectura</p>";
        } 
        else { 
            echo "<p>El archivo $archivo no esta habilidato para lectura</p>";
        }

        /* -------------------------------------------
            VERIFICAR SI UN ARCHIVO SE PUEDE ESCRIBIR 
        ----------------------------------------------*/

        if(is_writable($archivo)) {
            echo "<p>El archivo $archivo esta habilitado para escritura</p>";
        } 
        else { 
            echo "<p>El archivo $archivo no esta habilidato para escritura</p>";
        }

        /* -----------------------------------------
            RENOMBRAR ARCHIVOS O BORRARLOS    
        -------------------------------------------*/
        // $archivoNuevo = 'textoNuevo.txt';

        // if(is_writable($archivo)){
        //     if(rename($archivo, $archivoNuevo)) {
        //         echo "<p>El archivo $archivo fue nombrado a $archivoNuevo</p>";
        //     }
        //     else {
        //         echo "<p>El archivo no se cambio de nombre</p>";
        //     }
        // }
        // else{
        //     echo "<p>"
        // }   

        /* -----------------------------------------
            RENOMBRAR ARCHIVOS O BORRARLOS    
        -------------------------------------------*/
        echo "<h3>Estructura de ".__DIR__."</h3";
        $dp = opendir(__DIR__);
        while($archivo = readdir($dp)) {
            echo "<p>$archivo</p>";
            $rutaCompleta = __DIR__.'\\'.$archivo;
            $tipoDeEntrada = "un ARCHIVO";
            if(is_dir($rutaCompleta)){
                $tipoDeEntrada = 'una CARPETA';
            } 
            echo "<p>La entrada $archivo es $tipoDeEntrada</p>";
        }
        closedir($dp);
        /* -----------------------------------------
            CREAR CARPETA (directorio)    
        -------------------------------------------*/

        /*
        $nombreCarpeta = "imagenes"
        if(mkdir($nombreCarpeta)){
            echo "<p>Se ha creado la carpeta $nombreCarpeta</p>";
        }
        */

    ?>

</body>
</html>