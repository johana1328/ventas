<?php
    class DetalleVentaDto{
        private $idDetalleVenta = 0;
        private $cantidad = 0;
        private $precioTotal = 0;
        private $idProducto = 0;
        private $idVenta = 0;

        function getIdDetalleVenta(){
            return $this->idDetalleVenta;
        }

        function setIdDetalleVenta($idDetalleVenta){
            $this->idDetalleVenta = $idDetalleVenta;
        }

        function getCantidad(){
            return $this->cantidad;
        }

        function setCantidad($cantidad){
            $this->cantidad = $cantidad;
        }

        function getPrecioTotal(){
            return $this->precioTotal;
        }

        function setPrecioTotal($precioTotal){
            $this->precioTotal = $precioTotal;
        }

        function getIdProducto(){
            return $this->idProducto;
        }

        function setIdProducto($idProducto){
            $this->idProducto = $idProducto;
        }

        function getIdVenta(){
            return $this->idVenta;
        }

        function setIdVenta($idVenta){
            $this->idVenta = $idVenta;
        }
    }
?>