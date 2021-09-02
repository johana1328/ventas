<?php
require '../modelo.dao/ProductoDao.php';
require '../modelo.dto/ProductoDto.php';
require '../utilidades/conexion.php';

if (isset($_POST['registro'])) {
    $pDao = new ProductoDao();
    $pDto = new ProductoDto();
    $pDto->setIdProducto($_POST['idProducto']);
    $pDto->setNombre($_POST['nombre']);
    $pDto->setDescripcion($_POST['descripcion']);
    $pDto->setCantidad($_POST['cantidad']);
    $pDto->setPrecio($_POST['precio']);


    $mensaje = $pDao->registrarProducto($pDto);

    header("Location:../registro.php?mensaje=" . $mensaje);
} else if ($_GET['id'] != NULL) {
    $pDao = new ProductoDao();
    $mensaje = $pDao->eliminarProducto($_GET['id']);
    header("Location:../listado.php?mensaje=" . $mensaje);
} else if (isset($_POST['modificar'])) {
    $pDao = new ProductoDao();
    $pDto = new ProductoDto();
    $pDto->setIdProducto($_POST['idProducto']);
    $pDto->setNombre($_POST['nombre']);
    $pDto->setDescripcion($_POST['descripcion']);
    $pDto->setCantidad($_POST['cantidad']);
    $pDto->setPrecio($_POST['precio']);

    $mensaje = $pDao->modificarProducto($pDto);
    header("Location: ../listado.php?mensaje=" . $mensaje);
}
