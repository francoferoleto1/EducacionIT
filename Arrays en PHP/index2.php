<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays en php 2</title>
</head>
<body style="height: 2000px;">

    <h1>Arrays en PHP (Parte 2)</h1>
    <h2>Agregar/quitar/reemplazar un elemento en el Array</h2>

    <?php
        echo "<p><u>Agregar</u></p>";
        
        $array= Array(1,2,3,4,5);
        echo "<pre>";
        var_dump($array);
        echo "</pre>";

        $array[] = 6;
        echo "<pre>";
        var_dump($array);
        echo "</pre>";

        $array[10] = 10;
        echo "<pre>";
        var_dump($array);
        echo "</pre>";
        
        $array[11] = 20;
        echo "<pre>";
        var_dump($array);
        echo "</pre>";

        $array['cadena'] = 'Hola';
        echo "<pre>";
        var_dump($array);
        echo "</pre>";

        $array[] = 30;
        echo "<pre>";
        var_dump($array);
        echo "</pre>";

        echo "<p><u>Quitar</u></p>";

        unset($array[3]);
        echo "<pre>";
        var_dump($array);
        echo "</pre>";

        echo "<p><u>Cambiar valor</u></p>";
        $array[10] = 333;
        echo "<pre>";
        var_dump($array);
        echo "</pre>";
    ?>

    <h2>Array dif</h2>

    <?php
        $colores1 = Array("Rojo","Azul","Verde");

        $colores2 = Array("Rojo","Azul","Verde");

        $resultado = array_diff($colores1, $colores2);
        echo "<pre>";
        var_dump($resultado);
        echo "</pre>";
    ?>

</body>
</html>