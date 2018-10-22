<?php
include "conex.php";
$link      = conectarse();
$codigo    = $_REQUEST['codigou'];
$nombre    = $_POST['nombreu'];
$telefono  = $_POST['telefonou'];
$direccion = $_POST['direccionu'];
mysql_query("UPDATE alumnos SET nombres='$nombre', telefono='$telefono', direccion='$direccion' WHERE codigo='$codigo'", $link);
echo 'Datos Actualizados';
header("Location:index.php");
?>