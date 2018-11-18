const btnQuota = document.getElementById('calculQuota');

btnQuota.onclick = function (){
    const nbEmployes = document.getElementById('effectif').value;
    const nbEmployesHandi = document.getElementById('handicap').value;
    const result = document.getElementById('resultQuota');

    if (nbEmployes < nbEmployesHandi){
        result.style.backgroundColor = "red";
        return result.innerText = "Je crois que vous vous êtes trompés dans vos chiffres, vérifiez et réessayez !";
    }

    let nbQuota = nbEmployes/(50/3) - nbEmployesHandi;
    nbQuota = Math.ceil(nbQuota);

    if (nbQuota > 0){
        result.innerText = "Vous êtes à " + nbQuota + " handicapés de remplir votre Quota !";
    } else {
        result.innerText = "Félicitations, vous avez déjà rempli votre quota !";
    }
    console.log(nbQuota);
}

/* AJAX VALIDATION DU FORMULAIRE DE CONTACT */
$('#validateContactForm').click(function () {
    /* Initialiser l'objet xhttp */
    var xhttp = new XMLHttpRequest();
    /* Récupérer les valeaurs des champs */
    var mail = document.getElementById("email").value;
    //vérifier si XMLHttpRequest() est interprété par tous les navigateurs cf; activeXObject()...
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            /* Afficher le contenu du traitement php dans une div */
            document.getElementById("formResponse").innerHTML = this.responseText;
        }
    };
    /* Paramétrer le fichier de traitement php et lui passer des variables*/
    xhttp.open("GET", "inc-traitement-contact.php?mail="+mail, true);
    xhttp.send();
});
