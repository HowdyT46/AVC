<?php
    $conexion  = new mysqli("localhost","root","", "pruebaavc");
    if($conexion){
        echo "La gestion fue exitosa";
    }else{
        "algo salio mal";
    }


?>