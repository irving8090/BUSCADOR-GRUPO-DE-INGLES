<?php 

if (!isset($_SESSION['validarIngreso'])){
  echo "<script>alert('Acceso denegado');</script>";
  
  echo "<script>window.location.href = '../../index.php';</script>";
  
}
$usuarios=ControladorFormularios::ctrSeleccionarRegistros(null,null);
?>
<!DOCTYPE html>
<html lang="es"> 
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Ejemplo de HTML5">
        <meta name="keywords" content="HTML5, CSS3, JavaScript">
        <title>Ci | Inicio alumno</title>
        <link rel="stylesheet" href="../../css/stylesAlumnos.css">
      
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../../img/cicon.png" rel="shortcut icon">
    </head>
    <body style="text-align: center;">
    <ul>
<h1 id="titulos">ENGLISH GROUP FINDER</h1>
<img id="ci" src="../../img/logo.png">
<img id="utt" src="../../img/utteclogo.png">
</ul>
<div id="datos">
        <header>  
            <h1 id="titulo">¡ B i e n v e n i d o !</h1>
        </header>
        <div>
        <?php foreach($usuarios as $key => $value): ?>

        
            <b><p><h3 name="matricula" require value="" >MATRICULA: <?php echo $value['matricula'] ?></h3></p></b>
            <p><h3 name="nombre" size="27">ESTUDIANTE:  <?php echo $value['nombre'] ?></h3></p>
            <hr>
            <div id="izquierda">
            <p><h2 name="carrera" size="27">Grupo:  <?php echo $value['carrera'] ?></h2></p>
            <p><h2 name="cuatrimestre" size="27">Cuatrimestre actual:  <?php echo $value['cuatrimestre']?></h2></p>
            <p><h2 name="grupo" size="27">Profesor:  <?php echo $value['profesor'] ?></h2></p>
            <p><h2 name="classroom" size="27">Classroom:  <?php echo $value['grupo'] ?></h2></p>
            <p><h2 name="tutor" size="27">Tutor:  <?php echo $value['tutor'] ?></h2></p>
            </div>
            <div id="derecha">
            <p><h2 name="profesor" size="27">Horario:  <?php echo $value['horario'] ?></h2></p>
            <p><h2 name="horario" size="27">Espacio:  <?php echo $value['espacio'] ?></h2></p>
            <p><h2 name="classroom" size="27">Nivel:  <?php echo $value['nivel'] ?></h2></p>
            <p><h2 name="classroom" size="27">Estatus:  <?php echo $value['estatus'] ?></h2></p>
            <p><h2 name="classroom" size="27">Oxford Clave:  <?php echo $value['oxford'] ?></h2></p>
            </div>
            <form method="POST" action="">
                <br><br>
                <a href="../../index.php"><p><input type="button" id="btnSalir" value="Regresar al inicio"></p></a>
                <?php endforeach 
                
                  ?>
                
        </form>
        </div>
                <br><br>
                <a href="https://drive.google.com/drive/folders/1XEWkDCiimxqc8-5ZDA2V9Wti0AWQzypG"><p><input type="button" id="btnForm" value="Mis datos estan mal"></p></a>
            </div>
        
    </body>
    