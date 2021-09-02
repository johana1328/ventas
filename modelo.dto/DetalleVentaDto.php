<?php
class DetalleVentaDto
{
    private $idDetalleVenta;
    private $cantidad;
    private $precioTotal;
    private ProductoDto $producto;
    private VentaDto $venta;

    function getIdDetalleVenta()
    {
        return $this->idDetalleVenta;
    }

    function setIdDetalleVenta($idDetalleVenta)
    {
        $this->idDetalleVenta = $idDetalleVenta;
    }

    function getCantidad()
    {
        return $this->cantidad;
    }

    function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }

    function getPrecioTotal()
    {
        return $this->precioTotal;
    }

    function setPrecioTotal($precioTotal)
    {
        $this->precioTotal = $precioTotal;
    }

    function getProducto()
    {
        return $this->producto;
    }

    function setProducto($producto)
    {
        $this->producto = $producto;
    }

    function getVenta()
    {
        return $this->venta;
    }

    function setVenta($venta)
    {
        $this->venta = $venta;
    }
}
