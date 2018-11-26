/* MODULE ACCESSIBILITE */

/* Changer la taille de la police */
var fontSize = 0;
$('.change-font-size').click(function () {
    if($(this).hasClass('increase')){
        if(fontSize<5){
            $('body').animate({'font-size': '+=1'});
            fontSize++;
        }
    }
    else{
        if(fontSize>0){
            $('body').animate({'font-size': '-=1'});
            fontSize--;
        }
    }
});
/* Changer l'espacement des mots */
var wordSpace = 0;
$('.change-word-space').click(function () {
    if($(this).hasClass('increase')){
        if(wordSpace<5){
            $('body').animate({'word-spacing': '+=2'});
            wordSpace++;
        }
    }
    else{
        if(wordSpace>0){
            $('body').animate({'word-spacing': '-=2'});
            wordSpace--;
        }
    }
});
/* Changer l'espacement des lettres */
var letterSpace = 0;
$('.change-letter-space').click(function () {
    if($(this).hasClass('increase')){
        if(letterSpace<5){
            $('body').animate({'letter-spacing': '+=1'});
            letterSpace++;
        }
    }
    else{
        if(letterSpace>0){
            $('body').animate({'letter-spacing': '-=1'});
            letterSpace--;
        }
    }
});
/* Changer la hauteur des lignes */
var lineHeight = 0;
$('.change-line-height').click(function () {
    if($(this).hasClass('increase')){
        if(lineHeight<5){
            $('body').animate({'line-height': '+=1'});
            lineHeight++;
        }
    }
    else{
        if(lineHeight>0){
            $('body').animate({'line-height': '-=1'});
            lineHeight--;
        }
    }
});
/* Changer la couleur des fonds en noir et texte en blanc */
$('.color-white-on-black').click(function () {
    /* Supprimer le thème clair si actif */
    $('*').each(function () {
        if($(this).hasClass('black-on-white')){
            $(this).removeClass('black-on-white');
        }
    });
    /* Activer le thème sombre */
    if($(this).hasClass('active-wob')){
        $(this).text('Thème sombre');
        $(this).removeClass('active-wob');
    }
    else{
        $(this).text('Version normale');
        $(this).addClass('active-wob');
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

/* Changer la couleur des fonds en noir et texte en blanc */
/*$('.color-black-on-white').click(function () {
    /* Supprimer le thème sombre si actif */
   /* $('*').each(function () {
        if($(this).hasClass('white-on-black')){
            $(this).removeClass('white-on-black');
        }
    });
    /* Activer le thème clair */
   /* if($(this).hasClass('active-bow')){
        $(this).text('Thème clair');
        $(this).removeClass('active-bow');
    }
    else{
        $(this).text('Version normale');
        $(this).addClass('active-bow');
    }
    $('*').each(function () {
        if($(this).hasClass('black-on-white')){
            $(this).removeClass('black-on-white');
        }
        else{
            $(this).addClass('black-on-white');s
        }
    });
});*/

/* Reset les paramètres */
$('.reset-accessibilite').click(function () {
    $('body').animate({'font-size': '-='+fontSize});
    $('body').animate({'word-spacing': '-='+2*wordSpace});
    $('body').animate({'letter-spacing': '-='+letterSpace});
    $('body').animate({'line-height': '-='+lineHeight});
    fontSize = 0;
    wordSpace = 0;
    letterSpace = 0;
    lineHeight = 0;
    $('*').each(function () {
        if($(this).hasClass('white-on-black')){
            $(this).removeClass('white-on-black');
        }
    });
});

/* Fermer le module accessibilité */
$('.close-accessibilite').click(function () {
    $('#module-accessibilite').css('transform','translate(110%,0)');
});
$('.cta-accessibilite').click(function () {
    $('#module-accessibilite').css('transform','translate(0,0)');
});