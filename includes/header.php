<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ma Collection de Jeux</title>
    <link rel="stylesheet" href="/runTRACKPHP/gamekeeper/assets/css/accueil.css">
</head>
<body>
<header>
    <div id="divdbtn">
        <a class="btn" href="../index.php">Accueil</a>
        <a class = "btn"href="index.php?page=register">Inscription</a>
        <a href="index.php?page=login">Connexion</a>
        <?php
        if (isset($_SESSION["username"])) {
            echo "<a class='btn' href='../profileView.php'>Profil</a>";
        }
        ?>
    </div>
</header>