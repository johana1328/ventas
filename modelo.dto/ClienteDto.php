<?php
class ClienteDto
{
    private $idCliente;
    private UsuarioDto $usuario;

    function getIdCliente()
    {
        return $this->idCliente;
    }

    function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;
    }

    function getUsuario()
    {
        return $this->usuario;
    }

    function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }
}
