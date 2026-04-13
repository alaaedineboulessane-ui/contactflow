<?php include __DIR__ . '/../includes/header.php'; ?>

<?php if(!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>

<form method="post">
    <p>Informations personnelles</p>
    <div>
        <input type="text" name="nom" placeholder="Nom de famille">
        <input type="text" name="prenom" placeholder="Prénom">
    </div>

    <p>Informations de connexion</p>
    <div>
        <input type="text" name="username" placeholder="Identifiant">
        <input type="password" name="password" placeholder="Mot de passe">
        <button type="submit">Inscription</button>
    </div>
</form>

<?php include __DIR__ . '/../includes/footer.php'; ?>