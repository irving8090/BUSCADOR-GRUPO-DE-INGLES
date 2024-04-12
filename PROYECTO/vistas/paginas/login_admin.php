<!DOCTYPE html>
<html lang="es"> 
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Ejemplo de HTML5">
        <meta name="keywords" content="HTML5, CSS3, JavaScript">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ci | Login administración</title>
        <link rel="stylesheet" href="../../css/stylessAdmins.css">
        <link href="../../img/cicon.png" rel="shortcut icon">
    </head> 
    <body style="text-align: center;">
    <ul>
        <h1 id="titulo">ENGLISH GROUP FINDER</h1>
        <img id="ci" src="../../img/logo.png">
        <img id="utt" src="../../img/utteclogo.png">
    </ul>
<div id="inicio">
    <header>  
        <h1 id="titulos">Administración</h1>
    </header>
    <form method="POST">
    
        <p id="subtitulo">Email:</p>
        <p><input type="email" name="ingresoEmail" size="20" id="email" placeholder="Email"></p>
        <p id="subtitulo">Password:</p>
        <p><input type="password" name="ingresoPassword" size="20" id="pwd" placeholder="Password"></p>

       
        <a ><p><input type="submit" id="btnAdmin" name="btnIngresar"  value="Log in"></p></a>
       
        <a href="../../index.php"><p><input id="btnRegresar" type="button" value="Salir"></p></a>
    </form>
</div>
</body> 

  

<?php
            $ingreso1 = new ControladorFormularios();
            $ingreso1->ctrIngresoAdmin();
              ?> 
