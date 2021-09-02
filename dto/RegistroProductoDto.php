<?php
    class RegistroProductoDto{
        private $idRegistroProducto = 0; 
        private $idAdministrador = 0;
        private $idProducto = 0;

        function getIdRegistroProducto(){
            return $this->idRegistroProducto;
        }

        function setIdRegistroProducto($idRegistroProducto){
            $this->idRegistroProducto = $idRegistroProducto;
        }

        function getIdAdministrador(){
            return $this->idAdministrador;
        }

        function setIdAdministrador($idAdministrador){
            $this->idAdministrador = $idAdministrador;
        }

        function getIdProducto(){
            return $this->idProducto;
        }

        function setIdProducto($idProducto){
            $this->idProducto = $idProducto;
        }
    }
