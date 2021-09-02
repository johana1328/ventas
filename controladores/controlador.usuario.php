<?php
require "../utilidades/conexion.php";
require "../modelo.dto/UsuarioDto.php";
require "../modelo.dao/UsuarioDao.php";


function registrar(){
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

function modificar(){
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

function eliminar(){
    $usuarioDao = new UsuarioDao();
    $msg = $usuarioDao->eliminar($_GET["eliminar"]);
    header("Location:../index.php?msg=$msg");
}
