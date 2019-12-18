<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carrito de compras en PHP</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">    
</head>
<body style="height:2000px;">
    
    <div class="container">
        <div class="jumbotron mt-3">
            <h1 style="color: red;">Carrito de compras en PHP</h1>

            <form action="" method="POST" autocomplete="off">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input class="form-control w-50" id="nombre" type="text" name="nombre">
                </div>

                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input class="form-control w-50" id="descripcion" type="text" name="descripcion">
                </div>

                <input class="btn btn-success mt-3" type="submit" value="Enviar">

            </form>        

        </div>

        <?php

            spl_autoload_register(function($class){
                require "class/$class.class.php";    
            });

            /* require "class/Producto.class.php";
            require "class/Conexion.class.php";
            require "class/Accion.class.php";
            require "class/Carrito.class.php";*/

            $carrito = new Carrito();
            $productos = $carrito->leerProductos();
            /* echo "<pre>";
            var_dump($productos);
            echo "</pre>"; */

            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $nombre = $_POST['nombre'];
                $descripcion = $_POST['descripcion'];
                echo "<p>Producto: $nombre , $descripcion</p>";

                $carrito->guardarProducto($nombre, $descripcion);
                $productos = $carrito->leerProductos();
            }

            if($_SERVER['REQUEST_METHOD'] == 'GET') {
                if(isset($_GET['borrar'])) {
                    $id = $_GET['borrar'];
                    //echo "<p>$borrar</p>";
                    $carrito->borrarProducto($id);
                    $productos = $carrito->leerProductos();
                }
            }


            if(count($productos)) {
                echo "<table class='table text-white'>";
                    echo "<tr class='bg-success'>";
                        echo "<th>ID</th>";
                        echo "<th>NOMBRE</th>";
                        echo "<th>DESCRIPCION</th>";
                        echo "<th>ACCIÓN</th>";
                    echo "</tr>";

                    foreach($productos as $producto) {
                        echo "<tr class='bg-info'>";
                            echo "<td>$producto->id</td>";
                            echo "<td>$producto->nombre</td>";
                            echo "<td>$producto->descripcion</td>";
                            echo "<td>";
                                echo "<form action='' method='GET'>";
                                    echo "<input type='text' name='borrar' value='$producto->id' style='display:none;'>";
                                    echo "<input type='submit' class='btn btn-danger'value='Borrar'>";
                                echo "</form>";
                            echo "</td>";
                        echo "</tr>";
                    }

                    

                echo "</table>";
            }

        ?>

    </div>


</body>
</html>