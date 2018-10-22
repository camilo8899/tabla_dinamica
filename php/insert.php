<?php
$cod    = $_POST['codigo'];
$nombre = $_POST['nombre'];
$tel    = $_POST['telefono'];
$dir    = $_POST['direccion'];

include "conex.php";
$link = conectarse();

if (isset($_POST['guardar'])) {

    mysqli_query($link,"INSERT INTO alumnos(codigo,nombres,telefono,direccion)values('$cod','$nombre','$tel','$dir')");
    
    //header("Location:index.php");
    
    echo ' <script language="javascript">alert("Alumno registrado con éxito");window.location.replace("index.php")</script> ';
    
} else {
    echo ("Presiona el boton guardar");
} 
