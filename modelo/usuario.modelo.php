<?php

require_once "conexion.php";

    class mdlUsuarios{

        static public function dmlMostarUsuario($tabla){

            $stmt= conexion::conectar()->prepare("SELECT * FROM $tabla");

            $stmt->execute();

            return $stmt->fetchAll();

            $stmt-> close();

            $stmt=null;

        }
    }




?>
