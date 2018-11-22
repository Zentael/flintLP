/* MODULE ACCESSIBILITE */
var fontSize = 0;
$('.changeSize').click(function () {
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
$('.close').click(function () {
    $('#module-accessibilite').css('transform','translate(100%,0)');
});
$('.cta-accessibilite').click(function () {
    $('#module-accessibilite').css('transform','translate(0,0)');
});