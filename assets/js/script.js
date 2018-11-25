
/* TEST DU QUOTA DE TRAVAILLEURS HANDICAPES */
const btnQuota = document.getElementById('calculQuota');
const inputEmployes = document.getElementById('effectif');
const inputEmployesHandi = document.getElementById('handicap');
const digitsOnly = /\D+/g;

inputEmployes.oninput = function(){
    inputEmployes.value = inputEmployes.value.replace(digitsOnly, "");
}

inputEmployesHandi.oninput = function(){
    inputEmployesHandi.value = inputEmployesHandi.value.replace(digitsOnly, "");
}

btnQuota.onclick = function (){

    const nbEmployes = inputEmployes.value;
    const nbEmployesHandi = inputEmployesHandi.value;
    const result = document.getElementById('resultQuota');

    if (Number(nbEmployes) < Number(nbEmployesHandi)){
        //result.style.backgroundColor = "red";
        //return result.innerText = "Je crois que vous vous êtes trompés dans vos chiffres, vérifiez et réessayez !";
        return result.setAttribute("src", "assets/img/incoherent.png");
    }

    var nbQuota = nbEmployes/(50/3) - nbEmployesHandi;
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
$('#validateContactForm').click(function (e) {
    e.preventDefault();
    /* Initialiser l'objet xhttp */
    var xhttp = new XMLHttpRequest();
    /* Récupérer les valeurs des champs */
    //Test email
    var mail = document.getElementById("email").value;
    if(mail != ''){
        // testing if it's a valid email adress
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(regex.test(String(mail).toLowerCase())) {
            $( '.error-email' ).text( '' );
            $( '#email-error-icon' ).removeClass('show-after');
        }
        else {
            //$('#email-error-icon').effect( 'shake' )
            $( '.error-email' ).text( 'Le format de l\'email est invalide' );
            $( '#email-error-icon' ).addClass('show-after');
        }
    }
    else{
        //$('#email-error-icon').effect( 'shake' );
        $( '.error-email' ).text( 'L\'email est oligatoire' );
        $( '#email-error-icon' ).addClass('show-after');
    }
    //Test Checkbox
    var checkbox = document.getElementById("check-box");
    var isChecked = 0;
    if (checkbox.checked == true){
        isChecked = 1;
        $( '.error-checkbox' ).text( '' );
    }
    else{
        //$( '.label-checkbox' ).effect( 'shake' );
        $( '.error-checkbox' ).text( 'La checkbox est oligatoire' );
    }
    //vérifier si XMLHttpRequest() est interprété par tous les navigateurs cf; activeXObject()...
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            /* Afficher le contenu du traitement php dans une div */
            document.getElementById("formResponse").innerHTML = this.responseText;
        }
    };
    /* Paramétrer le fichier de traitement php et lui passer des variables*/
    xhttp.open("GET", "includes/inc-traitement-contact.php?mail="+mail+'&checkbox='+isChecked, true);
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

/* Taille du container Iframe */
jQuery(document).ready(function() {
    var containerIframeWidth = $('.container-iframe').width();
    var containerIframeHeight = containerIframeWidth/1.77;
    $('iframe').css("width", containerIframeWidth+"px");
    $('iframe').css("height", containerIframeHeight+"px");
});
/* Quand la page change de taille */
$( window ).resize(function() {
    /* Taille du container Iframe */
    var containerIframeWidth = $('.container-iframe').width();
    var containerIframeHeight = containerIframeWidth/1.77;
    $('iframe').css("width", containerIframeWidth+"px");
    $('iframe').css("height", containerIframeHeight+"px");
});

/* Custom checkbox */
$('#check-box').change(function () {
    if($(this).is(":checked")){
        $('.label-checkbox').addClass('selected-checkbox');
    }
    else{
        $('.label-checkbox').removeClass('selected-checkbox');
    }
});
/* Checkbox clickable avec la barre espace avec pseudo element */
$(document).keypress(function(e) {
    var element = $(document.activeElement).attr('class');
    if(element){
        if(element.includes('label-checkbox')){
            e.preventDefault();
            $('#check-box').click();
        }
    }
});