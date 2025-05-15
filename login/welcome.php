<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}
?>

<link rel="stylesheet" href="styles.css">
<div class="container">
    <h2>Bienvenido, <?php echo $_SESSION["username"]; ?>!</h2>
    <p><a href="logout.php">Cerrar sesión</a></p>
</div>
