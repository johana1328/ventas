<?php
class VentaDto
{
    private $IdVenta;
    private $metodoPago;
    private ClienteDto $cliente;

    function getIdVenta()
    {
        return $this->idVenta;
    }

    function setIdVenta($idVenta)
    {
        $this->idVenta = $idVenta;
    }

    function getMetodoPago()
    {
        return $this->metodoPago;
    }

    function setMetodoPago($metodoPago)
    {
        $this->metodoPago = $metodoPago;
    }

    function getCliente()
    {
        return $this->cliente;
    }

    function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }
}
