<?php

$cnn = Conexion::getConexion();

class Conexion
{
    public static function getConexion()
    {
        $cnn = null;
        try {
            $cnn = new PDO("mysql:host=localhost:3306;dbname=ventaproducto", "root", "newral05");
            $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            echo "Error $ex->getMessage();";
        }
        return $cnn;
    }
}
