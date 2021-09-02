<?php
require "../utilidades/conexion.php";
require "../modelo.dto/DetalleVentaDto.php";
require "../modelo.dao/DetalleVentaDao.php";


function registrar(VentaDto $ventaDto, ProductoDto $productoDto)
{
    $detalleVentaDto = new DetalleVentaDto();
    $detalleVentaDao = new DetalleVentaDao();
    $detalleVentaDto->setIdDetalleVenta($_POST["idDetalleVenta"]);
    $detalleVentaDto->setCantidad($_POST["cantidad"]);
    $precioTotal = $detalleVentaDto->getCantidad() * $productoDto->getPrecio();
    $detalleVentaDto->setPrecioTotal($precioTotal);
    $detalleVentaDto->SetProducto($productoDto);
    $detalleVentaDto->SetVenta($ventaDto);
    $msg = $detalleVentaDao->registrar($detalleVentaDto);
    header("Location:../index.php?msg=$msg");
}

function modificar(VentaDto $ventaDto, ProductoDto $productoDto)
{
    $detalleVentaDto = new DetalleVentaDto();
    $detalleVentaDao = new DetalleVentaDao();
    $detalleVentaDto->setIdDetalleVenta($_POST["idDetalleVenta"]);
    $detalleVentaDto->setCantidad($_POST["cantidad"]);
    $precioTotal = $detalleVentaDto->getCantidad() * $productoDto->getPrecio();
    $detalleVentaDto->setPrecioTotal($precioTotal);
    $detalleVentaDto->SetProducto($productoDto);
    $detalleVentaDto->SetVenta($ventaDto);
    $msg = $detalleVentaDao->modificar($detalleVentaDto);
    header("Location:../index.php?msg=$msg");
}

function eliminar()
{
    if (isset($_POST["eliminar"])) {
        $detalleVentaDao = new DetalleVentaDao();
        $msg = $detalleVentaDao->eliminar($_GET["eliminar"]);
        header("Location:../index.php?msg=$msg");
    }
}
