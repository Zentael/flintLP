const btnQuota = document.getElementById('calculQuota');

btnQuota.onclick = function (){

    const nbEmployes = document.getElementById('effectif').value;
    const nbEmployesHandi = document.getElementById('handicap').value;
    const result = document.getElementById('resultQuota');

    if (Number(nbEmployes) < Number(nbEmployesHandi)){
        //result.style.backgroundColor = "red";
        //return result.innerText = "Je crois que vous vous êtes trompés dans vos chiffres, vérifiez et réessayez !";
        return result.setAttribute("src", "assets/img/incoherent.png");
    }

    let nbQuota = nbEmployes/(50/3) - nbEmployesHandi;
    nbQuota = Math.ceil(nbQuota);

    if (nbQuota > 0){
        //result.innerText = "Vous êtes à " + nbQuota + " handicapés de remplir votre Quota !";
        result.setAttribute("src", "assets/img/no.png");
    } else {
        //result.innerText = "Félicitations, vous avez déjà rempli votre quota !";
        result.setAttribute("src", "assets/img/yes.png");
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

/* SMOOTH SCROLL TO ANCHOR */
/* Si on clique sur un lien vers un élément de la même page, faire une animation */
$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
});

/* MODULE ACCESSIBILITE */
var fontSize = 0;
$('.changeSize').click(function () {
    if($(this).hasClass('increase')){
        if(fontSize<3){
            $('body').animate({'font-size': '+=5'});
            fontSize++;
        }
    }
    else{
        if(fontSize>0){
            $('body').animate({'font-size': '-=5'});
            fontSize--;
        }
    }
});
$('.visual').click(function () {
    if($(this).hasClass('active')){
        $(this).text('Version Noir et blanc');
        $(this).removeClass('active');
    }
    else{
        $(this).text('Version normale');
        $(this).addClass('active');
    }
    $('*').each(function () {
        if($(this).hasClass('white-on-black')){
            $(this).removeClass('white-on-black');
        }
        else{
            $(this).addClass('white-on-black');
        }
    });
});
