/* AJAX VALIDATION DU FORMULAIRE D'INSCRIPTION */
$('#submit-inscription').click(function (e) {
    e.preventDefault();
    /* Initialiser l'objet xhttp */
    var xhttp = new XMLHttpRequest();
    /* Récupérer les valeurs des champs */
    //Test nom
    var nom = document.getElementById("nom").value;
    if(nom == ''){
        $( '.error-nom' ).css( 'display','block' );
        $( '.error-nom' ).text( 'Le champ Nom est obligatoire.' );
    }

    //Test prenom
    var prenom = document.getElementById("prenom").value;
    if(prenom == ''){
        $( '.error-prenom' ).text( 'Le champ Prenom est obligatoire.' );
    }

    //Test email
    var mail = document.getElementById("email").value;
    if(mail == ''){
        $( '.error-email' ).text( 'Le champ Email est obligatoire.' );
    }

    //Test email
    var mail = document.getElementById("email").value;
    if(mail == ''){
        $( '.error-email' ).text( 'Le champ Email est obligatoire.' );
    }

    //vérifier si XMLHttpRequest() est interprété par tous les navigateurs cf; activeXObject()...
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            /* Afficher le contenu du traitement php dans une div */
            document.getElementById("formResponse").innerHTML = this.responseText;
        }
    };
    /* Paramétrer le fichier de traitement php et lui passer des variables*/
    xhttp.open("GET", "includes/traitement-inscription-travailleur.php?mail="+mail+'&nom='+nom+'&prenom='+prenom, true);
    xhttp.send();
});
