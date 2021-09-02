<?php
class UsuarioDto
{
    private $idUsuario;
    private $nombre;
    private $apellido;
    private $correo;
    private $telefono;

    function getIdUsuario()
    {
        return $this->idUsuario;
    }

    function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }

    function getNombre()
    {
        return $this->nombre;
    }

    function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    function getApellido()
    {
        return $this->apellido;
    }

    function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    function getCorreo()
    {
        return $this->correo;
    }

    function setCorreo($correo)
    {
        $this->correo = $correo;
    }

    function getTelefono()
    {
        return $this->telefono;
    }

    function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }
}
