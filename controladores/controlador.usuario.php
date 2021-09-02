<?php
require "../utilidades/conexion.php";
require "../modelo.dto/UsuarioDto.php";
require "../modelo.dao/UsuarioDao.php";

if (isset($_POST["registrar"])) {
    registrar();
} else if (isset($_POST["modificar"])) {
    modificar();
} else if (isset($_POST["eliminar"])) {
    eliminar();
}

function registrar()
{
    $usuarioDto = new UsuarioDto();
    $usuarioDao = new UsuarioDao();
    $usuarioDto->setIdUsuario($_POST["idUsuario"]);
    $usuarioDto->setNombre($_POST["nombre"]);
    $usuarioDto->setApellido($_POST["apellido"]);
    $usuarioDto->setCorreo($_POST["correo"]);
    $usuarioDto->setTelefono($_POST["telefono"]);

    $msg = $usuarioDao->registrar($usuarioDto);
    header("Location:../index.php?msg=$msg");
}

function modificar()
{
    $usuarioDto = new UsuarioDto();
    $usuarioDao = new UsuarioDao();
    $usuarioDto->setIdUsuario($_POST["idUsuario"]);
    $usuarioDto->setNombre($_POST["nombre"]);
    $usuarioDto->setApellido($_POST["apellido"]);
    $usuarioDto->setCorreo($_POST["correo"]);
    $usuarioDto->setTelefono($_POST["telefono"]);

    $msg = $usuarioDao->modificar($usuarioDto);
    header("Location:../index.php?msg=$msg");
}

function eliminar()
{
    $usuarioDao = new UsuarioDao();
    $msg = $usuarioDao->eliminar($_GET["eliminar"]);
    header("Location:../index.php?msg=$msg");
}
