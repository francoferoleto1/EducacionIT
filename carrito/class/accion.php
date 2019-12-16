<?php 
    class Accion {
        public $conexion = NULL;
        public function __construct(Conexion $conexion){
            $this->conexion = $conexion;
        }

        public function guardar($nombre, $descripcion){
            if($this->conexion == NULL){
                throw new Exception('Error de conexion');
            }
            $sql = "insert into productos (nombre, descripcion) values (:nombre,:descripcion)";
            $stmt = $this->conexion->prepare($sql);
            $stmt->bindValue(':nombre', $nombre);
            $stmt->bindValue(':descripcion', $descripcion);
            $stmt->execute();

        }

        public function leer(){
            if($this->conexion == NULL){
                throw new Exception('Error de conexion');
            }
            $sql = "select id, nombre, descripcion from productos";
            $stmt = $this->conexion->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS, "Producto");
        }

    }

?>