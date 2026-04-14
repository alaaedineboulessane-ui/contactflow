<?php include __DIR__ . '/../includes/header.php'; ?>



<div id = "espace"></div>
<nav class="navbar">
    <div id = "navcontact">
        <a href="../index.php">Contacts</a>
        <a href="index.php?page=register">Favoris</a>
        <a href="index.php?page=login">Exporter CSV</a>
    </div>
</nav>

<button id = "addcontact">
    <img src = "./img/plus.png" width="25px" height="auto"><a id = "createcontact">Créer un contact</a>
</button>

<form id = "firstform">

    <input id = "name" placeholder="Votre prénom">
    <input id = "lastname" placeholder="Votre nom">
    <input id = "mail" placeholder="Votre adresse mail">
    <input id = "phonenumber" placeholder="Votre numèro de telephone">
    <button id = "send" type = "submit">Envoyer</button>

</form>

<div id = "espace"></div>
<form class="search-bar">
    <input type="text" placeholder="Rechercher un contact...">
    <button type="submit">🔍</button>
</form>
<div id = "espace"></div>


<div id="contactcontainer">

    <div id="namecontainer">
        <a id="name">TESTNAME</a>
    </div>

    <div id="mailcontainer">
        <img src="./img/mail.png" height="25px">
        <a id="mail">TESTMAIL</a>
    </div>

    <div id="numbercontainer">
        <img src="./img/phone.png" height="25px">
        <a id="number">TESTNUMERO</a>

        <div class="actions">
            <button id="edit">
                <img src="./img/crayon.png" height="25px">
            </button>

            <button id="delete">
                <img src="./img/trash.png" height="25px">
            </button>

            <button id="favorite">
                <img src="./img/star.png" height="25px">
            </button>
        </div>
    </div>

</div>
<?php include __DIR__ . '/../includes/footer.php'; ?>