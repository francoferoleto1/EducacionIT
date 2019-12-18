<?php
    class Carrito {
        
        const DB = 'dbcarrito';
        const USUARIO = 'root';
        const PASSWORD = '';

        public function guardarProducto($nombre, $descripcion) {
            try {
                $conexion = new Conexion(Carrito::DB, Carrito::USUARIO, Carrito::PASSWORD);

                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $accion = new Accion($conexion);
                $accion->guardar($nombre, $descripcion);
                $conexion = NULL;
            }
            catch(Exception $ex) {
                echo "<p>Hubo un error en el acceso a la base de datos</p>";
                echo "<p>{$ex->getMessage()}</p>";
                echo "<p>{$ex->getCode()}</p>";
            }
        }

        public function leerProductos() {
            try {
                $conexion = new Conexion(Carrito::DB, Carrito::USUARIO, Carrito::PASSWORD);
                
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $accion = new Accion($conexion);
                $prod = $accion->leer();
                $conexion = NULL;

                return $prod;
            }
            catch(Exception $ex) {
                echo "<p>Hubo un error en el acceso a la base de datos</p>";
                echo "<p>{$ex->getMessage()}</p>";
                echo "<p>{$ex->getCode()}</p>";
            }                
        }


        public function borrarProducto($id) {
            try {
                $conexion = new Conexion(Carrito::DB, Carrito::USUARIO, Carrito::PASSWORD);

                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $accion = new Accion($conexion);
                $accion->borrar($id);
                $conexion = NULL;
            }
            catch(Exception $ex) {
                echo "<p>Hubo un error en el acceso a la base de datos</p>";
                echo "<p>{$ex->getMessage()}</p>";
                echo "<p>{$ex->getCode()}</p>";
            }
        }

    }
?>