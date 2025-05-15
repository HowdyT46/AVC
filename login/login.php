<link rel="stylesheet" href="styles.css">
<div class="container">
    <header>
        <h2>Iniciar Sesión</h2>
    </header>
    
    <form method="post" action="validate_login.php">
        <input type="text" name="username" placeholder="Usuario" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <input type="submit" value="Entrar">
    </form>
    <p><a href="register.php">Crear cuenta nueva</a></p>
</div>
