<?php

class CtrRoles{

        static public function ctrMostrarRol(){

            $tabla="roles";
            $respuesta=mdlRoles::dmlMostarRoles($tabla);
            return $respuesta;


        }
}

?>