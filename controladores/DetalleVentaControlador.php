<?php
require '../dao/DetalleVentaDao.php';
require '../dto/DetalleVentaDto.php';
require '../utilidades/conexion.php'; 

if(isset($_POST['registro'])){
$dvDao = new DetalleVentaDao();
$dvDto = new DetalleVentaDto(); 
$dvDto->setIdDetalleVenta($_POST['idDetalleVenta']);
$dvDto->setCantidad($_POST['cantidad']);
$dvDto->setPrecioTotal($_POST['precioTotal']);
$dvDto->setIdProducto($_POST['idProducto']);
$dvDto->setIdVenta($_POST['idVenta']);


$mensaje = $dvDao->registrarDetalleVenta($dvDto);

header("Location:../registro.php?mensaje=".$mensaje); 
}
else if (isset($_POST['modificar'])){
    $dvDao = new DetalleVentaDao();
    $dvDto = new DetalleVentaDto();
    $dvDto->setIdDetalleVenta($_POST['idDetalleVenta']);
    $dvDto->setCantidad($_POST['cantidad']);
    $dvDto->setPrecioTotal($_POST['precioTotal']);
    $dvDto->setIdProducto($_POST['idProducto']);
    $dvDto->setIdVenta($_POST['idVenta']);

    $mensaje = $dvDao->modificarDetalleVenta($dvDto);
    header("Location: ../listado.php?mensaje=".$mensaje);
}
