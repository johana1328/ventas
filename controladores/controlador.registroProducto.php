<?php
require '../modelo.dao/RegistroProductoDao.php';
require '../modelo.dto/RegistroProductoDto.php';
require '../utilidades/conexion.php';

if (isset($_POST["registrar"])) {
    registrar();
} else if (isset($_POST["modificar"])) {
    modificar();
}

function registrar(AdministradorDto $administradorDto, ProductoDto $productoDto)
{
    $rpDao = new RegistroProductoDao();
    $rpDto = new RegistroProductoDto();

    $rpDto->setIdRegistroProducto($_POST['idRegistroProducto']);
    $rpDto->setIdAdministrador($administradorDto);
    $rpDto->setIdProducto($productoDto);
    $msg = $rpDao->registrarRegistroProducto($rpDto);
    header("Location:../index.php?msg=$msg");
}

function modificar(AdministradorDto $administradorDto, ProductoDto $productoDto)
{
    $rpDao = new RegistroProductoDao();
    $rpDto = new RegistroProductoDto();

    $rpDto->setIdRegistroProducto($_POST['idRegistroProducto']);
    $rpDto->setIdAdministrador($administradorDto);
    $rpDto->setIdProducto($productoDto);
    $msg = $rpDao->modificarRegistroProducto($rpDto);
    header("Location:../index.php?msg=$msg");
}