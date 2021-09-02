<?php
class AdministradorDto
{
    private $idAdministrador;
    private UsuarioDto $usuario;

    function getIdAdministrador()
    {
        return $this->idAdministrador;
    }

    function setIdAdministrador($idAdministrador)
    {
        $this->idAdministrador = $idAdministrador;
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