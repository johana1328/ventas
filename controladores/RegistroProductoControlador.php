<?php
require '../dao/RegistroProductoDao.php';
require '../dto/RegistroProductoDto.php';
require '../utilidades/conexion.php';

if (isset($_POST['registro'])) {
    $rpDao = new RegistroProductoDao();
    $rpDto = new RegistroProductoDto();
    $rpDto->setIdRegistroProducto($_POST['idRegistroProducto']);
    $rpDto->setIdAdministrador($_POST['idAdministrador']);
    $rpDto->setIdProducto($_POST['idProducto']);


    $mensaje = $rpDao->registrarRegistroProducto($rpDto);

    header("Location:../registro.php?mensaje=" . $mensaje);
} else if (isset($_POST['modificar'])) {
    $rpDao = new RegistroProductoDao();
    $rpDto = new RegistroProductoDto();
    $rpDto->setIdRegistroProducto($_POST['idRegistroProducto']);
    $rpDto->setIdAdministrador($_POST['idAdministrador']);
    $rpDto->setIdProducto($_POST['idProducto']);

    $mensaje = $rpDao->modificarRegistroProducto($rpDto);
    header("Location: ../listado.php?mensaje=" . $mensaje);
}
