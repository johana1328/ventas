<?php
class ProductoDao
{
    public function registrarProducto(ProductoDto $productoDto)
    {
        $cnn = Conexion::getConexion();
        $mensaje = "";
        try {
            $query = $cnn->prepare("INSERT INTO producto values (?, ?, ?, ?, ?)");
            $query->bindParam(1, $productoDto->getIdProducto());
            $query->bindParam(2, $productoDto->getNombre());
            $query->bindParam(3, $productoDto->getDescripcion());
            $query->bindParam(4, $productoDto->getCantidad());
            $query->bindParam(5, $productoDto->getPrecio());

            $query->execute();

            $mensaje = "Se ha registrado correctamente";
        } catch (Exception $ex) {
            $mensaje = "Ha ocurrido un error al momento de registrar.";
        }
        $cnn = null;
        return $mensaje;
    }

    // modificar usuario
    public function modificarProducto(ProductoDto $productoDto)
    {

        $cnn = Conexion::getConexion();
        $mensaje = "";
        try {
            $query = $cnn->prepare("UPDATE producto SET idProducto=?,nombre=?, descripcion=?, cantidad=?, precio=? WHERE idProducto=?");
            $query->bindParam(1, $productoDto->getIdProducto());
            $query->bindParam(2, $productoDto->getNombre());
            $query->bindParam(3, $productoDto->getDescripcion());
            $query->bindParam(4, $productoDto->getCantidad());
            $query->bindParam(5, $productoDto->getPrecio());
            $query->execute();
            $mensaje = "Registro Actualizado";
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }
        $cnn = null;
        return $mensaje;
    }

    // obtener usuario 
    public function obtenerProducto($idProducto)
    {
        $cnn = Conexion::getConexion();
        $mensaje = "";
        try {
            $query = $cnn->prepare('SELECT * FROM producto WHERE idProducto = ?');
            $query->bindParam(1, $idProducto);
            $query->execute();
            return $query->fetch();
        } catch (Exception $ex) {
            echo 'Error' . $ex->getMessage();
        }
        $cnn = null;
        return $mensaje;
    }

    ## eliminar Usuario 

    public function eliminarProducto($idProducto)
    {
        $cnn = Conexion::getConexion();
        $mensaje = "";
        try {
            $query = $cnn->prepare("DELETE FROM producto WHERE idProducto = ?");
            $query->bindParam(1, $idProducto);
            $query->execute();
            $mensaje = "Registro Eliminado";
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }
        return $mensaje;
    }

    ## listar todos 

    public function listarTodos()
    {
        $cnn = Conexion::getConexion();
        try {
            $query = $cnn->prepare("SELECT * FROM producto");
            $query->execute();
            return $query->fetchAll();
        } catch (Exception $ex) {
            echo 'Error' . $ex->getMessage();
        }
    }
}