<?php
function conectarse()
{
    if (!($link = mysqli_connect("localhost", "root", "root"))) {
        echo "Error conectandose a la base de datos";
        exit();
    }
    if (!mysqli_select_db("lista_alum", $link)) {
        echo "Error seleccionando la base de datos.";
        exit();

    }
    return $link;

}
?>
