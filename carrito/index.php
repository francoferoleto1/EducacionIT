<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Carrito de compras PHP</title>
</head>
<body>



   <div class="container-fluid jumbotron"> 

        <h1>Carrito de compras</h1>

    <form action="" method="POST" autocomplete="off">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input class="form-control w-50" id="nombre" type="text" name="nombre">
        </div>

        <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <input class="form-control w-50" id="descripcion" type="text" name="descripcion">
        </div>

        <input class="btn btn-success" type="submit" value="Enviar">

    </form>
   </div> 
    <?php
        require "class/producto.php";
        require "class/conexion.php";
        require "class/accion.php";
        require "class/carrito.php";

        $carrito = new Carrito();
        $productos = $carrito->leerProductos();
        // echo "<pre>";
        // var_dump($productos);
        // echo "</pre>";


        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];


            $carrito->guardarProducto($nombre, $descripcion);
        }

        if(count($productos)){
            echo "<table class='table text-white'>";
                echo "<tr class='bg-success'>";
                    echo "<th>ID</th>";
                    echo "<th>NOMBRE</th>";
                    echo "<th>DESCRIPCION</th>";
                echo "</tr>";

                foreach($productos as $producto){
                echo "<tr class='bg-info'>";
                    echo "<td>$producto->id</td>";
                    echo "<td>$producto->nombre</td>";
                    echo "<td>$producto->descripcion</td>";
                echo "</tr>";
            } 
            echo "</table>";    
        }
    ?>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>