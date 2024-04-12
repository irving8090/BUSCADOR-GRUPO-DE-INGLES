<?php 
//Validar la existencia de la variable de sesión
if(!isset($_SESSION["validarIngreso1"])){
 
  echo "<script>alert('Acceso denegado');</script>";
  
  echo "<script>window.location.href = '../../index.php';</script>";
  exit(); 
}
$usuarios1 = ControladorFormularios::ctrSeleccionarRegistrosAdmin(null,null);

?>
<!DOCTYPE html>
<html lang="es"> 
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ejemplo de HTML5">
    <meta name="keywords" content="HTML5, CSS3, JavaScript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ci | Inicio administración</title>
    <link rel="stylesheet" href="../../css/stylesBadmin.css">
    <link href="../../img/cicon.png" rel="shortcut icon">
</head> 
<body style="text-align: center;">
    <ul>
        <h1 id="titulos">ENGLISH GROUP FINDER</h1>
        <img id="ci" src="../../img/logo.png">
        <img id="utt" src="../../img/utteclogo.png">
    </ul>
    
    <div id="datos">
        <br>
        <form action="../../modelo/guardar.php" method="POST" enctype="multipart/form-data">
            <p id="lblopcion">Suba el archivo:</p>
            <label for="file-upload" class="subir">
                <i class="fas fa-cloud-upload-alt"></i> Subir archivo
            </label>
            <input id="file-upload" name="archivo" type="file" style="display: none;" accept=".csv"/>
            <div id="info"></div>
            <input id="Enviar" type="submit" value="Enviar">
        </form>
        <br>

        <a href="../../index.php"><p><input id="btnSalir" type="button" value="Salir"></p></a>
    </div>
    
</body>
</html>
    

