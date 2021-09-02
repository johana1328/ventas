<?php
require "../utilidades/conexion.php";
require "../modelo.dto/VentaDto.php";
require "../modelo.dao/VentaDao.php";

if (isset($_POST["registrar"])) {
    registrar();
} else if (isset($_POST["modificar"])) {
    modificar();
} else if (isset($_POST["eliminar"])) {
    eliminar();
}

function registrar(ClienteDto $clienteDto)
{
    $ventaDto = new VentaDto();
    $ventaDao = new VentaDao();
    $ventaDto->setIdVenta($_POST["idVenta"]);
    $ventaDto->setMetodoPago($_POST["metodoPago"]);
    $ventaDto->setCliente($clienteDto);
    $msg = $ventaDao->registrar($ventaDto);
    header("Location:../index.php?msg=$msg"); 
}

function modificar(ClienteDto $clienteDto)
{
    $ventaDto = new VentaDto();
    $ventaDao = new VentaDao();
    $ventaDto->setIdVenta($_POST["idVenta"]);
    $ventaDto->setMetodoPago($_POST["metodoPago"]);
    $ventaDto->setCliente($clienteDto);
    $msg = $ventaDao->modificar($ventaDto);
    header("Location:../index.php?msg=$msg");
}

function eliminar()
{
    if (isset($_POST["eliminar"])) {
        $ventaDao = new VentaDao();
        $msg = $ventaDao->eliminar($_GET["eliminar"]);
        header("Location:../index.php?msg=$msg");
    }
}
