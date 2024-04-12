<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es"> 
    <head>
        <meta charset="UTF-8">
        <meta name="keywords" content="HTML5, CSS3, JavaScript">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ci | Inicio</title>
        <link href="img/cicon.png" rel="shortcut icon">
        <link rel="stylesheet" href="css/estilos.css">
    </head> 
    <body style="text-align: center;">
    <ul>
<h1 id="titulo">ENGLISH GROUP FINDER</h1>
<img id="ci" src="img/logo.png">
<img id="utt" src="img/utteclogo.png">
</ul>
<div id="inicio">
    <form class="p-5 bg-light" method="POST">

        <div class="form-group">
        <h1 id="titulos">Ingresa tu matrícula</h1>
            
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-envelope"></i>
                    </span>
                </div>
                <p><input  name="ingresoMatricula" type="text" placeholder="Ejemplo: 2521160121" size="20" id="matricula"></p>
                 
            </div>
            
        </div>


        <?php
            $ingreso = new ControladorFormularios();
            $ingreso->ctrIngreso();
        ?> 

<p><input  name="btnIngresar" type="submit" id="btnINGLES" value="Log in"></p>
                <a href="vistas/paginas/login_admin.php"><p id="txtLOGIN">No soy Estudiante</p></a>
    </form>
</div>
            
                
    </body> 
    

    