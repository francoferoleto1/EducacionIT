<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Arrays en PHP</title>

    <style>
        table, tr ,th, td {
            border: 1px solid black;
            border collapse: collapse;
        }
    </style>
</head>
<body style="height: 2000px">

    <h1>Arrays en php</h1>

    <?php
        $colores = Array("Rojo","Azul","Verde","Violeta","Amarillo","Celeste");
    ?>

    <p><u>Tipo de array y sus elementos</u></p>    
    
    <pre>
    <?php
        var_dump($colores);
    ?>
    </pre>

    <p><u>Acceso con notación corchete</u></p>

    <?php
        echo "<p>El color en el indice 0 es $colores[0]</p>";
    ?>


    <?php
        $colores2 = Array(20=>"Rojo",1=>"Azul",2=>"Verde",3=>"Violeta");
        
        echo "<p>El color en el indice 20 es $colores2[20]</p>";
        ?>


    <pre>
        <?php
            var_dump($colores2);
        ?>
    </pre>

    <!-- ------------------- -->

    <h2>Arrays y strings</h2>

    <?php
        $string = "Hola mundo! como estas?";

        echo "<p>$string</p>";
        echo "<p>El caracter 0 del string es $string[0]</p>";
        echo "<p>El caracter 1 del string es $string[1]</p>";

        $array = explode(' ', $string);
        echo "<pre>";
        var_dump($array);
        echo "</pre>";

        $newString = implode('teddy', $array);
        echo "$newString";
    ?>
    
    <!-- ---------------------- -->

    <h2>Ciclo For para recorrer Arrays</h2>

    <?php

        $cantidadTotal = sizeof($colores);

        echo "<p>La cantidad de colores es: $cantidadTotal</p>";

        for($i=0; $i<sizeof($colores); $i++){
            echo "<p>$colores[$i]</p>";

        }

    ?>

    <!-- --------------- -->
    <!--Indices Asociados -->
    <!-- --------------- -->

    <h2>Indices Asociados</h2>

    <?php
        $persona = Array(
            "nombre" => "Joseph",
            "apellido" => "Richardson",
            "edad" => "24",
            "dni" => "20543678"
        );

        echo "<pre>";
        var_dump($persona);
        echo "</pre>";

        echo $persona["nombre"];
    ?>

        <!-- Tabla -->

    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>DNI</th>        
        </tr>
        <tr>
            <td><?= $persona["nombre"];?></td>
            <td><?= $persona["apellido"];?></td>
            <td><?= $persona["edad"];?></td>
            <td><?= $persona["dni"];?></td>
        </tr>
    </table>


    <h2>Ciclo Foreach</h2>

    <?php

        $coloresactivos = Array(
            "color 1" => "Rojo",
            "color 2" => "Azul",
            "color 3" => "Verde",
            "color 4" => "Violeta",
            "color 5" => "Amarillo",
            "color 6" => "Celeste"
        );



        foreach($colores as $color){
            echo "<p>$color</p>";
        }
    ?>


</body>










<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>