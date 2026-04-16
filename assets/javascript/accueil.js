const evenement = document.getElementById("addcontact");
const afficher = document.getElementById("firstform");
const envoyer = document.getElementById("send");
let state = "off";


evenement.addEventListener("click", function() {
    if (state == "off") {
        afficher.style.display = "block";
        state = "on";
    }
    else {
        afficher.style.display = "none"
        state = "off";
    }
}) 


envoyer.addEventListener("click", function(){
    alert("Votre contact a été ajouté !")
    afficher.style.display = "none";
})

function openPopup() {
    document.getElementById("myPopup").showModal();
}

function closePopup() {
    document.getElementById("myPopup").close();
}


function openPopup(id, firstname, lastname, mail, number) {
    document.getElementById("editPopup").style.display = "block";

    document.getElementById("edit-id").value = id;
    document.getElementById("edit-firstname").value = firstname;
    document.getElementById("edit-lastname").value = lastname;
    document.getElementById("edit-mail").value = mail;
    document.getElementById("edit-number").value = number;
}

function closePopup() {
    document.getElementById("editPopup").style.display = "none";
}

function openDeletePopup(id) {
    document.getElementById("deletePopup").style.display = "flex";
    document.getElementById("delete-id").value = id;
}

function closePopup() {
    document.getElementById("editPopup").style.display = "none";
    document.getElementById("deletePopup").style.display = "none";
}