<?php
echo "<style>
body{
    background-color: #F1F1F1;
    font-family: cursive;
    font-size: 18px;
}

.mensaje {
    box-sizing: border-box;
    position: absolute;
    width: 400px;
    height: 150px;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    border-radius: 15px;
    background: #FFFFFF;
    border: 3px solid #000000;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.error {
    color: red;
    font-size: 24px;
}

.success {
    color: green;
    font-size: 24px;
}
.boton {
   padding: 10px;
   background-color: red;
   color: white;
}
echo '<a href="../index.php" class="boton">VOLVER</a>';

</style>";
        require_once "conexion.php";

if(isset($_FILES['archivo'])) {
    $archivo = $_FILES['archivo']['tmp_name'];

    if(empty($archivo)) {
        echo "<div class='mensaje error'>Agregue un archivo válido.</div>";
    } else {
        $csvData = file_get_contents($archivo);

        

        $conexion = conectar();
        
        $tabla = 'alumno';
        $campos = ['matricula', 'nombre', 'nivel', 'espacio', 'grupo', 'cuatrimestre', 'profesor', 'classroom', 'oxford', 'estatus', 'horario','tutor'];
        //Migrar datos a otra de base de Datos
        $db_from='db_ingles2';
        $db_to='respaldo';
        $data=true;
        //Leer las tablas de la base 
        $leer="SHOW TABLES FROM $db_from";
        $re=mysql_query($leer);
        $list_tables=array();
        while($row=mysql_fetch_assoc($re)){
            $list_tables[]=current($row);
        }
        //Migramos las estructuras de las tablas
        foreach ($list_tables as $tbname){
            $leer="CREATE TABLE IF NOT EXISTS $db_to.$tbname 
            LIKE $db_from.$tbname";
            $re=mysql_query($leer);
            if($re){
                echo "Migrada la tabla";
            }
            //Si es verdadero pasamos los datos de cada tabla a la nueva

            if($data){
                echo "Comienza la migracion";
                foreach ($list_tables as $tbname)
            {
            $leer="INSERT INTO $db_to.$tbname select *from $db_from.$tbname";
            $re=mysql_query($leer);
            if($re){
                echo "Migracion completada";
            }
        }
        echo "Finalizado";
        }

        $eliminarRegistros = mysqli_query($conexion, "DELETE FROM $tabla");

        $lineas = explode(PHP_EOL, $csvData);

        foreach ($lineas as $linea) {
            $datos = str_getcsv($linea, ",");

            if (count($datos) == count($campos)) {
                $campos = implode(', ', $datos);
                $valores = implode(', ', array_map(function($campos) { return ':' . $campos; }, $datos));
                $insertarRegistro = mysqli_prepare($conexion, "INSERT INTO $tabla ($campos) VALUES ($valores)");

            // Asignar los valores a las variables
                foreach ($datos as $campos => $valor) {
                mysqli_stmt_bind_param($insertarRegistro, 's', $valor);
                }

                // Ejecutar la sentencia preparada
                mysqli_stmt_execute($insertarRegistro);

                if (!$insertarRegistro) {
                    echo "<div class='mensaje error'>Error al insertar registros: " . mysqli_error($conexion) . "</div>";
                    break;
                }
            } else {
                echo "<div class='mensaje success'>Los datos se han guardado correctamente en la base de datos.</div>";
            }
        }
    }
}
}
?>
