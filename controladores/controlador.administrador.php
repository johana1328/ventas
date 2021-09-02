<?php

require "../modelo.dto/AdministradorDto.php";
require "../modelo.dao/AdministradorDao.php";
require '../utilidades/conexion.php';

if (isset($_POST["registrar"])) {
    registrar();
} else if (isset($_POST["eliminar"])) {
    eliminar();
}

function registrar(UsuarioDto $usuarioDto)
{
    $adminDto = new AdministradorDto();
    $adminDao = new AdministradorDao();

    $adminDto->setUsuario($usuarioDto);
    $msg = $adminDao->registrar($adminDto);
    header("Location:../index.php?msg=$msg");
}

function eliminar()
{
    if (isset($_POST["eliminar"])) {
        $adminDao = new AdministradorDao();
        $msg = $adminDao->eliminar($_GET["eliminar"]);
        header("Location:../index.php?msg=$msg");
    }
}
