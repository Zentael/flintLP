//Obscurcir les section non centrées ----------------------------

const firstPart = document.getElementById("firstPart");
const secondPart = document.getElementById("secondPart");
const thirdPart = document.getElementById("thirdPart");

window.addEventListener('scroll', function() {
    if(1100 < window.scrollY && window.scrollY < 1500){
        firstPart.style.filter = "initial";
        secondPart.style.filter = "brightness(50%)";
        thirdPart.style.filter = "brightness(50%)";
    } else
    if(1500 < window.scrollY && window.scrollY < 1900){
        firstPart.style.filter = "brightness(50%)";
        secondPart.style.filter = "initial";
        thirdPart.style.filter = "brightness(50%)";
    } else
    if(1900 < window.scrollY && window.scrollY < 2300){
        firstPart.style.filter = "brightness(50%)";
        secondPart.style.filter = "brightness(50%)";
        thirdPart.style.filter = "initial";
    }
});

//Smooth scroll ------------------------------------------------

let targetOffset, currentPosition,
    body = document.body,
    button = document.getElementById('scrollToCta'),
    animateTime = 900;

function getPageScroll() {
    let yScroll;

    if (window.pageYOffset) {
        yScroll = window.pageYOffset;
    } else if (document.documentElement && document.documentElement.scrollTop) {
        yScroll = document.documentElement.scrollTop;
    } else if (document.body) {
        yScroll = document.body.scrollTop;
    }
    return yScroll;
}

button.addEventListener('click', function (event) {

    targetOffset = document.getElementById(event.target.hash.substr(1)).offsetTop;
    currentPosition = getPageScroll();

    body.classList.add('in-transition');
    body.style.WebkitTransform = "translate(0, -" + (targetOffset - currentPosition) + "px)";
    body.style.MozTransform = "translate(0, -" + (targetOffset - currentPosition) + "px)";
    body.style.transform = "translate(0, -" + (targetOffset - currentPosition) + "px)";

    window.setTimeout(function () {
        body.classList.remove('in-transition');
        body.style.cssText = "";
        window.scrollTo(0, targetOffset);
    }, animateTime);

    event.preventDefault();

}, false);

// Affichage transitif des boutons de partage réseaux sociaux -------

let isSocialShown = false;

showSocial = function(){
    console.log("beep");
    const footer = document.getElementById("footer");

    if(!isSocialShown){
        isSocialShown = true;

        footer.style.height = "90vh";

        targetOffset = footer.offsetTop - (window.innerHeight * 0.1);
        console.log(targetOffset);
        currentPosition = getPageScroll();
        console.log(currentPosition);

        body.classList.add('in-transition');

        body.style.WebkitTransform = "translate(0, -" + (targetOffset - currentPosition) + "px)";
        body.style.MozTransform = "translate(0, -" + (targetOffset - currentPosition) + "px)";
        body.style.transform = "translate(0, -" + (targetOffset - currentPosition) + "px)";
    } else {
        isSocialShown = false;
        footer.style.height = "30vh";
    }

    window.setTimeout(function () {
        body.classList.remove('in-transition');
        body.style.cssText = "";
        window.scrollTo(0, targetOffset);
    }, animateTime);
};
