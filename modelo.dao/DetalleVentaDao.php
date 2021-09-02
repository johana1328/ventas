<?php
class DetalleVentaDao
{
    private $mensaje;

    function consultarId($idDetalleVenta)
    {
        $cnn = Conexion::getConexion();
        try {
            $query = $cnn->prepare("SELECT * FROM detalleVenta WHERE idDetalleVenta = ?");
            $query->bindParam(1, $idDetalleVenta);
            $query->execute();
            return $query->fetch();
        } catch (Exception $ex) {
            $mensaje = "Error: " . $ex->getMessage() . ".";
        }
        $cnn = null;
        return $mensaje;
    }

    function consultarTodos()
    {
        $cnn = Conexion::getConexion();
        try {
            $query = $cnn->prepare("SELECT * FROM detalleVenta");
            $query->execute();
            return $query->fetchAll();
        } catch (Exception $ex) {
            $mensaje = "Error: " . $ex->getMessage() . ".";
        }
        $cnn = null;
        return $mensaje;
    }

    function eliminar($idDetalleVenta)
    {
        $cnn = Conexion::getConexion();
        try {
            $query = $cnn->prepare("DELETE FROM detalleVenta WHERE idDetalleVenta = ?");
            $query->bindParam(1, $idDetalleVenta);
            $query->execute();
            $mensaje = "Registro eliminado exitosamente.";
        } catch (Exception $ex) {
            $mensaje = "Error: " . $ex->getMessage() . ".";
        }
        $cnn = null;
        return $mensaje;
    }

    function registrar(DetalleVentaDto $detalleVentaDto)
    {
        $cnn = Conexion::getConexion();
        try {
            $query = $cnn->prepare("INSERT INTO detalleVenta VALUES (NULL, ?, ?, ?, ?)");
            $query->bindParam(1, $detalleVentaDto->getIdDetalleVenta());
            $query->bindParam(2, $detalleVentaDto->getCantidad());
            $query->bindParam(3, $detalleVentaDto->getPrecioTotal());
            $query->bindParam(4, $detalleVentaDto->getProducto()->getIdProducto());
            $query->bindParam(5, $detalleVentaDto->getVenta()->getIdVenta());
            $query->execute();
            $mensaje = "Registro creado exitosamente.";
        } catch (Exception $ex) {
            $mensaje = "Error: " . $ex->getMessage() . ".";
        }
        $cnn = null;
        return $mensaje;
    }

    function modificar(DetalleVentaDto $detalleVentaDto)
    {
        $cnn = Conexion::getConexion();
        try {
            $query = $cnn->prepare("UPDATE detalleVenta SET cantidad = ?, precioTotal = ?, idProducto = ?, idVenta = ? WHERE idDetalleVenta = ?");
            $query->bindParam(1, $detalleVentaDto->getCantidad());
            $query->bindParam(2, $detalleVentaDto->getPrecioTotal());
            $query->bindParam(3, $detalleVentaDto->getProducto()->getIdProducto());
            $query->bindParam(4, $detalleVentaDto->getVenta()->getIdVenta());
            $query->bindParam(5, $detalleVentaDto->getIdDetalleVenta());
            $query->execute();
            $mensaje = "Registro modificado exitosamente.";
        } catch (Exception $ex) {
            $mensaje = "Error: " . $ex->getMessage() . ".";
        }
        $cnn = null;
        return $mensaje;
    }
}
