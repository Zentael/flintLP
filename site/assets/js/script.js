
$( document ).ready(function() {
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
        $('*').each(function () {
            if($(this).hasClass('accessibleText')){
                $(this).removeClass('accessibleText');
            }
            else if($(this).hasClass('bow')){
                $(this).addClass('accessibleText');
            }
        });
    });

});