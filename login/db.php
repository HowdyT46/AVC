<?php
$host = "localhost";
$db = "login_system";
$user = "root";  
$pass = "";      

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
