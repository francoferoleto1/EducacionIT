<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP / Maria DB</title>
</head>
<body>
    

    <?php
        echo "<h2>PHP / MARIADB</h2>";
    try {
        $strconn = 'mysql:host=localhost;dbname=mibase';
        $usuario = 'root';
        $clave = '';
        $pdo = new PDO($strconn, $usuario, $clave); 

        echo "<h2>Base de datos conectada!</h2>";

        /* ----------------------------
                QUERY CON PDO
        -------------------------------*/

    //     $clientes = $pdo->query('select id, email, clave from clientes');

    //     foreach($clientes as $cliente){
    //         echo "<p> Id : $cliente[id]</p>";
    //         echo "<p> email : $cliente[email]</p>";
    //         echo "<p> clave : $cliente[clave]</p>";
    //         echo "<p>-----------------------------</p>";
    //     } 


    // }   
    
    // $PDO = NULL; CERRAR LA CONEXION DE BASE DE DATOS
    
    /* -----------------------------------------------------
    QUERY PARAMETIZADO CON PDO (CON bindValue)
    --------------------------------------------------------*/
    
    $query = 'select id, email, clave from clientes where id=:idbuscado';

    $pdo->prepare($query);

    $pdo->bindValue(':idbuscado','4');

    $pdo->execute();
}    
    catch (Exception $ex) {
            echo "<h2>Error de conexion a la base de datos</h2>";
            echo "<h3>El error es ".$ex->getMessage()."</h3>";
    }
    ?>


</body>
</html>