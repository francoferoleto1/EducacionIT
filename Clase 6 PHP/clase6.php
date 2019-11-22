<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Clase 6 - PHP</title>
</head>
<body>


    <?php

        /* -------------------------------------------
                INTERACTUANDO CON STRINGS
         --------------------------------------------- */
        $string = "Hola mundo";
        echo "<h1>Clase 6 PHP!</h1>";

        $cadena = substr($string, 2,5);
        echo "<p>$cadena</p>";

        $cadena = substr($string, 6);
        echo "<p>$cadena</p>";

        /* -------------------------------------------
                SI TIENE PUNTO SALE
         --------------------------------------------- */
        
         /* 

        if(isset($_POST['texto'])){
            $tienePunto = strpos($_POST['texto'],'.');
            // echo "<p>$tienePunto</p>";
            if($tienePunto !== FALSE) {
                echo "<p>El mensaje tiene un punto</p>";
            } 
            else {
                echo "<p>El mensaje no tiene un punto</p>";
            }
        }

        */

        /* -------------------------------------------
                PRIMER Y ULTIMA PALABRA
         --------------------------------------------- */

        if(isset($_POST['texto'])){
            $offset = strrpos($_POST['texto'], ' ');
            echo "<p>$offset</p>";
            
            $primeraPalabra = substr($_POST['texto'], 0, strpos($_POST['texto'],' '));

            echo "<p>La primer palabra es $primeraPalabra</p>";
            
            $ultimaPalabra = substr($_POST['texto'], strpos($_POST['texto'],' '));

            echo "<p>La ultima palabra es $ultimaPalabra</p>";
        }    

         /* -------------------------------------------
                STRTOLOWER Y STRTOUPPER
         --------------------------------------------- */

        $string = "HolA MuNdO";
        $strinAMinuscula = strtolower($string);
        $strinAMayuscula = strtoupper($string);

        echo "<p>El string en minuscula es $strinAMinuscula</p>";
        echo "<p>El string en minuscula es $strinAMayuscula</p>";

        /* -------------------------------------------
               UC WORDS y UCFIRST
         --------------------------------------------- */        

         $string = "hola mundo como estan";
         $string1 = ucwords($string);
         $string2 = ucfirst($string);
 
         echo "<p>UCWORDS: $string1</p>";
         echo "<p>UCFIRST: $string2</p>";
         
         /* -------------------------------------------
               IS_NUMERIC
         --------------------------------------------- */

         $dato = 100;
         if(is_numeric($dato)) {
             echo "<p>El dato $dato es un numero</p>";
         } else echo "<p>El dato $dato no es un numero</p>";

         /* -------------------------------------------
               ISSET 
         --------------------------------------------- */

         $a = 45;

         if(isset($a)){
             echo "<p>La variable existe</p>";
         }
         else {
             echo "<p>La variable NO existe</p>";
         }

         if(empty($a)){
             echo "<p>La variable está vacía</p>";
         } else {
             echo "<p>La variable NO está vacía</p>";
         }


         /* -------------------------------------------
               ROUND / CEIL / FLOOR 
         --------------------------------------------- */         

         $numeroDecimal = 8.9;
         $numeroDecimalRound = round($numeroDecimal);
         $numeroDecimalCeil = ceil($numeroDecimal);
         $numeroDecimalFloor = floor($numeroDecimal);

         echo "<p> ORG: $numeroDecimal</p>";
         echo "<p> ROUND: $numeroDecimalRound</p>";
         echo "<p> CEIL: $numeroDecimalCeil</p>";
         echo "<p> FLOOR: $numeroDecimalFloor</p>";

    ?>

    <form action="" method="POST">
        <input type="text" name="texto">
        <input type="submit" value="Enviar">
    </form>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>