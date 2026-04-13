<?php include __DIR__ . '/../includes/header.php'; ?>

<?php if(!empty($error)) echo "<p>$error</p>"; ?>

<form method="post">
    <p>Informations de connexion</p>
    <div>
        <input type="text" name="username" placeholder="Identifiant">
        <input type="password" name="password" placeholder="Mot de passe">
        <button type="submit">Connexion</button>
    </div>
</form>

<?php include __DIR__ . '/../includes/footer.php'; ?>