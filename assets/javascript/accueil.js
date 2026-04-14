const evenement = document.getElementById("addcontact");
const afficher = document.getElementById("firstform");
const envoyer = document.getElementById("send");


evenement.addEventListener("click", function() {
    afficher.style.display = "block";
}) 

envoyer.addEventListener("click", function(){
    alert("Votre contact a été ajouté !")
    afficher.style.display = "none";
})

