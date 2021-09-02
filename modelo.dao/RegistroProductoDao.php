<?php
class RegistroProductoDao
{
    public function registrarRegistroProducto(RegistroProductoDto $registroProductoDto)
    {
        $cnn = Conexion::getConexion(); 
        $mensaje = "";
        try {
            $query = $cnn->prepare("INSERT INTO registroProducto values (?, ?, ?)");
            $query->bindParam(1, $registroProductoDto->getIdRegistroProducto());
            $query->bindParam(2, $registroProductoDto->getIdAdministrador()); 
            $query->bindParam(3, $registroProductoDto->getIdProducto());

            $query->execute();

            $mensaje = "Se ha registrado correctamente";
        } catch (Exception $ex) {
            $mensaje = "Ha ocurrido un error al momento de registrar.";
        }
        $cnn = null;
        return $mensaje;
    }

    // modificar usuario
    public function modificarRegistroProducto(RegistroProductoDto $registroProductoDto)
    {

        $cnn = Conexion::getConexion();
        $mensaje = "";
        try {
            $query = $cnn->prepare("UPDATE registroProducto SET idRegistroProducto=?,idAdministrador=?, idProducto=? WHERE idRegistroProducto=?");
            $query->bindParam(1, $registroProductoDto->getIdRegistroProducto());
            $query->bindParam(2, $registroProductoDto->getIdAdministrador());
            $query->bindParam(3, $registroProductoDto->getIdProducto());
            $query->execute();
            $mensaje = "Registro Actualizado";
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }
        $cnn = null;
        return $mensaje;
    }

    // obtener usuario 
    public function obtenerRegistroProducto($idRegistroProducto)
    {
        $cnn = Conexion::getConexion();
        $mensaje = "";
        try {
            $query = $cnn->prepare('SELECT * FROM registroProducto WHERE idRegistroProducto = ?');
            $query->bindParam(1, $idRegistroProducto);
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
            $query = $cnn->prepare("SELECT * FROM registroProducto");
            $query->execute();
            return $query->fetchAll();
        } catch (Exception $ex) {
            echo 'Error' . $ex->getMessage();
        }
    }
}
