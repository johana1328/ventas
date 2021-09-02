<?php
    class ProductoDto{
        private $idProducto = 0;
        private $nombre = "";
        private $descripcion = "";
        private $cantidad = 0;
        private $precio = 0;

        function getIdProducto(){
            return $this->idProducto;
        }

        function setIdProducto($idProducto){
            $this->idProducto = $idProducto;
        }

        function getNombre(){
            return $this->nombre;
        }

        function setNombre($nombre){
            $this->nombre = $nombre;
        }

        function getDescripcion(){
            return $this->descripcion;
        }

        function setDescripcion($descripcion){
            $this->descripcion = $descripcion;
        }

        function getCantidad(){
            return $this->cantidad;
        }

        function setCantidad($cantidad){
            $this->cantidad = $cantidad;
        }

        function getPrecio(){
            return $this->precio;
        }

        function setPrecio($precio){
            $this->precio = $precio;
        }
    }
?>