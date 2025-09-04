<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Connexion</h2>
    <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="POST" action="index.php?action=login">
        <label>Nom d’utilisateur :</label>
        <input type="text" name="username" required><br><br>
        <label>Mot de passe :</label>
        <input type="password" name="password" required><br><br>
        <button type="submit">Se connecter</button>
    </form>
</body>
</html>
