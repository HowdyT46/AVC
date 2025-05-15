<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);

    if ($stmt->execute()) {
        echo "<p style='text-align:center;'>Usuario registrado correctamente. <a href='login.php'>Inicia sesión</a></p>";
    } else {
        echo "<p style='text-align:center; color:red;'>Error: " . $stmt->error . "</p>";
    }
    $stmt->close();
}
?>

<link rel="stylesheet" href="styles.css">
<div class="container">
    <h2>Registro</h2>
    <form method="post">
        <input type="text" name="username" placeholder="Usuario" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <input type="submit" value="Registrar">
    </form>
    <p><a href="login.php">¿Ya tienes cuenta? Inicia sesión</a></p>
</div>
