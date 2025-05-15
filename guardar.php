<?php
    include("abre.php");

    $nombre    =$_POST['nombre'];
    $telefono    =$_POST['telefono'];
    $mensaje    =$_POST['mensaje'];

    $consulta = "insert INTO  mensajes (nombre,telefono,mensaje) VALUES
    ('$nombre', '$telefono','$mensaje')";

    if ($conexion->query($consulta))
    {
        header("Location:contactanos.php");
    }
    else
    {
        echo "El error es " .$consulta. "br" .$conexion->error;
    }
    $conexion-> close();

?>