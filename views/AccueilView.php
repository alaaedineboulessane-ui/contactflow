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

<form id = "firstform" method = "POST" action="index.php?page=contact_add">

    <input name = "firstname" id = "name" placeholder="Votre prénom">
    <input name = "lastname" id = "lastname" placeholder="Votre nom">
    <input name = "mail" id = "mail" placeholder="Votre adresse mail">
    <input name = "number" id = "phonenumber" placeholder="Votre numèro de telephone">
    <button id = "send" type = "submit">Envoyer</button>

</form>

<div id = "espace"></div>
<form class="search-bar">
    <input type="text" placeholder="Rechercher un contact...">
    <button type="submit">🔍</button>
</form>
<div id = "espace"></div>


<?php foreach ($contacts as $contact): ?>

<div class="contactcontainer">

    <div class="namecontainer">
        <span><?= htmlspecialchars($contact['firstname']) ?> <?= htmlspecialchars($contact['lastname']) ?></span>
    </div>

    <div class="mailcontainer">
        <img src="./img/mail.png" height="25px">
        <span><?= htmlspecialchars($contact['mail']) ?></span>
    </div>

    <div class="numbercontainer">
        <img src="./img/phone.png" height="25px">
        <span><?= htmlspecialchars($contact['number']) ?></span>

        <div class="actions">

    <button class="edit"
        onclick="openPopup(
            <?= $contact['id'] ?>,
            '<?= htmlspecialchars($contact['firstname']) ?>',
            '<?= htmlspecialchars($contact['lastname']) ?>',
            '<?= htmlspecialchars($contact['mail']) ?>',
            '<?= htmlspecialchars($contact['number']) ?>'
        )">
        <img src="./img/crayon.png" height="25px">
    </button>

    <button class="delete"
        onclick="openDeletePopup(<?= $contact['id'] ?>)">
        <img src="./img/trash.png" height="25px">
    </button>

            <button class="favorite">
                <img src="./img/star.png" height="25px">
            </button>

        </div>
    </div>

</div>




<?php endforeach; ?>




<div id="editPopup" class="popup">
    <div class="popup-content">
        <h3>Modifier le contact</h3>

        <form method="POST" action="index.php?page=contact_edit">
            <input type="hidden" name="id" id="edit-id">

            <input type="text" name="firstname" id="edit-firstname">
            <input type="text" name="lastname" id="edit-lastname">
            <input type="email" name="mail" id="edit-mail">
            <input type="text" name="number" id="edit-number">

            <button type="submit" id = "imsure">Enregistrer</button>
            <button type="button" onclick="closePopup()">Annuler</button>
        </form>
    </div>
</div>


<div id="deletePopup" class="popup">
    <div class="popup-content">
        <h3>Êtes-vous sûr ?</h3>

        <form method="POST" action="index.php?page=contact_delete">
            <input type="hidden" name="id" id="delete-id">

            <button type="submit" class = "areusure" name = "action" value = "delete">Oui</button>
            <button type="button" onclick="closePopup()">Non</button>
        </form>
    </div>
</div>
<?php include __DIR__ . '/../includes/footer.php'; ?>