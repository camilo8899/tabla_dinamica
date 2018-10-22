<?php
include "conex.php";
$link   = conectarse();
$codigo = $_REQUEST['id'];
mysql_query("delete from alumnos where codigo='$codigo'", $link);
echo 'Datos eleminados';
header("Location:index.php");
?>