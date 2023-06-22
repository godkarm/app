<?php

class CtrUsuarios{

        static public function ctrMostrarUsuarios(){

            $tabla="usuarios";
            $respuesta=mdlUsuarios::dmlMostarUsuario($tabla);
            return $respuesta;


        }
}

?>