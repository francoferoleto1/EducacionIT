<?php 
    class Carrito {
        
        public function guardarProducto($nombre, $descripcion){
            try {
                $conexion = new Conexion('dbcarrito');
                $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $accion = new Accion($conexion);
                $accion->guardar($nombre, $descripcion);
                $conexion = NULL;
            }
            catch(Exception $ex){
                echo "<p>Hubo un error en la conexion</p>";
                echo "<p>{$ex->getMessage()}</p>";
                echo "<p>{$ex->getCode()}</p>";
            }
        }
        public function leerProductos(){
                $conexion = new Conexion('dbcarrito');
                $accion = new Accion($conexion);
                $prod = $accion->leer();
                $conexion = NULL;

                return $prod;

        }

        public function borrarProducto($id){
            
        }
    }

?>