<?php

            class ControladorFormularios{
    /*********************************
     * Ingreso alumno
     *********************************/
    
    public function ctrIngreso(){
        
        if(isset($_POST["ingresoMatricula"])){
    
            $tabla = "alumno";
            $item = "matricula";
            $valor = $_POST["ingresoMatricula"];
            //LLamar la consulta
            $respuesta=ModeloFormularios::mdlSeleccionarRegistros($tabla,$item,$valor);
            
            if ($respuesta != null){
                //echo "Existe";
                //Validar si esta registrado y son correctas las crendenciales
                if ($respuesta["matricula"] == $_POST["ingresoMatricula"]){
                        $_SESSION["validarIngreso"];
                        echo '<script>
                            if(window.history.replaceState){
                                window.history.replaceState(null,null,window.location.href);
                            }

                            window.location = "vistas/paginas/datos_alumno.php";
                        </script>';
                    echo "Correcto";

                    }else {
                        echo '<script>
                            if(window.history.replaceState){
                                window.history.replaceState(null,null,window.location.href);
                            }
                        </script>';
                        echo '<div class="alert alert-danger">
                            Matricula incorrecta
                            </div>';
                    }
                    
                } else {
                    echo '<script>
                        if(window.history.replaceState){
                            window.history.replaceState(null,null,window.location.href);
                        }
                    </script>';
                    echo '<div class="alert alert-danger">
                    Matricula incorrecta
                    <div id="alerta" class="alert alert-danger" style="font-family:cursive; color:red; font-weight:bold;"><a href="https://forms.gle/q54V85MgMpRZUmKS9"><p><input type="button" id="btnForm" value="Asignación pendiente, 
                    solicitalo aquí y llena el formulario"></p></a></div>';
                }
                }
            }
            

        
    


    /*****************************
     * Seleccionar alumno
     ******************************/
     static public function ctrSeleccionarRegistros($item,$valor){
        $tabla="alumno";
        $respuesta=ModeloFormularios::mdlSeleccionarRegistros($tabla,$item,$valor);

        return $respuesta;
    }

    
    /*****************************
     * Seleccionar admin
     ******************************/
    static public function ctrSeleccionarRegistrosAdmin($item1,$valor1){
        $tabla1 = "usuario";
        
        $respuesta1 = ModeloFormularios::mdlSeleccionarRegistrosAdmin($tabla1,$item1,$valor1);

        return $respuesta1;
    }




    
                
                
            
        
    
    

        
        /*********************************
     * Ingreso Admin
     *********************************/
    public function ctrIngresoAdmin(){
        if(isset($_POST["ingresoEmail"])){
            //Filtrar la información que no tenga inyección de código
            if(preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/',$_POST["ingresoEmail"])&&
               preg_match('/^[0-9a-zA-Z]+$/',$_POST["ingresoPassword"]) ){
                $tabla1 = "usuario";
                $item1 = "email";
                $valor1 = $_POST["ingresoEmail"];
                //LLamar la consulta
                $respuesta = ModeloFormularios::mdlSeleccionarRegistrosAdmin($tabla1,$item1,$valor1);

                
                
                if ($respuesta != null){
                    //echo "Existe";
                    //Validar si esta registrado y son correctas las crendenciales
                    if ($respuesta["email"] == $_POST["ingresoEmail"] &&
                        $respuesta["password"] == $_POST["ingresoPassword"]){
                            $_SESSION["validarIngreso1"] ;
                            echo '<script>
                                if(window.history.replaceState){
                                    window.history.replaceState(null,null,window.location.href);
                                }

                                window.location = "vistas/paginas/bienve_admin.php";
                            </script>';
                        echo "Correcto";
    }else {
        echo '<script>
            if(window.history.replaceState){
                window.history.replaceState(null,null,window.location.href);
            }
        </script>';
        echo '<div class="alert alert-danger">
            Error al ingresar al sistema, email o contraseña incorrecta
            </div>';
    }
    
} else {
    echo '<script>
        if(window.history.replaceState){
            window.history.replaceState(null,null,window.location.href);
        }
    </script>';
    echo '<div class="alert alert-danger">
        Error al ingresar al sistema, email o contraseña incorrecta
        </div>';
}


}
    }
        }
    
    }
    





