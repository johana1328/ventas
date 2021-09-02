<?php

require "../modelo.dto/ClienteDto.php";
require "../modelo.dao/ClienteDao.php";

if (isset($_POST["registrar"])) {
    registrar();
} else if (isset($_POST["eliminar"])) {
    eliminar();
}

function registrar(UsuarioDto $usuarioDto)
{
    $clienteDto = new ClienteDto();
    $clienteDao = new ClienteDao();

    $clienteDto->setUsuario($usuarioDto);
    $msg = $clienteDao->registrar($clienteDto);
    header("Location:../index.php?msg=$msg");
}

function eliminar()
{
    if (isset($_POST["eliminar"])) {
        $clienteDao = new ClienteDao();
        $msg = $clienteDao->eliminar($_GET["eliminar"]);
        header("Location:../index.php?msg=$msg");
    }
}
