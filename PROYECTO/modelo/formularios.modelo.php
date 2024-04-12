<?php

require_once "conexion.php";

                class ModeloFormularios{

    /************************
     * Seleccionar Registro Alumno
     ************************/

     static public function mdlSeleccionarRegistros($tabla,$item,$valor){
        
        if ($item == null && $valor == null) {
            $sql="SELECT * FROM $tabla where alumno.matricula='$valor'";
            $stmt = Conexion::conectar()->prepare($sql);
            $stmt->execute();
            return $stmt->fetch();
        } 
    }
        
     

         /************************
        * Seleccionar Registro Admin
        ************************/
        static public function mdlSeleccionarRegistrosAdmin($tabla1,$item1,$valor1){
            if($item1 == null && $valor1 == null){
            $sql1=="SELECT * FROM $tabla1 where usuario.email='$valor1'";
            $stmt1 = Conexion::conectar()->prepare($sql1);
            $stmt1->execute(array($valor1));
            return $stmt->fetch();
        } 
        }
    }

    
