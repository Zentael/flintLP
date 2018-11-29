/* AJAX VALIDATION DU FORMULAIRE D'INSCRIPTION */
$( "#slider-range" ).slider({
    change: function( e, ui ) {
        e.preventDefault();
        /* Initialiser l'objet xhttp */
        var xhttp = new XMLHttpRequest();
        /* Récupérer les valeurs des champs */
        //Test nom
        /*var nom = document.getElementById("nom").value;
        if(nom == ''){
            $( '.error-nom' ).css( 'display','block' );
            $( '.error-nom' ).text( 'Le champ Nom est obligatoire.' );
        }*/
        var valueMin = $(this).slider("values",0);
        var valueMax = $(this).slider("values",1);
        //alert(valueMin + ' ' + valueMax);
        var age = document.getElementById("filtre-age").value;
        //vérifier si XMLHttpRequest() est interprété par tous les navigateurs cf; activeXObject()...
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                /* Afficher le contenu du traitement php dans une div */
                document.getElementById("formResponse").innerHTML = this.responseText;
            }
        };
        /* Paramétrer le fichier de traitement php et lui passer des variables*/
        xhttp.open("GET", "includes/traitement-filtre-travailleur.php?ageMin="+valueMin+"&ageMax="+valueMax, true);
        xhttp.send();
    }
});