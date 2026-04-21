const evenement = document.getElementById("addcontact");
const afficher = document.getElementById("firstform");
const envoyer = document.getElementById("send");
const contactnav = document.getElementById("contactnav");
const favnav = document.getElementById("favnav");
const pop = document.getElementById("success")
let state = "off";
let where = "home";
const star = document.querySelectorAll("starplatinum")
const buttonstar = document.querySelectorAll("buttonplatinum")


document.addEventListener("DOMContentLoaded", () => {

    const stars = document.querySelectorAll(".starplatinum");

    stars.forEach(star => {

        const img = star.querySelector("img");

        star.addEventListener("click", () => {

            if (star.dataset.state === "on") {
                star.dataset.state = "off";
                star.style.backgroundColor = "transparent";
            } else {
                star.dataset.state = "on";
                star.style.backgroundColor = "yellow";
            }

        });

    });

});




contactnav.addEventListener("click", function () {
    where = "home";
    updateNav();
});

favnav.addEventListener("click", function () {
    where = "favorite";
    updateNav();
});

updateNav();



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

function updateNav() {
    contactnav.style = "";
    favnav.style = "";

    if (where == "home") {
        contactnav.style.backgroundColor = "black";
        contactnav.style.padding = "5px";
        contactnav.style.border = "2px solid white";
        contactnav.style.borderRadius = "10px";
    } else {
        favnav.style.backgroundColor = "black";
        favnav.style.padding = "5px";
        favnav.style.border = "2px solid white";
        favnav.style.borderRadius = "10px";
    }
}

