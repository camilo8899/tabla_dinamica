<?php
function conectarse()
{
    $link=mysqli_connect("localhost","root","root","lista_alum");
    if (mysqli_connect_errno()){ 
        echo "Failed to connect to MySQL :" . mysqli_connect_error();
    }
    
    return $link;
    }
?>
    
    
    
    
    


