<?php
class DetalleVentaDao
{
    public function registrarDetalleVenta(DetalleVentaDto $detalleVentaDto)
    {
        $cnn = Conexion::getConexion();
        $mensaje = "";
        try {
            $query = $cnn->prepare("INSERT INTO detalleVenta values (?, ?, ?, ?, ?)");
            $query->bindParam(1, $detalleVentaDto->getIdDetalleVenta());
            $query->bindParam(2, $detalleVentaDto->getCantidad());
            $query->bindParam(3, $detalleVentaDto->getPrecioTotal());
            $query->bindParam(4, $detalleVentaDto->getIdProducto());
            $query->bindParam(5, $detalleVentaDto->getIdVenta());

            $query->execute();

            $mensaje = "Se ha registrado correctamente";
        } catch (Exception $ex) {
            $mensaje = "Ha ocurrido un error al momento de registrar.";
        }
        $cnn = null;
        return $mensaje;
    }

    // modificar usuario
    public function modificarDetalleVenta(DetalleVentaDto $detalleVentaDto)
    {

        $cnn = Conexion::getConexion();
        $mensaje = "";
        try {
            $query = $cnn->prepare("UPDATE detalleVenta SET idDetalleVenta=?,cantidad=?, precioTotal=?, idProducto=?, idVenta=? WHERE idDetalleVenta=?");
            $query->bindParam(1, $detalleVentaDto->getIdDetalleVenta());
            $query->bindParam(2, $detalleVentaDto->getCantidad());
            $query->bindParam(3, $detalleVentaDto->getPrecioTotal());
            $query->bindParam(4, $detalleVentaDto->getIdProducto());
            $query->bindParam(5, $detalleVentaDto->getIdVenta());
            $query->execute();
            $mensaje = "Registro Actualizado";
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }
        $cnn = null;
        return $mensaje;
    }

    // obtener usuario 
    public function obtenerDetalleVenta($idDetalleVenta)
    {
        $cnn = Conexion::getConexion();
        $mensaje = "";
        try {
            $query = $cnn->prepare('SELECT * FROM detalleVenta WHERE idDetalleVenta = ?');
            $query->bindParam(1, $idDetalleVenta);
            $query->execute();
            return $query->fetch();
        } catch (Exception $ex) {
            echo 'Error' . $ex->getMessage();
        }
        $cnn = null;
        return $mensaje;
    }

    ## listar todos 

    public function listarTodos()
    {
        $cnn = Conexion::getConexion();
        try {
            $query = $cnn->prepare("SELECT * FROM detalleVenta");
            $query->execute();
            return $query->fetchAll();
        } catch (Exception $ex) {
            echo 'Error' . $ex->getMessage();
        }
    }
}
