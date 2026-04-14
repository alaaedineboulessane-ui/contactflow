<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ma Collection de Jeux</title>
    <link rel="stylesheet" href="./assets/css/accueil.css">
    <link rel="stylesheet" href="/assets/css/accueil.css">

</head>
<body>
<header class="header">
  
    <div id="firstdiv" class="logo">
        <img id="contactimg" src="./img/contact.png" width="25" height="25">
        <h3>Contact Flow</h3>
    </div>

    <div id="divbtn" class="menu">
        <a href="../index.php">Accueil</a>
        <a href="index.php?page=register">Inscription</a>
        <a href="index.php?page=login">Connexion</a>

        <?php
        if (isset($_SESSION["username"])) {
            echo "<a href='../profileView.php'>Profil</a>";
        }
        ?>
    </div>

</header>