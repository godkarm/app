<?php

require_once "conexion.php";

    class mdlRoles{

        static public function dmlMostarRoles($tabla){

            $stmt= conexion::conectar()->prepare("SELECT * FROM $tabla");

            $stmt->execute();

            return $stmt->fetchAll();

            $stmt-> close();

            $stmt=null;

        }
    }




?>